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

use Amadeus\Client\RequestOptions\Ticket\ElementReference;

/**
 * Confirmation - List of PNR elements to confirm (change status to HK)
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Confirmation
{
    /**
     * Array of element references to confirm
     * 
     * @var Ref[]
     */
    public $ref = [];

    /**
     * Confirmation constructor
     *
     * @param ElementReference[] $references
     */
    public function __construct(array $references)
    {
        foreach ($references as $reference) {
            $this->ref[] = new Ref(
                $reference->tattooType,
                $reference->tattooValue,
                $reference->requestId,
                $reference->lineNumber
            );
        }
    }
}
