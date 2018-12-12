# WidgetAgreement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hidden** | **bool** | True if agreement is hidden for the user | [optional] 
**display_date** | [**\DateTime**](\DateTime.md) | The display date for the agreement. Format would be yyyy-MM-dd&#39;T&#39;HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time | [optional] 
**esign** | **bool** | True if this is an e-sign document | [optional] 
**name** | **string** | Name of the Agreement | [optional] 
**display_participant_set_infos** | [**\Adobe\ESign\Widgets\Model\DisplayWidgetParticipantSetInfo[]**](DisplayWidgetParticipantSetInfo.md) | The most relevant current user set for the agreement. It is typically the next signer if the agreement is from the current user, or the sender if received from another user | [optional] 
**latest_version_id** | **string** | A version ID which uniquely identifies the current version of the agreement | [optional] 
**id** | **string** | The unique identifier of the agreement.If provided in POST, it will simply be ignored | [optional] 
**status** | **string** | The current status of the document from the perspective of the originator | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


