# FormField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**radio_check_type** | **string** | The type of radio button (if field is radio button, identified by inputType). | [optional] 
**border_color** | **string** | Color of the border of the field in RGB or HEX format | [optional] 
**value_expression** | **string** | Expression to calculate value of the form field | [optional] 
**masking_text** | **string** | Text to mask the masked form field | [optional] 
**default_value** | **string** | Default value of the form field | [optional] 
**masked** | **bool** | true if the input entered by the signer has to be masked (like password), false if it shouldn&#39;t be | [optional] 
**min_length** | **int** | Minimum length of the input text field in terms of no. of characters | [optional] 
**origin** | **string** | Origin of Form Field | [optional] 
**tooltip** | **string** | Text that appears while hovering over the field | [optional] 
**hidden_options** | **string[]** | Text values which are hidden in a drop down form field | [optional] 
**required** | **bool** | true if it is a mandatory field to be filled by the signer, else false | [optional] 
**validation_data** | **string** | Further data for validating input with regards to the field&#39;s specified format. The contents and interpretation of formatData depends on the value of validation. | [optional] 
**min_value** | **double** | Lower bound of the number that can be entered by the signer | [optional] 
**border_width** | **double** | Width of the border of the field in pixels | [optional] 
**url_overridable** | **bool** | For widget text fields only - true if the default value may come from the URL, else false | [optional] 
**input_type** | **string** | Input type of the form field | [optional] 
**border_style** | **string** | Style of the border of the field. | [optional] 
**calculated** | **bool** | true if this field&#39;s value is calculated from an expression, else false | [optional] 
**content_type** | **string** | Content Type of the form field. | [optional] 
**validation** | **string** | Rule for validating the field value. | [optional] 
**display_label** | **string** | Display label attached to the field | [optional] 
**hyperlink** | [**\Adobe\ESign\Agreements\Model\FormFieldHyperlink**](FormFieldHyperlink.md) | Hyperlink-specific data (e.g. as url, link type) | [optional] 
**background_color** | **string** | Background color of the form field in RGB or HEX format | [optional] 
**visible** | **bool** | If set to false, then the form field is hidden.  Otherwise, it is visible. | [optional] 
**display_format_type** | **string** | Format type of the text field. | [optional] 
**max_value** | **double** | Upper bound of the number that can be entered by the signer | [optional] 
**validation_err_msg** | **string** | Error message to be shown to the signer if filled value doesn&#39;t match the validations of the form field | [optional] 
**display_format** | **string** | Format of the value of the field to be displayed based on the displayFormatType property. | [optional] 
**visible_options** | **string[]** | Text values which are visible in a drop down form field | [optional] 
**read_only** | **bool** | true if it is a read-only field, else false | [optional] 
**font_name** | **string** | Font name of the form field | [optional] 
**conditional_action** | [**\Adobe\ESign\Agreements\Model\FormFieldConditionalAction**](FormFieldConditionalAction.md) | A predicate (or set of predicates) that determines whether this field is visible and enabled. | [optional] 
**name** | **string** | The name of the form field | [optional] 
**font_size** | **double** | Font size of the form field in points | [optional] 
**locations** | [**\Adobe\ESign\Agreements\Model\FormFieldLocation[]**](FormFieldLocation.md) | All locations in a document where the form field is placed | [optional] 
**assignee** | **string** | Who the field is assigned to.  Either a participant set id, null, NOBODY or PREFILL. | [optional] 
**alignment** | **string** | Alignment of the text. | [optional] 
**font_color** | **string** | Font color of the form field in RGB or HEX format | [optional] 
**max_length** | **int** | Maximum length of the input text field in terms of no. of characters | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


