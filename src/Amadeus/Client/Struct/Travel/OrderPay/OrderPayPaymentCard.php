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

use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentCard;

/**
 * Payment Card details for Travel_OrderPay
 */
class OrderPayPaymentCard
{
    /**
     * Credit Card Vendor Code
     * 
     * @var string
     */
    public $CreditCardVendorCode;

    /**
     * Card Number
     * 
     * @var string
     */
    public $CardNumber;

    /**
     * Card Security Code (CVV)
     * 
     * @var string
     */
    public $SeriesCode;

    /**
     * Card Expiration Date (MMYY)
     * 
     * @var string
     */
    public $ExpirationDate;

    /**
     * OrderPayPaymentCard constructor
     *
     * @param PaymentCard $paymentCard Payment card details
     */
    public function __construct(PaymentCard $paymentCard)
    {
        $this->CreditCardVendorCode = $paymentCard->creditCardVendorCode;
        $this->CardNumber = $paymentCard->cardNumber;
        $this->SeriesCode = $paymentCard->seriesCode;
        $this->ExpirationDate = $paymentCard->expirationDate;
    }
}
