<?php

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class SelectedOffer extends LoadParamsFromArray
{
    /**
     * Offer Reference ID
     * 
     * @var string
     */
    public $offerRefID;

    /**
     * Owner Code
     * 
     * @var string
     */
    public $ownerCode;

    /**
     * Shopping Response Reference ID
     * 
     * @var string
     */
    public $shoppingResponseRefID;

    /**
     * Selected Offer Items
     * 
     * @var SelectedOfferItem[]
     */
    public $selectedOfferItems = [];
}
