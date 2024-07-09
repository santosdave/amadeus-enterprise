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

namespace Test\Amadeus\Client\Struct\Service\IntegratedCatalogue;

use Amadeus\Client\Struct\Service\IntegratedCatalogue\ReservationInformation;
use Test\Amadeus\BaseTestCase;

/**
 * ReservationInformationTest
 *
 * @package Test\Amadeus\Client\Struct\Service\IntegratedCatalogue
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class ReservationInformationTest extends BaseTestCase
{
    public function testCanConstruct()
    {
        $obj = new ReservationInformation('ABC123');

        $this->assertCount(1, $obj->reservation);
        $this->assertEquals('ABC123', $obj->reservation[0]->controlNumber);
    }
}
