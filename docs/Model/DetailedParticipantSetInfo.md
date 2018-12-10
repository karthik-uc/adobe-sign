# DetailedParticipantSetInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | Role assumed by all participants in the set (signer, approver etc.). This cannot be changed as part of the PUT call. | [optional] 
**name** | **string** | Name of ParticipantSet (it can be empty, but needs not to be unique in a single agreement). Maximum no of characters in participant set name is restricted to 255. This cannot be changed as part of the PUT call. | [optional] 
**id** | **string** | The unique identifier of the participant set. This cannot be changed as part of the PUT call. | [optional] 
**private_message** | **string** | Participant set&#39;s private message - all participants in the set will receive the same message. This cannot be changed as part of the PUT call. | [optional] 
**member_infos** | [**\Swagger\Client\Model\DetailedParticipantInfo[]**](DetailedParticipantInfo.md) | Array of ParticipantInfo objects, containing participant-specific data (e.g. email). All participants in the array belong to the same set | [optional] 
**order** | **int** | Index indicating sequential signing group (specified for hybrid routing). This cannot be changed as part of the PUT call. | [optional] 
**status** | **string** | The agreement status with respect to the participant set. This cannot be changed as part of the PUT call. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


