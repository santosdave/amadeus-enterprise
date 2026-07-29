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
    public $TicketingInfo;
    public $ServiceProvider = [];
    public $NegotiatedFare = [];
    public $TaxAndFees;
    public $Booking;
    public $FareDetermination;
    public $LoyaltyProgram = [];
    public $Discount;
    public $GeographicalInfo;
    public $Customization;
    public $Reprice;
    public $OtherOptions;
    public $AssociatedPNRElement = [];

    /**
     * ItineraryPricingOption constructor
     * 
     * @param PricingOptionOptions $options
     */
    public function __construct(PricingOptionOptions $options)
    {
        // Ticketing info
        if (!empty($options->ticketingInfo)) {
            $this->TicketingInfo = new PricingTicketingInfo($options->ticketingInfo);
        }

        // Service providers
        if (!empty($options->serviceProviders)) {
            foreach ($options->serviceProviders as $provider) {
                if (is_string($provider)) {
                    $this->ServiceProvider[] = new ServiceProvider($provider, null, 'VC');
                } else {
                    $this->ServiceProvider[] = $provider;
                }
            }
        }

        // Negotiated fares
        if (!empty($options->negotiatedFares)) {
            foreach ($options->negotiatedFares as $negFare) {
                $this->NegotiatedFare[] = new PricingNegotiatedFare($negFare);
            }
        }

        // Tax and fees
        if (!empty($options->taxAndFees)) {
            $this->TaxAndFees = new PricingTaxAndFees($options->taxAndFees);
        }

        // Booking options
        if (!empty($options->booking)) {
            $this->Booking = new PricingBooking($options->booking);
        }

        // Fare determination
        if (!empty($options->fareDetermination)) {
            $this->FareDetermination = new PricingFareDetermination($options->fareDetermination);
        }

        // Loyalty programs
        if (!empty($options->loyaltyPrograms)) {
            foreach ($options->loyaltyPrograms as $loyalty) {
                $this->LoyaltyProgram[] = new PricingLoyaltyProgram($loyalty);
            }
        }

        // Discount
        if (!empty($options->discount)) {
            $this->Discount = new PricingDiscount($options->discount);
        }

        // Geographical info
        if (!empty($options->geographicalInfo)) {
            $this->GeographicalInfo = new PricingGeographicalInfo($options->geographicalInfo);
        }

        // Customization
        if (!empty($options->customization)) {
            $this->Customization = new PricingCustomization($options->customization);
        }

        // Reprice options
        if (!empty($options->repriceOptions)) {
            $this->Reprice = new PricingReprice($options->repriceOptions);
        }

        // Other options
        if (!empty($options->otherOptions)) {
            foreach ($options->otherOptions as $other) {
                $this->OtherOptions = new PricingOtherOptions($other);
            }
        }

        // Associated elements
        if (!empty($options->associatedElements)) {
            $elements = is_array($options->associatedElements)
                ? $options->associatedElements
                : [$options->associatedElements];  // ← wrap single object in array

            foreach ($elements as $element) {
                $this->AssociatedPNRElement[] = new PricingAssociatedElement($element);
            }
        }
    }
}
