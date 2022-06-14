# Exivo\AccessGroupApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignAccessGroup**](AccessGroupApi.md#assignAccessGroup) | **POST** /{siteId}/person/{personId}/assign/accessgroup/{accessGroupId} | Assign access group to person
[**assignAccessZone**](AccessGroupApi.md#assignAccessZone) | **POST** /{siteId}/accessgroup/{accessGroupId}/accesszone/{accessZoneId} | assign an access zone with a time profile
[**defineAccessGroup**](AccessGroupApi.md#defineAccessGroup) | **POST** /{siteId}/accessgroup | Define a new accessGroup
[**deleteAccessGroup**](AccessGroupApi.md#deleteAccessGroup) | **DELETE** /{siteId}/accessgroup/{accessGroupId} | delete an access group
[**getAccessGroup**](AccessGroupApi.md#getAccessGroup) | **GET** /{siteId}/accessgroup/{accessGroupId} | get access group by ID
[**getAccessGroups**](AccessGroupApi.md#getAccessGroups) | **GET** /{siteId}/accessgroup | get all access groups
[**unassignAccessGroup**](AccessGroupApi.md#unassignAccessGroup) | **POST** /{siteId}/person/{personId}/unassign/accessgroup | Unassign access group from person
[**unassignAccessZone**](AccessGroupApi.md#unassignAccessZone) | **DELETE** /{siteId}/accessgroup/{accessGroupId}/accesszone/{accessZoneId} | unassign the access zone from the access group
[**updateAccessGroup**](AccessGroupApi.md#updateAccessGroup) | **POST** /{siteId}/accessgroup/{accessGroupId} | update an access group


# **assignAccessGroup**
> assignAccessGroup($site_id, $person_id, $access_group_id, $body)

Assign access group to person

Assign an access group with `accessGroupId` to a person with `personId`. The person receives the access rights of this group. A person can only be assigned to one access group. If the person has already an assigned access group, the old group gets unassigned and the new group gets assigned. If the `personId` or the `accessGroupId` don't exists on the site an error status code 400 and an error message is returned. If a person is already assigned to the access group, an error with code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$access_group_id = "access_group_id_example"; // string | ID of access group
$body = new \stdClass; // object | 

try {
    $apiInstance->assignAccessGroup($site_id, $person_id, $access_group_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->assignAccessGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **access_group_id** | **string**| ID of access group |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignAccessZone**
> assignAccessZone($site_id, $access_group_id, $access_zone_id, $time_profile_id)

assign an access zone with a time profile

Assignes a new access zone to the access group with a time profile id in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$access_group_id = "access_group_id_example"; // string | ID of access group to change
$access_zone_id = "access_zone_id_example"; // string | ID of access zone to assign
$time_profile_id = "time_profile_id_example"; // string | The id of the time profile to use or ALWAYS or NEVER.

try {
    $apiInstance->assignAccessZone($site_id, $access_group_id, $access_zone_id, $time_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->assignAccessZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **access_group_id** | **string**| ID of access group to change |
 **access_zone_id** | **string**| ID of access zone to assign |
 **time_profile_id** | **string**| The id of the time profile to use or ALWAYS or NEVER. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defineAccessGroup**
> \Exivo\Model\Accessgroup defineAccessGroup($site_id, $body)

Define a new accessGroup

Define a new accessGroup. This request takes a json object with the properties: `name`. The property `name` is the name of the access group. The generated `id` of the accessGroup gets returned with the response of this request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Exivo\Model\AccessGroupPayload(); // \Exivo\Model\AccessGroupPayload | access group properties

try {
    $result = $apiInstance->defineAccessGroup($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->defineAccessGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Exivo\Model\AccessGroupPayload**](../Model/AccessGroupPayload.md)| access group properties |

### Return type

[**\Exivo\Model\Accessgroup**](../Model/Accessgroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccessGroup**
> deleteAccessGroup($site_id, $access_group_id)

delete an access group

Delete an access group by `accessGroupId`. Before an access group can be deleted all persons must be unassigned otherwise an error with status code 204 is returned. If no access group with the `accessGroupId` exists for this site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$access_group_id = "access_group_id_example"; // string | ID of access group to delete

try {
    $apiInstance->deleteAccessGroup($site_id, $access_group_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->deleteAccessGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **access_group_id** | **string**| ID of access group to delete |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessGroup**
> \Exivo\Model\Accessgroup getAccessGroup($site_id, $access_group_id)

get access group by ID

Returns the access zone with the given id. If no access zone with this id exists a 404 status code and a empty body is returned. An access group consists of `id`, `name` and `persons`. The `id` is the uuid string, that uniquely identifies the access group. The `name` property contains the name of the access group. The `persons` property contains an array of all the ids of persons assigned to this group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$access_group_id = "access_group_id_example"; // string | ID of access group to return

try {
    $result = $apiInstance->getAccessGroup($site_id, $access_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->getAccessGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **access_group_id** | **string**| ID of access group to return |

### Return type

[**\Exivo\Model\Accessgroup**](../Model/Accessgroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessGroups**
> \Exivo\Model\Accessgroup[] getAccessGroups($site_id, $skip, $limit, $sort, $sort_dir)

get all access groups

Returns an array with all the access groups of the site. If the site doesn't have any access groups an empty array is returned. An access group consists of `id`, `name` and `persons`. The `id` is the uuid string, that uniquely identifies the access group. The `name` property contains the name of the access group. The `persons` property contains an array of all the ids of persons assigned to this group. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
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
    $result = $apiInstance->getAccessGroups($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->getAccessGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Exivo\Model\Accessgroup[]**](../Model/Accessgroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignAccessGroup**
> unassignAccessGroup($site_id, $person_id, $body)

Unassign access group from person

Unassign the access group from the person with the `personId`. This person looses access to the site. If the person has no access group assigned an error message with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$body = new \stdClass; // object | 

try {
    $apiInstance->unassignAccessGroup($site_id, $person_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->unassignAccessGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignAccessZone**
> unassignAccessZone($site_id, $access_group_id, $access_zone_id)

unassign the access zone from the access group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$access_group_id = "access_group_id_example"; // string | ID of access group to change
$access_zone_id = "access_zone_id_example"; // string | ID of access zone to assign

try {
    $apiInstance->unassignAccessZone($site_id, $access_group_id, $access_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->unassignAccessZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **access_group_id** | **string**| ID of access group to change |
 **access_zone_id** | **string**| ID of access zone to assign |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessGroup**
> \Exivo\Model\Accessgroup updateAccessGroup($site_id, $access_group_id, $body)

update an access group

Update name of an access group by `accessGroupId`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\AccessGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$access_group_id = "access_group_id_example"; // string | ID of access group to update
$body = new \Exivo\Model\AccessGroupPayload(); // \Exivo\Model\AccessGroupPayload | access groups properties

try {
    $result = $apiInstance->updateAccessGroup($site_id, $access_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessGroupApi->updateAccessGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **access_group_id** | **string**| ID of access group to update |
 **body** | [**\Exivo\Model\AccessGroupPayload**](../Model/AccessGroupPayload.md)| access groups properties |

### Return type

[**\Exivo\Model\Accessgroup**](../Model/Accessgroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

