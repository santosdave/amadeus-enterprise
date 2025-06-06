<?php

/**
 * amadeus-enterprise
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

namespace Amadeus\Client\Struct\Fare\PricePnr13;

/**
 * ReferenceDetails
 *
 * @package Amadeus\Client\Struct\Fare\PricePnr13
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class ReferenceDetails
{
    const QUALIFIER_PAX_REFERENCE = "P";
    const QUALIFIER_PAX_ADULT = "PA";
    const QUALIFIER_PAX_INFANT = "PI";
    const QUALIFIER_SEGMENT_REFERENCE = "S";
    const QUALIFIER_TST = "T";
    const QUALIFIER_ELEMENT = "E"; //Service_IntegratedPricing and Ticket_RepricePNRWithBookingClass
    const QUALIFIER_ORIGINAL_PRICING = "O"; //Ticket_RepricePNRWithBookingClass

    /**
     * self::QUALIFIER_*
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
     * ReferenceDetails constructor.
     *
     * @param string $value
     * @param string $type self::QUALIFIER_*
     */
    public function __construct($value, $type)
    {
        $this->value = $value;
        $this->type = $type;
    }
}
