<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * TaxAndFeeOptions - Tax and Fee Options
 */
class TaxAndFeeOptions extends LoadParamsFromArray
{


    /**
     * Tax exemptions
     * 
     * @var TaxExemption[]
     */
    public $exemptions = [];

    /**
     * Fee options
     * 
     * @var FeeOption[]
     */
    public $fees = [];

    /**
     * Date/time for tax calculation
     * 
     * @var \DateTime|string
     */
    public $dateTime;
}
