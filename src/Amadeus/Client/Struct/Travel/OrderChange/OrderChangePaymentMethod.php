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
 * Payment Method for Travel_OrderChange
 */
class OrderChangePaymentMethod
{
    /**
     * Constants for Payment Methods
     */
    const METHOD_CASH = 'CASH';
    const METHOD_CREDIT_CARD = 'CREDIT_CARD';

    /**
     * Cash Indicator
     * 
     * @var OrderChangeCash
     */
    public $Cash;

    /**
     * Payment Card Details
     * 
     * @var OrderChangePaymentCard
     */
    public $PaymentCard;

    /**
     * OrderChangePaymentMethod constructor
     *
     * @param string $method Payment method type
     * @param \Amadeus\Client\RequestOptions\Travel\OrderChange\PaymentCard|null $paymentCard Payment card details (optional)
     */
    public function __construct($method, $paymentCard = null)
    {
        if ($method === self::METHOD_CASH) {
            $this->Cash = new OrderChangeCash(true);
        } elseif ($method === self::METHOD_CREDIT_CARD && $paymentCard) {
            $this->PaymentCard = new OrderChangePaymentCard($paymentCard);
        }
    }
}
