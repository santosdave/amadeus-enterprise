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
 * Payment Information for Travel_OrderPay
 */
class OrderPayPaymentInfo
{
    /**
     * Payment Amount
     * 
     * @var \stdClass
     */
    public $Amount;

    /**
     * Payment Type Code
     * 
     * @var string
     */
    public $TypeCode;

    /**
     * Secure Payment Version 2 Details
     * 
     * @var OrderPaySecurePayment
     */
    public $SecurePaymentVersion2;

    /**
     * Payment Method
     * 
     * @var OrderPayPaymentMethod
     */
    public $PaymentMethod;

    /**
     * OrderPayPaymentInfo constructor
     *
     * @param TravelOrderPayOptions $options
     */
    public function __construct(TravelOrderPayOptions $options)
    {
        // Payment Amount
        $this->Amount = new \stdClass();
        $this->Amount->_ = $options->amount; // The actual amount value
        $this->Amount->CurCode = $options->currencyCode;

        // Payment Type Code (Cash or Credit Card)
        $this->TypeCode = $options->typeCode;

        // Payment Method
        if ($options->typeCode === TravelOrderPayOptions::TYPE_CASH) {
            $this->PaymentMethod = new OrderPayPaymentMethod(
                OrderPayPaymentMethod::METHOD_CASH
            );
        } elseif ($options->typeCode === TravelOrderPayOptions::TYPE_CREDIT_CARD) {
            // Secure Payment Version 2 for Credit Card
            if ($options->paymentCard->paymentTrxChannelCode) {
                $this->SecurePaymentVersion2 = new OrderPaySecurePayment(
                    $options->paymentCard->paymentTrxChannelCode
                );
            }

            // Payment Method for Credit Card
            $this->PaymentMethod = new OrderPayPaymentMethod(
                OrderPayPaymentMethod::METHOD_CREDIT_CARD, 
                $options->paymentCard
            );
        }
    }
}