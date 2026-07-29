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

use Amadeus\Client\RequestOptions\Ticket\SeatRequest as SeatOptions;

/**
 * Seat - Individual seat request
 */
class Seat
{
    public $Type;
    public $SeatNbr = [];
    public $Characteristics = [];
    public $AreaOfPreference = [];
    public $NonSmoking;
    public $Smoking;
    public $SeatLocation;
    public $Quantity;
    public $BoardingPassStatus;
    public $Description;
    public $RequestID;
    public $Associations;

    public function __construct(SeatOptions $options)
    {
        if (!empty($options->type)) {
            $this->Type = $options->type;
        }

        // Seat numbers (max 9)
        if (!empty($options->seatNumbers)) {
            foreach ($options->seatNumbers as $seatNumber) {
                $this->SeatNbr[] = $seatNumber;
            }
        }

        // Characteristics
        if (!empty($options->characteristics)) {
            $this->Characteristics = $options->characteristics;
        }

        // Areas of preference
        if (!empty($options->areasOfPreference)) {
            $this->AreaOfPreference = $options->areasOfPreference;
        }

        if (isset($options->nonSmoking)) {
            $this->NonSmoking = $options->nonSmoking;
        }
        if (isset($options->smoking)) {
            $this->Smoking = $options->smoking;
        }
        if (!empty($options->seatLocation)) {
            $this->SeatLocation = $options->seatLocation;
        }
        if (!empty($options->quantity)) {
            $this->Quantity = $options->quantity;
        }
        if (!empty($options->boardingPassStatus)) {
            $this->BoardingPassStatus = $options->boardingPassStatus;
        }
        if (!empty($options->description)) {
            $this->Description = $options->description;
        }
        if (!empty($options->requestId)) {
            $this->RequestID = $options->requestId;
        }
        if (!empty($options->associations)) {
            $this->Associations = new Associations($options->associations);
        }
    }
}