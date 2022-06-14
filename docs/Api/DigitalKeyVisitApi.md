# Swagger\Client\DigitalKeyVisitApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDigitalKeyVisit**](DigitalKeyVisitApi.md#createDigitalKeyVisit) | **POST** /{siteId}/digitalKeyVisits | Creates a new digital key visit
[**getDigitalKeyVisit**](DigitalKeyVisitApi.md#getDigitalKeyVisit) | **GET** /{siteId}/digitalKeyVisit/{digitalKeyVisitId} | Retrieve a digital key visit.
[**getDigitalKeyVisits**](DigitalKeyVisitApi.md#getDigitalKeyVisits) | **GET** /{siteId}/digitalKeyVisits | Retrieve a list with all the digital key visits.
[**revokeDigitalKeyVisit**](DigitalKeyVisitApi.md#revokeDigitalKeyVisit) | **POST** /{siteId}/digitalKeyVisit/{digitalKeyVisitId}/revoke | Revoke digital key visit


# **createDigitalKeyVisit**
> \Swagger\Client\Model\DigitalKeyVisit createDigitalKeyVisit($site_id, $body)

Creates a new digital key visit

Create digital key visits that will be sent to a mobile app. The `name` property is a optional property to identify the visitor. The `components` property is an array of all the componentIds the visitor is allowed to open. The `validFrom` and the `validTo` properties must be RFC 3339 UTC timestamps which specify the time frame of the digital key visit. The `publicRegistrationId.formFactor` must be an enum of either 'ma-phone' / 'ma-email' / 'ma-custom'. The `publicRegistrationId.id` must be in the respective format. If 'ma-phone' is chosen, the id must be a phone number in the format: +4179XXXXXXX. If 'ma-custom' is chosen, a uuid v4 must be provided. The `mobileApp.name` can be used to display the name of the mobile app. The `mobileApp.id` must be the legic-ID of the mobile app. The ID can be found within the registered mobile apps. The `installNotification`, indicates whether or not the installNotification will be sent. It is a optional message sent to the user in order to inform him of downloading the mobile-app after he created the digital key visit. The `installNotification` will be sent over the channel chosen in the `publicRegistrationId.formFactor`, to the receiver chosen in `publicRegistrationId.id`. The `message` is an optional property and enhanced the standard installNotification message. The `callbackUri` is called if provided after the digital key was created and can be used as a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyVisitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Swagger\Client\Model\DigitalKeyVisitPayload(); // \Swagger\Client\Model\DigitalKeyVisitPayload | digital key visit properties

try {
    $result = $apiInstance->createDigitalKeyVisit($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyVisitApi->createDigitalKeyVisit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Swagger\Client\Model\DigitalKeyVisitPayload**](../Model/DigitalKeyVisitPayload.md)| digital key visit properties |

### Return type

[**\Swagger\Client\Model\DigitalKeyVisit**](../Model/DigitalKeyVisit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDigitalKeyVisit**
> \Swagger\Client\Model\DigitalKeyVisit getDigitalKeyVisit($site_id, $digital_key_visit_id)

Retrieve a digital key visit.

Retrieve a digital key visit. A digital key visit consists of: The `id` is an uuidv4 string that uniquely identify a digital key visit. The `validFrom` and the `validTo` properties are RFC 3339 UTC timestamps which specify the time frame of the digital key visit. The `components` property is an array of all the componentIds the visitor is allowed to open. The `expired` or `revoked` property set to true, indicate that the digital key visit is no longer authorized. The `name` property is a optional property to identify the visitor. The `publicRegistrationId.formFactor` is an enum of either 'ma-phone' / 'ma-email' / 'ma-custom'. The `publicRegistrationId.id` is the respective format. If 'ma-phone' is chosen, the id is a phone number in the format: +4179XXXXXXX. If 'ma-custom' is chosen, a uuid v4 must is provided. The `mobileApp.name` is the name of the mobile app. The `mobileApp.id` must be the legic-ID of the mobile app. The ID can be found within the registered mobile apps. The `installNotification`, indicates whether or not the installNotification was sent. It is a optional message sent to the user in order to inform him of downloading the mobile-app after he created the digital key visit. The `installNotification` was sent over the channel chosen in the `publicRegistrationId.formFactor`, to the receiver chosen in `publicRegistrationId.id`. The `message` is an optional property and enhanced the standard installNotification message. The `callbackUri` was called if provided after the digital key was created and can be used as a webhook. The `skip`, `limit`, `sort` and `sortDir` properties are optional and can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyVisitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$digital_key_visit_id = "digital_key_visit_id_example"; // string | ID of digital key visit

try {
    $result = $apiInstance->getDigitalKeyVisit($site_id, $digital_key_visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyVisitApi->getDigitalKeyVisit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **digital_key_visit_id** | **string**| ID of digital key visit |

### Return type

[**\Swagger\Client\Model\DigitalKeyVisit**](../Model/DigitalKeyVisit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDigitalKeyVisits**
> \Swagger\Client\Model\DigitalKeyVisit[] getDigitalKeyVisits($site_id, $skip, $limit, $sort, $sort_dir)

Retrieve a list with all the digital key visits.

Retrieve an array of digital key visits. If a sites has no digital key visits, an empty array is returned. Each digital key visit consists of: The `id` is an uuidv4 string that uniquely identify a digital key visit. The `validFrom` and the `validTo` properties are RFC 3339 UTC timestamps which specify the time frame of the digital key visit. The `components` property is an array of all the componentIds the visitor is allowed to open. The `expired` or `revoked` property set to true, indicate that the digital key visit is no longer authorized. The `name` property is a optional property to identify the visitor. The `publicRegistrationId.formFactor` is an enum of either 'ma-phone' / 'ma-email' / 'ma-custom'. The `publicRegistrationId.id` is the respective format. If 'ma-phone' is chosen, the id is a phone number in the format: +4179XXXXXXX. If 'ma-custom' is chosen, a uuid v4 must is provided. The `mobileApp.id` must be the legic-ID of the mobile app. The ID can be found within the registered mobile apps. The `installNotification`, indicates whether or not the installNotification was sent. It is a optional message sent to the user in order to inform him of downloading the mobile-app after he created the digital key visit. The `installNotification` was sent over the channel chosen in the `publicRegistrationId.formFactor`, to the receiver chosen in `publicRegistrationId.id`. The `message` is an optional property and enhanced the standard installNotification message. The `callbackUri` was called if provided after the digital key was created and can be used as a webhook. The `skip`, `limit`, `sort` and `sortDir` properties are optional and can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyVisitApi(
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
    $result = $apiInstance->getDigitalKeyVisits($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyVisitApi->getDigitalKeyVisits: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DigitalKeyVisit[]**](../Model/DigitalKeyVisit.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeDigitalKeyVisit**
> revokeDigitalKeyVisit($site_id, $digital_key_visit_id, $body)

Revoke digital key visit

Revoke a digital key visit. After a digital key visit has been revoked the visitor can't open a door with the mobile app anymore. The digital key visit doesn't get deleted but the `revoked` property is set to true. A revoked digital key visit can't be unrevoked, a new one has to be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DigitalKeyVisitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$digital_key_visit_id = "digital_key_visit_id_example"; // string | ID of digital key visit
$body = new \stdClass; // object | 

try {
    $apiInstance->revokeDigitalKeyVisit($site_id, $digital_key_visit_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DigitalKeyVisitApi->revokeDigitalKeyVisit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **digital_key_visit_id** | **string**| ID of digital key visit |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

