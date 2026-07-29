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


/**
 * Contacts - Container for contact information
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */

/**
 * Description - Contact description/value
 */
class Description
{
    public $Value;
    public $OverseasCode;
    public $AreaCode;
    public $AirlineCode;
    public $ThirdParty;
    public $Language;
    public function __construct($value, $overseasCode = null, $areaCode = null, $airlineCode = null, $thirdParty = null, $language = null)
    {
        $this->Value = $value;
        if (!empty($overseasCode)) {
            $this->OverseasCode = $overseasCode;
        }
        if (!empty($areaCode)) {
            $this->AreaCode = $areaCode;
        }
        if (!empty($airlineCode)) {
            $this->AirlineCode = $airlineCode;
        }
        if (isset($thirdParty)) {
            $this->ThirdParty = $thirdParty;
        }
        if (!empty($language)) {
            $this->Language = $language;
        }
    }
}