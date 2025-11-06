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
 * @package Amadeus\Client\Struct\Travel\OrderReshop
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\NewPaxInfo;

class OrderReshopNewPaxInfo
{
    /**
     * Individual information
     * 
     * @var OrderReshopIndividual
     */
    public $Individual;

    /**
     * Contact information
     * 
     * @var OrderReshopContactInfo[]
     */
    public $ContactInfo = [];

    /**
     * Identity Documents
     * 
     * @var OrderReshopIdentityDoc[]
     */
    public $IdentityDoc = [];

    /**
     * Entitlement Documents
     * 
     * @var OrderReshopEntitlementDocument[]
     */
    public $EntitlementDocument = [];

    /**
     * Redress Program
     * 
     * @var OrderReshopRedressProgram
     */
    public $RedressProgram;

    /**
     * OrderReshopNewPaxInfo constructor
     *
     * @param NewPaxInfo $newPaxInfo
     */
    public function __construct(NewPaxInfo $newPaxInfo)
    {
        if ($newPaxInfo->individual) {
            $this->Individual = new OrderReshopIndividual($newPaxInfo->individual);
        }

        foreach ($newPaxInfo->contactInfo as $contact) {
            if ($contact instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\ContactInfo) {
                $this->ContactInfo[] = new OrderReshopContactInfo($contact);
            } else {
                // Handle array format
                $contactObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\ContactInfo($contact);
                $this->ContactInfo[] = new OrderReshopContactInfo($contactObj);
            }
        }

        foreach ($newPaxInfo->identityDocs as $identityDoc) {
            if ($identityDoc instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\IdentityDoc) {
                $this->IdentityDoc[] = new OrderReshopIdentityDoc($identityDoc);
            } else {
                // Handle array format
                $identityDocObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\IdentityDoc($identityDoc);
                $this->IdentityDoc[] = new OrderReshopIdentityDoc($identityDocObj);
            }
        }

        foreach ($newPaxInfo->entitlementDocs as $entitlementDoc) {
            if ($entitlementDoc instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\EntitlementDocument) {
                $this->EntitlementDocument[] = new OrderReshopEntitlementDocument($entitlementDoc);
            } else {
                // Handle array format
                $entitlementDocObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\EntitlementDocument($entitlementDoc);
                $this->EntitlementDocument[] = new OrderReshopEntitlementDocument($entitlementDocObj);
            }
        }

        if ($newPaxInfo->redressProgram) {
            if ($newPaxInfo->redressProgram instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\RedressProgram) {
                $this->RedressProgram = new OrderReshopRedressProgram($newPaxInfo->redressProgram);
            } else {
                // Handle array format
                $redressProgramObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\RedressProgram($newPaxInfo->redressProgram);
                $this->RedressProgram = new OrderReshopRedressProgram($redressProgramObj);
            }
        }
    }
}
