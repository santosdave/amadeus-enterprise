<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2024 Amadeus Benelux NV
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
 * @package Amadeus\Client\RequestOptions\Travel\OrderChange
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderChange;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Invoice details for Travel_OrderChange
 */
class Invoice extends LoadParamsFromArray
{
    /**
     * Constants for Delivery Channels
     */
    const CHANNEL_EMAIL = 'EMAIL';
    const CHANNEL_PRINT = 'PRINT';

    /**
     * Invoice formatting type
     * 
     * @var string
     */
    public $type = 'basic';

    /**
     * Whether invoice is joint
     * 
     * @var bool
     */
    public $isJoint = false;

    /**
     * Time format (12 or 24 hour)
     * 
     * @var string
     */
    public $timeFormat = '12';

    /**
     * Invoice delivery channel
     * 
     * @var string
     */
    public $deliveryChannel = 'EMAIL';

    /**
     * Invoice email contact
     * 
     * @var string
     */
    public $emailContact;
}
