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


class PricingLoyaltyProgram
{
    public $Type;
    public $ProviderCode;
    public $Number;
    public $TierLevel;
    public $PriorityCode;
    public $Point;

    public function __construct($loyalty)
    {
        if (!empty($loyalty->type)) {
            $this->Type = $loyalty->type;
        }
        if (!empty($loyalty->providerCode)) {
            $this->ProviderCode = $loyalty->providerCode;
        }
        if (!empty($loyalty->number)) {
            $this->Number = $loyalty->number;
        }
        if (!empty($loyalty->tierLevel)) {
            $this->TierLevel = $loyalty->tierLevel;
        }
        if (!empty($loyalty->priorityCode)) {
            $this->PriorityCode = $loyalty->priorityCode;
        }
        if (!empty($loyalty->points)) {
            $this->Point = new PricingPoint($loyalty->points);
        }
    }
}