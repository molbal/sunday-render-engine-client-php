# Sunday\RenderClient\DocumenttyperestApi

All URIs are relative to *https://sdy-as-01:8009/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDocumentTypeUsingDELETE**](DocumenttyperestApi.md#deleteDocumentTypeUsingDELETE) | **DELETE** /document_type/delete/{Id} | Deletes a document type
[**getDocumentTypeByIdUsingGET**](DocumenttyperestApi.md#getDocumentTypeByIdUsingGET) | **GET** /document_type/{Id} | Returns the document type entity by the ID
[**getDocumentTypesByProjectIdUsingGET**](DocumenttyperestApi.md#getDocumentTypesByProjectIdUsingGET) | **GET** /document_type/project_id/{projectEntityId} | Returns a list of document type entities by their project id
[**insertDocumentTypeUsingPOST**](DocumenttyperestApi.md#insertDocumentTypeUsingPOST) | **POST** /document_type/create | insertDocumentType
[**updateDocumentTypeUsingPOST**](DocumenttyperestApi.md#updateDocumentTypeUsingPOST) | **POST** /document_type/update/{Id} | Updates an existing document type


# **deleteDocumentTypeUsingDELETE**
> deleteDocumentTypeUsingDELETE($id)

Deletes a document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderClient\Api\DocumenttyperestApi();
$id = 789; // int | Id

try {
    $api_instance->deleteDocumentTypeUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumenttyperestApi->deleteDocumentTypeUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentTypeByIdUsingGET**
> \Swagger\Client\Model\DocumentTypeEntity getDocumentTypeByIdUsingGET($id)

Returns the document type entity by the ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderClient\Api\DocumenttyperestApi();
$id = 789; // int | Id

try {
    $result = $api_instance->getDocumentTypeByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumenttyperestApi->getDocumentTypeByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |

### Return type

[**\Swagger\Client\Model\DocumentTypeEntity**](../Model/DocumentTypeEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentTypesByProjectIdUsingGET**
> \Swagger\Client\Model\DocumentTypeEntity[] getDocumentTypesByProjectIdUsingGET($project_entity_id)

Returns a list of document type entities by their project id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderClient\Api\DocumenttyperestApi();
$project_entity_id = 789; // int | projectEntityId

try {
    $result = $api_instance->getDocumentTypesByProjectIdUsingGET($project_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumenttyperestApi->getDocumentTypesByProjectIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_entity_id** | **int**| projectEntityId |

### Return type

[**\Swagger\Client\Model\DocumentTypeEntity[]**](../Model/DocumentTypeEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertDocumentTypeUsingPOST**
> \Swagger\Client\Model\DocumentTypeEntity insertDocumentTypeUsingPOST($document_type_entity)

insertDocumentType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderClient\Api\DocumenttyperestApi();
$document_type_entity = new \Swagger\Client\Model\DocumentTypeEntity(); // \Swagger\Client\Model\DocumentTypeEntity | documentTypeEntity

try {
    $result = $api_instance->insertDocumentTypeUsingPOST($document_type_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumenttyperestApi->insertDocumentTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_entity** | [**\Swagger\Client\Model\DocumentTypeEntity**](../Model/\Swagger\Client\Model\DocumentTypeEntity.md)| documentTypeEntity |

### Return type

[**\Swagger\Client\Model\DocumentTypeEntity**](../Model/DocumentTypeEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocumentTypeUsingPOST**
> \Swagger\Client\Model\DocumentTypeEntity updateDocumentTypeUsingPOST($id, $document_type_entity)

Updates an existing document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderClient\Api\DocumenttyperestApi();
$id = 789; // int | Id
$document_type_entity = new \Swagger\Client\Model\DocumentTypeEntity(); // \Swagger\Client\Model\DocumentTypeEntity | documentTypeEntity

try {
    $result = $api_instance->updateDocumentTypeUsingPOST($id, $document_type_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumenttyperestApi->updateDocumentTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |
 **document_type_entity** | [**\Swagger\Client\Model\DocumentTypeEntity**](../Model/\Swagger\Client\Model\DocumentTypeEntity.md)| documentTypeEntity |

### Return type

[**\Swagger\Client\Model\DocumentTypeEntity**](../Model/DocumentTypeEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

