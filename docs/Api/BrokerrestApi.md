# Sunday\ArchiveClient\BrokerrestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBrokerUsingPOST**](BrokerrestApi.md#createBrokerUsingPOST) | **POST** /broker/save | Elmenti az új üzletkötőt.
[**deleteBrokerUsingDELETE**](BrokerrestApi.md#deleteBrokerUsingDELETE) | **DELETE** /broker/delete/{brokerId} | Kitöröl egy üzletkötőt az adatbázisból.
[**getAllBrokersUsingGET**](BrokerrestApi.md#getAllBrokersUsingGET) | **GET** /broker/all | Visszaadja az összes üzletkötőt.
[**getBrokerUsingGET**](BrokerrestApi.md#getBrokerUsingGET) | **GET** /broker/get/{id} | Visszaadja az üzletkötőt.


# **createBrokerUsingPOST**
> \Swagger\Client\Model\BrokerEntity createBrokerUsingPOST($entity)

Elmenti az új üzletkötőt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\BrokerrestApi();
$entity = new \Swagger\Client\Model\BrokerEntity(); // \Swagger\Client\Model\BrokerEntity | entity

try {
    $result = $api_instance->createBrokerUsingPOST($entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrokerrestApi->createBrokerUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Swagger\Client\Model\BrokerEntity**](../Model/\Swagger\Client\Model\BrokerEntity.md)| entity |

### Return type

[**\Swagger\Client\Model\BrokerEntity**](../Model/BrokerEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBrokerUsingDELETE**
> deleteBrokerUsingDELETE($broker_id)

Kitöröl egy üzletkötőt az adatbázisból.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\BrokerrestApi();
$broker_id = 789; // int | brokerId

try {
    $api_instance->deleteBrokerUsingDELETE($broker_id);
} catch (Exception $e) {
    echo 'Exception when calling BrokerrestApi->deleteBrokerUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broker_id** | **int**| brokerId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBrokersUsingGET**
> \Swagger\Client\Model\BrokerEntity[] getAllBrokersUsingGET()

Visszaadja az összes üzletkötőt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\BrokerrestApi();

try {
    $result = $api_instance->getAllBrokersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrokerrestApi->getAllBrokersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BrokerEntity[]**](../Model/BrokerEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrokerUsingGET**
> \Swagger\Client\Model\BrokerEntity getBrokerUsingGET($id)

Visszaadja az üzletkötőt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\BrokerrestApi();
$id = 789; // int | id

try {
    $result = $api_instance->getBrokerUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrokerrestApi->getBrokerUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Swagger\Client\Model\BrokerEntity**](../Model/BrokerEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

