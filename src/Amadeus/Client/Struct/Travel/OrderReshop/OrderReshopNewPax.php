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
     * Passenger ID
     * 
     * @var string
     */
    public $PaxID;

    /**
     * Passenger Type Code
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
     * Contact Information
     * 
     * @var OrderReshopContactInfo
     */
    public $ContactInfo;

    /**
     * Identity Document
     * 
     * @var OrderReshopIdentityDoc
     */
    public $IdentityDoc;

    /**
     * OrderReshopNewPax constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\OrderReshop\NewPaxInfo $newPaxInfo
     */
    public function __construct($newPaxInfo)
    {
        $this->PaxID = $newPaxInfo->paxId;
        $this->PTC = $newPaxInfo->ptc;

        if ($newPaxInfo->individual) {
            $this->Individual = new OrderReshopIndividual($newPaxInfo->individual);
        }

        if ($newPaxInfo->contactInfo) {
            $this->ContactInfo = new OrderReshopContactInfo($newPaxInfo->contactInfo);
        }

        if ($newPaxInfo->identityDoc) {
            $this->IdentityDoc = new OrderReshopIdentityDoc($newPaxInfo->identityDoc);
        }
    }
}
