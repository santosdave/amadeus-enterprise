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

/**
 * Accept Offer details
 */
class OrderChangePaymentInfo
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
     * @var OrderChangeSecurePayment
     */
    public $SecurePaymentVersion2;

    /**
     * Payment Method
     * 
     * @var OrderChangePaymentMethod
     */
    public $PaymentMethod;

    /**
     * OrderChangePaymentInfo constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\OrderChange\PaymentInfo $options
     */
    public function __construct($options)
    {
        // Payment Amount
        $this->Amount = new \stdClass();
        $this->Amount->_ = $options->amount; // The actual amount value
        $this->Amount->CurCode = $options->currencyCode;

        // Payment Type Code (Cash or Credit Card)
        $this->TypeCode = $options->typeCode;

        // Payment Method
        if (
            $options->typeCode === \Amadeus\Client\RequestOptions\Travel\OrderChange\PaymentInfo::TYPE_CASH ||
            $options->typeCode === 'CASH'
        ) {
            $this->PaymentMethod = new OrderChangePaymentMethod(
                OrderChangePaymentMethod::METHOD_CASH
            );
        } elseif (
            $options->typeCode === \Amadeus\Client\RequestOptions\Travel\OrderChange\PaymentInfo::TYPE_CREDIT_CARD ||
            $options->typeCode === 'CC'
        ) {
            // Secure Payment Version 2 for Credit Card
            if ($options->paymentCard && $options->paymentCard->paymentTrxChannelCode) {
                $this->SecurePaymentVersion2 = new OrderChangeSecurePayment(
                    $options->paymentCard->paymentTrxChannelCode
                );
            }

            // Payment Method for Credit Card
            $this->PaymentMethod = new OrderChangePaymentMethod(
                OrderChangePaymentMethod::METHOD_CREDIT_CARD,
                $options->paymentCard
            );
        }
    }
}
