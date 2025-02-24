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

use Amadeus\Client\RequestOptions\Travel\TravelOrderCreateOptions;

/**
 * Request details for Travel_OrderCreate
 */
class OrderCreateRequest
{
    /**
     * Create Order details
     * 
     * @var OrderCreateCreateOrder
     */
    public $CreateOrder;

    /**
     * Passenger Data Lists
     * 
     * @var OrderCreateDataLists
     */
    public $DataLists;

    /**
     * OrderCreateRequest constructor
     *
     * @param TravelOrderCreateOptions $options
     */
    public function __construct(TravelOrderCreateOptions $options)
    {
        $this->loadCreateOrder($options);
        $this->loadDataLists($options);
    }

    /**
     * Load Create Order details
     *
     * @param TravelOrderCreateOptions $options
     */
    protected function loadCreateOrder(TravelOrderCreateOptions $options)
    {
        $this->CreateOrder = new OrderCreateCreateOrder($options->selectedOffers);
    }

    /**
     * Load Passenger Data Lists
     *
     * @param TravelOrderCreateOptions $options
     */
    protected function loadDataLists(TravelOrderCreateOptions $options)
    {
        $this->DataLists = new OrderCreateDataLists($options->passengers);
    }
}