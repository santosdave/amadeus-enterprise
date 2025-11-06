<?php

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class ShoppingCriteria extends LoadParamsFromArray
{
    /**
     * Cabin Type Code
     * 
     * @var string
     */
    public $cabinTypeCode;

    /**
     * Price Class ID
     * 
     * @var string
     */
    public $priceClassID;

    /**
     * Price Class Code
     * 
     * @var string
     */
    public $priceClassCode;

    /**
     * Program Account ID
     * 
     * @var string
     */
    public $programAccountID;

    /**
     * Program Owner Airline Code
     * 
     * @var string
     */
    public $programOwnerAirlineCode;

    /**
     * Fare Preference Types
     * 
     * @var string[]
     */
    public $fareTypes = [];
}
