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
     * Actions to perform (root level attribute)
     * Allowed values: COMMIT, QTDISPLAY, FULLDISPLAY, SANITIZE
     * 
     * @var string
     */
    public $Actions;

    /**
     * Reservation information
     * 
     * @var Reservation
     */
    public $Reservation;

    /**
     * Commit options
     * 
     * @var Commit
     */
    public $Commit;

    /**
     * Rebooking options
     * 
     * @var Rebooking
     */
    public $Rebooking;

    /**
     * Repricing options
     * 
     * @var Repricing
     */
    public $Repricing;

    /**
     * RebookAndRepricePNR constructor
     *
     * @param TicketRebookAndRepricePnrOptions $options
     */
    public function __construct(TicketRebookAndRepricePnrOptions $options)
    {
        // Left off entirely when no action is wanted. The schema marks Actions required,
        // but the certification dry runs omitted it and Amadeus priced them, so omission
        // is the proven way to ask for a quote — an empty Actions="" is not.
        //
        // Space separated, not comma: the schema types it as xs:list.
        if (!empty($options->actions)) {
            $this->Actions = is_array($options->actions)
                ? implode(' ', $options->actions)
                : $options->actions;
        }

        // Load reservation information
        if (!empty($options->recordLocator)) {
            $this->Reservation = new Reservation($options->recordLocator);
        }

        // Load commit options
        if (!empty($options->ignoreWarnings) || !empty($options->receivedFrom)) {
            $this->Commit = new Commit(
                $options->ignoreWarnings,
                $options->receivedFrom
            );
        }

        // Load rebooking options
        if (!empty($options->rebooking)) {
            $this->Rebooking = new Rebooking($options->rebooking);
        }

        // Load repricing options
        if (!empty($options->repricing)) {
            $this->Repricing = new Repricing($options->repricing);
        }
    }
}