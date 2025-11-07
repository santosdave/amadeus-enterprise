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

use Amadeus\Client\RequestOptions\Ticket\Remark as RemarkOptions;

/**
 * Remark - Individual remark element
 */
class Remark
{
    public $type;
    public $category;
    public $content;
    public $requestID;
    public $associations;
    public $security;

    public function __construct(RemarkOptions $options)
    {
        $this->type = $options->type;
        $this->content = $options->content;

        if (!empty($options->category)) {
            $this->category = $options->category;
        }
        if (!empty($options->requestId)) {
            $this->requestID = $options->requestId;
        }
        if (!empty($options->associations)) {
            $this->associations = new Associations($options->associations);
        }
        if (!empty($options->security)) {
            $this->security = new Security($options->security);
        }
    }
}