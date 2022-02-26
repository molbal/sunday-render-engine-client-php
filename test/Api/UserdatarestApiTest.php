<?php
/**
 * UserdatarestApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Sunday\ArchiveClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sunday Archive Service
 *
 * Sunday Archive Service
 *
 * OpenAPI spec version: 0.0.1-SNAPSHOT
 * Contact: molnar.balint@mdy.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Sunday\ArchiveClient;

use \Sunday\ArchiveClient\Configuration;
use \Sunday\ArchiveClient\ApiClient;
use \Sunday\ArchiveClient\ApiException;
use \Sunday\ArchiveClient\ObjectSerializer;

/**
 * UserdatarestApiTest Class Doc Comment
 *
 * @category Class
 * @package  Sunday\ArchiveClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserdatarestApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test case for assignAddressEntityUsingPOST
     *
     * Hozzárendel egy elmentett címet egy felhasználóhoz..
     *
     */
    public function testAssignAddressEntityUsingPOST()
    {

    }

    /**
     * Test case for deleteAddressEntityUsingDELETE
     *
     * Kitöröl egy címet az adatbázisból. Ha hozzá van rendelve valamilyen felhasználóhoz, mint lakcím, vagy levelezési cím, akkor hibát dob.
     *
     */
    public function testDeleteAddressEntityUsingDELETE()
    {

    }

    /**
     * Test case for deleteUsingDELETE
     *
     * Kitörli az egy felhasználóhoz tartozó személyes adatokat..
     *
     */
    public function testDeleteUsingDELETE()
    {

    }

    /**
     * Test case for gdprNukeUsingDELETE
     *
     * Törli az egy felhasználóhoz tartozó adatokat, címeket, gépjárműveket, és a bejelentkezést letiltja..
     *
     */
    public function testGdprNukeUsingDELETE()
    {

    }

    /**
     * Test case for getUserDataUsingGET
     *
     * Lekéri a felhasználó adatait.
     *
     */
    public function testGetUserDataUsingGET()
    {

    }

    /**
     * Test case for saveAddressUsingPOST
     *
     * Elment egy címet. A cím ID mezőjét nem kell tölteni, mivel ezt automatikusan generálja az SQL szerver. A válasz tartalmazni fogja az ID mezőt is, kitöltve..
     *
     */
    public function testSaveAddressUsingPOST()
    {

    }

    /**
     * Test case for saveUserDataUsingPOST
     *
     * Felhasználói adatok mentése / frissítése..
     *
     */
    public function testSaveUserDataUsingPOST()
    {

    }

}
