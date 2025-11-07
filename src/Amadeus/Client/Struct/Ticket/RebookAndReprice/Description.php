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
    public $value;
    public $overseasCode;
    public $areaCode;
    public $airlineCode;
    public $thirdParty;
    public $language;

    public function __construct($value, $overseasCode = null, $areaCode = null, $airlineCode = null, $thirdParty = null, $language = null)
    {
        $this->value = $value;
        if (!empty($overseasCode)) {
            $this->overseasCode = $overseasCode;
        }
        if (!empty($areaCode)) {
            $this->areaCode = $areaCode;
        }
        if (!empty($airlineCode)) {
            $this->airlineCode = $airlineCode;
        }
        if (isset($thirdParty)) {
            $this->thirdParty = $thirdParty;
        }
        if (!empty($language)) {
            $this->language = $language;
        }
    }
}
