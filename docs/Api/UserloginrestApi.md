# Sunday\ArchiveClient\UserloginrestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateUsingPOST**](UserloginrestApi.md#authenticateUsingPOST) | **POST** /users/authenticate | Felhasználó beléptetése.
[**changePasswordUsingPOST**](UserloginrestApi.md#changePasswordUsingPOST) | **POST** /users/newpassword | Felhasználói jelszóváltoztatásra szolgáló függvény
[**changeTypeUsingPOST**](UserloginrestApi.md#changeTypeUsingPOST) | **POST** /users/change_type/{userId}/{newType} | Lecseréli egy felhasználó típusát. Típusok: NORMAL,     BANNED,     DELETED,     ADMIN
[**createUserLoginUsingPOST**](UserloginrestApi.md#createUserLoginUsingPOST) | **POST** /users/create | Új felhasználó létrehozására szolgáló hívás.
[**fetchActiveUsersUsingGET**](UserloginrestApi.md#fetchActiveUsersUsingGET) | **GET** /users/active/{page}/{pageLength} | Visszaadja a nem törölt felhasználók listáját. A page az oldalszám (0-től kezdődik) a pageLength pedig egy oldal hossza
[**fetchAllUsersUsingGET**](UserloginrestApi.md#fetchAllUsersUsingGET) | **GET** /users/all/{page}/{pageLength} | Visszaadja a felhasználók listáját. A page az oldalszám (0-től kezdődik) a pageLength pedig egy oldal hossza
[**getUserIdUsingGET**](UserloginrestApi.md#getUserIdUsingGET) | **GET** /users/getIdFromEmail/{loginEmail} | Visszaadja a userID-t email alapján
[**getUserTypeUsingGET**](UserloginrestApi.md#getUserTypeUsingGET) | **GET** /users/get_type/{userId} | Visszaadja a felhasználóhoz tartozó login típust


# **authenticateUsingPOST**
> \Swagger\Client\Model\LoginResponse authenticateUsingPOST($login_request)

Felhasználó beléptetése.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
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

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changePasswordUsingPOST**
> \Swagger\Client\Model\UserLoginEntity changePasswordUsingPOST($password_change_request)

Felhasználói jelszóváltoztatásra szolgáló függvény

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
$password_change_request = new \Swagger\Client\Model\PasswordChangeRequest(); // \Swagger\Client\Model\PasswordChangeRequest | passwordChangeRequest

try {
    $result = $api_instance->changePasswordUsingPOST($password_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->changePasswordUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_change_request** | [**\Swagger\Client\Model\PasswordChangeRequest**](../Model/\Swagger\Client\Model\PasswordChangeRequest.md)| passwordChangeRequest |

### Return type

[**\Swagger\Client\Model\UserLoginEntity**](../Model/UserLoginEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeTypeUsingPOST**
> changeTypeUsingPOST($new_type, $user_id)

Lecseréli egy felhasználó típusát. Típusok: NORMAL,     BANNED,     DELETED,     ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
$new_type = "new_type_example"; // string | newType
$user_id = 789; // int | userId

try {
    $api_instance->changeTypeUsingPOST($new_type, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->changeTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_type** | **string**| newType |
 **user_id** | **int**| userId |

### Return type

void (empty response body)

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

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
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

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchActiveUsersUsingGET**
> \Swagger\Client\Model\AllUsersPageResponse fetchActiveUsersUsingGET($page, $page_length)

Visszaadja a nem törölt felhasználók listáját. A page az oldalszám (0-től kezdődik) a pageLength pedig egy oldal hossza

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
$page = 56; // int | page
$page_length = 56; // int | pageLength

try {
    $result = $api_instance->fetchActiveUsersUsingGET($page, $page_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->fetchActiveUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| page |
 **page_length** | **int**| pageLength |

### Return type

[**\Swagger\Client\Model\AllUsersPageResponse**](../Model/AllUsersPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllUsersUsingGET**
> \Swagger\Client\Model\AllUsersPageResponse fetchAllUsersUsingGET($page, $page_length)

Visszaadja a felhasználók listáját. A page az oldalszám (0-től kezdődik) a pageLength pedig egy oldal hossza

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
$page = 56; // int | page
$page_length = 56; // int | pageLength

try {
    $result = $api_instance->fetchAllUsersUsingGET($page, $page_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->fetchAllUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| page |
 **page_length** | **int**| pageLength |

### Return type

[**\Swagger\Client\Model\AllUsersPageResponse**](../Model/AllUsersPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserIdUsingGET**
> int getUserIdUsingGET($login_email)

Visszaadja a userID-t email alapján

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
$login_email = "login_email_example"; // string | loginEmail

try {
    $result = $api_instance->getUserIdUsingGET($login_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->getUserIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_email** | **string**| loginEmail |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTypeUsingGET**
> string getUserTypeUsingGET($user_id)

Visszaadja a felhasználóhoz tartozó login típust

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\UserloginrestApi();
$user_id = 789; // int | userId

try {
    $result = $api_instance->getUserTypeUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserloginrestApi->getUserTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

