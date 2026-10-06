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

use Amadeus\Client\RequestOptions\Ticket\SegmentInfo;

/**
 * Segment - Flight segment information
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Segment
{
    /**
     * Booking class (1-2 characters)
     * 
     * @var string
     */
    public $bkgClass;

    /**
     * Segment status
     * 
     * @var string
     */
    public $segmentStatus;

    /**
     * Is open segment
     * 
     * @var bool
     */
    public $isOpenSegment;

    /**
     * Request identifier
     * 
     * @var string
     */
    public $RequestID;

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
     * Operating service provider
     * 
     * @var ServiceProvider
     */
    public $serviceProvider;

    /**
     * Flight identifier
     * 
     * @var Identifier
     */
    public $identifier;

    /**
     * Marketing information
     * 
     * @var PartnerInfo
     */
    public $partnerInfo;

    /**
     * Departure information
     * 
     * @var LocationInfo
     */
    public $start;

    /**
     * Arrival information
     * 
     * @var LocationInfo
     */
    public $end;

    /**
     * Segment constructor
     *
     * @param SegmentInfo $segmentInfo
     */
    public function __construct(SegmentInfo $segmentInfo)
    {
        // Basic segment attributes
        if (!empty($segmentInfo->bookingClass)) {
            $this->bkgClass = $segmentInfo->bookingClass;
        }

        if (!empty($segmentInfo->segmentStatus)) {
            $this->segmentStatus = $segmentInfo->segmentStatus;
        }

        if (isset($segmentInfo->isOpenSegment)) {
            $this->isOpenSegment = $segmentInfo->isOpenSegment;
        }

        // Reference attributes
        if (!empty($segmentInfo->requestId)) {
            $this->RequestID = $segmentInfo->requestId;
        }

        if (!empty($segmentInfo->tattooType)) {
            $this->tattooType = $segmentInfo->tattooType;
        }

        if (!empty($segmentInfo->tattooValue)) {
            $this->tattooValue = $segmentInfo->tattooValue;
        }

        if (!empty($segmentInfo->lineNumber)) {
            $this->lineNumber = $segmentInfo->lineNumber;
        }

        // Operating service provider
        if (!empty($segmentInfo->operatingAirline)) {
            $this->serviceProvider = new ServiceProvider(
                $segmentInfo->operatingAirline,
                $segmentInfo->operatingAirlineName
            );
        }

        // Flight identifier
        if (!empty($segmentInfo->operatingFlightNumber)) {
            // $this->identifier = new Identifier(
            //     $segmentInfo->operatingFlightNumber,
            //     $segmentInfo->flightNumberSuffix
            // );
            $this->identifier = $segmentInfo->operatingFlightNumber;
        }

        // Marketing information (partner info)
        if (!empty($segmentInfo->marketingAirline) || !empty($segmentInfo->marketingFlightNumber)) {
            $this->partnerInfo = new PartnerInfo(
                $segmentInfo->marketingAirline,
                $segmentInfo->marketingFlightNumber,
                $segmentInfo->flightNumberSuffix
            );
        }

        // Departure information
        if (!empty($segmentInfo->departureLocation)) {
            $this->start = new LocationInfo(
                $segmentInfo->departureLocation,
                $segmentInfo->departureDateTime,
                $segmentInfo->departureTerminal
            );
        }

        // Arrival information
        if (!empty($segmentInfo->arrivalLocation)) {
            $this->end = new LocationInfo(
                $segmentInfo->arrivalLocation,
                $segmentInfo->arrivalDateTime,
                $segmentInfo->arrivalTerminal
            );
        }
    }

    /** The namespace Segment itself belongs to. */
    const NAMESPACE_MESSAGE = 'http://xml.amadeus.com/2010/06/Ticket_RebookAndRepricePNR_v1';

    /** The namespace AirSegmentType's children belong to. */
    const NAMESPACE_RETAILING = 'http://xml.amadeus.com/2010/06/Retailing_Types_v2';

    /**
     * The whole element as a literal fragment, so RequestID survives encoding.
     *
     * RequestID comes from <xs:attributeGroup ref="CommonIdentifierAttributes"/>, written
     * unprefixed in a chameleon schema; ext-soap cannot resolve that once the chameleon
     * has been re-namespaced and drops the attribute without a word. The rest of the
     * element encodes correctly, so this reproduces it exactly rather than changing it —
     * same element and child namespaces as the certified requests.
     *
     * @param \Amadeus\Client\RequestOptions\Ticket\SegmentInfo $segmentInfo
     * @return \SoapVar
     */
    public static function asFragment($segmentInfo)
    {
        $attributes = [
            'bkgClass' => $segmentInfo->bookingClass,
            'segmentStatus' => $segmentInfo->segmentStatus,
            'isOpenSegment' => isset($segmentInfo->isOpenSegment)
                ? ($segmentInfo->isOpenSegment ? 'true' : 'false')
                : null,
            'RequestID' => $segmentInfo->requestId,
        ];

        $rendered = '';

        foreach ($attributes as $name => $value) {
            if ($value === null || $value === '') {
                continue;
            }

            $rendered .= ' ' . $name . '="'
                . htmlspecialchars((string) $value, ENT_QUOTES | ENT_XML1, 'UTF-8') . '"';
        }

        $children = '';
        $ns = ' xmlns="' . self::NAMESPACE_RETAILING . '"';

        if (!empty($segmentInfo->operatingAirline)) {
            $children .= '<serviceProvider' . $ns . ' code="'
                . htmlspecialchars((string) $segmentInfo->operatingAirline, ENT_QUOTES | ENT_XML1, 'UTF-8') . '"/>';
        }

        if (!empty($segmentInfo->operatingFlightNumber)) {
            $children .= '<identifier' . $ns . '>'
                . htmlspecialchars((string) $segmentInfo->operatingFlightNumber, ENT_QUOTES | ENT_XML1, 'UTF-8')
                . '</identifier>';
        }

        $children .= self::point('start', $ns, $segmentInfo->departureLocation, $segmentInfo->departureDateTime);
        $children .= self::point('end', $ns, $segmentInfo->arrivalLocation, $segmentInfo->arrivalDateTime);

        return new \SoapVar(
            '<Segment xmlns="' . self::NAMESPACE_MESSAGE . '"' . $rendered . '>' . $children . '</Segment>',
            XSD_ANYXML
        );
    }

    /**
     * A start or end point: the location code as text, the time as an attribute.
     */
    private static function point($element, $ns, $location, $dateTime)
    {
        if (empty($location)) {
            return '';
        }

        $when = '';

        if (!empty($dateTime)) {
            $when = ' dateTime="' . ($dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d\TH:i:s')
                : htmlspecialchars((string) $dateTime, ENT_QUOTES | ENT_XML1, 'UTF-8')) . '"';
        }

        return '<' . $element . $ns . $when . '>'
            . '<locationCode>' . htmlspecialchars((string) $location, ENT_QUOTES | ENT_XML1, 'UTF-8') . '</locationCode>'
            . '</' . $element . '>';
    }
}
