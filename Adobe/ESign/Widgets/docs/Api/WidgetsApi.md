# Adobe\ESign\Widgets\WidgetsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShareOnWidget**](WidgetsApi.md#createShareOnWidget) | **POST** /widgets/{widgetId}/members/share | Share a widget with someone.
[**createWidget**](WidgetsApi.md#createWidget) | **POST** /widgets | Creates a widget and and returns the widgetId in the response to the client.
[**getAllDocumentsOfWidget**](WidgetsApi.md#getAllDocumentsOfWidget) | **GET** /widgets/{widgetId}/documents | Retrieves the IDs of the documents associated with widget.
[**getAllWidgetMembers**](WidgetsApi.md#getAllWidgetMembers) | **GET** /widgets/{widgetId}/members | Retrieves detailed member info along with IDs for different types of participants.
[**getDocumentOfWidget**](WidgetsApi.md#getDocumentOfWidget) | **GET** /widgets/{widgetId}/documents/{documentId} | Retrieves the file stream of a document of a widget.
[**getWidgetAgreements**](WidgetsApi.md#getWidgetAgreements) | **GET** /widgets/{widgetId}/agreements | Retrieves agreements for the widget.
[**getWidgetAllDocumentsImageUrls**](WidgetsApi.md#getWidgetAllDocumentsImageUrls) | **GET** /widgets/{widgetId}/documents/imageUrls | Retrieves image urls of all visible pages of a document associated with a widget.
[**getWidgetAuditTrail**](WidgetsApi.md#getWidgetAuditTrail) | **GET** /widgets/{widgetId}/auditTrail | Retrieves the audit trail of a widget identified by widgetId.
[**getWidgetCombinedDocument**](WidgetsApi.md#getWidgetCombinedDocument) | **GET** /widgets/{widgetId}/combinedDocument | Retrieves a single combined PDF document for the documents associated with a widget.
[**getWidgetEvents**](WidgetsApi.md#getWidgetEvents) | **GET** /widgets/{widgetId}/events | Retrieves the events information for a widget.
[**getWidgetFormData**](WidgetsApi.md#getWidgetFormData) | **GET** /widgets/{widgetId}/formData | Retrieves data entered by the user into interactive form fields at the time they signed the widget
[**getWidgetInfo**](WidgetsApi.md#getWidgetInfo) | **GET** /widgets/{widgetId} | Retrieves the details of a widget.
[**getWidgetNoteForApiUser**](WidgetsApi.md#getWidgetNoteForApiUser) | **GET** /widgets/{widgetId}/me/note | Retrieves the latest note of a widget for the API user.
[**getWidgetParticipantSet**](WidgetsApi.md#getWidgetParticipantSet) | **GET** /widgets/{widgetId}/members/participantSets/{participantSetId} | Retrieves the participant set of a widget identified by widgetId in the path.
[**getWidgetSecurityOptionsForParticipation**](WidgetsApi.md#getWidgetSecurityOptionsForParticipation) | **GET** /widgets/{widgetId}/members/participantSets/{participantSetId}/participants/{participantId}/securityOptions | Retrieves the security options for a particular participant.
[**getWidgetView**](WidgetsApi.md#getWidgetView) | **POST** /widgets/{widgetId}/views | Retrieves the requested views for a widget.
[**getWidgets**](WidgetsApi.md#getWidgets) | **GET** /widgets | Retrieves widgets for a user.
[**updateWidget**](WidgetsApi.md#updateWidget) | **PUT** /widgets/{widgetId} | Updates a widget.
[**updateWidgetNoteForApiUser**](WidgetsApi.md#updateWidgetNoteForApiUser) | **PUT** /widgets/{widgetId}/me/note | Updates the latest note of a widget for the API user.
[**updateWidgetSecurityOptionsForParticipation**](WidgetsApi.md#updateWidgetSecurityOptionsForParticipation) | **PUT** /widgets/{widgetId}/members/participantSets/{participantSetId}/participants/{participantId}/securityOptions | Updates the security options for a particular participant.
[**updateWidgetState**](WidgetsApi.md#updateWidgetState) | **PUT** /widgets/{widgetId}/state | Updates the state of a widget identified by widgetId in the path.
[**updateWidgetVisibility**](WidgetsApi.md#updateWidgetVisibility) | **PUT** /widgets/{widgetId}/me/visibility | Updates the visibility of widget.


# **createShareOnWidget**
> \Adobe\ESign\Widgets\Model\ShareCreationResponseList createShareOnWidget($authorization, $widget_id, $share_creation_info_list, $x_api_user, $x_on_behalf_of_user)

Share a widget with someone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$share_creation_info_list = new \Adobe\ESign\Widgets\Model\ShareCreationInfoList(); // \Adobe\ESign\Widgets\Model\ShareCreationInfoList | List of agreement share creation information objects.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createShareOnWidget($authorization, $widget_id, $share_creation_info_list, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->createShareOnWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **share_creation_info_list** | [**\Adobe\ESign\Widgets\Model\ShareCreationInfoList**](../Model/ShareCreationInfoList.md)| List of agreement share creation information objects. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\ShareCreationResponseList**](../Model/ShareCreationResponseList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWidget**
> \Adobe\ESign\Widgets\Model\WidgetCreationResponse createWidget($authorization, $widget_info, $x_api_user, $x_on_behalf_of_user)

Creates a widget and and returns the widgetId in the response to the client.

This is a primary endpoint which is used to create a new widget. You can create a widget in one of the 3 mentioned states: a) <b>DRAFT</b> - to incrementally build the widget, b) <b>AUTHORING</b> - to add/edit form fields in the widget, c) <b>ACTIVE</b> - to immediately host the widget. You can use the PUT /widgets/{widgetId}/state endpoint to transition a widget between the above mentioned states. An allowed transition would follow the any of the following sequences: DRAFT->AUTHORING->ACTIVE, ACTIVE<->INACTIVE, DRAFT->CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_info = new \Adobe\ESign\Widgets\Model\WidgetCreationInfoV6(); // \Adobe\ESign\Widgets\Model\WidgetCreationInfoV6 | Information about the widget that you want to create.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createWidget($authorization, $widget_info, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->createWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_info** | [**\Adobe\ESign\Widgets\Model\WidgetCreationInfoV6**](../Model/WidgetCreationInfoV6.md)| Information about the widget that you want to create. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetCreationResponse**](../Model/WidgetCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentsOfWidget**
> \Adobe\ESign\Widgets\Model\WidgetDocuments getAllDocumentsOfWidget($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match, $version_id, $participant_id)

Retrieves the IDs of the documents associated with widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$version_id = "version_id_example"; // string | The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used.
$participant_id = "participant_id_example"; // string | The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used.

try {
    $result = $apiInstance->getAllDocumentsOfWidget($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match, $version_id, $participant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getAllDocumentsOfWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **version_id** | **string**| The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used. | [optional]
 **participant_id** | **string**| The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetDocuments**](../Model/WidgetDocuments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllWidgetMembers**
> \Adobe\ESign\Widgets\Model\WidgetMembersInfo getAllWidgetMembers($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves detailed member info along with IDs for different types of participants.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAllWidgetMembers($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getAllWidgetMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetMembersInfo**](../Model/WidgetMembersInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentOfWidget**
> string getDocumentOfWidget($authorization, $widget_id, $document_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves the file stream of a document of a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$document_id = "document_id_example"; // string | The document identifier, as retrieved from the API which fetches the documents of a specified widget
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getDocumentOfWidget($authorization, $widget_id, $document_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getDocumentOfWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **document_id** | **string**| The document identifier, as retrieved from the API which fetches the documents of a specified widget |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetAgreements**
> \Adobe\ESign\Widgets\Model\WidgetAgreements getWidgetAgreements($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $show_hidden_agreements, $cursor, $page_size)

Retrieves agreements for the widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$show_hidden_agreements = true; // bool | A query parameter to fetch all the hidden agreements along with the visible agreements. Default value is false.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$page_size = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getWidgetAgreements($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $show_hidden_agreements, $cursor, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **show_hidden_agreements** | **bool**| A query parameter to fetch all the hidden agreements along with the visible agreements. Default value is false. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **page_size** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetAgreements**](../Model/WidgetAgreements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetAllDocumentsImageUrls**
> \Adobe\ESign\Widgets\Model\WidgetDocumentsImageUrlsInfo getWidgetAllDocumentsImageUrls($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match, $image_sizes, $show_image_availability_only)

Retrieves image urls of all visible pages of a document associated with a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$image_sizes = "image_sizes_example"; // string | A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}.
$show_image_availability_only = true; // bool | When set to true, returns only image availability. Else, returns both image urls and its availability.

try {
    $result = $apiInstance->getWidgetAllDocumentsImageUrls($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match, $image_sizes, $show_image_availability_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAllDocumentsImageUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **image_sizes** | **string**| A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}. | [optional]
 **show_image_availability_only** | **bool**| When set to true, returns only image availability. Else, returns both image urls and its availability. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetDocumentsImageUrlsInfo**](../Model/WidgetDocumentsImageUrlsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetAuditTrail**
> string getWidgetAuditTrail($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves the audit trail of a widget identified by widgetId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetAuditTrail($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAuditTrail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetCombinedDocument**
> string getWidgetCombinedDocument($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match, $version_id, $participant_id, $attach_audit_report)

Retrieves a single combined PDF document for the documents associated with a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$version_id = "version_id_example"; // string | The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used.
$participant_id = "participant_id_example"; // string | The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used.
$attach_audit_report = true; // bool | When set to YES, attach an audit report to the signed Widget PDF. Default value is false

try {
    $result = $apiInstance->getWidgetCombinedDocument($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match, $version_id, $participant_id, $attach_audit_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetCombinedDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **version_id** | **string**| The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used. | [optional]
 **participant_id** | **string**| The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]
 **attach_audit_report** | **bool**| When set to YES, attach an audit report to the signed Widget PDF. Default value is false | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetEvents**
> \Adobe\ESign\Widgets\Model\WidgetEventList getWidgetEvents($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves the events information for a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetEvents($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetEventList**](../Model/WidgetEventList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetFormData**
> string getWidgetFormData($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user)

Retrieves data entered by the user into interactive form fields at the time they signed the widget

CSV file stream containing form data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getWidgetFormData($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetFormData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetInfo**
> \Adobe\ESign\Widgets\Model\WidgetCreationInfoV6 getWidgetInfo($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves the details of a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetInfo($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetCreationInfoV6**](../Model/WidgetCreationInfoV6.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetNoteForApiUser**
> \Adobe\ESign\Widgets\Model\Note getWidgetNoteForApiUser($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user)

Retrieves the latest note of a widget for the API user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getWidgetNoteForApiUser($authorization, $widget_id, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetParticipantSet**
> \Adobe\ESign\Widgets\Model\DetailedWidgetParticipantSetInfo getWidgetParticipantSet($authorization, $widget_id, $participant_set_id, $x_api_user, $x_on_behalf_of_user, $if_none_match)

Retrieves the participant set of a widget identified by widgetId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$participant_set_id = "participant_set_id_example"; // string | The participant set identifier
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetParticipantSet($authorization, $widget_id, $participant_set_id, $x_api_user, $x_on_behalf_of_user, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetParticipantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **participant_set_id** | **string**| The participant set identifier |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\DetailedWidgetParticipantSetInfo**](../Model/DetailedWidgetParticipantSetInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetSecurityOptionsForParticipation**
> \Adobe\ESign\Widgets\Model\ParticipantSecurityOption getWidgetSecurityOptionsForParticipation($authorization, $widget_id, $participant_set_id, $participant_id, $if_none_match, $x_api_user)

Retrieves the security options for a particular participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$participant_set_id = "participant_set_id_example"; // string | The participant set identifier
$participant_id = "participant_id_example"; // string | The participant identifier
$if_none_match = "if_none_match_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->getWidgetSecurityOptionsForParticipation($authorization, $widget_id, $participant_set_id, $participant_id, $if_none_match, $x_api_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetSecurityOptionsForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **participant_set_id** | **string**| The participant set identifier |
 **participant_id** | **string**| The participant identifier |
 **if_none_match** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\ParticipantSecurityOption**](../Model/ParticipantSecurityOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetView**
> \Adobe\ESign\Widgets\Model\WidgetViews getWidgetView($authorization, $widget_id, $widget_view_info, $x_api_user, $x_on_behalf_of_user)

Retrieves the requested views for a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a> - widget read is always required</li><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_login')\" oncontextmenu=\"this.href=oauthDoc('user_login')\" target=\"oauthDoc\">user_login</a> - Required additionally if the autoLoginUser parameter is set to true</li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$widget_view_info = new \Adobe\ESign\Widgets\Model\WidgetViewInfo(); // \Adobe\ESign\Widgets\Model\WidgetViewInfo | Name of the required view and its desired configuration.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getWidgetView($authorization, $widget_id, $widget_view_info, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt; - widget read is always required&lt;/li&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_login&lt;/a&gt; - Required additionally if the autoLoginUser parameter is set to true&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **widget_view_info** | [**\Adobe\ESign\Widgets\Model\WidgetViewInfo**](../Model/WidgetViewInfo.md)| Name of the required view and its desired configuration. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\WidgetViews**](../Model/WidgetViews.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgets**
> \Adobe\ESign\Widgets\Model\UserWidgets getWidgets($authorization, $x_api_user, $x_on_behalf_of_user, $show_hidden_widgets, $cursor, $page_size)

Retrieves widgets for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$show_hidden_widgets = true; // bool | A query parameter to fetch all the hidden widgets along with the visible widgets. Default value is false.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$page_size = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getWidgets($authorization, $x_api_user, $x_on_behalf_of_user, $show_hidden_widgets, $cursor, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **show_hidden_widgets** | **bool**| A query parameter to fetch all the hidden widgets along with the visible widgets. Default value is false. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **page_size** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Widgets\Model\UserWidgets**](../Model/UserWidgets.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWidget**
> updateWidget($authorization, $if_match, $widget_id, $widget_info, $x_api_user, $x_on_behalf_of_user)

Updates a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$widget_info = new \Adobe\ESign\Widgets\Model\WidgetInfo(); // \Adobe\ESign\Widgets\Model\WidgetInfo | Widget update information object.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidget($authorization, $if_match, $widget_id, $widget_info, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **if_match** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **widget_info** | [**\Adobe\ESign\Widgets\Model\WidgetInfo**](../Model/WidgetInfo.md)| Widget update information object. |
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

# **updateWidgetNoteForApiUser**
> updateWidgetNoteForApiUser($authorization, $widget_id, $note, $x_api_user, $x_on_behalf_of_user)

Updates the latest note of a widget for the API user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$note = new \Adobe\ESign\Widgets\Model\Note(); // \Adobe\ESign\Widgets\Model\Note | The note to be associated with the widget.
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidgetNoteForApiUser($authorization, $widget_id, $note, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **note** | [**\Adobe\ESign\Widgets\Model\Note**](../Model/Note.md)| The note to be associated with the widget. |
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

# **updateWidgetSecurityOptionsForParticipation**
> updateWidgetSecurityOptionsForParticipation($authorization, $if_match, $widget_id, $participant_set_id, $participant_id, $participant_security_option, $x_api_user)

Updates the security options for a particular participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$participant_set_id = "participant_set_id_example"; // string | The participant set identifier
$participant_id = "participant_id_example"; // string | The participant identifier
$participant_security_option = new \Adobe\ESign\Widgets\Model\ParticipantSecurityOption(); // \Adobe\ESign\Widgets\Model\ParticipantSecurityOption | Security options that apply to the participant
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $apiInstance->updateWidgetSecurityOptionsForParticipation($authorization, $if_match, $widget_id, $participant_set_id, $participant_id, $participant_security_option, $x_api_user);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetSecurityOptionsForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **if_match** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **participant_set_id** | **string**| The participant set identifier |
 **participant_id** | **string**| The participant identifier |
 **participant_security_option** | [**\Adobe\ESign\Widgets\Model\ParticipantSecurityOption**](../Model/ParticipantSecurityOption.md)| Security options that apply to the participant |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWidgetState**
> updateWidgetState($authorization, $if_match, $widget_id, $widget_state_info, $x_api_user, $x_on_behalf_of_user)

Updates the state of a widget identified by widgetId in the path.

This endpoint can be used by creator of the widget to transition between the states of widget. An allowed transition would follow any of the following sequence :  DRAFT->AUTHORING->ACTIVE, ACTIVE<->INACTIVE, DRAFT->CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$widget_state_info = new \Adobe\ESign\Widgets\Model\WidgetStateInfo(); // \Adobe\ESign\Widgets\Model\WidgetStateInfo | 
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidgetState($authorization, $if_match, $widget_id, $widget_state_info, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **if_match** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **widget_state_info** | [**\Adobe\ESign\Widgets\Model\WidgetStateInfo**](../Model/WidgetStateInfo.md)|  |
 **x_api_user** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **x_on_behalf_of_user** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWidgetVisibility**
> updateWidgetVisibility($authorization, $widget_id, $visibility_info, $x_api_user, $x_on_behalf_of_user)

Updates the visibility of widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Widgets\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widget_id = "widget_id_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$visibility_info = new \Adobe\ESign\Widgets\Model\VisibilityInfo(); // \Adobe\ESign\Widgets\Model\VisibilityInfo | Information to update visibility of widget
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidgetVisibility($authorization, $widget_id, $visibility_info, $x_api_user, $x_on_behalf_of_user);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widget_id** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **visibility_info** | [**\Adobe\ESign\Widgets\Model\VisibilityInfo**](../Model/VisibilityInfo.md)| Information to update visibility of widget |
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

