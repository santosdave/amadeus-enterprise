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

namespace Amadeus\Client\Struct\Pnr\AddMultiElements;

/**
 * Company
 *
 * @package Amadeus\Client\Struct\Pnr\AddMultiElements
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class Company
{
    /**
     * The coded description of supplier of a service or product, i.e. airline designator code.
     *
     * @var string
     */
    public $identification;

    /**
     * The coded description of supplier of a service or product, i.e. airline designator code.
     *
     * @var string
     */
    public $secondIdentification;

    /**
     * Company constructor.
     *
     * @param string $companyCode
     */
    public function __construct($companyCode)
    {
        $this->identification = $companyCode;
    }
}
