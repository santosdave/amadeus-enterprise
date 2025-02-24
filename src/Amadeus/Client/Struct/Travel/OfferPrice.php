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
 * @package Amadeus\Client\Struct\Travel
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel;


use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\Passenger as PaxOption;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\SelectedOffer as SelectedOfferOption;
use Amadeus\Client\RequestOptions\Travel\TravelOfferPriceOptions;

/**
 * Struct for Travel_OfferPrice request
 *
 * @package Amadeus\Client\Struct\Travel
 * @author Your Name <your.email@example.com>
 */
class OfferPrice extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var OfferPriceParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var OfferPriceRequest
     */
    public $Request;

    /**
     * OfferPrice constructor
     *
     * @param TravelOfferPriceOptions $options
     */
    public function __construct(TravelOfferPriceOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     *
     * @param TravelOfferPriceOptions $options
     */
    protected function loadParty(TravelOfferPriceOptions $options)
    {
        $this->Party = new OfferPriceParty(
            $options->agencyId ?? 'unused',
            $options->pseudoCityCode ?? 'unused'
        );
    }

    /**
     * Load Request details
     *
     * @param TravelOfferPriceOptions $options
     */
    protected function loadRequest(TravelOfferPriceOptions $options)
    {
        $this->Request = new OfferPriceRequest($options);
    }
}
