# Exivo\MediumApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateMedium**](MediumApi.md#activateMedium) | **POST** /{siteId}/medium/{mediumId}/activate | Activate medium by id
[**assignMedium**](MediumApi.md#assignMedium) | **POST** /{siteId}/person/{personId}/assign/medium/{mediumId} | Assign medium to person
[**blockMedium**](MediumApi.md#blockMedium) | **POST** /{siteId}/medium/{mediumId}/block | Block medium by id
[**getMedia**](MediumApi.md#getMedia) | **GET** /{siteId}/medium | get all media
[**getMedium**](MediumApi.md#getMedium) | **GET** /{siteId}/medium/{mediumId} | get medium by ID
[**registerMedium**](MediumApi.md#registerMedium) | **POST** /{siteId}/medium | Register a new medium
[**unassignMedium**](MediumApi.md#unassignMedium) | **POST** /{siteId}/person/{personId}/unassign/medium/{mediumId} | Unassign medium from person
[**unregisterMedium**](MediumApi.md#unregisterMedium) | **DELETE** /{siteId}/medium/{mediumId} | Unregister a medium


# **activateMedium**
> activateMedium($site_id, $medium_id, $body)

Activate medium by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \Exivo\Model\ActivateMediumPayload(); // \Exivo\Model\ActivateMediumPayload | activate digital key properties

try {
    $apiInstance->activateMedium($site_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->activateMedium: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **medium_id** | **string**| ID of medium |
 **body** | [**\Exivo\Model\ActivateMediumPayload**](../Model/ActivateMediumPayload.md)| activate digital key properties | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignMedium**
> assignMedium($site_id, $person_id, $medium_id, $body)

Assign medium to person

Assign a medium with `mediumId` to a person with the `personId`. The medium switches in state `active` and can be used to access the site as specified in the persons access group. If the person already has a medium assigned it automatically switches into `state` blocked and can't be used anymore. The medium has to be registered on the site and in `state` `assignable`, else error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \Exivo\Model\AssignMediumPayload(); // \Exivo\Model\AssignMediumPayload | 

try {
    $apiInstance->assignMedium($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->assignMedium: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | [**\Exivo\Model\AssignMediumPayload**](../Model/AssignMediumPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockMedium**
> blockMedium($site_id, $medium_id, $body)

Block medium by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \stdClass; // object | 

try {
    $apiInstance->blockMedium($site_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->blockMedium: ', $e->getMessage(), PHP_EOL;
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

# **getMedia**
> \Exivo\Model\Medium[] getMedia($site_id, $skip, $limit, $sort, $sort_dir)

get all media

Returns an array with all the media of the site. If the site doesn't have any media registered, an empty array is returned. A medium consist of `id`, (`cid` or `uid`), `formFactor`, `state`, `personId`, `caption` and `description`. The `id` is the uuid string that uniquely identifies the medium in the exivo system. The `cid` is a hexadecimal card number found on all the smart media: *(key fob, badge, smart key)*. The `uid` is a hexadecimal card number found on all the insecure media. A key doesn't have a cid and a uid. The `formFactor` describes to type of the medium. There are four types *keyfob*, *badge*, *smartkey* and *key*. The `state` can be *assignable*, *active*, *blocked*, *damaged* or *lost*. The `personId` property contains the id of the person the medium is assigned to. If no person is assigned the field is `null`. The `caption` and the `description` properties are only used for keys. They help to identify a key. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
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
    $result = $apiInstance->getMedia($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->getMedia: ', $e->getMessage(), PHP_EOL;
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

[**\Exivo\Model\Medium[]**](../Model/Medium.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMedium**
> \Exivo\Model\Medium getMedium($site_id, $medium_id)

get medium by ID

Returns the medium with the given id. If the site doesn't have a registered medium with this id the status code 404 and an empty body is returned. A medium consist of `id`, `cid`, `formFactor`, `state`, `personId`, `caption` and `description`. The `id` is the uuid string that uniquely identifies the medium in the exivo system. The `cid` is a hexadecimal card number found on all the smart media: *(key fob, badge, smart key)*. A key doesn't have an cid. The `formFactor` describes to type of the medium. There are four types *keyfob*, *badge*, *smartkey* and *key*. The `state` can be *assignable*, *active*, *blocked*, *damaged* or *lost*. The `personId` property contains the id of the person the medium is assigned to. If no person is assigned the field is `null`. The `caption` and the `description` properties are only used for keys. They help to identify a key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium to return

try {
    $result = $apiInstance->getMedium($site_id, $medium_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->getMedium: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **medium_id** | **string**| ID of medium to return |

### Return type

[**\Exivo\Model\Medium**](../Model/Medium.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerMedium**
> \Exivo\Model\Medium registerMedium($site_id, $body)

Register a new medium

Register a new medium. This request takes a json object with the properties: `cid`, `formFactor`. The property `cid` is the card number (no leading zeros) and the property `formFactor` accepts one of the *strings*: *\"badge\", \"keyfob\", \"smartkey\"*. The generated `id` of the medium gets returned with the response of this request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Exivo\Model\MediumPayload(); // \Exivo\Model\MediumPayload | medium properties

try {
    $result = $apiInstance->registerMedium($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->registerMedium: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Exivo\Model\MediumPayload**](../Model/MediumPayload.md)| medium properties |

### Return type

[**\Exivo\Model\Medium**](../Model/Medium.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignMedium**
> unassignMedium($site_id, $person_id, $medium_id, $body)

Unassign medium from person

Unassign the medium with `mediumId` from the person with the `personId`. The medium gets removed from the person and switches to `state` assignable. If no person with `personId` exists on the site or no medium with `mediumId` is registered to the site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
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
    $apiInstance->unassignMedium($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->unassignMedium: ', $e->getMessage(), PHP_EOL;
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

# **unregisterMedium**
> unregisterMedium($site_id, $medium_id)

Unregister a medium

Unregister a medium with the given id. If the medium was assigned to a person it make sure you return it. If no medium with the `mediumId` exists for this site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\MediumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$medium_id = "medium_id_example"; // string | ID of medium to return

try {
    $apiInstance->unregisterMedium($site_id, $medium_id);
} catch (Exception $e) {
    echo 'Exception when calling MediumApi->unregisterMedium: ', $e->getMessage(), PHP_EOL;
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

