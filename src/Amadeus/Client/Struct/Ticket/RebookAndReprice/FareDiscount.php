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

use Amadeus\Client\RequestOptions\Ticket\FareDiscount as FareDiscountOptions;

/**
 * FareDiscount - Individual fare discount element
 */
class FareDiscount
{
    /**
     * Discount codes (max 3)
     * 
     * @var Discount[]
     */
    public $Discount = [];

    /**
     * Description
     * 
     * @var string
     */
    public $Description;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $RequestID;

    /**
     * Tattoo type
     * 
     * @var string
     */
    public $TattooType;

    /**
     * Tattoo value
     * 
     * @var int
     */
    public $TattooValue;

    /**
     * Line number
     * 
     * @var int
     */
    public $LineNumber;

    /**
     * Associations
     * 
     * @var Associations
     */
    public $Associations;

    /**
     * FareDiscount constructor
     * 
     * @param FareDiscountOptions $options
     */
    public function __construct(FareDiscountOptions $options)
    {
        // Discount codes (max 3)
        if (!empty($options->discounts)) {
            foreach ($options->discounts as $discount) {
                if (count($this->Discount) < 3) {
                    $this->Discount[] = new Discount($discount->code);
                }
            }
        }

        if (!empty($options->description)) {
            $this->Description = $options->description;
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