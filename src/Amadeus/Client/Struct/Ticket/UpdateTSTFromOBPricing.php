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

namespace Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\TicketUpdateTstFromObPricingOptions;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Ticket_UpdateTSTFromOBPricing request structure
 *
 * Applies the OB fee repricing (Fare_RepriceOBFees) to existing TST(s).
 *
 * @package Amadeus\Client\Struct\Ticket
 * @author Kiti Chigiri
 */
class UpdateTSTFromOBPricing extends BaseWsMessage
{
    /**
     * @var PnrLocatorData
     */
    public $pnrLocatorData;

    /**
     * @var PsaList[]
     */
    public $psaList = [];

    /**
     * UpdateTSTFromOBPricing constructor.
     *
     * @param TicketUpdateTstFromObPricingOptions $params
     */
    public function __construct(TicketUpdateTstFromObPricingOptions $params)
    {
        if (!empty($params->pnrRecordLocator)) {
            $this->pnrLocatorData = new PnrLocatorData($params->pnrRecordLocator);
        }

        foreach ($params->tstNumbers as $tstNumber) {
            $this->psaList[] = new PsaList($tstNumber, ItemReference::REFTYPE_TST);
        }
    }
}
