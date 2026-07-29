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
 * UpgradeRequest - Individual upgrade request
 */
class UpgradeRequest
{
    public $OperatingCompanies;
    public $Status;
    public $Validated;
    public $Comment;
    public $AwardCode;
    public $RedemptionQualifier;
    public $PromotionCode;
    public $CertificateNumber;
    public $OriginalClass;
    public $UpgradeClass;
    public $RequestID;
    public $TattooType;
    public $TattooValue;
    public $LineNumber;
    public $Associations;

    public function __construct($request)
    {
        if (!empty($request->operatingCompanies)) {
            $this->OperatingCompanies = implode(',', $request->operatingCompanies);
        }
        if (!empty($request->status)) {
            $this->Status = $request->status;
        }
        if (isset($request->validated)) {
            $this->Validated = $request->validated;
        }
        if (!empty($request->comment)) {
            $this->Comment = $request->comment;
        }
        if (!empty($request->awardCode)) {
            $this->AwardCode = $request->awardCode;
        }
        if (!empty($request->redemptionQualifier)) {
            $this->RedemptionQualifier = $request->redemptionQualifier;
        }
        if (!empty($request->promotionCode)) {
            $this->PromotionCode = $request->promotionCode;
        }
        if (!empty($request->certificateNumber)) {
            $this->CertificateNumber = $request->certificateNumber;
        }
        if (!empty($request->originalClass)) {
            $this->OriginalClass = $request->originalClass;
        }
        if (!empty($request->upgradeClass)) {
            $this->UpgradeClass = $request->upgradeClass;
        }
        if (!empty($request->requestId)) {
            $this->RequestID = $request->requestId;
        }
        if (!empty($request->tattooType)) {
            $this->TattooType = $request->tattooType;
        }
        if (!empty($request->tattooValue)) {
            $this->TattooValue = $request->tattooValue;
        }
        if (!empty($request->lineNumber)) {
            $this->LineNumber = $request->lineNumber;
        }
        if (!empty($request->associations)) {
            $this->Associations = new Associations($request->associations);
        }
    }
}