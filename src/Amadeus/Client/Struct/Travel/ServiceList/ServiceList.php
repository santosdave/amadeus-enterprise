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
 * @package Amadeus\Client\Struct\Travel\ServiceList
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\ServiceList;

use Amadeus\Client\RequestOptions\Travel\TravelServiceListOptions;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Struct for Travel_ServiceList request
 *
 * @package Amadeus\Client\Struct\Travel
 */
class ServiceList extends BaseWsMessage
{
    /**
     * Party information
     * 
     * @var ServiceListParty
     */
    public $Party;

    /**
     * Request details
     * 
     * @var ServiceListRequest
     */
    public $Request;

    /**
     * ServiceList constructor
     *
     * @param TravelServiceListOptions $options
     */
    public function __construct(TravelServiceListOptions $options)
    {
        $this->loadParty($options);
        $this->loadRequest($options);
    }

    /**
     * Load Party information
     *
     * @param TravelServiceListOptions $options
     */
    protected function loadParty(TravelServiceListOptions $options)
    {
        $this->Party = new ServiceListParty(
            $options->agencyId,
            $options->pseudoCityCode
        );
    }

    /**
     * Load Request details
     *
     * @param TravelServiceListOptions $options
     */
    protected function loadRequest(TravelServiceListOptions $options)
    {
        $this->Request = new ServiceListRequest($options);
    }
}