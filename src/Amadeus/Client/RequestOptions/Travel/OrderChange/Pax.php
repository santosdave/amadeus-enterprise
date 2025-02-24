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
 * @package Amadeus\Client\RequestOptions\Travel\OrderChange
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderChange;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Passenger details for Travel_OrderChange
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
     * Reference to Adult Passenger (for infants)
     * 
     * @var string
     */
    public $paxRefId;

    /**
     * Passenger Type Code (ADT, CHD, INF)
     * 
     * @var string
     */
    public $passengerType;

    /**
     * Birthdate
     * 
     * @var string
     */
    public $birthdate;

    /**
     * Gender Code
     * 
     * @var string
     */
    public $genderCode;

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
     * Contact Information
     * 
     * @var PaxContactInfo
     */
    public $contactInfo;

    /**
     * Identity Document
     * 
     * @var PaxIdentityDoc
     */
    public $identityDoc;
}
