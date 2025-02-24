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
 * @package Amadeus\Client\RequestOptions\Travel\OrderCreate
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderCreate;

use Amadeus\Client\LoadParamsFromArray;

class Passenger extends LoadParamsFromArray
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
    public $ptc = 'ADT';

    /**
     * Reference to Adult Passenger (for infants)
     * 
     * @var string
     */
    public $paxRefId;

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
     * @var \DateTime
     */
    public $birthdate;

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
     * Contact Email
     * 
     * @var string
     */
    public $email;

    /**
     * Contact Phone Number
     * 
     * @var string
     */
    public $phoneNumber;

    /**
     * Identity Document Details
     * 
     * @var IdentityDocument
     */
    public $identityDocument;
}
