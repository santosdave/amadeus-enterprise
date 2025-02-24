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
use Amadeus\Client\RequestOptions\Travel\ServiceList\Pax;

/**
 * Request Options for Travel_ServiceList service
 *
 * @package Amadeus\Client\RequestOptions
 */
class TravelServiceListOptions extends Base
{
    /**
     * Agency ID for the request
     * 
     * @var string
     */
    public $agencyId = 'unused';

    /**
     * Pseudo City Code for the request
     * 
     * @var string
     */
    public $pseudoCityCode = 'unused';

    /**
     * Offer ID (for offer-based service list)
     * 
     * @var string
     */
    public $offerId;

    /**
     * Owner Code for the offer
     * 
     * @var string
     */
    public $offerOwnerCode;

    /**
     * Offer Items for the service list
     * 
     * @var ServiceList\OfferItem[]
     */
    public $offerItems = [];

    /**
     * Order ID (for order-based service list)
     * 
     * @var string
     */
    public $orderId;

    /**
     * Owner Code for the order
     * 
     * @var string
     */
    public $orderOwnerCode;

    /**
     * Shopping Response ID (for offer-based service list)
     * 
     * @var string
     */
    public $shoppingResponseId;

    /**
     * Passengers for the service list
     * 
     * @var Pax[]
     */
    public $passengers = [];

    /**
     * Override Currency Code
     * 
     * @var string
     */
    public $overrideCurrencyCode;

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