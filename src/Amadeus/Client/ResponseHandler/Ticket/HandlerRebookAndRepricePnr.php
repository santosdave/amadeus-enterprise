<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\ResponseHandler\Ticket;

use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

/**
 * HandlerRebookAndRepricePnr
 *
 * Response handler for Ticket_RebookAndRepricePNR messages
 *
 * @package Amadeus\Client\ResponseHandler\Ticket
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class HandlerRebookAndRepricePnr extends StandardResponseHandler
{
    /**
     * Analyze Ticket_RebookAndRepricePNR response
     *
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        $analyzeResponse = new Result($response);

        $domXpath = $this->makeDomXpath($response->responseXml);

        // Check for general errors
        $errorCodeNodeList = $domXpath->query('//m:errorOrWarningSection/m:errorOrWarningInfo/m:errorDetails/m:errorCode');

        if ($errorCodeNodeList->length > 0) {
            $analyzeResponse->status = Result::STATUS_ERROR;

            $errorCatNode = $domXpath->query('//m:errorOrWarningSection/m:errorOrWarningInfo/m:errorDetails/m:errorCategory')->item(0);
            $errorCode = $errorCodeNodeList->item(0)->nodeValue;
            $errorCategory = ($errorCatNode) ? $errorCatNode->nodeValue : null;

            $errorTextNodeList = $domXpath->query('//m:errorOrWarningSection/m:errorOrWarningInfo/m:errorWarningDescription/m:freeText');
            $errorMessage = $this->makeMessageFromMessagesNodeList($errorTextNodeList);

            $analyzeResponse->messages[] = new Result\NotOk(
                $errorCode,
                trim($errorMessage),
                'errorOrWarningSection',
            );
        }

        // Check for warnings
        $warningNodeList = $domXpath->query('//m:warningInfo/m:warningDetails/m:warningCode');

        if ($warningNodeList->length > 0) {
            if ($analyzeResponse->status !== Result::STATUS_ERROR) {
                $analyzeResponse->status = Result::STATUS_WARN;
            }

            foreach ($warningNodeList as $index => $warningNode) {
                $warningCode = $warningNode->nodeValue;

                $warningTextNodeList = $domXpath->query('//m:warningInfo[' . ($index + 1) . ']/m:warningDescription/m:freeText');
                $warningMessage = ($warningTextNodeList->length > 0) ? $warningTextNodeList->item(0)->nodeValue : 'Warning';

                $analyzeResponse->messages[] = new Result\NotOk(
                    $warningCode,
                    trim($warningMessage),
                    'warningInfo'
                );
            }
        }

        // Check for pricing errors
        $pricingErrorNodes = $domXpath->query('//m:errorInfo/m:errorDetails/m:errorCode');

        if ($pricingErrorNodes->length > 0) {
            $analyzeResponse->status = Result::STATUS_ERROR;

            foreach ($pricingErrorNodes as $index => $errorNode) {
                $errorCode = $errorNode->nodeValue;

                $errorTextNodeList = $domXpath->query('//m:errorInfo[' . ($index + 1) . ']/m:errorDescription/m:freeText');
                $errorMessage = ($errorTextNodeList->length > 0) ? $errorTextNodeList->item(0)->nodeValue : 'Pricing error';

                $analyzeResponse->messages[] = new Result\NotOk(
                    $errorCode,
                    trim($errorMessage),
                    'pricingError'
                );
            }
        }

        return $analyzeResponse;
    }
}
