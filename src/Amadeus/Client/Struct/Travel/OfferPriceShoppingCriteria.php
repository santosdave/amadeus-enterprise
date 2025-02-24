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
 * @package Amadeus\Client\Struct\Travel
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Shopping Criteria for Travel_OfferPrice
 */
class OfferPriceShoppingCriteria
{
    /**
     * Fare Preferences
     * 
     * @var OfferPriceFarePreferences
     */
    public $FarePreferences;

    /**
     * Margin Criteria
     * 
     * @var OfferPriceMarginCriteria
     */
    public $MarginCriteria;

    /**
     * Payment Card Criteria
     * 
     * @var OfferPricePaymentCardCriteria
     */
    public $PaymentCardCriteria;

    /**
     * Existing Order Criteria
     * 
     * @var OfferPriceExistingOrderCriteria
     */
    public $ExistingOrderCriteria;

    /**
     * OfferPriceShoppingCriteria constructor
     *
     * @param Travel\OfferPrice\ShoppingCriteria $shoppingCriteria
     */
    public function __construct(\Amadeus\Client\RequestOptions\Travel\OfferPrice\ShoppingCriteria $shoppingCriteria)
    {
        if ($shoppingCriteria->farePreferencesContext) {
            $this->FarePreferences = new OfferPriceFarePreferences(
                $shoppingCriteria->farePreferencesContext
            );
        }

        if ($shoppingCriteria->marginCriteria) {
            $this->MarginCriteria = new OfferPriceMarginCriteria(
                $shoppingCriteria->marginCriteria
            );
        }

        if ($shoppingCriteria->paymentCardCriteria) {
            $this->PaymentCardCriteria = new OfferPricePaymentCardCriteria(
                $shoppingCriteria->paymentCardCriteria
            );
        }

        if ($shoppingCriteria->existingOrderCriteria) {
            $this->ExistingOrderCriteria = new OfferPriceExistingOrderCriteria(
                $shoppingCriteria->existingOrderCriteria
            );
        }
    }
}
