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
use Amadeus\Client\RequestOptions\Travel\TravelOrderChangeOptions;
use Amadeus\Client\Struct\Travel\OrderChange\OrderChange;

/**
 * Converter for Travel_OrderChange request
 *
 * @package Amadeus\Client\RequestCreator\Converter\Travel
 */
class OrderChangeConv extends BaseConverter
{
    /**
     * Convert Travel_OrderChange request options to structured message
     *
     * @param TravelOrderChangeOptions $requestOptions
     * @param string|int $version
     * @return OrderChange
     */
    public function convert($requestOptions, $version)
    {
        return new OrderChange($requestOptions);
    }
}
