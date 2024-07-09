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

namespace Amadeus\Client\RequestOptions\Pnr\Element;

use Amadeus\Client\RequestOptions\Pnr\Element;

/**
 * FormOfPayment element - FP element
 *
 * @package Amadeus\Client\RequestOptions\Pnr\Element
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class FormOfPayment extends Element
{
    const TYPE_CASH = "CA";
    const TYPE_CHECK = "CK";
    const TYPE_CREDITCARD = "CC";
    const TYPE_MISC = "MS";

    /**
     * Form of Payment type
     *
     * self::TYPE_*
     *
     * @var string
     */
    public $type;

    /**
     * Credit card type
     *
     * VI: Visa
     * AX: American Express
     * BC: BC Card
     * CA: MasterCard
     * DS: Discover
     * DC: Diners Club
     * E: Visa Electron
     * TO: Maestro
     *
     * for self::TYPE_CREDITCARD
     *
     * @var string
     */
    public $creditCardType;

    /**
     * for self::TYPE_CREDITCARD
     *
     * @var string
     */
    public $creditCardNumber;

    /**
     * Credit Card expiry date
     *
     * for self::TYPE_CREDITCARD
     *
     * Format: MMYY
     *
     * @var string
     */
    public $creditCardExpiry;

    /**
     * CVC code
     *
     * @var int
     */
    public $creditCardCvcCode;

    /**
     * Credit card holder's name
     *
     * @var string
     */
    public $creditCardHolder;

    /**
     * Free text for self::TYPE_MISC
     *
     * @var string
     */
    public $freeText;

    /**
     * Is this a Service Fee?
     *
     * @var bool
     */
    public $isServiceFee = false;
}
