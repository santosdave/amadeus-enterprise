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
 * @package Amadeus\Client\Struct\Travel\OrderCreate
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

/**
 * Identity Document Details for Travel_OrderCreate
 */
class OrderCreateIdentityDoc
{
    /**
     * Identity Document ID
     * 
     * @var string
     */
    public $IdentityDocID;

    /**
     * Identity Document Type Code
     * 
     * @var string
     */
    public $IdentityDocTypeCode;

    /**
     * Issuing Country Code
     * 
     * @var string
     */
    public $IssuingCountryCode;

    /**
     * Issue Date
     * 
     * @var string
     */
    public $IssueDate;

    /**
     * Expiry Date
     * 
     * @var string
     */
    public $ExpiryDate;

    /**
     * OrderCreateIdentityDoc constructor
     *
     * @param IdentityDocument $document
     */
    public function __construct(\Amadeus\Client\RequestOptions\Travel\OrderCreate\IdentityDocument $document)
    {
        $this->IdentityDocID = $document->documentId;
        $this->IdentityDocTypeCode = $document->documentTypeCode;
        $this->IssuingCountryCode = $document->issuingCountryCode;

        if ($document->issueDate instanceof \DateTime) {
            $this->IssueDate = $document->issueDate->format('Y-m-d');
        }

        if ($document->expiryDate instanceof \DateTime) {
            $this->ExpiryDate = $document->expiryDate->format('Y-m-d');
        }
    }
}
