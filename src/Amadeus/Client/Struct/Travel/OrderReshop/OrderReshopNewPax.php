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



class OrderReshopNewPax
{
    /**
     * Passenger ID (optional - for backward compatibility)
     *
     * @var string
     */
    public $PaxID;

    /**
     * Passenger Type Code (optional - for backward compatibility)
     *
     * @var string
     */
    public $PTC;

    /**
     * Individual Details
     *
     * @var OrderReshopIndividual
     */
    public $Individual;

    /**
     * Contact Information (changed to array to support multiple contacts)
     *
     * @var OrderReshopContactInfo[]
     */
    public $ContactInfo = [];

    /**
     * Identity Documents (changed to array to support multiple documents)
     *
     * @var OrderReshopIdentityDoc[]
     */
    public $IdentityDoc = [];

    /**
     * Entitlement Documents (new - for DOCO, Visas, etc.)
     *
     * @var OrderReshopEntitlementDocument[]
     */
    public $EntitlementDocument = [];

    /**
     * Redress Program (new - for security programs)
     *
     * @var OrderReshopRedressProgram
     */
    public $RedressProgram;

    /**
     * OrderReshopNewPax constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\OrderReshop\NewPaxInfo $newPaxInfo
     */
    public function __construct($newPaxInfo)
    {
        // Handle backward compatibility for existing properties
        if (isset($newPaxInfo->paxId)) {
            $this->PaxID = $newPaxInfo->paxId;
        }

        if (isset($newPaxInfo->ptc)) {
            $this->PTC = $newPaxInfo->ptc;
        }

        // Handle Individual information
        if ($newPaxInfo->individual) {
            $this->Individual = new OrderReshopIndividual($newPaxInfo->individual);
        }

        // Handle Contact Information (support both single and multiple)
        if ($newPaxInfo->contactInfo) {
            if (is_array($newPaxInfo->contactInfo)) {
                // New array format
                foreach ($newPaxInfo->contactInfo as $contact) {
                    if ($contact instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\ContactInfo) {
                        $this->ContactInfo[] = new OrderReshopContactInfo($contact);
                    } else {
                        // Handle array format
                        $contactObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\ContactInfo($contact);
                        $this->ContactInfo[] = new OrderReshopContactInfo($contactObj);
                    }
                }
            } else {
                // Backward compatibility - single contact
                $this->ContactInfo[] = new OrderReshopContactInfo($newPaxInfo->contactInfo);
            }
        }

        // Handle Identity Documents (support both single and multiple)
        if (isset($newPaxInfo->identityDoc)) {
            // Backward compatibility - single identity document
            $this->IdentityDoc[] = new OrderReshopIdentityDoc($newPaxInfo->identityDoc);
        }

        if (isset($newPaxInfo->identityDocs) && is_array($newPaxInfo->identityDocs)) {
            // New array format
            foreach ($newPaxInfo->identityDocs as $identityDoc) {
                if ($identityDoc instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\IdentityDoc) {
                    $this->IdentityDoc[] = new OrderReshopIdentityDoc($identityDoc);
                } else {
                    // Handle array format
                    $identityDocObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\IdentityDoc($identityDoc);
                    $this->IdentityDoc[] = new OrderReshopIdentityDoc($identityDocObj);
                }
            }
        }

        // Handle Entitlement Documents (new feature)
        if (isset($newPaxInfo->entitlementDocs) && is_array($newPaxInfo->entitlementDocs)) {
            foreach ($newPaxInfo->entitlementDocs as $entitlementDoc) {
                if ($entitlementDoc instanceof \Amadeus\Client\RequestOptions\Travel\OrderReshop\EntitlementDocument) {
                    $this->EntitlementDocument[] = new OrderReshopEntitlementDocument($entitlementDoc);
                } else {
                    // Handle array format
                    $entitlementDocObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\EntitlementDocument($entitlementDoc);
                    $this->EntitlementDocument[] = new OrderReshopEntitlementDocument($entitlementDocObj);
                }
            }
        }

        // Handle Redress Program (new feature)
        if (isset($newPaxInfo->redressProgram)) {
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
