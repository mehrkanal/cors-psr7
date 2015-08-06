<?php namespace Neomerx\Tests\Cors;

/**
 * Copyright 2015 info@neomerx.com (www.neomerx.com)
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
 */

use \Neomerx\Tests\Cors\Factory\FactoryTest;
use \Neomerx\Cors\Contracts\AnalysisResultInterface;

/**
 * @package Neomerx\Tests\JsonApi
 */
class AnalysisResultTest extends BaseTestCase
{
    /**
     * Test create.
     */
    public function testCreate()
    {
        $headers     = ['header-name' => ['header-value1']];
        $requestType = AnalysisResultInterface::TYPE_BAD_REQUEST;

        $this->assertNotNull($result = FactoryTest::createFactory()->createAnalysisResult($requestType, $headers));

        $this->assertNotNull($requestType, $result->getRequestType());
        $this->assertNotNull($headers, $result->getResponseHeaders());
    }
}