<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2015 Amadeus Benelux NV
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
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Fop;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Payment - whole or partial payment
 *
 * @package Amadeus\Client\RequestOptions\Fop
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class Payment extends LoadParamsFromArray
{
    const TYPE_TOTAL_FARE_AMOUNT = 712;
    const TYPE_ADDITIONAL_COLLECTION_AMOUNT = "A";
    const TYPE_AUTHORIZED_AMOUNT = "AUT";
    const TYPE_BALANCE = "BAL";
    const TYPE_TRANSACTION_TOTAL_AMOUNT = "I";
    const TYPE_TRANSACTION_TOTAL_AMOUNT_IN_PNR_CURRENCY = "IPC";
    const TYPE_FIRST_INSTALMENT_AMOUNT = "ISF";
    const TYPE_INSTALMENT_INTEREST = "ISI";
    const TYPE_FOLLOWING_INSTALMENT_AMOUNT = "ISN";
    const TYPE_INITIAL_TST_TOTAL_AMOUNT = "IT";
    const TYPE_INITIAL_TOTAL_AMOUNT_IN_PNR_CURRENCY = "ITC";
    const TYPE_MILES = "MIL";
    const TYPE_PENALTY = "PEN";
    const TYPE_TOTAL_OR_REMAINING_AMOUNT = "R";
    const TYPE_REFUNDABLE_AMOUNT = "REF";
    const TYPE_REUSABLE_AMOUNT = "REU";
    const TYPE_INITIAL_TST_INDIVIDUAL_AMOUNT = "T";
    const TYPE_INITIAL_TST_INDIVIDUAL_AMOUNT_TPC = "TPC";

    /**
     * What type of payment
     *
     * self::TYPE_*
     *
     * @var string|int
     */
    public $type;

    /**
     * The amount to be paid in this payment
     * @var double|int
     */
    public $amount;

    /**
     * 3-character currency code
     *
     * @var string
     */
    public $currency;
}
