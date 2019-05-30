# Swagger\Client\VehicledatarestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsingPOST**](VehicledatarestApi.md#createUsingPOST) | **POST** /vehicle/create | Új járművet ment a felhasználó gépjárművei közé.
[**deleteUsingDELETE**](VehicledatarestApi.md#deleteUsingDELETE) | **DELETE** /vehicle/delete/{vehicleId} | Kitöröl egy gépkocsit az adatbázisból
[**getOwnVehiclesUsingGET**](VehicledatarestApi.md#getOwnVehiclesUsingGET) | **GET** /vehicle/get/{userId} | Visszaadja az egy felhasználóhoz tartozó járműveket


# **createUsingPOST**
> \Swagger\Client\Model\VehicleDataEntity createUsingPOST($request)

Új járművet ment a felhasználó gépjárművei közé.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VehicledatarestApi();
$request = new \Swagger\Client\Model\VehicleSaveRequest(); // \Swagger\Client\Model\VehicleSaveRequest | request

try {
    $result = $api_instance->createUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->createUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\VehicleSaveRequest**](../Model/\Swagger\Client\Model\VehicleSaveRequest.md)| request |

### Return type

[**\Swagger\Client\Model\VehicleDataEntity**](../Model/VehicleDataEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsingDELETE**
> deleteUsingDELETE($vehicle_id)

Kitöröl egy gépkocsit az adatbázisból

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VehicledatarestApi();
$vehicle_id = 789; // int | vehicleId

try {
    $api_instance->deleteUsingDELETE($vehicle_id);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->deleteUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| vehicleId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOwnVehiclesUsingGET**
> \Swagger\Client\Model\VehicleDataEntity[] getOwnVehiclesUsingGET($user_id)

Visszaadja az egy felhasználóhoz tartozó járműveket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VehicledatarestApi();
$user_id = 789; // int | userId

try {
    $result = $api_instance->getOwnVehiclesUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->getOwnVehiclesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId |

### Return type

[**\Swagger\Client\Model\VehicleDataEntity[]**](../Model/VehicleDataEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

