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
    public $Time;
    public $Process;
    public $Action;
    public $OfficeID;
    public $RequestID;
    public $TattooType;
    public $TattooValue;
    public $LineNumber;
    public $Associations;

    public function __construct(TimeLimitOptions $options)
    {
        $this->Process = $options->process;
        $this->Action = $options->action;

        // Date/time
        if (!empty($options->dateTime)) {
            if ($options->dateTime instanceof \DateTime) {
                $this->Time = $options->dateTime->format('Y-m-d\TH:i:s');
            } else {
                $this->Time = $options->dateTime;
            }
        }

        if (!empty($options->officeId)) {
            $this->OfficeID = $options->officeId;
        }
        if (!empty($options->requestId)) {
            $this->RequestID = $options->requestId;
        }
        if (!empty($options->tattooType)) {
            $this->TattooType = $options->tattooType;
        }
        if (!empty($options->tattooValue)) {
            $this->TattooValue = $options->tattooValue;
        }
        if (!empty($options->lineNumber)) {
            $this->LineNumber = $options->lineNumber;
        }
        if (!empty($options->associations)) {
            $this->Associations = new Associations($options->associations);
        }
    }
}