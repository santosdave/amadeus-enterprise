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

namespace Amadeus\Client\Struct\Pnr\AddMultiElements;

/**
 * OriginDestination
 *
 * @package Amadeus\Client\Struct\Pnr\AddMultiElements
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class OriginDestination
{
    const LOCATION_ARNK = "ARNK";

    const LOCATION_ALL = "ZZZ";

    /**
     * @var string
     */
    public $origin;
    /**
     * @var string
     */
    public $destination;

    /**
     * OriginDestination constructor.
     *
     * @param string|null $origin
     * @param string|null $destination
     */
    public function __construct($origin = null, $destination = null)
    {
        $this->origin = $origin;
        $this->destination = $destination;
    }
}
