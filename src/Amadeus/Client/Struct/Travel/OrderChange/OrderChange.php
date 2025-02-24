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
 * @package Amadeus\Client\Struct\Travel\OrderChange
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderChange;

use Amadeus\Client\RequestOptions\Travel\TravelOrderChangeOptions;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Struct for Travel_OrderChange request
 *
 * @package Amadeus\Client\Struct\Travel
 */
class OrderChange extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var OrderChangeParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var OrderChangeRequest
     */
    public $Request;

    /**
     * OrderChange constructor
     *
     * @param TravelOrderChangeOptions $options
     */
    public function __construct(TravelOrderChangeOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     * @param TravelOrderChangeOptions $options
     */
    protected function loadParty(TravelOrderChangeOptions $options)
    {
        $this->Party = new OrderChangeParty(
            $this->params->receivedFrom ?? 'AGENCY'
        );
    }

    /**
     * Load Request details
     *
     * @param TravelOrderChangeOptions $options
     */
    protected function loadRequest(TravelOrderChangeOptions $options)
    {
        $this->Request = new OrderChangeRequest($options);
    }
}