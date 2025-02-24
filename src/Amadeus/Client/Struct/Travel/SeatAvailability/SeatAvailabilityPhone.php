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
 * @package Amadeus\Client\Struct\Travel\SeatAvailability
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\SeatAvailability;

class SeatAvailabilityPhone
{
    /**
     * Phone Label
     * 
     * @var string|null
     */
    public $LabelText;

    /**
     * Country Dialing Code
     * 
     * @var string|null
     */
    public $CountryDialingCode;

    /**
     * Area Code Number
     * 
     * @var string|null
     */
    public $AreaCodeNumber;

    /**
     * Phone Number
     * 
     * @var string|null
     */
    public $PhoneNumber;

    /**
     * Extension Number
     * 
     * @var string|null
     */
    public $ExtensionNumber;

    public function __construct(
        $label = null,
        $countryCode = null,
        $areaCode = null,
        $number = null,
        $extension = null
    ) {
        $this->LabelText = $label;
        $this->CountryDialingCode = $countryCode;
        $this->AreaCodeNumber = $areaCode;
        $this->PhoneNumber = $number;
        $this->ExtensionNumber = $extension;
    }
}
