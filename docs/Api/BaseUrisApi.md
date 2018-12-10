# Swagger\Client\BaseUrisApi

All URIs are relative to *http://localhost/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBaseUris**](BaseUrisApi.md#getBaseUris) | **GET** /baseUris | Gets the base uri to access other APIs. In case other APIs are accessed from a different end point, it will be considered an invalid request.


# **getBaseUris**
> \Swagger\Client\Model\BaseUriInfo getBaseUris($authorization)

Gets the base uri to access other APIs. In case other APIs are accessed from a different end point, it will be considered an invalid request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BaseUrisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with any of the valid scopes<ul></ul>in the format <b>'Bearer {accessToken}'.

try {
    $result = $apiInstance->getBaseUris($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseUrisApi->getBaseUris: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with any of the valid scopes&lt;ul&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |

### Return type

[**\Swagger\Client\Model\BaseUriInfo**](../Model/BaseUriInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

