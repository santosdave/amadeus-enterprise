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

namespace Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\TicketRebookAndRepricePnrOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Ticket\RebookAndReprice\Reservation;
use Amadeus\Client\Struct\Ticket\RebookAndReprice\Commit;
use Amadeus\Client\Struct\Ticket\RebookAndReprice\Rebooking;
use Amadeus\Client\Struct\Ticket\RebookAndReprice\Repricing;

/**
 * Ticket_RebookAndRepricePNR request structure
 *
 * @package Amadeus\Client\Struct\Ticket
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class RebookAndRepricePNR extends BaseWsMessage
{
    /**
     * Reservation information
     * 
     * @var Reservation
     */
    public $reservation;

    /**
     * Commit options
     * 
     * @var Commit
     */
    public $commit;

    /**
     * Rebooking options
     * 
     * @var Rebooking
     */
    public $rebooking;

    /**
     * Repricing options
     * 
     * @var Repricing
     */
    public $repricing;

    /**
     * RebookAndRepricePNR constructor
     *
     * @param TicketRebookAndRepricePnrOptions $options
     */
    public function __construct(TicketRebookAndRepricePnrOptions $options)
    {
        // Load reservation information
        if (!empty($options->recordLocator)) {
            $this->reservation = new Reservation($options->recordLocator);
        }

        // Load commit options
        if (!empty($options->ignoreWarnings) || !empty($options->receivedFrom)) {
            $this->commit = new Commit(
                $options->ignoreWarnings,
                $options->receivedFrom
            );
        }

        // Load rebooking options
        if (!empty($options->rebooking)) {
            $this->rebooking = new Rebooking($options->rebooking);
        }

        // Load repricing options
        if (!empty($options->repricing)) {
            $this->repricing = new Repricing($options->repricing);
        }
    }
}
