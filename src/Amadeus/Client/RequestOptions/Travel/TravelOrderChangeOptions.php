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
use Amadeus\Client\RequestOptions\Travel\OrderChange\Pax;
use Amadeus\Client\RequestOptions\Travel\OrderChange\SelectedOffer;

/**
 * Request Options for Travel_OrderChange service
 *
 * @package Amadeus\Client\RequestOptions
 */
class TravelOrderChangeOptions extends Base
{
    /**
     * Order ID to be modified
     * 
     * @var string
     */
    public $orderId;

    /**
     * Owner Code for the Order
     * 
     * @var string
     */
    public $ownerCode;

    /**
     * Passengers to include in the change request
     * 
     * @var Pax[]
     */
    public $passengers = [];

    /**
     * Selected Offer for the change
     * 
     * @var SelectedOffer
     */
    public $selectedOffer;

    /**
     * Invoice parameters for the change
     * 
     * @var OrderChange\Invoice
     */
    public $invoice;


    /**
     * Payment Information for the order change
     * 
     * @var OrderChange\PaymentInfo
     */
    public $paymentInfo;

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
