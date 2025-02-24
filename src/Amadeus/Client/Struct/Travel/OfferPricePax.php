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
 * @package Amadeus\Client\Struct\Travel
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel;

/**
 * Passenger details for Travel_OfferPrice
 */
class OfferPricePax
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
     * Individual passenger details
     * 
     * @var OfferPricePaxIndividual
     */
    public $Individual;

    /**
     * Loyalty Program Account
     * 
     * @var OfferPricePaxLoyaltyAccount
     */
    public $LoyaltyProgramAccount;

    /**
     * OfferPricePax constructor
     *
     * @param PaxOption $passenger
     */
    public function __construct(PaxOption $passenger)
    {
        $this->PaxID = $passenger->paxId;
        $this->PTC = $passenger->ptc;
        $this->PaxRefID = $passenger->paxRefId;

        // Load individual details if available
        if ($this->hasIndividualDetails($passenger)) {
            $this->Individual = new OfferPricePaxIndividual($passenger);
        }

        // Load loyalty program details if available
        if ($this->hasLoyaltyDetails($passenger)) {
            $this->LoyaltyProgramAccount = new OfferPricePaxLoyaltyAccount($passenger);
        }
    }

    /**
     * Check if passenger has individual details
     *
     * @param PaxOption $passenger
     * @return bool
     */
    protected function hasIndividualDetails(PaxOption $passenger)
    {
        return !empty($passenger->birthdate) ||
            !empty($passenger->genderCode) ||
            !empty($passenger->titleName) ||
            !empty($passenger->givenName) ||
            !empty($passenger->surname);
    }

    /**
     * Check if passenger has loyalty details
     *
     * @param PaxOption $passenger
     * @return bool
     */
    protected function hasLoyaltyDetails(PaxOption $passenger)
    {
        return !empty($passenger->loyaltyAccountNumber) ||
            !empty($passenger->loyaltyProviderName);
    }
}
