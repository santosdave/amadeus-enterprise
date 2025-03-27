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
 * @package Amadeus\Client\RequestOptions\Travel\OrderChange
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderChange;

use Amadeus\Client\LoadParamsFromArray;

/**
 *   Payment Card Details for Travel_OrderChange
 */
class PaymentCard   extends LoadParamsFromArray
{
    /**
     * Constants for Credit Card Vendor Codes
     */
    const VENDOR_VISA = 'VI';
    const VENDOR_MASTERCARD = 'MC';
    const VENDOR_AMEX = 'AX';

    /**
     * Constants for Payment Transaction Channel Codes
     */
    const CHANNEL_MAIL_ORDER = 'MO';
    const CHANNEL_INTERNET = 'IN';

    /**
     * Credit Card Vendor Code (e.g. VI for Visa)
     * 
     * @var string
     */
    public $creditCardVendorCode;

    /**
     * Card Number
     * 
     * @var string
     */
    public $cardNumber;

    /**
     * Card Security Code (CVV)
     * 
     * @var string
     */
    public $seriesCode;

    /**
     * Card Expiration Date (MMYY format)
     * 
     * @var string
     */
    public $expirationDate;

    /**
     * Payment Transaction Channel Code
     * 
     * @var string
     */
    public $paymentTrxChannelCode;
}
