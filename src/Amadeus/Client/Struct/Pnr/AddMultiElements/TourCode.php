<?php

/**
 * amadeus-enterprise
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

namespace Amadeus\Client\Struct\Pnr\AddMultiElements;

use Amadeus\Client\RequestOptions\Pnr\Element;

/**
 * TourCode
 *
 * @package Amadeus\Client\Struct\Pnr\AddMultiElements
 * @author Dieter Devlieghere <dieter.devlieghere@gmail.com>
 */
class TourCode
{
    const PASSTYPE_PAX = "PAX";
    const PASSTYPE_INF = "INF";
    const PASSTYPE_INFWSEAT = "767";
    const PASSTYPE_INFNOSEAT = "766";

    /**
     * self::PASSTYPE_*
     *
     * 766 Infant without seat
     * 767 Infant with seat
     * C CBBG - Cabin Baggage
     * E EXST - Extra Seat
     * G Group
     * INF Infant not occupying a seat
     * MTH Month
     * PAX Passenger
     * YRS Year
     *
     * @var string
     */
    public $passengerType;

    /**
     * @var mixed
     */
    public $formatedTour;

    /**
     * @var mixed
     */
    public $netRemit;

    /**
     * @var FreeFormatTour
     */
    public $freeFormatTour;

    /**
     * @param Element\TourCode $options
     */
    public function __construct($options)
    {
        $this->passengerType = $options->passengerType;

        $this->freeFormatTour = new FreeFormatTour(
            FreeFormatTour::INDICATOR_FREE_FORMAT,
            $options->freeText
        );
    }
}
