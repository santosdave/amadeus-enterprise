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
 * @package Amadeus\Client\Struct\Travel\OrderCreate
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;


use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\Travel\TravelOrderCreateOptions;
use Amadeus\Client\RequestOptions\Travel\OrderCreate\Passenger as PaxOption;
use Amadeus\Client\RequestOptions\Travel\OrderCreate\SelectedOffer as SelectedOfferOption;

/**
 * Struct for Travel_OrderCreate request
 *
 * @package Amadeus\Client\Struct\Travel
 */
class OrderCreate extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var OrderCreateParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var OrderCreateRequest
     */
    public $Request;

    /**
     * OrderCreate constructor
     *
     * @param TravelOrderCreateOptions $options
     */
    public function __construct(TravelOrderCreateOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     *
     * @param TravelOrderCreateOptions $options
     */
    protected function loadParty(TravelOrderCreateOptions $options)
    {
        $this->Party = new OrderCreateParty(
            $options->agencyId,
            $options->pseudoCityCode
        );
    }

    /**
     * Load Request details
     *
     * @param TravelOrderCreateOptions $options
     */
    protected function loadRequest(TravelOrderCreateOptions $options)
    {
        $this->Request = new OrderCreateRequest($options);
    }
}
