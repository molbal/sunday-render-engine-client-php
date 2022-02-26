# Sunday\ArchiveClient\VehicledatarestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsingPOST2**](VehicledatarestApi.md#createUsingPOST2) | **POST** /vehicle/create | Új járművet ment a felhasználó gépjárművei közé.
[**deleteUsingDELETE1**](VehicledatarestApi.md#deleteUsingDELETE1) | **DELETE** /vehicle/delete/{vehicleId} | Kitöröl egy gépkocsit az adatbázisból
[**editUsingPOST**](VehicledatarestApi.md#editUsingPOST) | **POST** /vehicle/edit/{vehicleId} | Szerkeszt egy létező gépkocsit
[**getOwnVehiclesUsingGET**](VehicledatarestApi.md#getOwnVehiclesUsingGET) | **GET** /vehicle/get/{userId} | Visszaadja az egy felhasználóhoz tartozó járműveket
[**setKmUsingPOST**](VehicledatarestApi.md#setKmUsingPOST) | **POST** /vehicle/newkm/{vehicleId}/{newKm} | A gépkocsi aktuális km állását frissíti


# **createUsingPOST2**
> \Swagger\Client\Model\VehicleDataEntity createUsingPOST2($request)

Új járművet ment a felhasználó gépjárművei közé.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\VehicledatarestApi();
$request = new \Swagger\Client\Model\VehicleSaveRequest(); // \Swagger\Client\Model\VehicleSaveRequest | request

try {
    $result = $api_instance->createUsingPOST2($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->createUsingPOST2: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsingDELETE1**
> deleteUsingDELETE1($vehicle_id)

Kitöröl egy gépkocsit az adatbázisból

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\VehicledatarestApi();
$vehicle_id = 789; // int | vehicleId

try {
    $api_instance->deleteUsingDELETE1($vehicle_id);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->deleteUsingDELETE1: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editUsingPOST**
> \Swagger\Client\Model\VehicleDataEntity editUsingPOST($vehicle_data_entity, $vehicle_id)

Szerkeszt egy létező gépkocsit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\VehicledatarestApi();
$vehicle_data_entity = new \Swagger\Client\Model\VehicleDataEntity(); // \Swagger\Client\Model\VehicleDataEntity | vehicleDataEntity
$vehicle_id = 789; // int | vehicleId

try {
    $result = $api_instance->editUsingPOST($vehicle_data_entity, $vehicle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->editUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_data_entity** | [**\Swagger\Client\Model\VehicleDataEntity**](../Model/\Swagger\Client\Model\VehicleDataEntity.md)| vehicleDataEntity |
 **vehicle_id** | **int**| vehicleId |

### Return type

[**\Swagger\Client\Model\VehicleDataEntity**](../Model/VehicleDataEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOwnVehiclesUsingGET**
> \Swagger\Client\Model\VehicleDataEntity[] getOwnVehiclesUsingGET($user_id)

Visszaadja az egy felhasználóhoz tartozó járműveket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\VehicledatarestApi();
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
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setKmUsingPOST**
> \Swagger\Client\Model\VehicleDataEntity setKmUsingPOST($new_km, $vehicle_id)

A gépkocsi aktuális km állását frissíti

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\VehicledatarestApi();
$new_km = 56; // int | newKm
$vehicle_id = 789; // int | vehicleId

try {
    $result = $api_instance->setKmUsingPOST($new_km, $vehicle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicledatarestApi->setKmUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_km** | **int**| newKm |
 **vehicle_id** | **int**| vehicleId |

### Return type

[**\Swagger\Client\Model\VehicleDataEntity**](../Model/VehicleDataEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

