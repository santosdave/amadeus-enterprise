<?php

/**
 * amadeus-enterprise
 *
 * Copyright 2024 Amadeus Benelux NV
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
 * @package Amadeus\Client\Struct\Travel\OrderReshop
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;



class OrderReshopIndividual
{
    /**
     * Title Name
     * 
     * @var string
     */
    public $TitleName;

    /**
     * Given Name
     * 
     * @var string
     */
    public $GivenName;

    /**
     * Surname
     * 
     * @var string
     */
    public $Surname;

    /**
     * Gender Code
     * 
     * @var string
     */
    public $GenderCode;

    /**
     * OrderReshopIndividual constructor
     *
     * @param \Amadeus\Client\RequestOptions\Travel\OrderReshop\NewPaxIndividual $individual
     */
    public function __construct($individual)
    {
        $this->TitleName = $individual->titleName;
        $this->GivenName = $individual->givenName;
        $this->Surname = $individual->surname;
        $this->GenderCode = $individual->genderCode;
    }
}
