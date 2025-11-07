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

namespace Amadeus\Client\Struct\Ticket\RebookAndReprice;

/**
 * RedemptionRequest - Individual redemption request
 */
class RedemptionRequest
{
    public $comment;
    public $awardCode;
    public $redemptionQualifier;
    public $promotionCode;
    public $certificateNumber;
    public $requestID;
    public $associations;

    public function __construct($request)
    {
        if (!empty($request->comment)) {
            $this->comment = $request->comment;
        }
        if (!empty($request->awardCode)) {
            $this->awardCode = $request->awardCode;
        }
        if (!empty($request->redemptionQualifier)) {
            $this->redemptionQualifier = $request->redemptionQualifier;
        }
        if (!empty($request->promotionCode)) {
            $this->promotionCode = $request->promotionCode;
        }
        if (!empty($request->certificateNumber)) {
            $this->certificateNumber = $request->certificateNumber;
        }
        if (!empty($request->requestId)) {
            $this->requestID = $request->requestId;
        }
        if (!empty($request->associations)) {
            $this->associations = new Associations($request->associations);
        }
    }
}
