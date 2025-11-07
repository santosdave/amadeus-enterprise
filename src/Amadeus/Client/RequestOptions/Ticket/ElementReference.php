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
 * ElementReference - Reference to a PNR element
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class ElementReference extends LoadParamsFromArray
{

    const TYPE_PASSENGER = 'PT';
    const TYPE_SEGMENT = 'ST';
    const TYPE_SERVICE = 'SVC';
    const TYPE_OTHER = 'OT';

    /**
     * Arbitrary element identifier for mapping purposes
     * Pattern: [a-zA-Z0-9]{1,10}
     * 
     * @var string
     */
    public $requestId;

    /**
     * Type of tattoo (PT=Passenger, ST=Segment, etc.)
     * 
     * @var string
     */
    public $tattooType;

    /**
     * Value of the tattoo (element number)
     * Pattern: [1-9][0-9]{0,4}
     * 
     * @var int
     */
    public $tattooValue;

    /**
     * Line number of the element in cryptic display
     * 
     * @var int
     */
    public $lineNumber;

    /**
     * Constructor
     * 
     * @param string $tattooType Type of element (PT, ST, etc.)
     * @param int $tattooValue Element number
     * @param string|null $requestId Optional request identifier
     */
    public function __construct($tattooType = null, $tattooValue = null, $requestId = null)
    {
        $this->tattooType = $tattooType;
        $this->tattooValue = $tattooValue;
        $this->requestId = $requestId;
    }
}
