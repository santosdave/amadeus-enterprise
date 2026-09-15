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

use Amadeus\Client\RequestOptions\Ticket\ElementReference;

/**
 * Cancellation - List of PNR elements to cancel
 *
 * Each Ref is emitted as a literal XML fragment rather than as an object with public
 * properties, because ext-soap will not encode its attributes otherwise.
 *
 * Ref takes its attributes from <xs:attributeGroup ref="CommonIdentifierAttributes"/>,
 * written without a prefix inside a chameleon schema — one with no targetNamespace of its
 * own, given one by whichever proxy includes it. ext-soap cannot resolve that reference
 * once the chameleon has been re-namespaced, so it holds no definition for TattooType or
 * TattooValue and drops them silently: <Ref/> goes out bare, Amadeus is asked to cancel
 * nothing, and the reply says INVALID INPUT DATA, which points nowhere near the cause.
 * Attributes declared directly on a complexType resolve normally, which is why bkgClass
 * survives on a Segment while RequestID from the same group does not.
 *
 * XSD_ANYXML hands the encoder a fragment to copy, so nothing needs resolving.
 *
 * @package Amadeus\Client\Struct\Ticket\RebookAndReprice
 * @author Wycliffe dev<santosdave86@gmail.com>
 */
class Cancellation
{
    /** Ref's own namespace, which a literal fragment has to carry itself. */
    const NAMESPACE_RETAILING = 'http://xml.amadeus.com/2010/06/Retailing_Types_v2';

    /**
     * Array of element references to cancel
     *
     * @var \SoapVar[]
     */
    public $Ref = [];

    /**
     * Cancellation constructor
     *
     * @param ElementReference[] $references
     */
    public function __construct(array $references)
    {
        foreach ($references as $reference) {
            $this->Ref[] = self::asFragment($reference);
        }
    }

    /**
     * One Ref element, carrying whichever identifiers were supplied.
     *
     * @param ElementReference $reference
     * @return \SoapVar
     */
    public static function asFragment($reference)
    {
        $attributes = [
            'RequestID' => isset($reference->requestId) ? $reference->requestId : null,
            'TattooType' => isset($reference->tattooType) ? $reference->tattooType : null,
            'TattooValue' => isset($reference->tattooValue) ? $reference->tattooValue : null,
            'LineNumber' => isset($reference->lineNumber) ? $reference->lineNumber : null,
        ];

        $rendered = '';

        foreach ($attributes as $name => $value) {
            if ($value === null || $value === '') {
                continue;
            }

            $rendered .= ' ' . $name . '="'
                . htmlspecialchars((string) $value, ENT_QUOTES | ENT_XML1, 'UTF-8') . '"';
        }

        return new \SoapVar(
            '<Ref xmlns="' . self::NAMESPACE_RETAILING . '"' . $rendered . '/>',
            XSD_ANYXML
        );
    }
}