<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
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
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Address - Address Information
 */
class Address extends LoadParamsFromArray
{

    /**
     * Address line
     * 
     * @var string
     */
    public $line;

    /**
     * Address complement
     * 
     * @var string
     */
    public $complement;

    /**
     * Postal/ZIP code
     * 
     * @var string
     */
    public $zip;

    /**
     * Country code (2 chars)
     * 
     * @var string
     */
    public $countryCode;

    /**
     * City name
     * 
     * @var string
     */
    public $cityName;

    /**
     * State code
     * 
     * @var string
     */
    public $stateCode;

    /**
     * State name
     * 
     * @var string
     */
    public $stateName;

    /**
     * Postal box
     * 
     * @var string
     */
    public $postalBox;
}
