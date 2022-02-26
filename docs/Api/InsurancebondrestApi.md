# Sunday\ArchiveClient\InsurancebondrestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsingPOST**](InsurancebondrestApi.md#createUsingPOST) | **POST** /insurance-bond/create/{userLoginId} | Elkészít egy új Insurance Bondot.
[**getInsuranceBondsUsingGET**](InsurancebondrestApi.md#getInsuranceBondsUsingGET) | **GET** /insurance-bond/read/{userId} | Listázza az egy loginhoz tartozó insurance bondokat


# **createUsingPOST**
> \Swagger\Client\Model\InsuranceBondEntity createUsingPOST($insurance_bond_entity, $user_login_id)

Elkészít egy új Insurance Bondot.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\InsurancebondrestApi();
$insurance_bond_entity = new \Swagger\Client\Model\InsuranceBondEntity(); // \Swagger\Client\Model\InsuranceBondEntity | insuranceBondEntity
$user_login_id = 789; // int | userLoginId

try {
    $result = $api_instance->createUsingPOST($insurance_bond_entity, $user_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsurancebondrestApi->createUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **insurance_bond_entity** | [**\Swagger\Client\Model\InsuranceBondEntity**](../Model/\Swagger\Client\Model\InsuranceBondEntity.md)| insuranceBondEntity |
 **user_login_id** | **int**| userLoginId |

### Return type

[**\Swagger\Client\Model\InsuranceBondEntity**](../Model/InsuranceBondEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInsuranceBondsUsingGET**
> \Swagger\Client\Model\InsuranceBondEntity[] getInsuranceBondsUsingGET($user_id)

Listázza az egy loginhoz tartozó insurance bondokat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\InsurancebondrestApi();
$user_id = 789; // int | userId

try {
    $result = $api_instance->getInsuranceBondsUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsurancebondrestApi->getInsuranceBondsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId |

### Return type

[**\Swagger\Client\Model\InsuranceBondEntity[]**](../Model/InsuranceBondEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

