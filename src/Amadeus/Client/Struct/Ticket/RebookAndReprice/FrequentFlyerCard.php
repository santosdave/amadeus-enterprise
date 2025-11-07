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

/**
 * FrequentFlyerCard - FF Card details
 */
class FrequentFlyerCard
{
    /**
     * Airline company code (2 chars)
     * 
     * @var string
     */
    public $companyCode;

    /**
     * Card number (up to 25 chars)
     * 
     * @var string
     */
    public $cardNumber;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $requestID;

    /**
     * Card owner information
     * 
     * @var Owner
     */
    public $owner;

    /**
     * FrequentFlyerCard constructor
     */
    public function __construct($companyCode, $cardNumber, $lastName = null, $firstName = null, $title = null, $requestId = null)
    {
        $this->companyCode = $companyCode;
        $this->cardNumber = $cardNumber;

        if (!empty($requestId)) {
            $this->requestID = $requestId;
        }

        if (!empty($lastName) || !empty($firstName) || !empty($title)) {
            $this->owner = new Owner($lastName, $firstName, $title);
        }
    }
}