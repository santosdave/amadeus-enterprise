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

namespace Test\Amadeus\Client\Struct\Fare;

use Amadeus\Client\RequestOptions\FareRepriceObFeesOptions;
use Amadeus\Client\Struct\Fare\RepriceOBFees;
use Amadeus\Client\Struct\Fare\RepriceOBFees\Reference;
use Amadeus\Client\Struct\Fare\RepriceOBFees\StatusInformation;
use Test\Amadeus\BaseTestCase;

/**
 * RepriceOBFeesTest
 *
 * @package Test\Amadeus\Client\Struct\Fare
 * @author Kiti Chigiri
 */
class RepriceOBFeesTest extends BaseTestCase
{
    public function testCanMakeMessageForTst()
    {
        $opt = new FareRepriceObFeesOptions([
            'tstNumber' => 2
        ]);

        $msg = new RepriceOBFees($opt);

        $this->assertCount(1, $msg->allFaresInfoGroup);
        $group = $msg->allFaresInfoGroup[0];
        $this->assertEquals(
            StatusInformation::INDICATOR_ORIGINAL_ISSUE_FARE,
            $group->statusInfo->statusInformation->indicator
        );
        $this->assertEquals(Reference::TYPE_TST, $group->reference->referenceType);
        $this->assertEquals(2, $group->reference->uniqueReference);
        $this->assertFalse(property_exists($msg, 'pnrLocatorData'));
    }

    public function testCanMakeEmptyMessageWithoutTst()
    {
        $msg = new RepriceOBFees(new FareRepriceObFeesOptions());

        $this->assertEmpty($msg->allFaresInfoGroup);
    }
}
