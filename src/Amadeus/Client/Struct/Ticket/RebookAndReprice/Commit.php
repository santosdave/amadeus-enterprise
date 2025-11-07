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
 * Commit
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Commit
{
    /**
     * If true, force EOT even when warnings are raised
     * Default: true
     * 
     * @var bool
     */
    public $ignoreWarningsOption;

    /**
     * Identification string for operation logging purposes
     * Max 99 characters
     * 
     * @var string
     */
    public $receivedFrom;

    /**
     * Commit constructor
     *
     * @param bool $ignoreWarnings
     * @param string|null $receivedFrom
     */
    public function __construct($ignoreWarnings = true, $receivedFrom = null)
    {
        $this->ignoreWarningsOption = $ignoreWarnings;

        if (!empty($receivedFrom)) {
            $this->receivedFrom = $receivedFrom;
        }
    }
}
