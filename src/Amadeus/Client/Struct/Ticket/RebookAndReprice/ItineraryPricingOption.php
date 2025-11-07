<?php

/**
 * amadeus-ws-client
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

namespace Amadeus\Client\Struct\Ticket\RebookAndReprice;

use Amadeus\Client\RequestOptions\Ticket\ItineraryPricingOption as PricingOptionOptions;

/**
 * ItineraryPricingOption - Individual pricing option
 * 
 * This follows similar structure to Fare_PricePNRWithBookingClass
 */
class ItineraryPricingOption
{
    public $ticketingInfo;
    public $serviceProvider = [];
    public $negotiatedFare = [];
    public $taxAndFees;
    public $booking;
    public $fareDetermination;
    public $loyaltyProgram = [];
    public $discount;
    public $geographicalInfo;
    public $customization;
    public $reprice;
    public $otherOptions;
    public $associatedPNRElement = [];

    /**
     * ItineraryPricingOption constructor
     * 
     * @param PricingOptionOptions $options
     */
    public function __construct(PricingOptionOptions $options)
    {
        // Ticketing info
        if (!empty($options->ticketingInfo)) {
            $this->ticketingInfo = new PricingTicketingInfo($options->ticketingInfo);
        }

        // Service providers
        if (!empty($options->serviceProviders)) {
            foreach ($options->serviceProviders as $provider) {
                $this->serviceProvider[] = $provider;
            }
        }

        // Negotiated fares
        if (!empty($options->negotiatedFares)) {
            foreach ($options->negotiatedFares as $negFare) {
                $this->negotiatedFare[] = new PricingNegotiatedFare($negFare);
            }
        }

        // Tax and fees
        if (!empty($options->taxAndFees)) {
            $this->taxAndFees = new PricingTaxAndFees($options->taxAndFees);
        }

        // Booking options
        if (!empty($options->booking)) {
            $this->booking = new PricingBooking($options->booking);
        }

        // Fare determination
        if (!empty($options->fareDetermination)) {
            $this->fareDetermination = new PricingFareDetermination($options->fareDetermination);
        }

        // Loyalty programs
        if (!empty($options->loyaltyPrograms)) {
            foreach ($options->loyaltyPrograms as $loyalty) {
                $this->loyaltyProgram[] = new PricingLoyaltyProgram($loyalty);
            }
        }

        // Discount
        if (!empty($options->discount)) {
            $this->discount = new PricingDiscount($options->discount);
        }

        // Geographical info
        if (!empty($options->geographicalInfo)) {
            $this->geographicalInfo = new PricingGeographicalInfo($options->geographicalInfo);
        }

        // Customization
        if (!empty($options->customization)) {
            $this->customization = new PricingCustomization($options->customization);
        }

        // Reprice options
        if (!empty($options->repriceOptions)) {
            $this->reprice = new PricingReprice($options->repriceOptions);
        }

        // Other options
        if (!empty($options->otherOptions)) {
            $this->otherOptions = new PricingOtherOptions($options->otherOptions);
        }

        // Associated elements
        if (!empty($options->associatedElements)) {
            foreach ($options->associatedElements as $element) {
                $this->associatedPNRElement[] = new PricingAssociatedElement($element);
            }
        }
    }
}
