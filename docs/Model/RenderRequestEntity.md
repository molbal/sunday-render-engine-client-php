# RenderRequestEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type_id** | **int** | Document ID | [optional] 
**extra_engine_parameters** | **string** | Extra WKHTMLTOPDF engine parameters, seen here: https://wkhtmltopdf.org/usage/wkhtmltopdf.txt | [optional] 
**id** | **int** | Unique identifier. Unique amongst render requests, but not other objects. | [optional] 
**keywords** | **map[string,string]** | List of keyword keys and values | [optional] 
**project_id** | **int** | Project ID | [optional] 
**render_finished** | [**\DateTime**](\DateTime.md) | Date and time the render request was served | [optional] 
**render_requested** | [**\DateTime**](\DateTime.md) | Date and time the render request was received | [optional] 
**render_target** | **string** | Render target. | [optional] 
**rendered_by** | **string** | Name of entity who sent the request | [optional] 
**rendered_duration** | **int** | The time it took do do the rendering (including verifying and generating files, excluding waiting for free thread) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


