# Swagger\Client\DigitalKeyApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateDigitalKey**](DigitalKeyApi.md#activateDigitalKey) | **POST** /{siteId}/digitalKey/{mediumId}/activate | Activate digital key by id
[**assignDigitalKey**](DigitalKeyApi.md#assignDigitalKey) | **POST** /{siteId}/person/{personId}/assign/digitalKey/{mediumId} | Assign digital key to person
[**blockDigitalKey**](DigitalKeyApi.md#blockDigitalKey) | **POST** /{siteId}/digitalKey/{mediumId}/block | Block digital key by id
[**getDigitalKey**](DigitalKeyApi.md#getDigitalKey) | **GET** /{siteId}/digitalKey/{mediumId} | get digital key by ID
[**getDigitalKeys**](DigitalKeyApi.md#getDigitalKeys) | **GET** /{siteId}/digitalKey | get all assigned digital keys
[**registerDigitalKey**](DigitalKeyApi.md#registerDigitalKey) | **POST** /{siteId}/digitalKey | Register a new digital key
[**unassignDigitalKey**](DigitalKeyApi.md#unassignDigitalKey) | **POST** /{siteId}/person/{personId}/unassign/digitalKey/{mediumId} | Unassign digital key from person
[**unregisterDigitalKey**](DigitalKeyApi.md#unregisterDigitalKey) | **DELETE** /{siteId}/digitalKey/{mediumId} | Unregister a digital key


# **activateDigitalKey**
> activateDigitalKey($site_id, $medium_id, $body)

Activate digital key by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \Swagger\Client\Model\ActivateDigitalKeyPayload(); // \Swagger\Client\Model\ActivateDigitalKeyPayload | activate digital key properties

try {
    $apiInstance->activateDigitalKey($site_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->activateDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **medium_id** | **string**| ID of medium |
 **body** | [**\Swagger\Client\Model\ActivateDigitalKeyPayload**](../Model/ActivateDigitalKeyPayload.md)| activate digital key properties | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignDigitalKey**
> assignDigitalKey($site_id, $person_id, $medium_id, $body)

Assign digital key to person

Assign a medium with `mediumId` to a person with the `personId`. If The medium switches in state `active` it can be used to access the site as specified in the persons access group. If the person already has the digital key assigned it automatically switches into `state` blocked and can't be used anymore. The medium has to be registered on the site and in `state` `assignable`, else error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \Swagger\Client\Model\AssignMediumPayload(); // \Swagger\Client\Model\AssignMediumPayload | 

try {
    $apiInstance->assignDigitalKey($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->assignDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | [**\Swagger\Client\Model\AssignMediumPayload**](../Model/AssignMediumPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockDigitalKey**
> blockDigitalKey($site_id, $medium_id, $body)

Block digital key by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \stdClass; // object | 

try {
    $apiInstance->blockDigitalKey($site_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->blockDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **medium_id** | **string**| ID of medium |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDigitalKey**
> \Swagger\Client\Model\DigitalKey getDigitalKey($site_id, $medium_id)

get digital key by ID

Returns the digital key with the given id. If the site doesn't have a registered digital key with this id the status code 404 and an empty body is returned. A medium consist of `id`, `cid`, `formFactor`, `state`, `personId`, `caption` and `description`. The `id` is the uuid string that uniquely identifies the digital key in the exivo system. The `cid` is a hexadecimal number assigned to digital key by Legic mobile access service. The `formFactor` describes to type of the medium. There are three types of digital keys: *ma-phone*, *ma-email* and *ma-custom* (UID format). The `state` can be *assignable*, *assignableButPending*, *assignedButPending* , *assigned*, *active*, *blocked*, *damaged* or *lost*. The `personId` property contains the id of the person the digital key is assigned to. If no person is assigned the field is `null`. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of digital key to return

try {
    $result = $apiInstance->getDigitalKey($site_id, $medium_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->getDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **medium_id** | **string**| ID of digital key to return |

### Return type

[**\Swagger\Client\Model\DigitalKey**](../Model/DigitalKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDigitalKeys**
> \Swagger\Client\Model\DigitalKey[] getDigitalKeys($site_id, $skip, $limit, $sort, $sort_dir)

get all assigned digital keys

Returns an array with all the digital keys of the site. If the site doesn't have any digital keys registered, an empty array is returned. A digital key consist of `id`, `cid`, `formFactor`, `state`, `personId`, `caption` and `description`. The `id` is the uuid string that uniquely identifies the digital key in the exivo system. The `cid` is a hexadecimal number assigned to the digital key by Legic mobile access service. The `formFactor` describes to type of the digital key. There are three types of digital keys: *ma-phone*, *ma-email* and *ma-custom*. The `state` can be *assignable*, *assignableButPending*, *assignedButPending* , *assigned*, *active*, *blocked*, *damaged* or *lost*. The `personId` property contains the id of the person the digital key is assigned to. If no person is assigned the field is `null`. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$skip = 0; // int | for pagination
$limit = 0; // int | for pagination
$sort = "sort_example"; // string | for pagination
$sort_dir = "asc"; // string | for pagination

try {
    $result = $apiInstance->getDigitalKeys($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->getDigitalKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **skip** | **int**| for pagination | [optional] [default to 0]
 **limit** | **int**| for pagination | [optional] [default to 0]
 **sort** | **string**| for pagination | [optional]
 **sort_dir** | **string**| for pagination | [optional] [default to asc]

### Return type

[**\Swagger\Client\Model\DigitalKey[]**](../Model/DigitalKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerDigitalKey**
> \Swagger\Client\Model\DigitalKey registerDigitalKey($site_id, $body)

Register a new digital key

Register a new digital key. This request takes a json object with the properties: `publicRegistrationId`, `mobileAppId` and `formFactor`. The property `publicRegistrationId` is #phone, #mail or #custom where the mobile access key will be sent. The property `mobileAppId` is the mobile application installed on the mobile phone where the digital key will be stored. The property `formFactor` accepts one of the strings *strings*: *\"ma-phone\", \"ma-email\" or \"ma-custom\"*. The property `installNotification` toggles if a notification is sent in case user has no app installed on mobile device. The property `callbackUri` will be executed if `formFactor` is \"ma-custom\" and needs to be notified that no app is installed on mobile device. The generated `id` of the medium gets returned with the response of this request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Swagger\Client\Model\DigitalKeyPayload(); // \Swagger\Client\Model\DigitalKeyPayload | medium properties

try {
    $result = $apiInstance->registerDigitalKey($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->registerDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Swagger\Client\Model\DigitalKeyPayload**](../Model/DigitalKeyPayload.md)| medium properties |

### Return type

[**\Swagger\Client\Model\DigitalKey**](../Model/DigitalKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignDigitalKey**
> unassignDigitalKey($site_id, $person_id, $medium_id, $body)

Unassign digital key from person

Unassign the digital key with `mediumId` from the person with the `personId`. The medium gets removed from the person and switches to `state` assignable. If no person with `personId` exists on the site or no digital key with `mediumId` is registered to the site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \stdClass; // object | 

try {
    $apiInstance->unassignDigitalKey($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->unassignDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unregisterDigitalKey**
> unregisterDigitalKey($site_id, $medium_id)

Unregister a digital key

Unregister a digital key with the given id. If the digital key was assigned to a person it make sure you return it. If no digital key with the `mediumId` exists for this site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium to return

try {
    $apiInstance->unregisterDigitalKey($site_id, $medium_id);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyApi->unregisterDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **medium_id** | **string**| ID of medium to return |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

