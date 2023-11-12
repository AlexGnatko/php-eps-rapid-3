# # Region

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Region Id. | [optional]
**type** | **string** | Region type. | [optional]
**name** | **string** | Region name. | [optional]
**name_full** | **string** | Full region name. | [optional]
**descriptor** | **string** | Specific information about the region e.g. whether it covers surrounding areas for a city. Only present when relevant for a region. See our [region descriptors reference](https://developers.expediagroup.com/docs/rapid/lodging/geography/geography-reference-lists) for current known descriptor values. | [optional]
**iata_airport_code** | **string** | 3-character IATA airport code. | [optional]
**iata_airport_metro_code** | **string** | 3-character IATA airport metropolitan code of the metropolitan airport area. | [optional]
**country_code** | **string** | Region country code (ISO 3166-1 alpha-2). | [optional]
**country_subdivision_code** | **string** | Region country subdivision code (ISO 3166-2). | [optional]
**coordinates** | [**\OpenAPI\Client\Model\CoordinatesRegion**](CoordinatesRegion.md) |  | [optional]
**associations** | **array<string,string[]>** | A map of region types to a sorted array of region ids with a touristic association to the region. | [optional]
**ancestors** | [**\OpenAPI\Client\Model\Ancestors[]**](Ancestors.md) | An array of the region&#39;s ancestors. | [optional]
**descendants** | **array<string,string[]>** | A map of region types to an array of region ids. The region ids are direct descendants of the region. | [optional]
**property_ids** | **string[]** | An array of associated property ids for the region. | [optional]
**property_ids_expanded** | **string[]** | An array of associated property ids within an expanded radius for the region. | [optional]
**categories** | **string[]** | A list of regional categories. | [optional]
**tags** | **string[]** | A list of regional tags. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
