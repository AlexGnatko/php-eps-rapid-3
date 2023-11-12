# # RoomItinerary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The room id. | [optional]
**confirmation_id** | [**\OpenAPI\Client\Model\ConfirmationId**](ConfirmationId.md) |  | [optional]
**bed_group_id** | **string** | Unique identifier for a bed type. | [optional]
**checkin** | **string** | The check-in date of the itinerary. | [optional]
**checkout** | **string** | The check-out date of the itinerary. | [optional]
**number_of_adults** | **float** | The number of adults staying in the room. | [optional]
**child_ages** | **float[]** | The ages of children for the room. | [optional]
**given_name** | **string** | The first name of the main guest staying in the room. | [optional]
**family_name** | **string** | The last name of the main guest staying in the room. | [optional]
**status** | [**\OpenAPI\Client\Model\StatusItinerary**](StatusItinerary.md) |  | [optional]
**special_request** | **string** | Any special request info associated with the room. | [optional]
**smoking** | **bool** | Indicates if the room is smoking or non-smoking. | [optional]
**loyalty_id** | **string** | A loyalty identifier for a hotel loyalty program associated with this room guest. | [optional]
**rate** | [**\OpenAPI\Client\Model\RateItinerary**](RateItinerary.md) |  | [optional]
**links** | [**\OpenAPI\Client\Model\RoomItineraryLinks**](RoomItineraryLinks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
