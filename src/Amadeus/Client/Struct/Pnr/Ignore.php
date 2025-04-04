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

namespace Amadeus\Client\Struct\Pnr;

use Amadeus\Client\RequestOptions\PnrIgnoreOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Pnr\Ignore\ClearInformation;

/**
 * PNR_Ignore message structure
 *
 * @package Amadeus\Client\Struct\Pnr
 * @author  Michael Mueller <michael.mueller@invia.de>
 */
class Ignore extends BaseWsMessage
{
    /**
     * @var ClearInformation
     */
    public $clearInformation;

    /**
     * Ignore constructor.
     *
     * @param PnrIgnoreOptions $options
     */
    public function __construct(PnrIgnoreOptions $options)
    {
        $this->loadClearInformation($options->actionRequest);
    }

    /**
     * @param $actionRequestCode
     */
    public function loadClearInformation($actionRequestCode)
    {
        $this->clearInformation = new ClearInformation($actionRequestCode);
    }
}
