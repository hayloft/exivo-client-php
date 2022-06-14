# Exivo\SiteApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSiteInfo**](SiteApi.md#getSiteInfo) | **GET** /{siteId}/info | returns general site info


# **getSiteInfo**
> \Exivo\Model\SiteInfo getSiteInfo($site_id)

returns general site info

Get general site info by `siteId`. Returns an object with the properties `id`, `name`, `language` and `timeZone`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work

try {
    $result = $apiInstance->getSiteInfo($site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |

### Return type

[**\Exivo\Model\SiteInfo**](../Model/SiteInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

