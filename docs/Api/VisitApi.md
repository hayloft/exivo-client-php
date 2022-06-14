# Swagger\Client\VisitApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delegateUnlockDoor**](VisitApi.md#delegateUnlockDoor) | **POST** /{siteId}/visit | Creates a new visit
[**getVisit**](VisitApi.md#getVisit) | **GET** /{siteId}/visit/{visitId} | Retrieve a visit.
[**getVisits**](VisitApi.md#getVisits) | **GET** /{siteId}/visit | Retrieve a list with all the visits.
[**revokeUnlockDoorDelegation**](VisitApi.md#revokeUnlockDoorDelegation) | **POST** /{siteId}/visit/{visitId}/revoke | Revoke visit


# **delegateUnlockDoor**
> \Swagger\Client\Model\Visit delegateUnlockDoor($site_id, $body)

Creates a new visit

Create new visits that allow visitor doors remotly with a link and a code. A new visit consists of `email`, `smsNr`, `code`, `validFrom`, `validTo`, `components`, `name` and `message`. `code`, `validFrom`, `validTo`, `components` and either `email` or `smsNr` are required properties. To define where a visit invitation is sent to specify either the `smsNr` or the `email` property. Only one is needed and if both are specified only a sms is sent out. The `smsNr` needs to be a string that represents a correct phone number. The `email` property demands a correctly formated email address. The `code` is a 4-6 digit number and functions as second factor to secure the doors. It has to be entered before a door can be opened. It isn't send with the link and should be communicated over an other communication channel. The `validFrom` to `validTo` properties define the time frame during which the door can be opened. The time has to be UTC and according to the RFC 3339 definition. The `validTo` time needs to be in the future. The `components` property consists an array with all the ids of components the visitor is allowed open. The optional `name` property helps to identify and log the visits. With the optional `message` property the invitation message can be customized. If a visit is created for a component with alarm in it's `templateIdentifier` it's possible that a false alarm is triggered if the visit occurs during a time the alarm is activated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VisitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Swagger\Client\Model\VisitPayload(); // \Swagger\Client\Model\VisitPayload | visit properties

try {
    $result = $apiInstance->delegateUnlockDoor($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->delegateUnlockDoor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Swagger\Client\Model\VisitPayload**](../Model/VisitPayload.md)| visit properties |

### Return type

[**\Swagger\Client\Model\Visit**](../Model/Visit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVisit**
> \Swagger\Client\Model\Visit getVisit($site_id, $visit_id)

Retrieve a visit.

Retrieve a visit. A visit consists of `id`, `name`, `message`, `email`, `smsNr`, `code`, `validFrom`, `validTo`, `components`, `expired`, `revoked`. If a sites has no visits an empty array is returned. The `id` is an uuidv4 string that uniquely identify a site. Either the `email` or the `smsNr` property has to be supplied to specify where the visit is sent. The property `code` is a 4-6 digit pin to offer a second authentication factor. The code is not send in the email or the sms. The `validFrom` and the `validTo` properties are RFC 3339 UTC timestamps which specify the time frame of the visit. When the visit expires the `expired` property is set to true. The `components` property is an array of all the componentIds the visitor is allowed to open. If either of the boolean properties `expired` or `revoked` is true the visitor has no access anymore. The `name` property is a optional property to identify and log the visitor. With the optional `message` property the message sent to the visitor can be customized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VisitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$visit_id = "visit_id_example"; // string | ID of visit

try {
    $result = $apiInstance->getVisit($site_id, $visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->getVisit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **visit_id** | **string**| ID of visit |

### Return type

[**\Swagger\Client\Model\Visit**](../Model/Visit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVisits**
> \Swagger\Client\Model\Visit[] getVisits($site_id, $skip, $limit, $sort, $sort_dir)

Retrieve a list with all the visits.

Retrieve an array of visits. Every visit consists of `id`, `name`, `message`, `email`, `smsNr`, `code`, `validFrom`, `validTo`, `components`, `expired`, `revoked`. If a sites has no visits an empty array is returned. The `id` is an uuidv4 string that uniquely identify a site. Either the `email` or the `smsNr` property has to be supplied to specify where the visit is sent. The property `code` is a 4-6 digit pin to offer a second authentication factor. The code is not send in the email or the sms. The `validFrom` and the `validTo` properties are RFC 3339 UTC timestamps which specify the time frame of the visit. When the visit expires the `expired` property is set to true. The `components` property is an array of all the componentIds the visitor is allowed to open. If either of the boolean properties `expired` or `revoked` is true the visitor has no access anymore. The `name` property is a optional property to identify and log the visitor. With the optional `message` property the message sent to the visitor can be customized. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VisitApi(
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
    $result = $apiInstance->getVisits($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->getVisits: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Visit[]**](../Model/Visit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeUnlockDoorDelegation**
> revokeUnlockDoorDelegation($site_id, $visit_id, $body)

Revoke visit

Revoke a visit. After a visit has been revoked the visitor can't open a door with the visit link anymore. The visit doesn't get deleted but the `revoked` property is set to true. A revoked visit can't be unrevoked, a new visit has to be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\VisitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$visit_id = "visit_id_example"; // string | ID of visit
$body = new \stdClass; // object | 

try {
    $apiInstance->revokeUnlockDoorDelegation($site_id, $visit_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling VisitApi->revokeUnlockDoorDelegation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **visit_id** | **string**| ID of visit |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

