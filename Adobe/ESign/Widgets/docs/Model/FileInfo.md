# FileInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transient_document_id** | **string** | ID for a transient document that will be added to the widget | [optional] 
**document** | [**\Adobe\ESign\Widgets\Model\Document**](Document.md) | A document that is associated with the widget. This field cannot be provided in POST call. In case of GET call, this is the only field returned in the response | [optional] 
**label** | **string** | The unique label value of a file info element. In case of custom workflow this will map a file to corresponding file element in workflow definition. This must be specified in case of custom workflow agreement creation request | [optional] 
**url_file_info** | [**\Adobe\ESign\Widgets\Model\URLFileInfo**](URLFileInfo.md) | URL for an external document to add to the agreement | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


