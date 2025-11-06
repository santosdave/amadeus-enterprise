<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2024 Amadeus Benelux NV
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
 * @package Amadeus\Client\Struct\Travel\OrderReshop
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\TravelOrderReshopOptions;


class OrderReshopRequest
{
    /**
     * Order Item Reference ID
     * 
     * @var string
     */
    public $OrderItemRefID;

    /**
     * Booking Reference
     * 
     * @var OrderReshopBookingRef
     */
    public $BookingRef;

    /**
     * Fare Waivers
     * 
     * @var OrderReshopFareWaiver[]
     */
    public $FareWaiver = [];

    /**
     * Reshop Parameters
     * 
     * @var OrderReshopParameters
     */
    public $ReshopParameters;

    /**
     * Update Order details
     * 
     * @var OrderReshopUpdateOrder
     */
    public $UpdateOrder;

    /**
     * OrderReshopRequest constructor
     *
     * @param TravelOrderReshopOptions $options
     */
    public function __construct(TravelOrderReshopOptions $options)
    {
        $this->OrderItemRefID = $options->orderItemRefID;

        $this->BookingRef = new OrderReshopBookingRef(
            $options->bookingRef ? $options->bookingRef->bookingID : '',
            $options->bookingRef ? $options->bookingRef->airlineDesigCode : null
        );

        // Handle Fare Waivers
        foreach ($options->fareWaivers as $fareWaiver) {
            $this->FareWaiver[] = new OrderReshopFareWaiver($fareWaiver);
        }

        $this->ReshopParameters = new OrderReshopParameters(
            $options->reshopParameters ? $options->reshopParameters->autoExchRequestInd : false,
            $options->reshopParameters ? $options->reshopParameters->currCode : null
        );

        $this->UpdateOrder = new OrderReshopUpdateOrder($options);
    }
}
