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

use Amadeus\Client\RequestOptions\Travel\TravelOrderChangeOptions;

/**
 * Request details for Travel_OrderChange
 */
class OrderChangeRequest
{
    /**
     * Change Order details
     * 
     * @var OrderChangeDetails
     */
    public $ChangeOrder;

    /**
     * DataLists for Passengers
     * 
     * @var OrderChangePaxList
     */
    public $DataLists;

    /**
     * Order Reference
     * 
     * @var OrderReference
     */
    public $Order;

    /**
     * Parameters (Optional Invoice)
     * 
     * @var OrderChangeParameters
     */
    public $Parameters;

    /**
     * Payment Information
     * 
     * @var OrderChangePaymentInfo
     */
    public $PaymentInfo;

    /**
     * OrderChangeRequest constructor
     *
     * @param TravelOrderChangeOptions $options
     */
    public function __construct(TravelOrderChangeOptions $options)
    {
        $this->loadChangeOrder($options);
        $this->loadDataLists($options);
        $this->loadOrder($options);
        $this->loadParameters($options);
        $this->loadPaymentInfo($options);
    }

    /**
     * Load Change Order details
     *
     * @param TravelOrderChangeOptions $options
     */
    protected function loadChangeOrder(TravelOrderChangeOptions $options)
    {
        $this->ChangeOrder = new OrderChangeDetails($options);
    }

    /**
     * Load Passenger Lists
     *
     * @param TravelOrderChangeOptions $options
     */
    protected function loadDataLists(TravelOrderChangeOptions $options)
    {
        $this->DataLists = new OrderChangePaxList($options->passengers);
    }

    /**
     * Load Order Reference
     *
     * @param TravelOrderChangeOptions $options
     */
    protected function loadOrder(TravelOrderChangeOptions $options)
    {
        $this->Order = new OrderReference($options->orderId, $options->ownerCode);
    }

    /**
     * Load Parameters (Optional Invoice)
     *
     * @param TravelOrderChangeOptions $options
     */
    protected function loadParameters(TravelOrderChangeOptions $options)
    {
        if ($options->invoice) {
            $this->Parameters = new OrderChangeParameters($options->invoice);
        }
    }

    /**
     * Load Payment Information
     *
     * @param TravelOrderChangeOptions $options
     */
    protected function loadPaymentInfo(TravelOrderChangeOptions $options)
    {
        if ($options->paymentInfo) {
            $this->PaymentInfo = new OrderChangePaymentInfo($options->paymentInfo);
        }
    }
}
