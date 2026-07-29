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

class PricingBooking
{
    public $Cabin = [];
    public $Class = [];
    public $Validation;
    public $ResidualValue = [];
    public $CheckinCoupon;
    public $Operation;

    public function __construct($booking)
    {
        if (!empty($booking->cabins)) {
            $this->Cabin = $booking->cabins;
        }
        if (!empty($booking->classes)) {
            $this->Class = $booking->classes;
        }
        if (!empty($booking->validation)) {
            $this->Validation = $booking->validation;
        }

        if (!empty($booking->residualValue)) {
            $this->ResidualValue = $booking->residualValue;
        }
        if (isset($booking->checkinCoupon)) {
            $this->CheckinCoupon = $booking->checkinCoupon;
        }
        if (!empty($booking->operation)) {
            $this->Operation = $booking->operation;
        }
    }
}