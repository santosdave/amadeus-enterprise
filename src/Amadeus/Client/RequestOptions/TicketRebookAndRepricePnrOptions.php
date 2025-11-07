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

namespace Amadeus\Client\RequestOptions;

/**
 * Ticket_RebookAndRepricePNR Request Options
 *
 * @package Amadeus\Client\RequestOptions
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class TicketRebookAndRepricePnrOptions extends Base
{

    const ACTION_COMMIT = 'COMMIT';
    const ACTION_QT_DISPLAY = 'QTDISPLAY';
    const ACTION_FULL_DISPLAY = 'FULLDISPLAY';
    const ACTION_SANITIZE = 'SANITIZE';

    /**
     * List of actions to perform
     * Allowed values: COMMIT, QTDISPLAY, FULLDISPLAY, SANITIZE
     * 
     * @var string[]
     */
    public $actions = [];

    /**
     * PNR Record Locator / Booking Identifier (6 or 10 characters)
     * 
     * @var string
     */
    public $recordLocator;

    /**
     * If true, force EOT even when warnings are raised
     * 
     * @var bool
     */
    public $ignoreWarnings = true;

    /**
     * Identification string for operation logging purposes
     * 
     * @var string
     */
    public $receivedFrom;

    /**
     * Rebooking options containing segments, passengers, services, etc.
     * 
     * @var Ticket\RebookOptions
     */
    public $rebooking;

    /**
     * Repricing options for fare calculation
     * 
     * @var Ticket\RepricingOptions
     */
    public $repricing;

    /**
     * Echo token for message identification
     * 
     * @var string
     */
    public $echoToken;

    /**
     * Transaction identifier to relate messages within a transaction
     * 
     * @var string
     */
    public $transactionIdentifier;

    /**
     * Sequence number of the transaction
     * 
     * @var int
     */
    public $sequenceNumber;
}
