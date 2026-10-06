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

namespace Amadeus\Client\Struct\Ticket\RebookAndReprice;

/**
 * ContactAddress
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */

/**
 * ContactAddress - Address information
 */
class ContactAddress
{
    public $Line;
    public $Complement;
    public $Zip;
    public $CountryCode;
    public $CityName;
    public $StateCode;
    public $StateName;
    public $PostalBox;

    public function __construct($address)
    {
        if (!empty($address->line)) {
            $this->Line = $address->line;
        }
        if (!empty($address->complement)) {
            $this->Complement = $address->complement;
        }
        if (!empty($address->zip)) {
            $this->Zip = $address->zip;
        }
        if (!empty($address->countryCode)) {
            $this->CountryCode = $address->countryCode;
        }
        if (!empty($address->cityName)) {
            $this->CityName = $address->cityName;
        }
        if (!empty($address->stateCode)) {
            $this->StateCode = $address->stateCode;
        }
        if (!empty($address->stateName)) {
            $this->StateName = $address->stateName;
        }
        if (!empty($address->postalBox)) {
            $this->PostalBox = $address->postalBox;
        }
    }
}