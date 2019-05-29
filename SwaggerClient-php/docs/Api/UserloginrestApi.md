# Swagger\Client\UserloginrestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateUsingPOST**](UserloginrestApi.md#authenticateUsingPOST) | **POST** /users/authenticate | Felhasználó beléptetése.
[**createUserLoginUsingPOST**](UserloginrestApi.md#createUserLoginUsingPOST) | **POST** /users/create | Új felhasználó létrehozására szolgáló hívás.


# **authenticateUsingPOST**
> \Swagger\Client\Model\LoginResponse authenticateUsingPOST($login_request)

Felhasználó beléptetése.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserloginrestApi();
$login_request = new \Swagger\Client\Model\LoginRequest(); // \Swagger\Client\Model\LoginRequest | loginRequest

try {
    $result = $api_instance->authenticateUsingPOST($login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->authenticateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**\Swagger\Client\Model\LoginRequest**](../Model/\Swagger\Client\Model\LoginRequest.md)| loginRequest |

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUserLoginUsingPOST**
> \Swagger\Client\Model\UserLoginEntity createUserLoginUsingPOST($new_user_request)

Új felhasználó létrehozására szolgáló hívás.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserloginrestApi();
$new_user_request = new \Swagger\Client\Model\NewUserRequest(); // \Swagger\Client\Model\NewUserRequest | newUserRequest

try {
    $result = $api_instance->createUserLoginUsingPOST($new_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->createUserLoginUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_user_request** | [**\Swagger\Client\Model\NewUserRequest**](../Model/\Swagger\Client\Model\NewUserRequest.md)| newUserRequest |

### Return type

[**\Swagger\Client\Model\UserLoginEntity**](../Model/UserLoginEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

