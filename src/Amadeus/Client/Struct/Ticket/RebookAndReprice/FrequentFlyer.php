<?php

/**
 * amadeus-ws-client
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

namespace Amadeus\Client\Struct\Ticket\RebookAndReprice;

use Amadeus\Client\RequestOptions\Ticket\FrequentFlyer as FrequentFlyerOptions;

/**
 * FrequentFlyer - Individual frequent flyer card
 */
class FrequentFlyer
{
    /**
     * Frequent flyer card information
     * 
     * @var FrequentFlyerCard
     */
    public $frequentFlyerCard;

    /**
     * Mileage requests
     * 
     * @var MileageRequests
     */
    public $mileageRequests;

    /**
     * Redemption requests
     * 
     * @var RedemptionRequests
     */
    public $redemptionRequests;

    /**
     * Upgrade requests
     * 
     * @var UpgradeRequests
     */
    public $upgradeRequests;

    /**
     * FrequentFlyer constructor
     * 
     * @param FrequentFlyerOptions $options
     */
    public function __construct(FrequentFlyerOptions $options)
    {
        // Main FF card
        $this->frequentFlyerCard = new FrequentFlyerCard(
            $options->airlineCode,
            $options->cardNumber,
            $options->lastName,
            $options->firstName,
            $options->title,
            $options->requestId
        );

        // Mileage requests
        if (!empty($options->mileageRequests)) {
            $this->mileageRequests = new MileageRequests($options->mileageRequests);
        }

        // Redemption requests
        if (!empty($options->redemptionRequests)) {
            $this->redemptionRequests = new RedemptionRequests($options->redemptionRequests);
        }

        // Upgrade requests
        if (!empty($options->upgradeRequests)) {
            $this->upgradeRequests = new UpgradeRequests($options->upgradeRequests);
        }
    }
}