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
use Amadeus\Client\RequestOptions\Travel\OrderReshop\DeleteOrderItem;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\AddOfferItem;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\UpdatePax;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\BookingRef;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\FareWaiver;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\ReshopParameters;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\ReuseTicket;

/**
 * Request Options for Travel_OrderReshop service
 *
 * @package Amadeus\Client\RequestOptions
 */
class TravelOrderReshopOptions extends Base
{
    /**
     * Agency Identifier
     * 
     * @var string
     */
    public $agencyId = 'unused';

    /**
     * Pseudo City Code
     * 
     * @var string
     */
    public $pseudoCityCode = 'unused';

    /**
     * Order Item Reference ID
     * 
     * @var string
     */
    public $orderItemRefID;

    /**
     * Booking Reference details
     * 
     * @var BookingRef
     */
    public $bookingRef;

    /**
     * Reshop Parameters
     * 
     * @var ReshopParameters
     */
    public $reshopParameters;

    /**
     * Fare Waiver codes
     * 
     * @var FareWaiver[]
     */
    public $fareWaivers = [];

    /**
     * Delete Order Items
     * 
     * @var DeleteOrderItem[]
     */
    public $deleteOrderItems = [];

    /**
     * Add Offer Items
     * 
     * @var AddOfferItem[]
     */
    public $addOfferItems = [];

    /**
     * Update Passenger Information
     * 
     * @var UpdatePax[]
     */
    public $updatePax = [];

    /**
     * Reuse Tickets
     * 
     * @var ReuseTicket[]
     */
    public $reuseTickets = [];

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
