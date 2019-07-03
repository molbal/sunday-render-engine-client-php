# Sunday\RenderService\Client\ProjectrestApi

All URIs are relative to *https://136.144.173.90:8009/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProjectUsingDELETE**](ProjectrestApi.md#deleteProjectUsingDELETE) | **DELETE** /project/delete/{Id} | Deletes a project, its document types, and its files.
[**getAllProjectsUsingGET**](ProjectrestApi.md#getAllProjectsUsingGET) | **GET** /project/all | Returns all projects
[**getProjectByIdUsingGET**](ProjectrestApi.md#getProjectByIdUsingGET) | **GET** /project/{Id} | Gets a project by its ID
[**insertProjectUsingPOST**](ProjectrestApi.md#insertProjectUsingPOST) | **POST** /project/create | Creates a new project. The ID does not need to be filled, as it is generated automatically
[**updateProjectUsingPOST**](ProjectrestApi.md#updateProjectUsingPOST) | **POST** /project/update/{Id} | Updates a project.


# **deleteProjectUsingDELETE**
> deleteProjectUsingDELETE($id)

Deletes a project, its document types, and its files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderService\Client\Api\ProjectrestApi();
$id = 789; // int | Id

try {
    $api_instance->deleteProjectUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectrestApi->deleteProjectUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProjectsUsingGET**
> \Swagger\Client\Model\IterableProjectEntity_ getAllProjectsUsingGET()

Returns all projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderService\Client\Api\ProjectrestApi();

try {
    $result = $api_instance->getAllProjectsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectrestApi->getAllProjectsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\IterableProjectEntity_**](../Model/IterableProjectEntity_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectByIdUsingGET**
> \Swagger\Client\Model\ProjectEntity getProjectByIdUsingGET($id)

Gets a project by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderService\Client\Api\ProjectrestApi();
$id = 789; // int | Id

try {
    $result = $api_instance->getProjectByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectrestApi->getProjectByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertProjectUsingPOST**
> \Swagger\Client\Model\ProjectEntity insertProjectUsingPOST($project)

Creates a new project. The ID does not need to be filled, as it is generated automatically

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderService\Client\Api\ProjectrestApi();
$project = new \Swagger\Client\Model\ProjectEntity(); // \Swagger\Client\Model\ProjectEntity | project

try {
    $result = $api_instance->insertProjectUsingPOST($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectrestApi->insertProjectUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | [**\Swagger\Client\Model\ProjectEntity**](../Model/\Swagger\Client\Model\ProjectEntity.md)| project |

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProjectUsingPOST**
> \Swagger\Client\Model\ProjectEntity updateProjectUsingPOST($id, $project)

Updates a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\RenderService\Client\Api\ProjectrestApi();
$id = 789; // int | Id
$project = new \Swagger\Client\Model\ProjectEntity(); // \Swagger\Client\Model\ProjectEntity | project

try {
    $result = $api_instance->updateProjectUsingPOST($id, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectrestApi->updateProjectUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |
 **project** | [**\Swagger\Client\Model\ProjectEntity**](../Model/\Swagger\Client\Model\ProjectEntity.md)| project |

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

