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

use Amadeus\Client\RequestOptions\Travel\OrderCreate\Passenger;

/**
 * Passenger details for Travel_OrderCreate
 */
class OrderCreatePax
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
     * Passenger Reference ID (for infants)
     * 
     * @var string
     */
    public $PaxRefID;

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
     * @var OrderCreateContactInfo
     */
    public $ContactInfo;

    /**
     * Individual passenger details
     * 
     * @var OrderCreateIndividual
     */
    public $Individual;

    /**
     * Identity Document details
     * 
     * @var OrderCreateIdentityDoc
     */
    public $IdentityDoc;

    /**
     * OrderCreatePax constructor
     *
     * @param Passenger $passenger
     */
    public function __construct(Passenger $passenger)
    {
        $this->PaxID = $passenger->paxId;
        $this->PTC = $passenger->ptc ?? 'ADT';
        $this->PaxRefID = $passenger->paxRefId;

        // Birthdate handling
        if ($passenger->birthdate instanceof \DateTime) {
            $this->Birthdate = $passenger->birthdate->format('Y-m-d');
        }

        $this->GenderCode = $passenger->genderCode;

        // Contact Information
        if ($passenger->email || $passenger->phoneNumber) {
            $this->ContactInfo = new OrderCreateContactInfo($passenger);
        }

        // Individual Details
        if ($passenger->givenName || $passenger->surname || $passenger->titleName) {
            $this->Individual = new OrderCreateIndividual($passenger);
        }

        // Identity Document
        if ($passenger->identityDocument) {
            $this->IdentityDoc = new OrderCreateIdentityDoc($passenger->identityDocument);
        }
    }
}