# WidgetInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_participant_sets_info** | [**\Adobe\ESign\Widgets\Model\WidgetAdditionalParticipationSetInfo[]**](WidgetAdditionalParticipationSetInfo.md) | List of all the participants in the widget except widget signer | [optional] 
**creator_email** | **string** | Email of widget creator. Only returned in GET response. Cannot be provided in POST/PUT request. If provided in POST, it will simply be ignored | [optional] 
**locale** | **string** | The locale associated with this widget - specifies the language for the signing page and emails, for example en_US or fr_FR. If none specified, defaults to the language configured for the widget creator | [optional] 
**vaulting_info** | [**\Adobe\ESign\Widgets\Model\VaultingInfo**](VaultingInfo.md) | Vaulting properties that allows Adobe Sign to securely store documents with a vault provider | [optional] 
**security_option** | [**\Adobe\ESign\Widgets\Model\SecurityOption**](SecurityOption.md) | Secondary security parameters for the widget | [optional] 
**widget_participant_set_info** | [**\Adobe\ESign\Widgets\Model\WidgetParticipantSetInfo**](WidgetParticipantSetInfo.md) | Represents widget participant for whom email should not be provided | [optional] 
**ccs** | [**\Adobe\ESign\Widgets\Model\WidgetCcInfo[]**](WidgetCcInfo.md) | A list of one or more email addresses that you want to copy on this transaction. The email addresses will each receive an email when the final agreement created through widget is signed. The email addresses will also receive a copy of the document, attached as a PDF file | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | Date when widget was created. If provided in POST, it will simply be ignored. Format would be yyyy-MM-dd&#39;T&#39;HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time | [optional] 
**name** | **string** | The name of the widget that will be used to identify it, in emails, website and other places | [optional] 
**completion_info** | [**\Adobe\ESign\Widgets\Model\WidgetRedirectionInfo**](WidgetRedirectionInfo.md) | URL and associated properties for the success page the widget signer will be taken to after performing desired action on the widget | [optional] 
**auth_failure_info** | [**\Adobe\ESign\Widgets\Model\WidgetRedirectionInfo**](WidgetRedirectionInfo.md) | URL and associated properties for the error page the widget signer will be taken after failing to authenticate | [optional] 
**file_infos** | [**\Adobe\ESign\Widgets\Model\FileInfo[]**](FileInfo.md) | A list of one or more files (or references to files) that will be used to create the widget. If more than one file is provided, they will be combined before the widget is created. Library documents are not permitted. Note: Only one of the four parameters in every FileInfo object must be specified | [optional] 
**id** | **string** | A resource identifier that can be used to uniquely identify the widget in other apis. If provided in POST, it will simply be ignored | [optional] 
**state** | **string** | The state in which the widget should land. For example in order to create a widget in DRAFT state, field should be DRAFT. The state field will never get returned in GET /widgets/{ID} and will be ignored if provided in PUT /widgets/{ID} call. The eventual status of the widget can be obtained from GET /widgets/ID | [optional] 
**status** | **string** | Status of the Widget. If provided in POST, it will simply be ignored | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


