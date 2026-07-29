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
 * PricingTicketingInfo - Ticketing information for pricing
 */
class PricingTicketingInfo
{
    public $Number;
    public $Type;
    public $FareBasis;
    public $UpsellRecoID = [];
    public $FareFamily = [];
    public $TourCode;
    public function __construct($info)
    {
        if (!empty($info->ticketNumber)) {
            $this->Number = $info->ticketNumber;
        }
        if (!empty($info->ticketType)) {
            $this->Type = $info->ticketType;
        }
        if (!empty($info->fareBasisCode)) {
            $this->FareBasis = new PricingFareBasis(
                $info->fareBasisCode,
                $info->ticketDesignator ?? null
            );
        }
        if (!empty($info->upsellRecoIds)) {
            $this->UpsellRecoID = $info->upsellRecoIds;
        }
        if (!empty($info->fareFamilies)) {
            foreach ($info->fareFamilies as $ff) {
                $this->FareFamily[] = new PricingFareFamily($ff->name, $ff->owner);
            }
        }
        if (!empty($info->tourCode)) {
            $this->TourCode = $info->tourCode;
        }
    }
}