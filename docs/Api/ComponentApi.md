# Exivo\ComponentApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getComponent**](ComponentApi.md#getComponent) | **GET** /{siteId}/component/{componentId} | get component by ID
[**getComponentAccessLog**](ComponentApi.md#getComponentAccessLog) | **GET** /{siteId}/accesslog/component | get components access log
[**getComponentAccessLogForOne**](ComponentApi.md#getComponentAccessLogForOne) | **GET** /{siteId}/accesslog/component/{componentId} | get component&#39;s access log
[**getComponents**](ComponentApi.md#getComponents) | **GET** /{siteId}/component | get all components
[**setComponentOperatingMode**](ComponentApi.md#setComponentOperatingMode) | **POST** /{siteId}/component/{componentId}/mode | Set operating mode of a component
[**unlock**](ComponentApi.md#unlock) | **POST** /{siteId}/component/{componentId}/unlock | Unlock a door


# **getComponent**
> \Exivo\Model\Component getComponent($site_id, $component_id)

get component by ID

Returns the component with the given id. If no component with this id exists a 404 status code and a empty body is returned. A component consist of `id`, `identifier`, `labelling`, `remarks`, `accessZones`, `mode` and `templateIdentifier`. The `id` is the uuid string that uniquely identifies the component. The `identifer` is a string used to name the component. The `labeling` property allows further descriptions of the component and it's location. The `remarks` property can contain further information about the component. The `accessZones` property contains an array with up to 2 elements. Each element is an accessZoneId in the form of a uuidv4 string. The `templateIdentifier` shows the type of the component.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$component_id = "component_id_example"; // string | ID of component to return

try {
    $result = $apiInstance->getComponent($site_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->getComponent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **component_id** | **string**| ID of component to return |

### Return type

[**\Exivo\Model\Component**](../Model/Component.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponentAccessLog**
> \Exivo\Model\AccessLogEntry[] getComponentAccessLog($site_id, $skip, $limit, $sort, $sort_dir, $from, $to)

get components access log



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\ComponentApi(
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
$from = new \DateTime("2013-10-20"); // \DateTime | e.g. \"2013-10-22\"
$to = new \DateTime("2013-10-20"); // \DateTime | e.g. \"2013-10-23\"

try {
    $result = $apiInstance->getComponentAccessLog($site_id, $skip, $limit, $sort, $sort_dir, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->getComponentAccessLog: ', $e->getMessage(), PHP_EOL;
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
 **from** | **\DateTime**| e.g. \&quot;2013-10-22\&quot; | [optional]
 **to** | **\DateTime**| e.g. \&quot;2013-10-23\&quot; | [optional]

### Return type

[**\Exivo\Model\AccessLogEntry[]**](../Model/AccessLogEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponentAccessLogForOne**
> \Exivo\Model\AccessLogEntry[] getComponentAccessLogForOne($site_id, $component_id, $skip, $limit, $sort, $sort_dir, $from, $to)

get component's access log



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$component_id = "component_id_example"; // string | ID of component to return
$skip = 0; // int | for pagination
$limit = 0; // int | for pagination
$sort = "sort_example"; // string | for pagination
$sort_dir = "asc"; // string | for pagination
$from = new \DateTime("2013-10-20"); // \DateTime | e.g. \"2013-10-22\"
$to = new \DateTime("2013-10-20"); // \DateTime | e.g. \"2013-10-23\"

try {
    $result = $apiInstance->getComponentAccessLogForOne($site_id, $component_id, $skip, $limit, $sort, $sort_dir, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->getComponentAccessLogForOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **component_id** | **string**| ID of component to return |
 **skip** | **int**| for pagination | [optional] [default to 0]
 **limit** | **int**| for pagination | [optional] [default to 0]
 **sort** | **string**| for pagination | [optional]
 **sort_dir** | **string**| for pagination | [optional] [default to asc]
 **from** | **\DateTime**| e.g. \&quot;2013-10-22\&quot; | [optional]
 **to** | **\DateTime**| e.g. \&quot;2013-10-23\&quot; | [optional]

### Return type

[**\Exivo\Model\AccessLogEntry[]**](../Model/AccessLogEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponents**
> \Exivo\Model\Component[] getComponents($site_id, $skip, $limit, $sort, $sort_dir)

get all components

Returns an array with all components of the site. If the site doesn't have any components with assigned hardware an empty array is returned. A component consist of `id`, `identifier`, `labelling`, `remarks`, `accessZones`, `mode` and `templateIdentifier`. The `id` is the uuid string that uniquely identifies the component. The `identifer` is a string used to name the component. The `labeling` property allows further descriptions of the component and it's location. The `remarks` property can contain further information about the component. The `accessZones` property contains an array with up to 2 elements. Each element is an accessZoneId in the form of a uuidv4 string. The `templateIdentifier` shows the type of the component. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\ComponentApi(
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
    $result = $apiInstance->getComponents($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->getComponents: ', $e->getMessage(), PHP_EOL;
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

[**\Exivo\Model\Component[]**](../Model/Component.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setComponentOperatingMode**
> setComponentOperatingMode($site_id, $component_id, $body)

Set operating mode of a component

Set operating mode of a component with `componentId`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$component_id = "component_id_example"; // string | ID of component
$body = new \Exivo\Model\SetOperatingModePayload(); // \Exivo\Model\SetOperatingModePayload | 

try {
    $apiInstance->setComponentOperatingMode($site_id, $component_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->setComponentOperatingMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **component_id** | **string**| ID of component |
 **body** | [**\Exivo\Model\SetOperatingModePayload**](../Model/SetOperatingModePayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlock**
> unlock($site_id, $component_id, $body)

Unlock a door

Unlock a door with `componentId`. A request to unlock the door will be sent. This is only a request so there is no guarantee the door will be unlocked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$component_id = "component_id_example"; // string | ID of component
$body = new \Exivo\Model\UnlockPayload(); // \Exivo\Model\UnlockPayload | 

try {
    $apiInstance->unlock($site_id, $component_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->unlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **component_id** | **string**| ID of component |
 **body** | [**\Exivo\Model\UnlockPayload**](../Model/UnlockPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

