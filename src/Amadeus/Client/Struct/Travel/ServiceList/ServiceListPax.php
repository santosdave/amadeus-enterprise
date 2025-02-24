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
 * @package Amadeus\Client\Struct\Travel\ServiceList
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\ServiceList;

/**
 * Individual Passenger details for Travel_ServiceList
 */
class ServiceListPax
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
     * Passenger Reference ID
     * 
     * @var string
     */
    public $PaxRefID;

    /**
     * Individual passenger details
     * 
     * @var ServiceListIndividual
     */
    public $Individual;

    /**
     * Loyalty Program Account
     * 
     * @var ServiceListLoyaltyProgramAccount
     */
    public $LoyaltyProgramAccount;

    /**
     * ServiceListPax constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\ServiceList\Pax $passenger
     */
    public function __construct($passenger)
    {
        $this->PaxID = $passenger->paxId;
        $this->PTC = $passenger->passengerTypeCode;
        $this->PaxRefID = $passenger->paxRefId;

        // Load Individual details if available
        if ($passenger->givenName || $passenger->surname) {
            $this->Individual = new ServiceListIndividual($passenger);
        }

        // Load Loyalty Program details if available
        if ($passenger->loyaltyAccountNumber) {
            $this->LoyaltyProgramAccount = new ServiceListLoyaltyProgramAccount($passenger);
        }
    }
}