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

namespace Test\Amadeus\Client\Struct\HeaderV4;

use Amadeus\Client\Struct\HeaderV4\Password;
use Test\Amadeus\BaseTestCase;

/**
 * PasswordTest
 *
 * @package Test\Amadeus\Client\Struct\HeaderV4
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class PasswordTest extends BaseTestCase
{
    public function testCanCreate()
    {
        $pwNode = new Password(base64_encode('test'));

        $this->assertEquals(base64_encode('test'), $pwNode->_);
        $this->assertEquals('http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordDigest', $pwNode->Type);
    }
}
