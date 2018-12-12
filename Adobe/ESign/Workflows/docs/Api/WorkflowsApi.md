# Adobe\ESign\Workflows\WorkflowsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWorkflows**](WorkflowsApi.md#getWorkflows) | **GET** /workflows | Retrieves workflows for a user.


# **getWorkflows**
> \Adobe\ESign\Workflows\Model\UserWorkflows getWorkflows($authorization, $x_api_user, $include_draft_workflows, $include_inactive_workflows, $group_id)

Retrieves workflows for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Workflows\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('workflow_read')\" oncontextmenu=\"this.href=oauthDoc('workflow_read')\" target=\"oauthDoc\">workflow_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$include_draft_workflows = true; // bool | Include draft workflows
$include_inactive_workflows = true; // bool | Include inactive workflows
$group_id = "group_id_example"; // string | The group identifier for which the workflows will be fetched

try {
    $result = $apiInstance->getWorkflows($authorization, $x_api_user, $include_draft_workflows, $include_inactive_workflows, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;workflow_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;workflow_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;workflow_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **include_draft_workflows** | **bool**| Include draft workflows | [optional]
 **include_inactive_workflows** | **bool**| Include inactive workflows | [optional]
 **group_id** | **string**| The group identifier for which the workflows will be fetched | [optional]

### Return type

[**\Adobe\ESign\Workflows\Model\UserWorkflows**](../Model/UserWorkflows.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

