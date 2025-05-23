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

namespace Amadeus\Client\Struct\Offer\ConfirmHotel;

/**
 * CcInfo
 *
 * @package Amadeus\Client\Struct\Offer\ConfirmHotel
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class CcInfo
{
    /**
     * @var string
     */
    public $vendorCode;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $expiryDate;

    /**
     * @var string
     */
    public $securityId;

    /**
     * @var string
     */
    public $ccHolderName;

    /**
     * CcInfo constructor.
     *
     * @param string $vendor
     * @param string $name
     * @param string $number
     * @param string $expiry
     * @param string|null $secId
     */
    public function __construct($vendor, $name, $number, $expiry, $secId = null)
    {
        $this->vendorCode = $vendor;
        $this->ccHolderName = $name;
        $this->cardNumber = $number;
        $this->expiryDate = $expiry;
        $this->securityId = $secId;
    }
}
