<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2024 Amadeus Benelux NV
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
 * @package Amadeus\Client\ResponseHandler\Travel
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\ResponseHandler\Travel;

use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

/**
 * Response Handler for Travel_OfferPrice
 *
 * @package Amadeus\Client\ResponseHandler\Travel
 * @author Your Name <your.email@example.com>
 */
class HandlerOfferPrice extends StandardResponseHandler
{
    /**
     * Analyze the response from Travel_OfferPrice
     *
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        // Use the standard method to check for basic error codes and messages
        return $response;
    }
}
