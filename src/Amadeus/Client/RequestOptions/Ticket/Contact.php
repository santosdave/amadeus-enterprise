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
 * Contact - Contact Information Element
 */
class Contact extends LoadParamsFromArray
{
    const PHYSICAL_TYPE_PHONE = 'PHONE';
    const PHYSICAL_TYPE_EMAIL = 'EMAIL';
    const PHYSICAL_TYPE_FAX = 'FAX';
    const PHYSICAL_TYPE_MOBILE = 'MOBILE';
    const PHYSICAL_TYPE_ADDRESS = 'ADDRESS';

    const USE_TYPE_AGENCY = 'AGENCY';
    const USE_TYPE_BUSINESS = 'BUSINESS';
    const USE_TYPE_HOME = 'HOME';

    const PURPOSE_STANDARD = 'STANDARD';
    const PURPOSE_NOTIFICATION = 'NOTIFICATION';

    /**
     * Physical type (PHONE, EMAIL, etc.)
     * 
     * @var string
     */
    public $physicalType;

    /**
     * Use type (AGENCY, BUSINESS, HOME)
     * 
     * @var string
     */
    public $useType;

    /**
     * Purpose (STANDARD, NOTIFICATION)
     * 
     * @var string
     */
    public $purpose;

    /**
     * Contact value/description (phone number, email, etc.)
     * 
     * @var string
     */
    public $value;

    /**
     * Overseas code
     * 
     * @var string
     */
    public $overseasCode;

    /**
     * Area code
     * 
     * @var string
     */
    public $areaCode;

    /**
     * Airline code
     * 
     * @var string
     */
    public $airlineCode;

    /**
     * Third party indicator
     * 
     * @var bool
     */
    public $thirdParty;

    /**
     * Language code
     * 
     * @var string
     */
    public $language;

    /**
     * Address information
     * 
     * @var Address
     */
    public $address;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $requestId;

    /**
     * Associated segments/passengers
     * 
     * @var ElementReference[]
     */
    public $associations = [];
}
