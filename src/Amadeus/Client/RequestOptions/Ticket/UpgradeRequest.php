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

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * UpgradeRequest - Upgrade request
 */
class UpgradeRequest extends LoadParamsFromArray
{
    /**
     * Operating companies (airline codes)
     * 
     * @var string[]
     */
    public $operatingCompanies = [];

    /**
     * Status code
     * 
     * @var string
     */
    public $status;

    /**
     * Validated flag
     * 
     * @var bool
     */
    public $validated;

    /**
     * Award code
     * 
     * @var string
     */
    public $awardCode;

    /**
     * Redemption qualifier
     * 
     * @var string
     */
    public $redemptionQualifier;

    /**
     * Promotion code
     * 
     * @var string
     */
    public $promotionCode;

    /**
     * Certificate number
     * 
     * @var string
     */
    public $certificateNumber;

    /**
     * Original booking class
     * 
     * @var string
     */
    public $originalClass;

    /**
     * Upgrade class
     * 
     * @var string
     */
    public $upgradeClass;

    /**
     * Comment
     * 
     * @var string
     */
    public $comment;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $requestId;

    /**
     * Tattoo type
     * 
     * @var string
     */
    public $tattooType;

    /**
     * Tattoo value
     * 
     * @var int
     */
    public $tattooValue;

    /**
     * Line number
     * 
     * @var int
     */
    public $lineNumber;

    /**
     * Associated segments/passengers
     * 
     * @var ElementReference[]
     */
    public $associations = [];
}
