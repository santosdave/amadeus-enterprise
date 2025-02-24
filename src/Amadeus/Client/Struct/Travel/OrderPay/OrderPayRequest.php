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
 * @package Amadeus\Client\Struct\Travel\OrderPay
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;

use Amadeus\Client\RequestOptions\Travel\TravelOrderPayOptions;

/**
 * Request details for Travel_OrderPay
 */
class OrderPayRequest
{
    /**
     * Payment Information
     * 
     * @var OrderPayPaymentInfo
     */
    public $PaymentInfo;

    /**
     * Order details
     * 
     * @var OrderPayOrder
     */
    public $Order;

    /**
     * Payment Authentication Instruction (for 3D Secure)
     * 
     * @var OrderPayInstruction
     */
    public $DataLists;

    /**
     * Invoice Parameters
     * 
     * @var OrderPayInvoiceParams
     */
    public $Parameters;

    /**
     * OrderPayRequest constructor
     *
     * @param TravelOrderPayOptions $options
     */
    public function __construct(TravelOrderPayOptions $options)
    {
        $this->loadPaymentInfo($options);
        $this->loadOrder($options);
        $this->loadDataLists($options);
        $this->loadParameters($options);
    }

    /**
     * Load Payment Information
     *
     * @param TravelOrderPayOptions $options
     */
    protected function loadPaymentInfo(TravelOrderPayOptions $options)
    {
        $this->PaymentInfo = new OrderPayPaymentInfo($options);
    }

    /**
     * Load Order Details
     *
     * @param TravelOrderPayOptions $options
     */
    protected function loadOrder(TravelOrderPayOptions $options)
    {
        $this->Order = new OrderPayOrder(
            $options->orderId,
            $options->ownerCode
        );
    }

    /**
     * Load Data Lists (for 3D Secure authentication)
     *
     * @param TravelOrderPayOptions $options
     */
    protected function loadDataLists(TravelOrderPayOptions $options)
    {
        if ($options->paymentAuthResponse) {
            $this->DataLists = new OrderPayInstruction($options->paymentAuthResponse);
        }
    }

    /**
     * Load Invoice Parameters
     *
     * @param TravelOrderPayOptions $options
     */
    protected function loadParameters(TravelOrderPayOptions $options)
    {
        if ($options->invoice) {
            $this->Parameters = new OrderPayInvoiceParams($options->invoice);
        }
    }
}
