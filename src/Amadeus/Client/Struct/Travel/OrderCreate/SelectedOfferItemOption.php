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
 * @package Amadeus\Client\Struct\Travel\OrderCreate
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Selected Offer Item Option
 */
class SelectedOfferItemOption extends LoadParamsFromArray
{
    /**
     * Unique Offer Item Reference ID
     * 
     * @var string
     */
    public $offerItemRefId;

    /**
     * Passenger Reference IDs
     * 
     * @var string[]
     */
    public $paxRefIds = [];

    /**
     * Selected Seat
     * 
     * @var SelectedOfferItemSeat
     */
    public $selectedSeat;

    /**
     * Selected A La Carte Offer Items
     * 
     * @var SelectedOfferItemALaCarteOfferItem[]
     */
    public $selectedALaCarteOfferItems = [];
}