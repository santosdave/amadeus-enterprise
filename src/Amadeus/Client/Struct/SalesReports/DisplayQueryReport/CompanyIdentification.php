<?php

/**
 * Amadeus
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\Struct\SalesReports\DisplayQueryReport;

/**
 * CompanyIdentification
 *
 * @package Amadeus\Client\Struct\SalesReports\DisplayQueryReport
 * @author Wycliffe Dev <santosdave86@gmail.com>
 */
class CompanyIdentification
{
    /**
     * @var string
     */
    public $marketingCompany;

    /**
     * CompanyIdentification constructor.
     *
     * @param string $company
     */
    public function __construct($company)
    {
        $this->marketingCompany = $company;
    }
}
