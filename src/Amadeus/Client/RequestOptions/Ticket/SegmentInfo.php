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
 * SegmentInfo - Flight segment information
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class SegmentInfo extends LoadParamsFromArray
{
    /**
     * Operating airline code (2-3 characters)
     * 
     * @var string
     */
    public $operatingAirline;

    /**
     * Operating airline name
     * 
     * @var string
     */
    public $operatingAirlineName;

    /**
     * Operating flight number
     * 
     * @var string
     */
    public $operatingFlightNumber;

    /**
     * Flight number suffix
     * 
     * @var string
     */
    public $flightNumberSuffix;

    /**
     * Marketing airline code
     * 
     * @var string
     */
    public $marketingAirline;

    /**
     * Marketing flight number
     * 
     * @var string
     */
    public $marketingFlightNumber;

    /**
     * Booking class (1-2 characters)
     * 
     * @var string
     */
    public $bookingClass;

    /**
     * Segment status (e.g., NN, HK, etc.)
     * 
     * @var string
     */
    public $segmentStatus;

    /**
     * Is this an open segment?
     * 
     * @var bool
     */
    public $isOpenSegment = false;

    /**
     * Departure airport code (3 characters)
     * 
     * @var string
     */
    public $departureLocation;

    /**
     * Departure date/time (DateTime object or string)
     * 
     * @var \DateTime|string
     */
    public $departureDateTime;

    /**
     * Departure terminal
     * 
     * @var string
     */
    public $departureTerminal;

    /**
     * Arrival airport code (3 characters)
     * 
     * @var string
     */
    public $arrivalLocation;

    /**
     * Arrival date/time (DateTime object or string)
     * 
     * @var \DateTime|string
     */
    public $arrivalDateTime;

    /**
     * Arrival terminal
     * 
     * @var string
     */
    public $arrivalTerminal;

    /**
     * Request ID for mapping purposes
     * 
     * @var string
     */
    public $requestId;

    /**
     * Tattoo type
     * 
     * @var string
     */
    public $tattooType;

    /**
     * Tattoo value
     * 
     * @var int
     */
    public $tattooValue;

    /**
     * Line number
     * 
     * @var int
     */
    public $lineNumber;
}
