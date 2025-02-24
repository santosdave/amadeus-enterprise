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
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Struct for Travel_OrderReshop request
 *
 * @package Amadeus\Client\Struct\Travel
 */
class OrderReshop extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var OrderReshopParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var OrderReshopRequest
     */
    public $Request;

    /**
     * OrderReshop constructor
     *
     * @param TravelOrderReshopOptions $options
     */
    public function __construct(TravelOrderReshopOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     *
     * @param TravelOrderReshopOptions $options
     */
    protected function loadParty(TravelOrderReshopOptions $options)
    {
        $this->Party = new OrderReshopParty(
            $options->agencyId,
            $options->pseudoCityCode
        );
    }

    /**
     * Load Request details
     *
     * @param TravelOrderReshopOptions $options
     */
    protected function loadRequest(TravelOrderReshopOptions $options)
    {
        $this->Request = new OrderReshopRequest($options);
    }
}