# # PropertyContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | **string** | Unique Expedia property ID. | [optional]
**name** | **string** | Property name. | [optional]
**address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**ratings** | [**\OpenAPI\Client\Model\Ratings**](Ratings.md) |  | [optional]
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  | [optional]
**phone** | **string** | The property&#39;s phone number. | [optional]
**fax** | **string** | The property&#39;s fax number. | [optional]
**category** | [**\OpenAPI\Client\Model\CategoryProperty**](CategoryProperty.md) |  | [optional]
**business_model** | [**\OpenAPI\Client\Model\BusinessModel**](BusinessModel.md) |  | [optional]
**rank** | **float** | The property’s rank across all properties. This value sorts properties based on EPS transactional data and details about the property, with 1 indicating the best-performing property and others following in ascending numerical order. | [optional]
**checkin** | [**\OpenAPI\Client\Model\Checkin**](Checkin.md) |  | [optional]
**checkout** | [**\OpenAPI\Client\Model\Checkout**](Checkout.md) |  | [optional]
**fees** | [**\OpenAPI\Client\Model\Fees**](Fees.md) |  | [optional]
**policies** | [**\OpenAPI\Client\Model\Policies**](Policies.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\Attributes**](Attributes.md) |  | [optional]
**amenities** | [**array<string,\OpenAPI\Client\Model\Amenity>**](Amenity.md) | Lists all of the amenities available for all guests at the property. See our [amenities reference](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for current known amenity ID and name values. | [optional]
**images** | [**\OpenAPI\Client\Model\Image[]**](Image.md) | Contains all property images available. | [optional]
**onsite_payments** | [**\OpenAPI\Client\Model\OnsitePayments**](OnsitePayments.md) |  | [optional]
**rooms** | [**array<string,\OpenAPI\Client\Model\RoomContent>**](RoomContent.md) | Information about all of the rooms at the property. | [optional]
**rates** | [**array<string,\OpenAPI\Client\Model\RateContent>**](RateContent.md) | Additional information about the rates offered by the property. This should be used in conjunction with the pricing and other rate-related information in shopping. | [optional]
**dates** | [**\OpenAPI\Client\Model\Dates**](Dates.md) |  | [optional]
**descriptions** | [**\OpenAPI\Client\Model\Descriptions**](Descriptions.md) |  | [optional]
**statistics** | [**array<string,\OpenAPI\Client\Model\Statistic>**](Statistic.md) | Statistics of the property, such as number of floors. See our [statistics reference](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for current known statistics ID and name values. | [optional]
**airports** | [**\OpenAPI\Client\Model\AssociatedAirports**](AssociatedAirports.md) |  | [optional]
**themes** | [**array<string,\OpenAPI\Client\Model\Theme>**](Theme.md) | Themes that describe the property. See our [themes reference](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for current known theme ID and name values. | [optional]
**all_inclusive** | [**\OpenAPI\Client\Model\AllInclusive**](AllInclusive.md) |  | [optional]
**tax_id** | **string** | Tax ID. | [optional]
**chain** | [**\OpenAPI\Client\Model\Chain**](Chain.md) |  | [optional]
**brand** | [**\OpenAPI\Client\Model\Brand**](Brand.md) |  | [optional]
**spoken_languages** | [**array<string,\OpenAPI\Client\Model\SpokenLanguage>**](SpokenLanguage.md) | Languages spoken at the property. | [optional]
**multi_unit** | **bool** | Boolean value indicating if a property is a multi-unit property. | [optional]
**payment_registration_recommended** | **bool** | Boolean value indicating if a property may require payment registration to process payments, even when using the property_collect Business Model. If true, then a property may not be successfully bookable without registering payments first. | [optional]
**vacation_rental_details** | [**\OpenAPI\Client\Model\VacationRentalDetails**](VacationRentalDetails.md) |  | [optional]
**supply_source** | **string** | The supply source of the property. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
