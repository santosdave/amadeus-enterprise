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
 * @package Amadeus\Client\RequestOptions\Travel\OrderReshop
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class NewPaxInfo extends LoadParamsFromArray
{
    /**
     * Passenger ID
     * 
     * @var string
     */
    public $paxId;

    /**
     * Passenger Type Code
     * 
     * @var string
     */
    public $ptc = 'ADT';

    /**
     * Individual Details
     * 
     * @var NewPaxIndividual
     */
    public $individual;

    /**
     * Contact Information
     * 
     * @var NewPaxContactInfo
     */
    public $contactInfo;

    /**
     * Identity Document
     * 
     * @var NewPaxIdentityDoc
     */
    public $identityDoc;
}
