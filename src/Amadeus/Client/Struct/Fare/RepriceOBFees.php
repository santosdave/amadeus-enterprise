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

namespace Amadeus\Client\Struct\Fare;

use Amadeus\Client\RequestOptions\FareRepriceObFeesOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Fare\RepriceOBFees\AllFaresInfoGroup;

/**
 * Fare_RepriceOBFees request structure
 *
 * The message works on the PNR in context and names the TST to reprice
 * in allFaresInfoGroup. Amadeus expects one pricing request per TST.
 *
 * @package Amadeus\Client\Struct\Fare
 * @author Kiti Chigiri
 */
class RepriceOBFees extends BaseWsMessage
{
    /**
     * @var AllFaresInfoGroup[]
     */
    public $allFaresInfoGroup = [];

    /**
     * RepriceOBFees constructor.
     *
     * @param FareRepriceObFeesOptions $params
     */
    public function __construct(FareRepriceObFeesOptions $params)
    {
        if (!empty($params->tstNumber)) {
            $this->allFaresInfoGroup[] = new AllFaresInfoGroup($params->tstNumber);
        }
    }
}
