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
 * @package Amadeus\Client\Struct\Travel\OrderCreate
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\RequestOptions\Travel\OrderCreate\SelectedOffer;


/**
 * Selected Offer details for Travel_OrderCreate
 */
class OrderCreateSelectedOffer
{
    /**
     * Unique Offer ID
     * 
     * @var string
     */
    public $OfferID;

    /**
     * Owner Code of the Offer
     * 
     * @var string
     */
    public $OwnerCode;

    /**
     * Shopping Response Reference ID
     * 
     * @var string
     */
    public $ShoppingResponseRefID;

    /**
     * Selected Offer Items
     * 
     * @var OrderCreateSelectedOfferItem[]
     */
    public $SelectedOfferItem = [];

    /**
     * OrderCreateSelectedOffer constructor
     *
     * @param SelectedOffer $offer
     */
    public function __construct(SelectedOffer $offer)
    {
        $this->OfferID = $offer->offerId;
        $this->OwnerCode = $offer->ownerCode;
        $this->ShoppingResponseRefID = $offer->shoppingResponseRefId;

        foreach ($offer->selectedOfferItems as $offerItem) {
            $this->SelectedOfferItem[] = new OrderCreateSelectedOfferItem($offerItem);
        }
    }
}
