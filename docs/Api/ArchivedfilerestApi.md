# Sunday\ArchiveClient\ArchivedfilerestApi

All URIs are relative to *https://136.144.173.90:8008/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveNewFileUsingPOST**](ArchivedfilerestApi.md#archiveNewFileUsingPOST) | **POST** /file/archive/{userId} | Új fájl archiválása. Nem szükséges megadni: id, archiveDate, retentionExpire, revision. Muszáj megadni: description, documentType, fileContents, fileName
[**getUserFilesUsingGET**](ArchivedfilerestApi.md#getUserFilesUsingGET) | **GET** /file/list/{userId} | Visszaadja a felhasználóhoz tartozó fájlok listáját. A fájlok tartalmát nem olvassa ki, és a fájlok
[**readFileUsingGET**](ArchivedfilerestApi.md#readFileUsingGET) | **GET** /file/{Id} | readFile
[**readRevisionsUsingGET**](ArchivedfilerestApi.md#readRevisionsUsingGET) | **GET** /file/readrevisions/{userId}/{fileName}/{withContents} | readRevisions
[**updateFileUsingPOST**](ArchivedfilerestApi.md#updateFileUsingPOST) | **POST** /file/update/{userId} | Létező fájlból új verzió archiválása.


# **archiveNewFileUsingPOST**
> \Swagger\Client\Model\ArchivedFile archiveNewFileUsingPOST($archived_file, $user_id)

Új fájl archiválása. Nem szükséges megadni: id, archiveDate, retentionExpire, revision. Muszáj megadni: description, documentType, fileContents, fileName

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\ArchivedfilerestApi();
$archived_file = new \Swagger\Client\Model\ArchivedFile(); // \Swagger\Client\Model\ArchivedFile | archivedFile
$user_id = 789; // int | userId

try {
    $result = $api_instance->archiveNewFileUsingPOST($archived_file, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivedfilerestApi->archiveNewFileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archived_file** | [**\Swagger\Client\Model\ArchivedFile**](../Model/\Swagger\Client\Model\ArchivedFile.md)| archivedFile |
 **user_id** | **int**| userId |

### Return type

[**\Swagger\Client\Model\ArchivedFile**](../Model/ArchivedFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserFilesUsingGET**
> \Swagger\Client\Model\ArchivedFile[] getUserFilesUsingGET($user_id)

Visszaadja a felhasználóhoz tartozó fájlok listáját. A fájlok tartalmát nem olvassa ki, és a fájlok

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\ArchivedfilerestApi();
$user_id = 789; // int | userId

try {
    $result = $api_instance->getUserFilesUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivedfilerestApi->getUserFilesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| userId |

### Return type

[**\Swagger\Client\Model\ArchivedFile[]**](../Model/ArchivedFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readFileUsingGET**
> \Swagger\Client\Model\ArchivedFile readFileUsingGET($id)

readFile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\ArchivedfilerestApi();
$id = 789; // int | Id

try {
    $result = $api_instance->readFileUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivedfilerestApi->readFileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id |

### Return type

[**\Swagger\Client\Model\ArchivedFile**](../Model/ArchivedFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readRevisionsUsingGET**
> \Swagger\Client\Model\ArchivedFile[] readRevisionsUsingGET($file_name, $user_id, $with_contents)

readRevisions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\ArchivedfilerestApi();
$file_name = "file_name_example"; // string | fileName
$user_id = 789; // int | userId
$with_contents = true; // bool | withContents

try {
    $result = $api_instance->readRevisionsUsingGET($file_name, $user_id, $with_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivedfilerestApi->readRevisionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| fileName |
 **user_id** | **int**| userId |
 **with_contents** | **bool**| withContents |

### Return type

[**\Swagger\Client\Model\ArchivedFile[]**](../Model/ArchivedFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFileUsingPOST**
> \Swagger\Client\Model\ArchivedFile updateFileUsingPOST($archived_file, $user_id)

Létező fájlból új verzió archiválása.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Sunday\ArchiveClient\Api\ArchivedfilerestApi();
$archived_file = new \Swagger\Client\Model\ArchivedFile(); // \Swagger\Client\Model\ArchivedFile | archivedFile
$user_id = 789; // int | userId

try {
    $result = $api_instance->updateFileUsingPOST($archived_file, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivedfilerestApi->updateFileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archived_file** | [**\Swagger\Client\Model\ArchivedFile**](../Model/\Swagger\Client\Model\ArchivedFile.md)| archivedFile |
 **user_id** | **int**| userId |

### Return type

[**\Swagger\Client\Model\ArchivedFile**](../Model/ArchivedFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

