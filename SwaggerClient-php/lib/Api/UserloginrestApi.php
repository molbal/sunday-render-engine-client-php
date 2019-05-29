<?php
/**
 * UserloginrestApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * UserloginrestApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserloginrestApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://136.144.173.90:8008/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return UserloginrestApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation authenticateUsingPOST
     *
     * Felhasználó beléptetése.
     *
     * @param \Swagger\Client\Model\LoginRequest $login_request loginRequest (required)
     * @return \Swagger\Client\Model\LoginResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function authenticateUsingPOST($login_request)
    {
        list($response) = $this->authenticateUsingPOSTWithHttpInfo($login_request);
        return $response;
    }

    /**
     * Operation authenticateUsingPOSTWithHttpInfo
     *
     * Felhasználó beléptetése.
     *
     * @param \Swagger\Client\Model\LoginRequest $login_request loginRequest (required)
     * @return Array of \Swagger\Client\Model\LoginResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function authenticateUsingPOSTWithHttpInfo($login_request)
    {
        // verify the required parameter 'login_request' is set
        if ($login_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $login_request when calling authenticateUsingPOST');
        }
        // parse inputs
        $resourcePath = "/users/authenticate";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('*_/_*'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($login_request)) {
            $_tempBody = $login_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LoginResponse',
                '/users/authenticate'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LoginResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LoginResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createUserLoginUsingPOST
     *
     * Új felhasználó létrehozására szolgáló hívás.
     *
     * @param \Swagger\Client\Model\NewUserRequest $new_user_request newUserRequest (required)
     * @return \Swagger\Client\Model\UserLoginEntity
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createUserLoginUsingPOST($new_user_request)
    {
        list($response) = $this->createUserLoginUsingPOSTWithHttpInfo($new_user_request);
        return $response;
    }

    /**
     * Operation createUserLoginUsingPOSTWithHttpInfo
     *
     * Új felhasználó létrehozására szolgáló hívás.
     *
     * @param \Swagger\Client\Model\NewUserRequest $new_user_request newUserRequest (required)
     * @return Array of \Swagger\Client\Model\UserLoginEntity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createUserLoginUsingPOSTWithHttpInfo($new_user_request)
    {
        // verify the required parameter 'new_user_request' is set
        if ($new_user_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new_user_request when calling createUserLoginUsingPOST');
        }
        // parse inputs
        $resourcePath = "/users/create";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('*_/_*'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($new_user_request)) {
            $_tempBody = $new_user_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\UserLoginEntity',
                '/users/create'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\UserLoginEntity', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\UserLoginEntity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
