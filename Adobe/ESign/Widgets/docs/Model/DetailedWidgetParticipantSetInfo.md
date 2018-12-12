# DetailedWidgetParticipantSetInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | Role assumed by all participants in the set (signer, approver etc.). This cannot be changed as part of the PUT call. | [optional] 
**id** | **string** | The unique identifier of the participant set. This cannot be changed as part of the PUT call. | [optional] 
**member_infos** | [**\Adobe\ESign\Widgets\Model\DetailedParticipantInfo[]**](DetailedParticipantInfo.md) | Array of ParticipantInfo objects, containing participant-specific data (e.g. email). All participants in the array belong to the same set | [optional] 
**order** | **int** | Index indicating sequential signing group (specified for hybrid routing). This cannot be changed as part of the PUT call. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


