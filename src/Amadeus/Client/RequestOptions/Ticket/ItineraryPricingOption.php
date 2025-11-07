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

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * ItineraryPricingOption - Pricing Options for Repricing
 * 
 * Based on Fare_PricePNRWithBookingClass structure
 */
class ItineraryPricingOption extends LoadParamsFromArray
{

    /**
     * Ticketing information
     * 
     * @var TicketingInfo
     */
    public $ticketingInfo;

    /**
     * Service providers (airlines)
     * 
     * @var string[]
     */
    public $serviceProviders = [];

    /**
     * Negotiated fare options
     * 
     * @var NegotiatedFare[]
     */
    public $negotiatedFares = [];

    /**
     * Tax and fee options
     * 
     * @var TaxAndFeeOptions
     */
    public $taxAndFees;

    /**
     * Booking options (cabin, class)
     * 
     * @var BookingOptions
     */
    public $booking;

    /**
     * Fare determination options
     * 
     * @var FareDetermination
     */
    public $fareDetermination;

    /**
     * Loyalty program information
     * 
     * @var LoyaltyProgram[]
     */
    public $loyaltyPrograms = [];

    /**
     * Discount options
     * 
     * @var DiscountOptions
     */
    public $discount;

    /**
     * Geographical information
     * 
     * @var GeographicalInfo
     */
    public $geographicalInfo;

    /**
     * Customization options
     * 
     * @var CustomizationOptions
     */
    public $customization;

    /**
     * Reprice-specific options
     * 
     * @var RepriceOptions
     */
    public $repriceOptions;

    /**
     * Other miscellaneous options
     * 
     * @var OtherPricingOptions
     */
    public $otherOptions;

    /**
     * Associated PNR elements
     * 
     * @var AssociatedPnrElement[]
     */
    public $associatedElements = [];
}
