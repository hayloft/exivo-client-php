# Swagger\Client\AccessZoneApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessZone**](AccessZoneApi.md#getAccessZone) | **GET** /{siteId}/accesszone/{accessZoneId} | get access zone by ID
[**getAccessZones**](AccessZoneApi.md#getAccessZones) | **GET** /{siteId}/accessZone | get all access zones


# **getAccessZone**
> \Swagger\Client\Model\AccessZone getAccessZone($site_id, $access_zone_id)

get access zone by ID

Returns the access zone with the given id. If no access zone with this id exists a 404 status code and a empty body is returned. An access zone consist of `id`, `name` and `color`. The `id` is the uuid string that uniquely identifies the access zone. The `name` property contains the name of the access zone and the `color` property contains the name of the color which is used in the exivo app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccessZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$access_zone_id = "access_zone_id_example"; // string | ID of access zone to return

try {
    $result = $apiInstance->getAccessZone($site_id, $access_zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessZoneApi->getAccessZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **access_zone_id** | **string**| ID of access zone to return |

### Return type

[**\Swagger\Client\Model\AccessZone**](../Model/AccessZone.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessZones**
> \Swagger\Client\Model\AccessZone[] getAccessZones($site_id, $skip, $limit, $sort, $sort_dir)

get all access zones

Returns an array with all the access zones of the site. If the site doesn't have any access zones an empty array is returned. An access zone consist of `id`, `name` and `color`. The `id` is the uuid string that uniquely identifies the access zone. The `name` property contains the name of the access zone and the `color` property contains the name of the color which is used in the exivo app. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccessZoneApi(
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
    $result = $apiInstance->getAccessZones($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessZoneApi->getAccessZones: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AccessZone[]**](../Model/AccessZone.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

