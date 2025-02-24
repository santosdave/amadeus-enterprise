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
 * @package Amadeus\Client\RequestCreator\Converter\Travel
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestCreator\Converter\Travel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Travel\TravelServiceListOptions;
use Amadeus\Client\Struct\Travel\ServiceList\ServiceList;

/**
 * Converter for Travel_ServiceList request
 *
 * @package Amadeus\Client\RequestCreator\Converter\Travel
 */
class ServiceListConv extends BaseConverter
{
    /**
     * Convert Travel_ServiceList request options to structured message
     *
     * @param TravelServiceListOptions $requestOptions
     * @param string|int $version
     * @return ServiceList
     */
    public function convert($requestOptions, $version)
    {
        return new ServiceList($requestOptions);
    }
}