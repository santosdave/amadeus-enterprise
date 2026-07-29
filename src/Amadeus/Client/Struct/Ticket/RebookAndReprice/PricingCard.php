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

class PricingCard
{
    public $Number;
    public $VendorCode;
    public $ExpiryDate;
    public $SubType;

    public function __construct($card)
    {
        if (!empty($card->number)) {
            $this->Number = $card->number;
        }
        if (!empty($card->vendorCode)) {
            $this->VendorCode = $card->vendorCode;
        }
        if (!empty($card->expiryDate)) {
            $this->ExpiryDate = $card->expiryDate;
        }
        if (!empty($card->subType)) {
            $this->SubType = $card->subType;
        }
    }
}