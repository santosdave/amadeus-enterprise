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

use Amadeus\Client\RequestOptions\Travel\OrderReshop\ShoppingCriteria;

class OrderReshopShoppingCriteria
{
    /**
     * Cabin Type Criteria
     * 
     * @var \stdClass
     */
    public $CabinTypeCriteria;

    /**
     * Price Class Criteria
     * 
     * @var \stdClass
     */
    public $PriceClassCriteria;

    /**
     * Program Criteria
     * 
     * @var \stdClass
     */
    public $ProgramCriteria;

    /**
     * Fare Preferences
     * 
     * @var \stdClass
     */
    public $FarePreferences;

    /**
     * OrderReshopShoppingCriteria constructor
     *
     * @param ShoppingCriteria $shoppingCriteria
     */
    public function __construct(ShoppingCriteria $shoppingCriteria)
    {
        if ($shoppingCriteria->cabinTypeCode) {
            $this->CabinTypeCriteria = new \stdClass();
            $this->CabinTypeCriteria->CabinTypeCode = $shoppingCriteria->cabinTypeCode;
        }

        if ($shoppingCriteria->priceClassID || $shoppingCriteria->priceClassCode) {
            $this->PriceClassCriteria = new \stdClass();
            $this->PriceClassCriteria->PriceClassID = $shoppingCriteria->priceClassID;
            $this->PriceClassCriteria->Code = $shoppingCriteria->priceClassCode;
        }

        if ($shoppingCriteria->programAccountID || $shoppingCriteria->programOwnerAirlineCode) {
            $this->ProgramCriteria = new \stdClass();
            $this->ProgramCriteria->ProgramAccount = new \stdClass();
            $this->ProgramCriteria->ProgramAccount->AccountID = $shoppingCriteria->programAccountID;

            if ($shoppingCriteria->programOwnerAirlineCode) {
                $this->ProgramCriteria->ProgramOwner = new \stdClass();
                $this->ProgramCriteria->ProgramOwner->Carrier = new \stdClass();
                $this->ProgramCriteria->ProgramOwner->Carrier->AirlineDesigCode = $shoppingCriteria->programOwnerAirlineCode;
            }
        }

        if (!empty($shoppingCriteria->fareTypes)) {
            $this->FarePreferences = new \stdClass();
            $this->FarePreferences->Types = new \stdClass();
            $this->FarePreferences->Types->Type = $shoppingCriteria->fareTypes;
        }
    }
}
