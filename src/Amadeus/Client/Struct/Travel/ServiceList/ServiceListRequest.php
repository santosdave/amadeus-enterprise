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

/**
 * Request details for Travel_ServiceList
 */
class ServiceListRequest
{
    /**
     * Core Request details
     * 
     * @var ServiceListCoreRequest
     */
    public $CoreRequest;

    /**
     * Passengers
     * 
     * @var ServiceListPaxs
     */
    public $Paxs;

    /**
     * Response Parameters
     * 
     * @var ServiceListResponseParameters
     */
    public $ResponseParameters;

    /**
     * Shopping Response details
     * 
     * @var ServiceListShoppingResponse
     */
    public $ShoppingResponse;

    /**
     * ServiceListRequest constructor
     *
     * @param TravelServiceListOptions $options
     */
    public function __construct(TravelServiceListOptions $options)
    {
        // Load Core Request (Offer or Order)
        if (!empty($options->offerId)) {
            $this->CoreRequest = new ServiceListCoreRequest($options->offerId, $options->offerOwnerCode, $options->offerItems);
            
            
        } elseif (!empty($options->orderId)) {
            $this->CoreRequest = new ServiceListCoreRequest(null, $options->orderOwnerCode, [], $options->orderId);
        }
        // Add Shopping Response if provided
        if (!empty($options->shoppingResponseId)) {
            $this->ShoppingResponse = new ServiceListShoppingResponse($options->shoppingResponseId);
        }

        // Load Passengers if any
        if (!empty($options->passengers)) {
            $this->Paxs = new ServiceListPaxs($options->passengers);
        }

        // Load Response Parameters
        if (!empty($options->overrideCurrencyCode)) {
            $this->ResponseParameters = new ServiceListResponseParameters($options->overrideCurrencyCode);
        }
    }
}