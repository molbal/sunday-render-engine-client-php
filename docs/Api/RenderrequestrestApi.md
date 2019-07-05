# Swagger\Client\RenderrequestrestApi

All URIs are relative to *https://136.144.173.90:8009/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**renderRequestUsingPOST**](RenderrequestrestApi.md#renderRequestUsingPOST) | **POST** /render | Handles a render request and returns


# **renderRequestUsingPOST**
> string renderRequestUsingPOST($render_request_entity)

Handles a render request and returns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RenderrequestrestApi();
$render_request_entity = new \Swagger\Client\Model\RenderRequestEntity(); // \Swagger\Client\Model\RenderRequestEntity | renderRequestEntity

try {
    $result = $api_instance->renderRequestUsingPOST($render_request_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderrequestrestApi->renderRequestUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **render_request_entity** | [**\Swagger\Client\Model\RenderRequestEntity**](../Model/\Swagger\Client\Model\RenderRequestEntity.md)| renderRequestEntity |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

