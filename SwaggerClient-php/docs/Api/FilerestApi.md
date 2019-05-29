# Swagger\Client\FilerestApi

All URIs are relative to *https://127.0.0.1:8009/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFileEntityUsingPOST**](FilerestApi.md#createFileEntityUsingPOST) | **POST** /file/create | Creates a file
[**getFileEntityUsingGET**](FilerestApi.md#getFileEntityUsingGET) | **GET** /file/get/{Id} | Returns a file by its ID
[**getFilesByProjectIdUsingGET**](FilerestApi.md#getFilesByProjectIdUsingGET) | **GET** /file/getbyproject/{projectId} | Returns all file by its project ID


# **createFileEntityUsingPOST**
> \Swagger\Client\Model\FileEntity createFileEntityUsingPOST($file_to_create)

Creates a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FilerestApi();
$file_to_create = new \Swagger\Client\Model\FileEntity(); // \Swagger\Client\Model\FileEntity | fileToCreate

try {
    $result = $api_instance->createFileEntityUsingPOST($file_to_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerestApi->createFileEntityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_to_create** | [**\Swagger\Client\Model\FileEntity**](../Model/\Swagger\Client\Model\FileEntity.md)| fileToCreate |

### Return type

[**\Swagger\Client\Model\FileEntity**](../Model/FileEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileEntityUsingGET**
> \Swagger\Client\Model\FileEntity getFileEntityUsingGET($id)

Returns a file by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FilerestApi();
$id = 789; // int | Id

try {
    $result = $api_instance->getFileEntityUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerestApi->getFileEntityUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |

### Return type

[**\Swagger\Client\Model\FileEntity**](../Model/FileEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesByProjectIdUsingGET**
> \Swagger\Client\Model\FileEntity[] getFilesByProjectIdUsingGET($project_id)

Returns all file by its project ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FilerestApi();
$project_id = 789; // int | projectId

try {
    $result = $api_instance->getFilesByProjectIdUsingGET($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerestApi->getFilesByProjectIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **int**| projectId |

### Return type

[**\Swagger\Client\Model\FileEntity[]**](../Model/FileEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

