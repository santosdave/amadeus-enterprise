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
    public $discount = [];

    /**
     * Description
     * 
     * @var string
     */
    public $description;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $requestID;

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
     * Associations
     * 
     * @var Associations
     */
    public $associations;

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
                if (count($this->discount) < 3) {
                    $this->discount[] = new Discount($discount->code);
                }
            }
        }

        if (!empty($options->description)) {
            $this->description = $options->description;
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