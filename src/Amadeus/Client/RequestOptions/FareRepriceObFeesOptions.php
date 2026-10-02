<?php

declare(strict_types=1);

namespace Amadeus\Client\RequestOptions;

/**
 * Fare_RepriceOBFees 11.1 request options.
 *
 * D-285: the message works on the PNR in context and takes no record locator; it names the TST to
 * reprice in allFaresInfoGroup, one pricing request per TST (UG_WBS_Fare_RepriceOBFees_11.1 §1.1).
 * The former pnrRecordLocator / travellerRefs had no counterpart in TPOBRQ_11_1_1A and were dropped
 * on the wire, which is how the first live call went out as an empty body.
 */
class FareRepriceObFeesOptions extends Base
{
    /**
     * The TST to reprice. Exactly one per request.
     *
     * @var list<int>
     */
    public array $tstNumbers = [];
}
