# Swagger\Client\UserdatarestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignAddressEntityUsingPOST**](UserdatarestApi.md#assignAddressEntityUsingPOST) | **POST** /userdata/assignaddress/{userId}/{addressId}/{addressType} | Hozzárendel egy elmentett címet egy felhasználóhoz.
[**deleteAddressEntityUsingDELETE**](UserdatarestApi.md#deleteAddressEntityUsingDELETE) | **DELETE** /userdata/deleteaddress/{addressId} | Kitöröl egy címet az adatbázisból. Ha hozzá van rendelve valamilyen felhasználóhoz, mint lakcím, vagy levelezési cím, akkor hibát dob
[**gdprNukeUsingDELETE**](UserdatarestApi.md#gdprNukeUsingDELETE) | **DELETE** /userdata/delete-all/{userId} | Törli az egy felhasználóhoz tartozó adatokat, címeket, gépjárműveket, és a bejelentkezést letiltja.
[**getUserDataUsingGET**](UserdatarestApi.md#getUserDataUsingGET) | **GET** /userdata/get/{userId} | Lekéri a felhasználó adatait
[**saveAddressUsingPOST**](UserdatarestApi.md#saveAddressUsingPOST) | **POST** /userdata/saveaddress | Elment egy címet. A cím ID mezőjét nem kell tölteni, mivel ezt automatikusan generálja az SQL szerver. A válasz tartalmazni fogja az ID mezőt is, kitöltve.
[**saveUserDataUsingPOST**](UserdatarestApi.md#saveUserDataUsingPOST) | **POST** /userdata/save | Felhasználói adatok mentése / frissítése.


# **assignAddressEntityUsingPOST**
> assignAddressEntityUsingPOST($address_id, $address_type, $user_id)

Hozzárendel egy elmentett címet egy felhasználóhoz.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserdatarestApi();
$address_id = 789; // int | addressId
$address_type = "address_type_example"; // string | addressType
$user_id = 789; // int | userId

try {
    $api_instance->assignAddressEntityUsingPOST($address_id, $address_type, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserdatarestApi->assignAddressEntityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| addressId |
 **address_type** | **string**| addressType |
 **user_id** | **int**| userId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddressEntityUsingDELETE**
> deleteAddressEntityUsingDELETE($address_id)

Kitöröl egy címet az adatbázisból. Ha hozzá van rendelve valamilyen felhasználóhoz, mint lakcím, vagy levelezési cím, akkor hibát dob

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserdatarestApi();
$address_id = 789; // int | addressId

try {
    $api_instance->deleteAddressEntityUsingDELETE($address_id);
} catch (Exception $e) {
    echo 'Exception when calling UserdatarestApi->deleteAddressEntityUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| addressId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gdprNukeUsingDELETE**
> gdprNukeUsingDELETE($user_id)

Törli az egy felhasználóhoz tartozó adatokat, címeket, gépjárműveket, és a bejelentkezést letiltja.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserdatarestApi();
$user_id = 789; // int | userId

try {
    $api_instance->gdprNukeUsingDELETE($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserdatarestApi->gdprNukeUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDataUsingGET**
> \Swagger\Client\Model\UserDataEntity getUserDataUsingGET($user_id)

Lekéri a felhasználó adatait

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserdatarestApi();
$user_id = 789; // int | userId

try {
    $result = $api_instance->getUserDataUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserdatarestApi->getUserDataUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId | [optional]

### Return type

[**\Swagger\Client\Model\UserDataEntity**](../Model/UserDataEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAddressUsingPOST**
> \Swagger\Client\Model\AddressEntity saveAddressUsingPOST($address_entity)

Elment egy címet. A cím ID mezőjét nem kell tölteni, mivel ezt automatikusan generálja az SQL szerver. A válasz tartalmazni fogja az ID mezőt is, kitöltve.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserdatarestApi();
$address_entity = new \Swagger\Client\Model\AddressEntity(); // \Swagger\Client\Model\AddressEntity | addressEntity

try {
    $result = $api_instance->saveAddressUsingPOST($address_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserdatarestApi->saveAddressUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_entity** | [**\Swagger\Client\Model\AddressEntity**](../Model/\Swagger\Client\Model\AddressEntity.md)| addressEntity |

### Return type

[**\Swagger\Client\Model\AddressEntity**](../Model/AddressEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveUserDataUsingPOST**
> saveUserDataUsingPOST($save_request)

Felhasználói adatok mentése / frissítése.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserdatarestApi();
$save_request = new \Swagger\Client\Model\UserDataSaveRequest(); // \Swagger\Client\Model\UserDataSaveRequest | saveRequest

try {
    $api_instance->saveUserDataUsingPOST($save_request);
} catch (Exception $e) {
    echo 'Exception when calling UserdatarestApi->saveUserDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **save_request** | [**\Swagger\Client\Model\UserDataSaveRequest**](../Model/\Swagger\Client\Model\UserDataSaveRequest.md)| saveRequest |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

