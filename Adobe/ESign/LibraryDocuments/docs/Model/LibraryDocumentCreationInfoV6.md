# LibraryDocumentCreationInfoV6

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_date** | [**\DateTime**](\DateTime.md) | Date when library document was created. It will be ignored in POST/PUT requests. Format would be yyyy-MM-dd&#39;T&#39;HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time | [optional] 
**template_types** | **string[]** | A list of one or more library template types | [optional] 
**creator_email** | **string** | Email address of the library document creator. It will be ignored in POST/PUT requests | [optional] 
**sharing_mode** | **string** | Specifies who should have access to this library document. GLOBAL sharing mode is not applicable in POST/PUT requests | [optional] 
**creator_name** | **string** | Name of the library document creator.  It will be ignored in POST/PUT requests | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | Date when library document was last modified. It will be ignored in POST/PUT requests. Format would be yyyy-MM-dd&#39;T&#39;HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time | [optional] 
**name** | **string** | The name of the library template that will be used to identify it, in emails and on the website | [optional] 
**file_infos** | [**\Adobe\ESign\LibraryDocuments\Model\FileInfo[]**](FileInfo.md) | A list of one or more files (or references to files) that will be used to create the template. If more than one file is provided, they will be combined into one PDF. Note: Only a single parameter in every FileInfo object must be specified | [optional] 
**id** | **string** | The unique identifier that is used to refer to the library template. It will be ignored in POST requests | [optional] 
**state** | **string** | State of the library document. | [optional] 
**status** | **string** | Status of the library document | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


