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
 * LocationInfo - Airport location and time information
 */
class LocationInfo
{
    /**
     * Location code (3 characters)
     * 
     * @var string
     */
    public $locationCode;

    /**
     * Date and time
     * 
     * @var string
     */
    public $dateTime;

    /**
     * Terminal
     * 
     * @var string
     */
    public $terminal;

    /**
     * Location name (city name)
     * 
     * @var string
     */
    public $locationName;

    /**
     * Airport name
     * 
     * @var string
     */
    public $airportName;

    public function __construct($locationCode, $dateTime = null, $terminal = null)
    {
        $this->locationCode = $locationCode;

        if (!empty($dateTime)) {
            // Convert DateTime to string if needed
            if ($dateTime instanceof \DateTime) {
                $this->dateTime = $dateTime->format('Y-m-d\TH:i:s');
            } else {
                $this->dateTime = $dateTime;
            }
        }

        if (!empty($terminal)) {
            $this->terminal = $terminal;
        }
    }
}
