# Swagger\Client\TimeProfileApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**defineTimeProfile**](TimeProfileApi.md#defineTimeProfile) | **POST** /{siteId}/timeprofile | Creates a new time profile
[**getTimeProfile**](TimeProfileApi.md#getTimeProfile) | **GET** /{siteId}/timeprofile/{timeProfileId} | get time profile by ID
[**getTimeProfiles**](TimeProfileApi.md#getTimeProfiles) | **GET** /{siteId}/timeprofile | get all timeprofiles
[**redefineTimeProfile**](TimeProfileApi.md#redefineTimeProfile) | **POST** /{siteId}/timeprofile/{timeProfileId} | Updates the time profile
[**removeTimeProfile**](TimeProfileApi.md#removeTimeProfile) | **DELETE** /{siteId}/timeprofile/{timeProfileId} | Deletes a time profile


# **defineTimeProfile**
> \Swagger\Client\Model\TimeProfile defineTimeProfile($site_id, $body)

Creates a new time profile

As body it expects a fully specified time profile containing a name and an array of time ranges. A time range consists of a `start` and an `end` point denoting amount of minutes after the midnight (e.g., `360` would be 6 AM, and `1140` would be 7 PM), a `pinRequired` flag, and an array `days` containing week day numbers (as strings) from `\"0\"` to `\"6\"` (or `\"a\"`, `\"b\"` for special days), where the time range becomes effective. Where `\"0\"` is sunday and `\"6\"` saturday

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TimeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Swagger\Client\Model\TimeProfilePayload(); // \Swagger\Client\Model\TimeProfilePayload | time profile properties

try {
    $result = $apiInstance->defineTimeProfile($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeProfileApi->defineTimeProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Swagger\Client\Model\TimeProfilePayload**](../Model/TimeProfilePayload.md)| time profile properties |

### Return type

[**\Swagger\Client\Model\TimeProfile**](../Model/TimeProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeProfile**
> \Swagger\Client\Model\TimeProfile getTimeProfile($site_id, $time_profile_id)

get time profile by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TimeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$time_profile_id = "time_profile_id_example"; // string | ID of time profile to return

try {
    $result = $apiInstance->getTimeProfile($site_id, $time_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeProfileApi->getTimeProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **time_profile_id** | **string**| ID of time profile to return |

### Return type

[**\Swagger\Client\Model\TimeProfile**](../Model/TimeProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeProfiles**
> \Swagger\Client\Model\TimeProfile[] getTimeProfiles($site_id, $skip, $limit, $sort, $sort_dir)

get all timeprofiles

Returns all time profiles for the specified site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TimeProfileApi(
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
    $result = $apiInstance->getTimeProfiles($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeProfileApi->getTimeProfiles: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\TimeProfile[]**](../Model/TimeProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redefineTimeProfile**
> \Swagger\Client\Model\TimeProfile redefineTimeProfile($site_id, $time_profile_id, $body)

Updates the time profile

As body it expects a fully specified time profile like during the creation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TimeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$time_profile_id = "time_profile_id_example"; // string | ID of time profile to update
$body = new \Swagger\Client\Model\TimeProfilePayload(); // \Swagger\Client\Model\TimeProfilePayload | time profile properties

try {
    $result = $apiInstance->redefineTimeProfile($site_id, $time_profile_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeProfileApi->redefineTimeProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **time_profile_id** | **string**| ID of time profile to update |
 **body** | [**\Swagger\Client\Model\TimeProfilePayload**](../Model/TimeProfilePayload.md)| time profile properties |

### Return type

[**\Swagger\Client\Model\TimeProfile**](../Model/TimeProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTimeProfile**
> removeTimeProfile($site_id, $time_profile_id)

Deletes a time profile

Delete the time profile from the site. If the time profile is assigned to an access group, an error with status code 400 will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TimeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$time_profile_id = "time_profile_id_example"; // string | ID of time profile to delete

try {
    $apiInstance->removeTimeProfile($site_id, $time_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling TimeProfileApi->removeTimeProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **time_profile_id** | **string**| ID of time profile to delete |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

