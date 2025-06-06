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
 * @package Amadeus\Client\Struct\Travel\OrderChange
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderChange;

/**
 * Passenger Details
 */
class Pax
{
    /**
     * Passenger ID
     * 
     * @var string
     */
    public $PaxID;


    /**
     * Passenger Reference ID (for infants)
     * 
     * @var string
     */
    public $PaxRefID;


    /**
     * Passenger Type Code
     * 
     * @var string
     */
    public $PTC;

    /**
     * Birthdate
     * 
     * @var string
     */
    public $Birthdate;

    /**
     * Gender Code
     * 
     * @var string
     */
    public $GenderCode;

    /**
     * Contact Information
     * 
     * @var PaxContactInfo
     */
    public $ContactInfo;

    /**
     * Identity Document
     * 
     * @var PaxIdentityDoc
     */
    public $IdentityDoc;

    /**
     * Individual Details
     * 
     * @var PaxIndividual
     */
    public $Individual;

    /**
     * Pax constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\OrderChange\Pax $passenger
     */
    public function __construct($passenger)
    {
        $this->PaxID = $passenger->paxId;
        $this->PTC = $passenger->passengerType;
        $this->Birthdate = $passenger->birthdate;
        $this->GenderCode = $passenger->genderCode;
        $this->PaxRefID = $passenger->paxRefId;

        if ($passenger->contactInfo) {
            $this->ContactInfo = new PaxContactInfo($passenger->contactInfo);
        }

        if ($passenger->identityDoc) {
            $this->IdentityDoc = new PaxIdentityDoc($passenger->identityDoc);
        }

        $this->Individual = new PaxIndividual($passenger);
    }
}
