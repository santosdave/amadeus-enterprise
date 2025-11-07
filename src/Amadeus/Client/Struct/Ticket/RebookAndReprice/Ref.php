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
 * Ref - Element reference
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Ref
{
    /**
     * Request identifier for mapping purposes
     * Pattern: [a-zA-Z0-9]{1,10}
     * 
     * @var string
     */
    public $requestID;

    /**
     * Type of tattoo (PT=Passenger, ST=Segment, etc.)
     * Pattern: [a-zA-Z]{1,10}
     * 
     * @var string
     */
    public $tattooType;

    /**
     * Value of tattoo (element number)
     * Pattern: [1-9][0-9]{0,4}
     * 
     * @var int
     */
    public $tattooValue;

    /**
     * Line number in cryptic display
     * 
     * @var int
     */
    public $lineNumber;

    /**
     * Ref constructor
     *
     * @param string|null $tattooType
     * @param int|null $tattooValue
     * @param string|null $requestId
     * @param int|null $lineNumber
     */
    public function __construct(
        $tattooType = null,
        $tattooValue = null,
        $requestId = null,
        $lineNumber = null
    ) {
        if (!empty($tattooType)) {
            $this->tattooType = $tattooType;
        }

        if (!empty($tattooValue)) {
            $this->tattooValue = $tattooValue;
        }

        if (!empty($requestId)) {
            $this->requestID = $requestId;
        }

        if (!empty($lineNumber)) {
            $this->lineNumber = $lineNumber;
        }
    }
}
