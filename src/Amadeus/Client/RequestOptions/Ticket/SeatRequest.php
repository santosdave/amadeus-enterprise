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

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * SeatRequest - Seat Request Element
 */
class SeatRequest extends LoadParamsFromArray
{

    /**
     * SSR type code
     * 
     * @var string
     */
    public $type;

    /**
     * Seat number (e.g., "12A", "23F")
     * Max 9 occurrences
     * 
     * @var string[]
     */
    public $seatNumbers = [];

    /**
     * Characteristics (window, aisle, exit row, etc.)
     * 
     * @var string[]
     */
    public $characteristics = [];

    /**
     * Area of preference (A for aisle, W for window, E for exit row)
     * 
     * @var string[]
     */
    public $areasOfPreference = [];

    /**
     * Non-smoking indicator
     * 
     * @var bool
     */
    public $nonSmoking;

    /**
     * Smoking indicator
     * 
     * @var bool
     */
    public $smoking;

    /**
     * Seat location
     * 
     * @var string
     */
    public $seatLocation;

    /**
     * Number in party / Quantity
     * 
     * @var int
     */
    public $quantity;

    /**
     * Boarding pass status (e.g., "RS")
     * 
     * @var string
     */
    public $boardingPassStatus;

    /**
     * Description
     * 
     * @var string
     */
    public $description;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $requestId;

    /**
     * Associated segments/passengers
     * 
     * @var ElementReference[]
     */
    public $associations = [];
}
