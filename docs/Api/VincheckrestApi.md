# Sunday\ArchiveClient\VincheckrestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkVINUsingGET**](VincheckrestApi.md#checkVINUsingGET) | **GET** /helper/check-vin/{vin} | Ellenőrzi, hogy a megadott alvázszám helyes-e


# **checkVINUsingGET**
> bool checkVINUsingGET($vin)

Ellenőrzi, hogy a megadott alvázszám helyes-e

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\VincheckrestApi();
$vin = "vin_example"; // string | vin

try {
    $result = $api_instance->checkVINUsingGET($vin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VincheckrestApi->checkVINUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| vin |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

