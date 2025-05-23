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
 * @package Amadeus\Client\RequestOptions\Travel\ServiceList
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\ServiceList;

use Amadeus\Client\LoadParamsFromArray;


/**
 * Passenger details for Travel_ServiceList
 */
class Pax extends LoadParamsFromArray
{
    /**
     * Passenger ID
     * 
     * @var string
     */
    public $paxId;

    /**
     * Passenger Type Code
     * 
     * @var string
     */
    public $passengerTypeCode;

    /**
     * Passenger Reference ID
     * 
     * @var string
     */
    public $paxRefId;

    /**
     * Gender Code
     * 
     * @var string
     */
    public $genderCode;

    /**
     * Title Name
     * 
     * @var string
     */
    public $titleName;

    /**
     * Given Name
     * 
     * @var string
     */
    public $givenName;

    /**
     * Surname
     * 
     * @var string
     */
    public $surname;

    /**
     * Birthdate
     * 
     * @var string
     */
    public $birthdate;

    /**
     * Loyalty Account Number
     * 
     * @var string
     */
    public $loyaltyAccountNumber;

    /**
     * Loyalty Provider Name
     * 
     * @var string
     */
    public $loyaltyProviderName;
}
