<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2015 Amadeus Benelux NV
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
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestCreator\Converter\Fare;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\FareMasterPricerCalendarOptions;
use Amadeus\Client\Struct;

/**
 * Fare_MasterPricerCalendar Request converter
 *
 * @package Amadeus\Client\RequestCreator\Converter\Fare
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class MasterPricerCalendarConv extends BaseConverter
{
    /**
     * @param FareMasterPricerCalendarOptions $requestOptions
     * @param int|string $version
     * @return Struct\Fare\MasterPricerCalendar
     */
    public function convert($requestOptions, $version)
    {
        return new Struct\Fare\MasterPricerCalendar($requestOptions);
    }
}
