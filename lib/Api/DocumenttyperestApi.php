<?php
/**
 * DocumenttyperestApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sunday Render Service
 *
 * Sunday Render Service
 *
 * 
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
 * DocumenttyperestApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumenttyperestApi
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
            $apiClient->getConfig()->setHost('https://127.0.0.1:8009/');
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
     * @return DocumenttyperestApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteDocumentTypeUsingDELETE
     *
     * Deletes a document type
     *
     * @param int $id Id (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteDocumentTypeUsingDELETE($id)
    {
        list($response) = $this->deleteDocumentTypeUsingDELETEWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteDocumentTypeUsingDELETEWithHttpInfo
     *
     * Deletes a document type
     *
     * @param int $id Id (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteDocumentTypeUsingDELETEWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteDocumentTypeUsingDELETE');
        }
        // parse inputs
        $resourcePath = "/document_type/delete/{Id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('*_/_*'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "Id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/document_type/delete/{Id}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getDocumentTypeByIdUsingGET
     *
     * Returns the document type entity by the ID
     *
     * @param int $id Id (required)
     * @return \Swagger\Client\Model\DocumentTypeEntity
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getDocumentTypeByIdUsingGET($id)
    {
        list($response) = $this->getDocumentTypeByIdUsingGETWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getDocumentTypeByIdUsingGETWithHttpInfo
     *
     * Returns the document type entity by the ID
     *
     * @param int $id Id (required)
     * @return Array of \Swagger\Client\Model\DocumentTypeEntity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getDocumentTypeByIdUsingGETWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getDocumentTypeByIdUsingGET');
        }
        // parse inputs
        $resourcePath = "/document_type/{Id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('*_/_*'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "Id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DocumentTypeEntity',
                '/document_type/{Id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DocumentTypeEntity', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DocumentTypeEntity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation insertDocumentTypeUsingPOST
     *
     * insertDocumentType
     *
     * @param \Swagger\Client\Model\DocumentTypeEntity $document_type_entity documentTypeEntity (required)
     * @return \Swagger\Client\Model\DocumentTypeEntity
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function insertDocumentTypeUsingPOST($document_type_entity)
    {
        list($response) = $this->insertDocumentTypeUsingPOSTWithHttpInfo($document_type_entity);
        return $response;
    }

    /**
     * Operation insertDocumentTypeUsingPOSTWithHttpInfo
     *
     * insertDocumentType
     *
     * @param \Swagger\Client\Model\DocumentTypeEntity $document_type_entity documentTypeEntity (required)
     * @return Array of \Swagger\Client\Model\DocumentTypeEntity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function insertDocumentTypeUsingPOSTWithHttpInfo($document_type_entity)
    {
        // verify the required parameter 'document_type_entity' is set
        if ($document_type_entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document_type_entity when calling insertDocumentTypeUsingPOST');
        }
        // parse inputs
        $resourcePath = "/document_type/create";
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
        if (isset($document_type_entity)) {
            $_tempBody = $document_type_entity;
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
                '\Swagger\Client\Model\DocumentTypeEntity',
                '/document_type/create'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DocumentTypeEntity', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DocumentTypeEntity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateDocumentTypeUsingPOST
     *
     * Updates an existing document type
     *
     * @param int $id Id (required)
     * @param \Swagger\Client\Model\DocumentTypeEntity $document_type_entity documentTypeEntity (required)
     * @return \Swagger\Client\Model\DocumentTypeEntity
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateDocumentTypeUsingPOST($id, $document_type_entity)
    {
        list($response) = $this->updateDocumentTypeUsingPOSTWithHttpInfo($id, $document_type_entity);
        return $response;
    }

    /**
     * Operation updateDocumentTypeUsingPOSTWithHttpInfo
     *
     * Updates an existing document type
     *
     * @param int $id Id (required)
     * @param \Swagger\Client\Model\DocumentTypeEntity $document_type_entity documentTypeEntity (required)
     * @return Array of \Swagger\Client\Model\DocumentTypeEntity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateDocumentTypeUsingPOSTWithHttpInfo($id, $document_type_entity)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateDocumentTypeUsingPOST');
        }
        // verify the required parameter 'document_type_entity' is set
        if ($document_type_entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document_type_entity when calling updateDocumentTypeUsingPOST');
        }
        // parse inputs
        $resourcePath = "/document_type/update/{Id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('*_/_*'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "Id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($document_type_entity)) {
            $_tempBody = $document_type_entity;
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
                '\Swagger\Client\Model\DocumentTypeEntity',
                '/document_type/update/{Id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DocumentTypeEntity', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DocumentTypeEntity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}