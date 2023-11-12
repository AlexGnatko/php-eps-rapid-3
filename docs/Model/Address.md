# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_1** | **string** | Address line 1. | [optional]
**line_2** | **string** | Address line 2. | [optional]
**city** | **string** | City. | [optional]
**state_province_code** | **string** | 2-letter or 3-letter state/province code for Australia, Canada and the USA. | [optional]
**state_province_name** | **string** | Text name of the State/Province - more common for additional countries. | [optional]
**postal_code** | **string** | Postal/zip code. | [optional]
**country_code** | **string** | 2-letter country code, in ISO 3166-1 alpha-2 format. | [optional]
**obfuscation_required** | **bool** | Flag to indicate whether a property address requires obfuscation before the property has been booked. If true, only the city, province, and country of the address can be shown to the customer. | [optional]
**localized** | [**\OpenAPI\Client\Model\Localized**](Localized.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
