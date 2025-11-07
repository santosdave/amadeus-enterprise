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

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * OfficeIdSecurity - Office ID Security for Remarks
 */
class OfficeIdSecurity extends LoadParamsFromArray
{
    const ACCESS_MODE_BOTH = 'B';
    const ACCESS_MODE_READ = 'R';
    const ACCESS_MODE_EXCLUSIVE = 'X';

    /**
     * Office ID (up to 10 characters)
     * 
     * @var string
     */
    public $officeId;

    /**
     * Access mode (B, R, X)
     * 
     * @var string
     */
    public $accessMode;

    /**
     * Access extension flag
     * 
     * @var bool
     */
    public $accessExtension;
}
