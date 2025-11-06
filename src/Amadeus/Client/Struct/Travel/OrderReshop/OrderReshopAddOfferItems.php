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
 * @package Amadeus\Client\Struct\Travel\OrderReshop
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;


use Amadeus\Client\RequestOptions\Travel\OrderReshop\AddOfferItem as AddOfferItemOption;



class OrderReshopAddOfferItems
{
    /**
     * Flight Request (for new itinerary)
     * 
     * @var OrderReshopFlightRequest
     */
    public $FlightRequest;

    /**
     * Selected Offers (alternative structure)
     * 
     * @var OrderReshopSelectedOffer[]
     */
    public $SelectedOfferItems = [];

    /**
     * OrderReshopAddOfferItems constructor
     *
     * @param AddOfferItemOption[] $addOfferItems
     */
    public function __construct(array $addOfferItems)
    {
        foreach ($addOfferItems as $addOfferItem) {
            // Check if this AddOfferItem has a flight request
            if (isset($addOfferItem->flightRequest) && $addOfferItem->flightRequest) {
                $this->FlightRequest = new OrderReshopFlightRequest($addOfferItem->flightRequest);
            }
            // Check if this AddOfferItem has selected offer items (use direct SelectedOffer approach)
            elseif (!empty($addOfferItem->selectedOfferItems) && isset($addOfferItem->offerRefID)) {
                // Create a SelectedOffer object from AddOfferItem data
                $selectedOfferObj = new \Amadeus\Client\RequestOptions\Travel\OrderReshop\SelectedOffer([
                    'offerRefID' => $addOfferItem->offerRefID,
                    'ownerCode' => $addOfferItem->ownerCode,
                    'shoppingResponseRefID' => $addOfferItem->shoppingResponseRefID,
                    'selectedOfferItems' => $addOfferItem->selectedOfferItems
                ]);

                $this->SelectedOfferItems[] = new OrderReshopSelectedOffer($selectedOfferObj);
            }
        }
    }
}
