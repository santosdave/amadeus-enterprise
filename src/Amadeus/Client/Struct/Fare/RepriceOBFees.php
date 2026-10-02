<?php

declare(strict_types=1);

namespace Amadeus\Client\Struct\Fare;

use Amadeus\Client\RequestOptions\FareRepriceObFeesOptions;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Fare_RepriceOBFees 11.1 (TPOBRQ_11_1_1A).
 *
 * D-285: shaped exactly as every operation in the Amadeus user guide
 * (docs/amadeus/UG_WBS_Fare_RepriceOBFees_11.1.pdf, 5.1-5.4) names its TST:
 *
 *     <allFaresInfoGroup>
 *       <statusInfo><statusInformation><indicator>730</indicator></statusInformation></statusInfo>
 *       <reference><referenceType>TST</referenceType><uniqueReference>n</uniqueReference></reference>
 *     </allFaresInfoGroup>
 *
 * 730 = original issue fare information. No record locator: the message works on the PNR in context.
 * No FOP override and no fee options: the card FP is already in the PNR.
 */
class RepriceOBFees extends BaseWsMessage
{
    public const INDICATOR_ORIGINAL_ISSUE_FARE = '730';

    public const REFERENCE_TYPE_TST = 'TST';

    /** @var list<object> */
    public array $allFaresInfoGroup = [];

    public function __construct(FareRepriceObFeesOptions $params)
    {
        $tsts = array_values(array_filter(
            array_map('intval', $params->tstNumbers),
            static fn (int $n): bool => $n > 0
        ));

        // "One pricing request per TST" (user guide §1.1). No TST is the empty body that faulted.
        if (count($tsts) !== 1) {
            throw new \InvalidArgumentException(
                'Fare_RepriceOBFees names exactly one TST per request; got '.count($tsts).'.'
            );
        }

        $this->allFaresInfoGroup[] = (object) [
            'statusInfo' => (object) [
                'statusInformation' => (object) ['indicator' => self::INDICATOR_ORIGINAL_ISSUE_FARE],
            ],
            'reference' => (object) [
                'referenceType' => self::REFERENCE_TYPE_TST,
                'uniqueReference' => $tsts[0],
            ],
        ];
    }
}
