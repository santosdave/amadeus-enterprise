<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2024 Amadeus Benelux NV
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
 * @package Amadeus\Client\Struct\Travel\OrderChange
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderChange;

/**
 * Selected Offer Item
 */
class SelectedOfferItem
{
    /**
     * Offer Item Reference ID
     * 
     * @var string
     */
    public $OfferItemRefID;

    /**
     * Passenger Reference ID
     * 
     * @var string
     */
    public $PaxRefID;

    /**
     * SelectedOfferItem constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\OrderChange\SelectedOfferItem $item
     */
    public function __construct($item)
    {
        $this->OfferItemRefID = $item->offerItemRefId;
        $this->PaxRefID = $item->paxRefId;
    }
}
