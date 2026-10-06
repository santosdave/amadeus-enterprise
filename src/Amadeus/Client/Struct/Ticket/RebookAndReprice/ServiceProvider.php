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
 * ServiceProvider - Operating airline information
 */
class ServiceProvider
{
    /**
     * Airline code (2-3 characters) - attribute for Bounds/Segment
     * Text content for ItineraryPricingOptions
     * 
     * @var string
     */
    public $code;

    /**
     * Airline name
     * 
     * @var string
     */
    public $Name;

    /**
     * Service provider type (e.g., 'VC' for Virtual Carrier)
     * Only used in ItineraryPricingOptions context
     * 
     * @var string
     */
    public $Type;

    /**
     * Element text content (for ItineraryPricingOptions with Type attribute)
     * 
     * @var string
     */
    public $_;

    public function __construct($code, $name = null, $type = null)
    {
        $this->code = $code;
        $this->_ = $code;
        if (!empty($name)) {
            $this->Name = $name;
        }
        if (!empty($type)) {
            $this->Type = $type;
        }
    }
}
