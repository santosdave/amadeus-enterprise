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

namespace Amadeus\Client\RequestOptions\Fop;

use Amadeus\Client\LoadParamsFromArray;

/**
 * InstallmentsInfo
 *
 * @package Amadeus\Client\RequestOptions\Fop
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class InstallmentsInfo extends LoadParamsFromArray
{
    const FORMAT_YYMMDD = 101;
    const FORMAT_YYDDD = 105;
    const FORMAT_MMDD = 106;

    const FREQUENCY_MONTHLY = "MTH";
    const FREQUENCY_MONTHLY_SHORT = "M";

    /**
     * @var int
     */
    public $nrOfInstallments;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var \DateTime
     */
    public $startDate;

    /**
     * @var string|int
     */
    public $format;
}
