# Exivo\SpecialDayApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeSpecialDays**](SpecialDayApi.md#changeSpecialDays) | **POST** /{siteId}/specialdays | changes the configuration of special days
[**getSpecialDays**](SpecialDayApi.md#getSpecialDays) | **GET** /{siteId}/specialdays | get all special days


# **changeSpecialDays**
> \Exivo\Model\SpecialDays changeSpecialDays($site_id, $body)

changes the configuration of special days

As body it expects an array of commands, where every command is an object with a `date` in format `YYYY-DD-MM` and one of the instructions: `setA`, `setB` or `remove`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\SpecialDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \stdClass; // object | special day changes

try {
    $result = $apiInstance->changeSpecialDays($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecialDayApi->changeSpecialDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | **object**| special day changes |

### Return type

[**\Exivo\Model\SpecialDays**](../Model/SpecialDays.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSpecialDays**
> \Exivo\Model\SpecialDays getSpecialDays($site_id)

get all special days

Returns all special days for the specified site as an array of objects containing the date in format `YYYY-MM-DD` and the type of the special day (`\"a\"` or `\"b\"`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\SpecialDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work

try {
    $result = $apiInstance->getSpecialDays($site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecialDayApi->getSpecialDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |

### Return type

[**\Exivo\Model\SpecialDays**](../Model/SpecialDays.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

