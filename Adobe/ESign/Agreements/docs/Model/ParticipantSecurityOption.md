# ParticipantSecurityOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**password** | **string** | The password required for the participant to view and sign the document. Note that AdobeSign will never show this password to anyone, so you will need to separately communicate it to any relevant parties. The password will not be returned in GET call. In case of PUT call, password associated with Agreement resource will remain unchanged if no password is specified but authentication method is provided as PASSWORD | [optional] 
**authentication_method** | **string** | The authentication method for the participants to have access to view and sign the document | [optional] 
**phone_info** | [**\Adobe\ESign\Agreements\Model\PhoneInfo**](PhoneInfo.md) | The phoneInfo required for the participant to view and sign the document | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


