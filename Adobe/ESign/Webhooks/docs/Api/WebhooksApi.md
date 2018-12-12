# Adobe\ESign\Webhooks\WebhooksApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Creates a webhook.
[**deleteWebhook**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{webhookId} | Deletes a webhook.
[**getWebhookInfo**](WebhooksApi.md#getWebhookInfo) | **GET** /webhooks/{webhookId} | Retrieves the details of a webhook.
[**getWebhooks**](WebhooksApi.md#getWebhooks) | **GET** /webhooks | Retrieves webhooks for a user.
[**updateWebhook**](WebhooksApi.md#updateWebhook) | **PUT** /webhooks/{webhookId} | Updates a webhook.
[**updateWebhookState**](WebhooksApi.md#updateWebhookState) | **PUT** /webhooks/{webhookId}/state | Updates the state of a webhook identified by webhookId in the path.


# **createWebhook**
> \Adobe\ESign\Webhooks\Model\WebhookCreationResponse createWebhook($authorization, $webhook_info, $x_api_user, $x_on_behalf_of_user)

Creates a webhook.

This is a primary endpoint which is used to create a new webhook. A webhook can only be created in ACTIVE state. Currently, webhooks are supported at four scopes - Account, Group, User and Resource. <br/> <br/> Before creating a webhook successfully at any of these scopes, Adobe Sign <a href='https://www.adobe.io/apis/documentcloud/sign/docs.html#!adobeio/adobeio-documentation/master/sign/webhooks.md#verificationofintentofthewebhookurl'>verifies</a> that the webhook URL that is provided in the registration request really intends to receive notifications and is a valid URL. <br/>There is a defined mechanism for this validation where Adobe Sign makes an HTTPS GET request to the webhook URL. This request has a custom HTTP header X-AdobeSign-ClientId. The value of this header is the client ID of the application that is requesting to create the webhook. To register a webhook successfully, the webhook URL must respond to this verification request with an HTTPS 2XX response code, and also it must send back the same client ID value in one of the following two ways:<ol><li>In a custom response header, X-AdobeSign-ClientId. This is the same header which was passed in the request, and can be echoed back in the response.</li><li> In the JSON response body of the response with the key of xAdobeSignClientId and its value being the same client ID that was sent in the request. </li></ol><p>On successful registration,  Adobe Sign sends a success response (any HTTPS 2XX code) to your client app with the unique webhook identifier and a Location header, which contains the URL of the webhook resource created in Adobe Sign.<br/> To learn more, please refer <a href='https://www.adobe.io/apis/documentcloud/sign/docs.html#!adobeio/adobeio-documentation/master/sign/webhooks.md'>Webhooks in Adobe Sign Guide</a>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Webhooks\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('webhook_write')\" oncontextmenu=\"this.href=oauthDoc('webhook_write')\" target=\"oauthDoc\">webhook_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$webhook_info = new \Adobe\ESign\Webhooks\Model\WebhookInfo(); // \Adobe\ESign\Webhooks\Model\WebhookInfo | Information about the webhook that you want to create
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createWebhook($authorization, $webhook_info, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;webhook_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **webhook_info** | [**\Adobe\ESign\Webhooks\Model\WebhookInfo**](../Model/WebhookInfo.md)| Information about the webhook that you want to create |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Webhooks\Model\WebhookCreationResponse**](../Model/WebhookCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhook**
> deleteWebhook($authorization, $if_match, $webhook_id, $x_api_user, $x_on_behalf_of_user)

Deletes a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Webhooks\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('webhook_retention')\" oncontextmenu=\"this.href=oauthDoc('webhook_retention')\" target=\"oauthDoc\">webhook_retention</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$webhook_id = "webhook_id_example"; // string | The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->deleteWebhook($authorization, $if_match, $webhook_id, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_retention&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_retention&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;webhook_retention&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **if_match** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **webhook_id** | **string**| The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookInfo**
> \Adobe\ESign\Webhooks\Model\WebhookInfo getWebhookInfo($authorization, $webhook_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves the details of a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Webhooks\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('webhook_read')\" oncontextmenu=\"this.href=oauthDoc('webhook_read')\" target=\"oauthDoc\">webhook_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$webhook_id = "webhook_id_example"; // string | The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWebhookInfo($authorization, $webhook_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;webhook_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **webhook_id** | **string**| The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Webhooks\Model\WebhookInfo**](../Model/WebhookInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \Adobe\ESign\Webhooks\Model\UserWebhooks getWebhooks($authorization, $x_api_user, $x_on_behalf_of_user, $show_in_active_webhooks, $scope, $resource_type, $cursor, $page_size)

Retrieves webhooks for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Webhooks\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('webhook_read')\" oncontextmenu=\"this.href=oauthDoc('webhook_read')\" target=\"oauthDoc\">webhook_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$show_in_active_webhooks = true; // bool | A query parameter to fetch all the inactive webhooks along with the active webhooks.
$scope = "scope_example"; // string | Scope of webhook. The possible values are ACCOUNT, GROUP, USER or RESOURCE
$resource_type = "resource_type_example"; // string | The type of resource on which webhook was created. The possible values are AGREEMENT, WIDGET, MEGASIGN and LIBRARY_DOCUMENT.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$page_size = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getWebhooks($authorization, $x_api_user, $x_on_behalf_of_user, $show_in_active_webhooks, $scope, $resource_type, $cursor, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;webhook_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **show_in_active_webhooks** | **bool**| A query parameter to fetch all the inactive webhooks along with the active webhooks. | [optional]
 **scope** | **string**| Scope of webhook. The possible values are ACCOUNT, GROUP, USER or RESOURCE | [optional]
 **resource_type** | **string**| The type of resource on which webhook was created. The possible values are AGREEMENT, WIDGET, MEGASIGN and LIBRARY_DOCUMENT. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **page_size** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Webhooks\Model\UserWebhooks**](../Model/UserWebhooks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> updateWebhook($authorization, $if_match, $webhook_id, $webhook_info, $x_api_user, $x_on_behalf_of_user)

Updates a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Webhooks\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('webhook_write')\" oncontextmenu=\"this.href=oauthDoc('webhook_write')\" target=\"oauthDoc\">webhook_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$webhook_id = "webhook_id_example"; // string | The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks.
$webhook_info = new \Adobe\ESign\Webhooks\Model\WebhookInfo(); // \Adobe\ESign\Webhooks\Model\WebhookInfo | Information necessary to update a webhook
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWebhook($authorization, $if_match, $webhook_id, $webhook_info, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;webhook_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **if_match** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **webhook_id** | **string**| The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks. |
 **webhook_info** | [**\Adobe\ESign\Webhooks\Model\WebhookInfo**](../Model/WebhookInfo.md)| Information necessary to update a webhook |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookState**
> updateWebhookState($authorization, $if_match, $webhook_id, $webhook_state_info, $x_api_user, $x_on_behalf_of_user)

Updates the state of a webhook identified by webhookId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Webhooks\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('webhook_write')\" oncontextmenu=\"this.href=oauthDoc('webhook_write')\" target=\"oauthDoc\">webhook_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$webhook_id = "webhook_id_example"; // string | The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks.
$webhook_state_info = new \Adobe\ESign\Webhooks\Model\WebhookStateInfo(); // \Adobe\ESign\Webhooks\Model\WebhookStateInfo | 
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWebhookState($authorization, $if_match, $webhook_id, $webhook_state_info, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhookState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;webhook_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;webhook_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **if_match** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **webhook_id** | **string**| The webhook identifier, as returned by the webhook creation API or retrieved from the API to fetch webhooks. |
 **webhook_state_info** | [**\Adobe\ESign\Webhooks\Model\WebhookStateInfo**](../Model/WebhookStateInfo.md)|  |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

