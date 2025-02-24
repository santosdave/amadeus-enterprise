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
 * @package Amadeus\Client\Struct\Travel\OrderCreate
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Selected Offer Option for OrderCreate struct
 */
class SelectedOfferOption extends LoadParamsFromArray
{
    /**
     * Unique Offer Reference ID
     * 
     * @var string
     */
    public $offerRefId;

    /**
     * Owner Code of the Offer
     * 
     * @var string
     */
    public $ownerCode;

    /**
     * Shopping Response Reference ID
     * 
     * @var string
     */
    public $shoppingResponseRefId = 'NOT USED';

    /**
     * Selected Offer Items
     * 
     * @var SelectedOfferItemOption[]
     */
    public $selectedOfferItems = [];
}
