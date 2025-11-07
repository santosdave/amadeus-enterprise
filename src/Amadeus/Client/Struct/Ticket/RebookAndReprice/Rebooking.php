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

use Amadeus\Client\RequestOptions\Ticket\RebookOptions;

/**
 * Rebooking
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Rebooking
{
    /**
     * List of PNR elements to cancel
     * 
     * @var Cancellation
     */
    public $cancellation;

    /**
     * List of PNR elements to confirm (change status to HK)
     * 
     * @var Confirmation
     */
    public $confirmation;

    /**
     * Element replication rules
     * 
     * @var Replication
     */
    public $replication;

    /**
     * New segment bounds to add
     * 
     * @var Bounds
     */
    public $bounds;

    /**
     * Frequent flyer information
     * 
     * @var FrequentFlyers
     */
    public $frequentFlyers;

    /**
     * Contact information
     * 
     * @var Contacts
     */
    public $contacts;

    /**
     * Special service requests
     * 
     * @var SpecialServiceRequests
     */
    public $specialServiceRequests;

    /**
     * Seat requests
     * 
     * @var Seats
     */
    public $seats;

    /**
     * Other service information
     * 
     * @var OtherServicesInformation
     */
    public $otherServicesInformation;

    /**
     * Special keywords
     * 
     * @var SpecialKeywords
     */
    public $specialKeywords;

    /**
     * Remarks
     * 
     * @var Remarks
     */
    public $remarks;

    /**
     * Time limits
     * 
     * @var TimeLimits
     */
    public $timeLimits;

    /**
     * Fare discounts
     * 
     * @var FareDiscounts
     */
    public $fareDiscounts;

    /**
     * Rebooking constructor
     *
     * @param RebookOptions $options
     */
    public function __construct(RebookOptions $options)
    {
        // Load cancellations
        if (!empty($options->cancellations)) {
            $this->cancellation = new Cancellation($options->cancellations);
        }

        // Load confirmations
        if (!empty($options->confirmations)) {
            $this->confirmation = new Confirmation($options->confirmations);
        }

        // Load replications
        if (!empty($options->replications)) {
            $this->replication = new Replication($options->replications);
        }

        // Load bounds (new segments)
        if (!empty($options->bounds)) {
            $this->bounds = new Bounds($options->bounds);
        }

        // Load frequent flyers
        if (!empty($options->frequentFlyers)) {
            $this->frequentFlyers = new FrequentFlyers($options->frequentFlyers);
        }

        // Load contacts
        if (!empty($options->contacts)) {
            $this->contacts = new Contacts($options->contacts);
        }

        // Load special service requests
        if (!empty($options->specialServiceRequests)) {
            $this->specialServiceRequests = new SpecialServiceRequests(
                $options->specialServiceRequests
            );
        }

        // Load seats
        if (!empty($options->seats)) {
            $this->seats = new Seats($options->seats);
        }

        // Load other services information
        if (!empty($options->otherServicesInformation)) {
            $this->otherServicesInformation = new OtherServicesInformation(
                $options->otherServicesInformation
            );
        }

        // Load special keywords
        if (!empty($options->specialKeywords)) {
            $this->specialKeywords = new SpecialKeywords($options->specialKeywords);
        }

        // Load remarks
        if (!empty($options->remarks)) {
            $this->remarks = new Remarks($options->remarks);
        }

        // Load time limits
        if (!empty($options->timeLimits)) {
            $this->timeLimits = new TimeLimits($options->timeLimits);
        }

        // Load fare discounts
        if (!empty($options->fareDiscounts)) {
            $this->fareDiscounts = new FareDiscounts($options->fareDiscounts);
        }
    }
}
