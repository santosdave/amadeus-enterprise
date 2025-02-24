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
 * @package Amadeus\Client\Struct\Travel\OrderPay
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\Travel\TravelOrderPayOptions;

/**
 * Struct for Travel_OrderPay request
 *
 * @package Amadeus\Client\Struct\Travel
 */
class OrderPay extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var OrderPayParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var OrderPayRequest
     */
    public $Request;

    /**
     * OrderPay constructor
     *
     * @param TravelOrderPayOptions $options
     */
    public function __construct(TravelOrderPayOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     *
     * @param TravelOrderPayOptions $options
     */
    protected function loadParty(TravelOrderPayOptions $options)
    {
        $this->Party = new OrderPayParty(
            $options->agencyId,
            $options->pseudoCityCode
        );
    }

    /**
     * Load Request details
     *
     * @param TravelOrderPayOptions $options
     */
    protected function loadRequest(TravelOrderPayOptions $options)
    {
        $this->Request = new OrderPayRequest($options);
    }
}
