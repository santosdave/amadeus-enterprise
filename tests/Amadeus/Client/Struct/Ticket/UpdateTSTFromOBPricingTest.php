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

namespace Test\Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\TicketUpdateTstFromObPricingOptions;
use Amadeus\Client\Struct\Ticket\ItemReference;
use Amadeus\Client\Struct\Ticket\UpdateTSTFromOBPricing;
use Test\Amadeus\BaseTestCase;

/**
 * UpdateTSTFromOBPricingTest
 *
 * @package Test\Amadeus\Client\Struct\Ticket
 * @author Kiti Chigiri
 */
class UpdateTSTFromOBPricingTest extends BaseTestCase
{
    public function testCanMakeMessageForTstInContext()
    {
        $opt = new TicketUpdateTstFromObPricingOptions([
            'tstNumbers' => [1]
        ]);

        $msg = new UpdateTSTFromOBPricing($opt);

        $this->assertNull($msg->pnrLocatorData);
        $this->assertCount(1, $msg->psaList);
        $this->assertEquals(1, $msg->psaList[0]->itemReference->uniqueReference);
        $this->assertEquals(ItemReference::REFTYPE_TST, $msg->psaList[0]->itemReference->referenceType);
        $this->assertNull($msg->psaList[0]->itemReference->iDDescription);
        $this->assertNull($msg->psaList[0]->paxReference);
    }

    public function testCanMakeMessageWithRecordLocatorAndMultipleTsts()
    {
        $opt = new TicketUpdateTstFromObPricingOptions([
            'pnrRecordLocator' => 'ABC123',
            'tstNumbers' => [1, 2]
        ]);

        $msg = new UpdateTSTFromOBPricing($opt);

        $this->assertEquals('ABC123', $msg->pnrLocatorData->reservationInformation->controlNumber);
        $this->assertCount(2, $msg->psaList);
        $this->assertEquals(1, $msg->psaList[0]->itemReference->uniqueReference);
        $this->assertEquals(2, $msg->psaList[1]->itemReference->uniqueReference);
    }
}
