# Exivo\PersonApi

All URIs are relative to *https://api.exivo.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPerson**](PersonApi.md#addPerson) | **POST** /{siteId}/person | Creates a new person
[**assignAccessGroup**](PersonApi.md#assignAccessGroup) | **POST** /{siteId}/person/{personId}/assign/accessgroup/{accessGroupId} | Assign access group to person
[**assignDigitalKey**](PersonApi.md#assignDigitalKey) | **POST** /{siteId}/person/{personId}/assign/digitalKey/{mediumId} | Assign digital key to person
[**assignMedium**](PersonApi.md#assignMedium) | **POST** /{siteId}/person/{personId}/assign/medium/{mediumId} | Assign medium to person
[**changePersonInfo**](PersonApi.md#changePersonInfo) | **POST** /{siteId}/person/{personId} | Updates a person in the store
[**deletePerson**](PersonApi.md#deletePerson) | **DELETE** /{siteId}/person/{personId} | Deletes a person
[**getPerson**](PersonApi.md#getPerson) | **GET** /{siteId}/person/{personId} | get person by ID
[**getPersonAccessLog**](PersonApi.md#getPersonAccessLog) | **GET** /{siteId}/accesslog/person | get persons access log
[**getPersonAccessLogForOne**](PersonApi.md#getPersonAccessLogForOne) | **GET** /{siteId}/accesslog/person/{personId} | get person&#39;s access log
[**getPersons**](PersonApi.md#getPersons) | **GET** /{siteId}/person | get all persons
[**resetPinCode**](PersonApi.md#resetPinCode) | **DELETE** /{siteId}/person/{personId}/pincode | Resets a pinCode for the person
[**revokeAccess**](PersonApi.md#revokeAccess) | **POST** /{siteId}/person/{personId}/revoke | Revoke access of a person
[**setPinCode**](PersonApi.md#setPinCode) | **POST** /{siteId}/person/{personId}/pincode | Sets a pinCode for the person
[**unassignAccessGroup**](PersonApi.md#unassignAccessGroup) | **POST** /{siteId}/person/{personId}/unassign/accessgroup | Unassign access group from person
[**unassignDigitalKey**](PersonApi.md#unassignDigitalKey) | **POST** /{siteId}/person/{personId}/unassign/digitalKey/{mediumId} | Unassign digital key from person
[**unassignMedium**](PersonApi.md#unassignMedium) | **POST** /{siteId}/person/{personId}/unassign/medium/{mediumId} | Unassign medium from person
[**unrevokeAccess**](PersonApi.md#unrevokeAccess) | **POST** /{siteId}/person/{personId}/unrevoke | Unrevoke access of a person


# **addPerson**
> \Exivo\Model\Person addPerson($site_id, $body)

Creates a new person

Create a new person. This request takes a json object with the properties: `firstName`, `lastName`, `gender`, `language`, `entryDate`, `exitDate`, `email`, `phoneNumber`, `info`. The properties `firstName` and `lastName` are the name of the person and are alway required. The property `gender` accepts one of the *strings*: *\"unspecified\", \"male\", \"female\"*. If it's not defined it defaults to *\"unspecified\"*. The `language` property accepts the *string* values: *\"de\", \"en\", \"fr\", \"it\", \"nb\", \"es\", \"da\", \"fi\", \"fo\", \"nl\", \"sv\"*. If it's not defined it defaults to *\"en\"*. All the other properties will be set to `null` if not defined. The `phoneNumber` property needs to be correctly formatted phone number and the `email` property a correctly formatted email address. The generated `id` of the person gets returned with the response of this request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$body = new \Exivo\Model\PersonPayload(); // \Exivo\Model\PersonPayload | person properties

try {
    $result = $apiInstance->addPerson($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->addPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **body** | [**\Exivo\Model\PersonPayload**](../Model/PersonPayload.md)| person properties |

### Return type

[**\Exivo\Model\Person**](../Model/Person.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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


$apiInstance = new Exivo\Api\PersonApi(
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
    echo 'Exception when calling PersonApi->assignAccessGroup: ', $e->getMessage(), PHP_EOL;
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

# **assignDigitalKey**
> assignDigitalKey($site_id, $person_id, $medium_id, $body)

Assign digital key to person

Assign a medium with `mediumId` to a person with the `personId`. If The medium switches in state `active` it can be used to access the site as specified in the persons access group. If the person already has the digital key assigned it automatically switches into `state` blocked and can't be used anymore. The medium has to be registered on the site and in `state` `assignable`, else error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \Exivo\Model\AssignMediumPayload(); // \Exivo\Model\AssignMediumPayload | 

try {
    $apiInstance->assignDigitalKey($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->assignDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | [**\Exivo\Model\AssignMediumPayload**](../Model/AssignMediumPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignMedium**
> assignMedium($site_id, $person_id, $medium_id, $body)

Assign medium to person

Assign a medium with `mediumId` to a person with the `personId`. The medium switches in state `active` and can be used to access the site as specified in the persons access group. If the person already has a medium assigned it automatically switches into `state` blocked and can't be used anymore. The medium has to be registered on the site and in `state` `assignable`, else error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \Exivo\Model\AssignMediumPayload(); // \Exivo\Model\AssignMediumPayload | 

try {
    $apiInstance->assignMedium($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->assignMedium: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | [**\Exivo\Model\AssignMediumPayload**](../Model/AssignMediumPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changePersonInfo**
> \Exivo\Model\Person changePersonInfo($site_id, $person_id, $body)

Updates a person in the store

Update `firstName`, `lastName`, `gender`, `email`, `phoneNumber`, `language`, `info`, `entryDate` or `exitDate`. Only the submitted properties are changed. Any property that's not submitted stays the same. To delete one of the optional properties `entryDate`, `exitDate`, `email`, or `phoneNumber`, the value `null` has to be submitted instead of a *string*. The property `gender` only accepts the *string* values: *\"unspecified\", \"male\", \"female\". The property `language` only accepts the *string* values: *\"de\", \"en\", \"fr\", \"it\", \"nb\", \"es\"*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to update
$body = new \Exivo\Model\PersonPayload(); // \Exivo\Model\PersonPayload | person properties

try {
    $result = $apiInstance->changePersonInfo($site_id, $person_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->changePersonInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to update |
 **body** | [**\Exivo\Model\PersonPayload**](../Model/PersonPayload.md)| person properties |

### Return type

[**\Exivo\Model\Person**](../Model/Person.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePerson**
> deletePerson($site_id, $person_id)

Deletes a person

Delete a person with `personId` from the site. If the person was assigned to an access group it is automatically removed and any media assigned to the person are automatically returned and newly assignable. If no person with the `personId` exists for this site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to return

try {
    $apiInstance->deletePerson($site_id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to return |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerson**
> \Exivo\Model\Person getPerson($site_id, $person_id)

get person by ID

Returns the person with the given `personId`. If the site doesn't have a person with this id the status code 404 and an empty body is returned. A person consist of `id`, `firstName`, `lastName`, `gender`, `email`, `language`, `info`, `phoneNumber`, `entryDate`, `exitDate`, `revoked`, `accessGroupId` and `media`. The `id` is the uuid string that uniquely identifies the person. The property `gender` contains the gender of the person and is a string with the value *male*, *female* or *unspecified*. `entryDate` and `exitDate` are optional properties and define the time frame during which the person has access. They are formatted in UTC and after the RFC 3339 standard. After the `exitDate` the access of the person is automatically revoked. The property `revoked` is a boolean that is false if the person has access and true if not. The properties `email`, `phoneNumber`, `info`, `entryDate`, `exitDate` are optional and can contain the value `null`. If the person is assigned to an accessGroup there's an additional property `accessGroupId`. The `mediumId` of every medium assigned to the person can be found in the `media` array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to return

try {
    $result = $apiInstance->getPerson($site_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to return |

### Return type

[**\Exivo\Model\Person**](../Model/Person.md)

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


$apiInstance = new Exivo\Api\PersonApi(
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
    echo 'Exception when calling PersonApi->getPersonAccessLog: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Exivo\Api\PersonApi(
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
    echo 'Exception when calling PersonApi->getPersonAccessLogForOne: ', $e->getMessage(), PHP_EOL;
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

# **getPersons**
> \Exivo\Model\Person[] getPersons($site_id, $skip, $limit, $sort, $sort_dir)

get all persons

Returns an array with all the persons of the site. If the site doesn't have any persons, an empty array is returned. A person consist of `id`, `firstName`, `lastName`, `gender`, `email`, `language`, `info`, `phoneNumber`, `entryDate`, `exitDate`, `revoked`, `accessGroupId` and `media`. The `id` is the uuid string that uniquely identifies the person. The property `gender` contains the gender of the person and is a string with the value *male*, *female* or *unspecified*. `entryDate` and `exitDate` are optional properties and define the time frame during which the person has access. They are formatted in UTC and after the RFC 3339 standard. After the `exitDate` the access of the person is automatically revoked. The property `revoked` is a boolean that is false if the person has access and true if not. The properties `email`, `phoneNumber`, `info`, `entryDate`, `exitDate` are optional and can contain the value `null`. If the person is assigned to an accessGroup there's an additional property `accessGroupId`. The `mediumId` of every medium assigned to the person can be found in the `media` array. The optional query parameters `skip`, `limit`, `sort` and `sortDir` can be used for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
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
    $result = $apiInstance->getPersons($site_id, $skip, $limit, $sort, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersons: ', $e->getMessage(), PHP_EOL;
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

[**\Exivo\Model\Person[]**](../Model/Person.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPinCode**
> \Exivo\Model\Person resetPinCode($site_id, $person_id, $body)

Resets a pinCode for the person

Resets a `pinCode` for the person.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to return
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->resetPinCode($site_id, $person_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->resetPinCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to return |
 **body** | **object**|  | [optional]

### Return type

[**\Exivo\Model\Person**](../Model/Person.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeAccess**
> revokeAccess($site_id, $person_id, $body)

Revoke access of a person

Revoke the access of a person with `personId` to the site. The `revoked` status switches to true and the person is no longer able to open any doors. If the persons access already is revoked, the API will return an error with status code 400 and the message that the person already is revoked. If no person with this `personId` is found on the site an error with status code 400 is returned and the message, that no person with this id exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to delete
$body = new \stdClass; // object | 

try {
    $apiInstance->revokeAccess($site_id, $person_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->revokeAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to delete |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPinCode**
> \Exivo\Model\Person setPinCode($site_id, $person_id, $body)

Sets a pinCode for the person

Sets a `pinCode` for the person. The `pinCode` must be a value having 4-6 digits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to return
$body = new \Exivo\Model\Body2(); // \Exivo\Model\Body2 | pinCode

try {
    $result = $apiInstance->setPinCode($site_id, $person_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->setPinCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to return |
 **body** | [**\Exivo\Model\Body2**](../Model/Body2.md)| pinCode |

### Return type

[**\Exivo\Model\Person**](../Model/Person.md)

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


$apiInstance = new Exivo\Api\PersonApi(
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
    echo 'Exception when calling PersonApi->unassignAccessGroup: ', $e->getMessage(), PHP_EOL;
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

# **unassignDigitalKey**
> unassignDigitalKey($site_id, $person_id, $medium_id, $body)

Unassign digital key from person

Unassign the digital key with `mediumId` from the person with the `personId`. The medium gets removed from the person and switches to `state` assignable. If no person with `personId` exists on the site or no digital key with `mediumId` is registered to the site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \stdClass; // object | 

try {
    $apiInstance->unassignDigitalKey($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->unassignDigitalKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignMedium**
> unassignMedium($site_id, $person_id, $medium_id, $body)

Unassign medium from person

Unassign the medium with `mediumId` from the person with the `personId`. The medium gets removed from the person and switches to `state` assignable. If no person with `personId` exists on the site or no medium with `mediumId` is registered to the site an error with status code 400 is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person
$medium_id = "medium_id_example"; // string | ID of medium
$body = new \stdClass; // object | 

try {
    $apiInstance->unassignMedium($site_id, $person_id, $medium_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->unassignMedium: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person |
 **medium_id** | **string**| ID of medium |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unrevokeAccess**
> unrevokeAccess($site_id, $person_id, $body)

Unrevoke access of a person

Unrevoke the access of a person with `personId` to the site. The `revoked` status switches to false and the person is able to open any doors according to his access group. If the persons isn't revoked the API will return an error with status code 400 and the message that the access is not revoked. It's possible to unrevoke a person after the `exitDate`. If no person with this `personId` is found on the site an error with status code 400 is returned and the message, that no person with this id exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Exivo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Exivo\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | ID of site to work
$person_id = "person_id_example"; // string | ID of person to return
$body = new \stdClass; // object | 

try {
    $apiInstance->unrevokeAccess($site_id, $person_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->unrevokeAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of site to work |
 **person_id** | **string**| ID of person to return |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

