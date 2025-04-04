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


namespace Amadeus\Client\Struct\MiniRule;

/**
 * Class Language
 * @package Amadeus\Client\Struct\MiniRule
 * @author Aleksandr Kalugin <xkalugin@gmail.com>
 */
class Language
{
    const LQ_LANGUAGE_NORMALLY_USED = 1;
    const LQ_LANGUAGE_UNDERSTOOD = 2;
    const LQ_SPOKEN_LANGUAGE = 3;
    const LQ_WRITTEN_LANGUAGE = 4;
    const LQ_READ_LANGUAGE = 5;
    const LQ_FOR_ALL_TYPES_OF_COMMUNICATION = 6;
    const LQ_NATIVE_LANGUAGE = 7;

    /**
     * @var int
     */
    public $languageQualifier;
    /**
     * @var LanguageDetails
     */
    public $languageDetails;

    public function __construct($languageQualifier, $languageCode)
    {
        $this->languageQualifier = $languageQualifier;
        $this->languageDetails = new LanguageDetails($languageCode);
    }
}
