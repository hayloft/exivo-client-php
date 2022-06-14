# Swagger\Client\SwisspassApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**register**](SwisspassApi.md#register) | **POST** /{siteId}/swisspass/register | registers exivo services in SwissPass customer&#39;s account
[**search**](SwisspassApi.md#search) | **POST** /{siteId}/swisspass/search | returns swisspass customer and card data


# **register**
> \Swagger\Client\Model\InlineResponse2001 register($site_id, $body)

registers exivo services in SwissPass customer's account

SwissPass API requires every service to register itself so that it appears in the list of services in customer's profile. The call returns the id of the record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SwisspassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | customer and service information

try {
    $result = $apiInstance->register($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwisspassApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)| customer and service information |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Swagger\Client\Model\InlineResponse200 search($site_id, $body)

returns swisspass customer and card data

The service requires the Swiss postal code and the card ID of a customer, and returns the personal data and card access tokens (ISO15693 and ISO14443A) of the corresponding customer. Returns 500 if the data couldn't be resolved successfully. Please note, that when the access tokens were sucessfuly registered as access media, one needs to register the access service at SwissPass API using the provided POST method (see below).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SwisspassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->search($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwisspassApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

