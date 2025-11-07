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

use Amadeus\Client\RequestOptions\Ticket\BoundInfo;

/**
 * Bound - A segment bound to add to the itinerary
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Bound
{
    /**
     * Number in party
     * 
     * @var string
     */
    public $nIP;

    /**
     * Action code (segment status)
     * 
     * @var string
     */
    public $actionCode;

    /**
     * Array of segments
     * 
     * @var Segment[]
     */
    public $segment = [];

    /**
     * Bound constructor
     *
     * @param BoundInfo $boundInfo
     */
    public function __construct(BoundInfo $boundInfo)
    {
        if (!empty($boundInfo->nip)) {
            $this->nIP = (string) $boundInfo->nip;
        }

        if (!empty($boundInfo->actionCode)) {
            $this->actionCode = $boundInfo->actionCode;
        }

        if (!empty($boundInfo->segments)) {
            foreach ($boundInfo->segments as $segmentInfo) {
                $this->segment[] = new Segment($segmentInfo);
            }
        }
    }
}
