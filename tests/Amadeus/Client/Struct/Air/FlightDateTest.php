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

namespace Test\Amadeus\Client\Struct\Air;

use Amadeus\Client\Struct\Air\FlightDate;
use Test\Amadeus\BaseTestCase;

/**
 * FlightDateTest
 *
 * @package Test\Amadeus\Client\Struct\Air
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class FlightDateTest extends BaseTestCase
{
    public function testCanSetArrivalTimeWithString()
    {
        $obj = new FlightDate(
            \DateTime::createFromFormat('YmdHis', '20040309153000', new \DateTimeZone('UTC')),
            null,
            '1830',
            null
        );

        $this->assertEquals('090304', $obj->departureDate);
        $this->assertEquals('1530', $obj->departureTime);
        $this->assertNull($obj->arrivalDate);
        $this->assertEquals('1830', $obj->arrivalTime);
        $this->assertEquals('', $obj->dateVariation);
    }
}
