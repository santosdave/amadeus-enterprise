<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * ReplicationBlock - Element Replication Rules
 * 
 * Defines which PNR element types should be carried over (replicated)
 * from old segments to new segments
 */
class ReplicationBlock extends LoadParamsFromArray
{

    const ELEMENT_TYPE_SSR = 'SSR';
    const ELEMENT_TYPE_SK = 'SK';

    /**
     * Element types to replicate (SSR, SK, etc.)
     * 
     * @var string[]
     */
    public $elementTypes = [];

    /**
     * Source segments (from which to replicate)
     * 
     * @var ElementReference[]
     */
    public $fromReferences = [];

    /**
     * Destination segments (to which to replicate)
     * 
     * @var ElementReference[]
     */
    public $toReferences = [];
}
