<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * TaxExemption - Tax Exemption
 */
class TaxExemption extends LoadParamsFromArray
{

    /**
     * Tax code to exempt
     * 
     * @var string
     */
    public $taxCode;

    /**
     * Amount type (percentage or whole amount)
     * 
     * @var string
     */
    public $amountType;

    /**
     * Currency code
     * 
     * @var string
     */
    public $currencyCode;

    /**
     * Amount
     * 
     * @var float
     */
    public $amount;
}