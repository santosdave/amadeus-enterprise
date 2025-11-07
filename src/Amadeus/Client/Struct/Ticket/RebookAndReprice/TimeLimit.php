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

use Amadeus\Client\RequestOptions\Ticket\TimeLimit as TimeLimitOptions;

/**
 * TimeLimit - Individual time limit element
 */
class TimeLimit
{
    public $time;
    public $process;
    public $action;
    public $officeID;
    public $requestID;
    public $tattooType;
    public $tattooValue;
    public $lineNumber;
    public $associations;

    public function __construct(TimeLimitOptions $options)
    {
        $this->process = $options->process;
        $this->action = $options->action;

        // Date/time
        if (!empty($options->dateTime)) {
            if ($options->dateTime instanceof \DateTime) {
                $this->time = $options->dateTime->format('Y-m-d\TH:i:s');
            } else {
                $this->time = $options->dateTime;
            }
        }

        if (!empty($options->officeId)) {
            $this->officeID = $options->officeId;
        }
        if (!empty($options->requestId)) {
            $this->requestID = $options->requestId;
        }
        if (!empty($options->tattooType)) {
            $this->tattooType = $options->tattooType;
        }
        if (!empty($options->tattooValue)) {
            $this->tattooValue = $options->tattooValue;
        }
        if (!empty($options->lineNumber)) {
            $this->lineNumber = $options->lineNumber;
        }
        if (!empty($options->associations)) {
            $this->associations = new Associations($options->associations);
        }
    }
}