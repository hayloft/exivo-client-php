<?php
/**
 * PersonApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * exivo api documentation
 *
 * The exivo API lets you manage an exivo site. To be allowed to use the API the Connection service needs to be activated. For every HTTP request the `siteId`, an `API_KEY` and the corresponding `API_SECRET` are required. All this information can be found in the [exivo app](https://customer.exivo.io/credentials). A new `API_KEY` can be generated in the app. Please note that `API_SECRET` is a confidential information and should be stored securely. After closing the dialogue or refreshing the page the secret can't be displayed anymore. If the secret is lost, a new key needs to be generated and the old must be deleted.
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * PersonApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for addPerson
     *
     * Creates a new person.
     *
     */
    public function testAddPerson()
    {
    }

    /**
     * Test case for assignAccessGroup
     *
     * Assign access group to person.
     *
     */
    public function testAssignAccessGroup()
    {
    }

    /**
     * Test case for assignDigitalKey
     *
     * Assign digital key to person.
     *
     */
    public function testAssignDigitalKey()
    {
    }

    /**
     * Test case for assignMedium
     *
     * Assign medium to person.
     *
     */
    public function testAssignMedium()
    {
    }

    /**
     * Test case for changePersonInfo
     *
     * Updates a person in the store.
     *
     */
    public function testChangePersonInfo()
    {
    }

    /**
     * Test case for deletePerson
     *
     * Deletes a person.
     *
     */
    public function testDeletePerson()
    {
    }

    /**
     * Test case for getPerson
     *
     * get person by ID.
     *
     */
    public function testGetPerson()
    {
    }

    /**
     * Test case for getPersonAccessLog
     *
     * get persons access log.
     *
     */
    public function testGetPersonAccessLog()
    {
    }

    /**
     * Test case for getPersonAccessLogForOne
     *
     * get person's access log.
     *
     */
    public function testGetPersonAccessLogForOne()
    {
    }

    /**
     * Test case for getPersons
     *
     * get all persons.
     *
     */
    public function testGetPersons()
    {
    }

    /**
     * Test case for resetPinCode
     *
     * Resets a pinCode for the person.
     *
     */
    public function testResetPinCode()
    {
    }

    /**
     * Test case for revokeAccess
     *
     * Revoke access of a person.
     *
     */
    public function testRevokeAccess()
    {
    }

    /**
     * Test case for setPinCode
     *
     * Sets a pinCode for the person.
     *
     */
    public function testSetPinCode()
    {
    }

    /**
     * Test case for unassignAccessGroup
     *
     * Unassign access group from person.
     *
     */
    public function testUnassignAccessGroup()
    {
    }

    /**
     * Test case for unassignDigitalKey
     *
     * Unassign digital key from person.
     *
     */
    public function testUnassignDigitalKey()
    {
    }

    /**
     * Test case for unassignMedium
     *
     * Unassign medium from person.
     *
     */
    public function testUnassignMedium()
    {
    }

    /**
     * Test case for unrevokeAccess
     *
     * Unrevoke access of a person.
     *
     */
    public function testUnrevokeAccess()
    {
    }
}
