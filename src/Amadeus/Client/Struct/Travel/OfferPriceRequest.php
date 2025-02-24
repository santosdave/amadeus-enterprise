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

use Amadeus\Client\RequestOptions\Travel\TravelOfferPriceOptions;

/**
 * Request details for Travel_OfferPrice
 */
class OfferPriceRequest
{
    /**
     * Data Lists
     * 
     * @var OfferPriceDataLists
     */
    public $DataLists;

    /**
     * Priced Offer details
     * 
     * @var OfferPricePricedOffer
     */
    public $PricedOffer;

    /**
     * Shopping Criteria
     * 
     * @var OfferPriceShoppingCriteria
     */
    public $ShoppingCriteria;

    /**
     * OfferPriceRequest constructor
     *
     * @param TravelOfferPriceOptions $options
     */
    public function __construct(TravelOfferPriceOptions $options)
    {
        $this->loadDataLists($options);
        $this->loadPricedOffer($options);
        $this->loadShoppingCriteria($options);
    }

    /**
     * Load Passenger Data Lists
     *
     * @param TravelOfferPriceOptions $options
     */
    protected function loadDataLists(TravelOfferPriceOptions $options)
    {
        $this->DataLists = new OfferPriceDataLists($options->passengers);
    }

    /**
     * Load Priced Offer details
     *
     * @param TravelOfferPriceOptions $options
     */
    protected function loadPricedOffer(TravelOfferPriceOptions $options)
    {
        $this->PricedOffer = new OfferPricePricedOffer($options->selectedOffers);
    }

    /**
     * Load Shopping Criteria
     *
     * @param TravelOfferPriceOptions $options
     */
    protected function loadShoppingCriteria(TravelOfferPriceOptions $options)
    {
        if ($options->shoppingCriteria) {
            $this->ShoppingCriteria = new OfferPriceShoppingCriteria($options->shoppingCriteria);
        }
    }
}
