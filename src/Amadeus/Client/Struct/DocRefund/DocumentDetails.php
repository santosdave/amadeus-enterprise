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

namespace Amadeus\Client\Struct\DocRefund;

/**
 * DocumentDetails
 *
 * @package Amadeus\Client\Struct\DocRefund
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class DocumentDetails
{
    const TYPE_ALL_OTHER_DOCUMENT_TYPES = "700";
    const TYPE_EXCESS_BAGGAGE = "E";
    const TYPE_MISCELLANEOUS_CHARGE_ORDER = "M";
    const TYPE_TOUR_ORDER = "O";
    const TYPE_SPECIAL_SERVICE_TICKET = "S";
    const TYPE_TICKET = "T";

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $type;

    /**
     * DocumentDetails constructor.
     *
     * @param string $number
     * @param string|null $type
     */
    public function __construct($number, $type = null)
    {
        $this->number = $number;
        $this->type = $type;
    }
}
