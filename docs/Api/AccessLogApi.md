# Exivo\AccessLogApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getComponentAccessLog**](AccessLogApi.md#getComponentAccessLog) | **GET** /{siteId}/accesslog/component | get components access log
[**getComponentAccessLogForOne**](AccessLogApi.md#getComponentAccessLogForOne) | **GET** /{siteId}/accesslog/component/{componentId} | get component&#39;s access log
[**getPersonAccessLog**](AccessLogApi.md#getPersonAccessLog) | **GET** /{siteId}/accesslog/person | get persons access log
[**getPersonAccessLogForOne**](AccessLogApi.md#getPersonAccessLogForOne) | **GET** /{siteId}/accesslog/person/{personId} | get person&#39;s access log


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


$apiInstance = new Exivo\Api\AccessLogApi(
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
    echo 'Exception when calling AccessLogApi->getComponentAccessLog: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Exivo\Api\AccessLogApi(
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
    echo 'Exception when calling AccessLogApi->getComponentAccessLogForOne: ', $e->getMessage(), PHP_EOL;
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

# **getPersonAccessLog**
> \Exivo\Model\AccessLogEntry[] getPersonAccessLog($site_id, $skip, $limit, $sort, $sort_dir, $from, $to)

get persons access log



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessLogApi(
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
    $result = $apiInstance->getPersonAccessLog($site_id, $skip, $limit, $sort, $sort_dir, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessLogApi->getPersonAccessLog: ', $e->getMessage(), PHP_EOL;
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

# **getPersonAccessLogForOne**
> \Exivo\Model\AccessLogEntry[] getPersonAccessLogForOne($site_id, $person_id, $skip, $limit, $sort, $sort_dir, $from, $to)

get person's access log



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to return
$skip = 0; // int | for pagination
$limit = 0; // int | for pagination
$sort = "sort_example"; // string | for pagination
$sort_dir = "asc"; // string | for pagination
$from = new \DateTime("2013-10-20"); // \DateTime | e.g. \"2013-10-22\"
$to = new \DateTime("2013-10-20"); // \DateTime | e.g. \"2013-10-23\"

try {
    $result = $apiInstance->getPersonAccessLogForOne($site_id, $person_id, $skip, $limit, $sort, $sort_dir, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessLogApi->getPersonAccessLogForOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to return |
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

