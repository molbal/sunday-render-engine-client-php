# Sunday\ArchiveClient\PaymentrecordrestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsingPOST1**](PaymentrecordrestApi.md#createUsingPOST1) | **POST** /paymentrecord/create/{userLoginId} | Készít egy új PaymentRecord-ot és visszaadja
[**getPaymentRecordHistoryUsingGET**](PaymentrecordrestApi.md#getPaymentRecordHistoryUsingGET) | **GET** /paymentrecord/history/{paymentRecordId} | Visszaadja az egy payment recordhoz tartozó history-t
[**getPaymentRecordUsingGET**](PaymentrecordrestApi.md#getPaymentRecordUsingGET) | **GET** /paymentrecord/get/{paymentRecordId} | Visszaadja a payment recordhot
[**getPaymentRecordsUsingGET**](PaymentrecordrestApi.md#getPaymentRecordsUsingGET) | **GET** /paymentrecord/read/{userId} | Listázza az egy loginhoz tartozó fizetéseket
[**setBackendActionTakenUsingPOST**](PaymentrecordrestApi.md#setBackendActionTakenUsingPOST) | **POST** /paymentrecord/update-backend-action-taken/{paymentRecordId}/{backendActionTaken} | Frissíti a backend action taken  metaadatot
[**updateStatusUsingPOST**](PaymentrecordrestApi.md#updateStatusUsingPOST) | **POST** /paymentrecord/update/{paymentRecordId}/{newStatus} | Frissíti a fizetést, visszaad egy új
[**updateTransactionIDUsingPOST**](PaymentrecordrestApi.md#updateTransactionIDUsingPOST) | **POST** /paymentrecord/update-transaction-id/{paymentRecordId}/{transactionID} | Frissíti a Payment Gateway transaction ID-t


# **createUsingPOST1**
> \Swagger\Client\Model\PaymentRecord createUsingPOST1($payment_record, $user_login_id)

Készít egy új PaymentRecord-ot és visszaadja

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$payment_record = new \Swagger\Client\Model\PaymentRecord(); // \Swagger\Client\Model\PaymentRecord | paymentRecord
$user_login_id = 789; // int | userLoginId

try {
    $result = $api_instance->createUsingPOST1($payment_record, $user_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->createUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_record** | [**\Swagger\Client\Model\PaymentRecord**](../Model/\Swagger\Client\Model\PaymentRecord.md)| paymentRecord |
 **user_login_id** | **int**| userLoginId |

### Return type

[**\Swagger\Client\Model\PaymentRecord**](../Model/PaymentRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentRecordHistoryUsingGET**
> \Swagger\Client\Model\PaymentRecordChange[] getPaymentRecordHistoryUsingGET($payment_record_id)

Visszaadja az egy payment recordhoz tartozó history-t

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$payment_record_id = 789; // int | paymentRecordId

try {
    $result = $api_instance->getPaymentRecordHistoryUsingGET($payment_record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->getPaymentRecordHistoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_record_id** | **int**| paymentRecordId |

### Return type

[**\Swagger\Client\Model\PaymentRecordChange[]**](../Model/PaymentRecordChange.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentRecordUsingGET**
> \Swagger\Client\Model\PaymentRecord getPaymentRecordUsingGET($payment_record_id)

Visszaadja a payment recordhot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$payment_record_id = 789; // int | paymentRecordId

try {
    $result = $api_instance->getPaymentRecordUsingGET($payment_record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->getPaymentRecordUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_record_id** | **int**| paymentRecordId |

### Return type

[**\Swagger\Client\Model\PaymentRecord**](../Model/PaymentRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentRecordsUsingGET**
> \Swagger\Client\Model\PaymentRecord[] getPaymentRecordsUsingGET($user_id)

Listázza az egy loginhoz tartozó fizetéseket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$user_id = 789; // int | userId

try {
    $result = $api_instance->getPaymentRecordsUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->getPaymentRecordsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId |

### Return type

[**\Swagger\Client\Model\PaymentRecord[]**](../Model/PaymentRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBackendActionTakenUsingPOST**
> \Swagger\Client\Model\PaymentRecord setBackendActionTakenUsingPOST($backend_action_taken, $payment_record_id)

Frissíti a backend action taken  metaadatot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$backend_action_taken = true; // bool | backendActionTaken
$payment_record_id = 789; // int | paymentRecordId

try {
    $result = $api_instance->setBackendActionTakenUsingPOST($backend_action_taken, $payment_record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->setBackendActionTakenUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backend_action_taken** | **bool**| backendActionTaken |
 **payment_record_id** | **int**| paymentRecordId |

### Return type

[**\Swagger\Client\Model\PaymentRecord**](../Model/PaymentRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStatusUsingPOST**
> \Swagger\Client\Model\PaymentRecord updateStatusUsingPOST($new_status, $payment_record_id)

Frissíti a fizetést, visszaad egy új

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$new_status = "new_status_example"; // string | newStatus
$payment_record_id = 789; // int | paymentRecordId

try {
    $result = $api_instance->updateStatusUsingPOST($new_status, $payment_record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->updateStatusUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_status** | **string**| newStatus |
 **payment_record_id** | **int**| paymentRecordId |

### Return type

[**\Swagger\Client\Model\PaymentRecord**](../Model/PaymentRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransactionIDUsingPOST**
> \Swagger\Client\Model\PaymentRecord updateTransactionIDUsingPOST($payment_record_id, $transaction_id)

Frissíti a Payment Gateway transaction ID-t

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\PaymentrecordrestApi();
$payment_record_id = 789; // int | paymentRecordId
$transaction_id = "transaction_id_example"; // string | transactionID

try {
    $result = $api_instance->updateTransactionIDUsingPOST($payment_record_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentrecordrestApi->updateTransactionIDUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_record_id** | **int**| paymentRecordId |
 **transaction_id** | **string**| transactionID |

### Return type

[**\Swagger\Client\Model\PaymentRecord**](../Model/PaymentRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

