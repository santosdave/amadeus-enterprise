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
 * @package Amadeus\Client\RequestOptions
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\RequestOptions\Base;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\Passenger;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\SelectedOffer;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\ShoppingCriteria;

/**
 * Request Options for Travel_OfferPrice service
 *
 * @package Amadeus\Client\RequestOptions
 * @author Your Name <your.email@example.com>
 */
class TravelOfferPriceOptions extends Base
{
    /**
     * Agency Identifier
     * 
     * @var string
     */
    public $agencyId;

    /**
     * Pseudo City Code
     * 
     * @var string
     */
    public $pseudoCityCode;

    /**
     * Passengers for this offer price request
     * 
     * @var Passenger[]
     */
    public $passengers = [];

    /**
     * Selected Offers
     * 
     * @var SelectedOffer[]
     */
    public $selectedOffers = [];

    /**
     * Shopping Criteria
     * 
     * @var ShoppingCriteria
     */
    public $shoppingCriteria;

    /**
     * Optional constants for standardization (similar to other classes)
     */
    const SHOPPING_CONTEXT_UPSELL = 'Upsell';

    /**
     * Optional static method for creating preset configurations
     *
     * @param array $params
     * @return static
     */
    public static function create(array $params = [])
    {
        return new static($params);
    }
}
