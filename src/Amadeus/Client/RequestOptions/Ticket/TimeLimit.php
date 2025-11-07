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
 * TimeLimit - Time Limit Element (TK)
 */
class TimeLimit extends LoadParamsFromArray
{

    const PROCESS_TK = 'TK'; // Ticketing time limit
    const PROCESS_OP = 'OP'; // Option time limit (ETTL)

    const ACTION_CANCEL = 'XL';
    const ACTION_QUEUE = 'TL';
    const ACTION_OK = 'OK';
    const ACTION_C = 'C'; // Cancel (OP)
    const ACTION_W = 'W'; // Warn (OP)

    /**
     * Time limit date/time
     * 
     * @var \DateTime|string
     */
    public $dateTime;

    /**
     * Process type (TK, OP)
     * 
     * @var string
     */
    public $process;

    /**
     * Action code (XL, TL, OK, C, W)
     * 
     * @var string
     */
    public $action;

    /**
     * Office ID responsible for processing
     * 
     * @var string
     */
    public $officeId;

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
