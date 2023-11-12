# # VacationRentalDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registry_number** | **string** | The property&#39;s registry number required by some jurisdictions. | [optional]
**private_host** | **bool** | Indicates if a property has a private host. | [optional]
**property_manager** | [**\OpenAPI\Client\Model\PropertyManager**](PropertyManager.md) |  | [optional]
**rental_agreement** | [**\OpenAPI\Client\Model\RentalAgreement**](RentalAgreement.md) |  | [optional]
**house_rules** | **string[]** | List of strings detailing house rules. | [optional]
**enhanced_house_rules** | [**array<string,\OpenAPI\Client\Model\EnhancedHouseRules>**](EnhancedHouseRules.md) | Map of enhanced house rules. | [optional]
**amenities** | [**\OpenAPI\Client\Model\Amenity**](Amenity.md) |  | [optional]
**vrbo_srp_id** | **string** | The Vrbo srp needed for link-off. | [optional]
**listing_id** | **string** | The listing id for a Vrbo property. | [optional]
**listing_number** | **string** | The listing number for a Vrbo property. | [optional]
**listing_source** | **string** | The listing source. | [optional]
**listing_unit** | **string** | The specific unit. | [optional]
**ipm_name** | **string** | The name of the IPM used to build guest messaging to inform travelers of the name of the IPM who will charge their card and/or send them a confirmation email. | [optional]
**unit_configurations** | **array<string,\OpenAPI\Client\Model\UnitConfiguration[]>** | Map of the vacation rental unit configurations. The key value is the unit location. | [optional]
**free_text** | **string** | A free text description that could contain significantly unstructured information that could impact the booking and should be displayed to customers. This field could contain html break tags &#x60;&lt;br&gt;&#x60; that may make display challenging. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
