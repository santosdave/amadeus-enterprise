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

use Amadeus\Client\LoadParamsFromArray;

/**
 * Options for Passenger in Travel_OfferPrice request
 */
class PaxOption extends LoadParamsFromArray
{
    /**
     * Unique Passenger ID
     * 
     * @var string
     */
    public $paxId;

    /**
     * Passenger Type Code
     * 
     * @var string
     */
    public $ptc;

    /**
     * Reference to Adult Passenger (for infants)
     * 
     * @var string
     */
    public $paxRefId;

    /**
     * Passenger's birthdate
     * 
     * @var \DateTime
     */
    public $birthdate;

    /**
     * Passenger's gender
     * 
     * @var string
     */
    public $genderCode;

    /**
     * Passenger's title
     * 
     * @var string
     */
    public $titleName;

    /**
     * Passenger's first name
     * 
     * @var string
     */
    public $givenName;

    /**
     * Passenger's last name
     * 
     * @var string
     */
    public $surname;

    /**
     * Loyalty Program Account Number
     * 
     * @var string
     */
    public $loyaltyAccountNumber;

    /**
     * Loyalty Program Provider (Airline Code)
     * 
     * @var string
     */
    public $loyaltyProviderName;
}