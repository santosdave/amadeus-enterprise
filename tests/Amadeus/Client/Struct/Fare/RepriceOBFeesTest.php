<?php

namespace Test\Amadeus\Client\Struct\Fare;

use Amadeus\Client\RequestOptions\FareRepriceObFeesOptions;
use Amadeus\Client\Struct\Fare\RepriceOBFees;
use Test\Amadeus\BaseTestCase;

/**
 * Fare_RepriceOBFees 11.1 (TPOBRQ_11_1_1A), per the Amadeus user guide (operations 5.1-5.4):
 * the message works on the PNR in context and names one TST per request in allFaresInfoGroup.
 * It has no pnrLocatorData; the previous struct carried one, which SoapClient dropped, so the
 * request went out as an empty body and PDT faulted it.
 */
class RepriceOBFeesTest extends BaseTestCase
{
    public function testNamesTheTstInAllFaresInfoGroup()
    {
        $msg = new RepriceOBFees(new FareRepriceObFeesOptions(['tstNumbers' => [2]]));

        $this->assertCount(1, $msg->allFaresInfoGroup);
        $group = $msg->allFaresInfoGroup[0];
        $this->assertEquals('730', $group->statusInfo->statusInformation->indicator);
        $this->assertEquals('TST', $group->reference->referenceType);
        $this->assertEquals(2, $group->reference->uniqueReference);
        $this->assertFalse(property_exists($msg, 'pnrLocatorData'));
    }

    public function testRefusesARequestNamingNoTst()
    {
        $this->expectException(\InvalidArgumentException::class);
        new RepriceOBFees(new FareRepriceObFeesOptions(['tstNumbers' => []]));
    }

    public function testRefusesARequestNamingSeveralTsts()
    {
        $this->expectException(\InvalidArgumentException::class);
        new RepriceOBFees(new FareRepriceObFeesOptions(['tstNumbers' => [1, 2]]));
    }
}
