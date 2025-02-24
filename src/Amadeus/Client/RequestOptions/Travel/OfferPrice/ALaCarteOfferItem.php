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
 * @package Amadeus\Client\RequestOptions\Travel\OfferPrice
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\OfferPrice;

use Amadeus\Client\LoadParamsFromArray;

/**
 * A La Carte Offer Item details
 */
class ALaCarteOfferItem extends LoadParamsFromArray
{
    /**
     * Quantity of items (e.g., baggage kg or number of seats)
     * 
     * @var int
     */
    public $qty;

    /**
     * Seat details (for seat selection)
     * 
     * @var string
     */
    public $seatInfo;
}