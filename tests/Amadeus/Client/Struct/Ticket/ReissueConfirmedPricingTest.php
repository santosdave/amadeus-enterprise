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

use Amadeus\Client\RequestOptions\TicketReissueConfirmedPricingOptions;
use Amadeus\Client\Struct\Ticket\ReissueConfirmedPricing;
use Test\Amadeus\BaseTestCase;

/**
 * ReissueConfirmedPricingTest
 *
 * @package Test\Amadeus\Client\Struct\Ticket
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class ReissueConfirmedPricingTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new TicketReissueConfirmedPricingOptions([
            'eTickets' => [
                '0572146640300'
            ]
        ]);

        $msg = new ReissueConfirmedPricing($opt);

        $this->assertCount(1, $msg->ticketInfo);

        $this->assertEquals('0572146640300', $msg->ticketInfo[0]->paperticketDetailsFirstCoupon->documentDetails->number);
        $this->assertEquals(ReissueConfirmedPricing\DocumentDetails::TYPE_ELECTRONIC_TICKET, $msg->ticketInfo[0]->paperticketDetailsFirstCoupon->documentDetails->type);
        $this->assertNull($msg->ticketInfo[0]->couponInfoFirst);
        $this->assertNull($msg->ticketInfo[0]->paperInformation);
    }
}
