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
 * Identifier - Flight number information
 */
class Identifier
{
    /**
     * Flight number (1-4 digits)
     * 
     * @var string
     */
    public $flightNumber;

    /**
     * Flight number suffix
     * 
     * @var string
     */
    public $suffix;

    public function __construct($flightNumber, $suffix = null)
    {
        $this->flightNumber = $flightNumber;
        if (!empty($suffix)) {
            $this->suffix = $suffix;
        }
    }
}
