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

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * RebookOptions - Options for rebooking elements in the PNR
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class RebookOptions extends LoadParamsFromArray
{
    /**
     * List of PNR element references to cancel
     * Array of ElementReference objects
     * 
     * @var ElementReference[]
     */
    public $cancellations = [];

    /**
     * List of PNR element references to confirm (change status to HK)
     * Array of ElementReference objects
     * 
     * @var ElementReference[]
     */
    public $confirmations = [];

    /**
     * Replication rules - elements to carry over to new segments
     * Array of ReplicationBlock objects
     * 
     * @var ReplicationBlock[]
     */
    public $replications = [];

    /**
     * New segment bounds to add to the itinerary
     * Array of BoundInfo objects
     * 
     * @var BoundInfo[]
     */
    public $bounds = [];

    /**
     * Frequent Flyer information
     * Array of FrequentFlyer objects
     * 
     * @var FrequentFlyer[]
     */
    public $frequentFlyers = [];

    /**
     * Contact information elements
     * Array of Contact objects
     * 
     * @var Contact[]
     */
    public $contacts = [];

    /**
     * Special Service Requests (SSRs)
     * Array of SpecialServiceRequest objects
     * 
     * @var SpecialServiceRequest[]
     */
    public $specialServiceRequests = [];

    /**
     * Seat requests
     * Array of SeatRequest objects
     * 
     * @var SeatRequest[]
     */
    public $seats = [];

    /**
     * Other Service Information (OSI)
     * Array of OtherServiceInfo objects
     * 
     * @var OtherServiceInfo[]
     */
    public $otherServicesInformation = [];

    /**
     * Special Keywords (SK elements)
     * Array of SpecialKeyword objects
     * 
     * @var SpecialKeyword[]
     */
    public $specialKeywords = [];

    /**
     * Remarks (RM elements)
     * Array of Remark objects
     * 
     * @var Remark[]
     */
    public $remarks = [];

    /**
     * Time Limits (TK elements)
     * Array of TimeLimit objects
     * 
     * @var TimeLimit[]
     */
    public $timeLimits = [];

    /**
     * Fare Discounts (FD elements)
     * Array of FareDiscount objects
     * 
     * @var FareDiscount[]
     */
    public $fareDiscounts = [];
}
