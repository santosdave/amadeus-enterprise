<?php

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\UpdatePax as UpdatePaxOption;

class OrderReshopUpdatePaxItem
{
    /**
     * Passenger ID
     * 
     * @var string
     */
    public $PaxID;

    /**
     * New passenger information
     * 
     * @var OrderReshopNewPaxInfo
     */
    public $New;

    /**
     * OrderReshopUpdatePaxItem constructor
     *
     * @param UpdatePaxOption $updatePax
     */
    public function __construct(UpdatePaxOption $updatePax)
    {
        $this->PaxID = $updatePax->paxID;
        if ($updatePax->newPaxInfo) {
            $this->New = new OrderReshopNewPaxInfo($updatePax->newPaxInfo);
        }
    }
}
