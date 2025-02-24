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
 * @package Amadeus\Client\Struct\Travel\OrderCancel
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderCancel;

use Amadeus\Client\RequestOptions\Travel\TravelOrderCancelOptions;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Struct for Travel_OrderCancel request
 *
 * @package Amadeus\Client\Struct\Travel
 */
class OrderCancel extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var OrderCancelParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var OrderCancelRequest
     */
    public $Request;

    /**
     * OrderCancel constructor
     *
     * @param TravelOrderCancelOptions $options
     */
    public function __construct(TravelOrderCancelOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     *
     * @param TravelOrderCancelOptions $options
     */
    protected function loadParty(TravelOrderCancelOptions $options)
    {
        $this->Party = new OrderCancelParty(
            $options->agencyId,
            $options->pseudoCityCode
        );
    }

    /**
     * Load Request details
     *
     * @param TravelOrderCancelOptions $options
     */
    protected function loadRequest(TravelOrderCancelOptions $options)
    {
        $this->Request = new OrderCancelRequest($options);
    }
}