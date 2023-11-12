# # Itinerary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itinerary_id** | **string** | The itinerary id. | [optional]
**property_id** | **string** | The property id. | [optional]
**links** | [**\OpenAPI\Client\Model\ItineraryLinks**](ItineraryLinks.md) |  | [optional]
**email** | **string** | Email address for the customer. | [optional]
**phone** | [**\OpenAPI\Client\Model\Phone**](Phone.md) |  | [optional]
**rooms** | [**\OpenAPI\Client\Model\RoomItinerary[]**](RoomItinerary.md) |  | [optional]
**billing_contact** | [**\OpenAPI\Client\Model\BillingContact**](BillingContact.md) |  | [optional]
**adjustment** | [**\OpenAPI\Client\Model\Adjustment**](Adjustment.md) |  | [optional]
**creation_date_time** | **string** | The creation date/time of the booking. | [optional]
**affiliate_reference_id** | **string** | Your unique reference value. This field supports from 3 to a maximum of 28 characters. | [optional]
**affiliate_metadata** | **string** | Field that stores up to 256 characters of additional metadata with the itinerary, uniqueness is not required. | [optional]
**conversations** | [**\OpenAPI\Client\Model\Conversations**](Conversations.md) |  | [optional]
**trader_information** | [**\OpenAPI\Client\Model\TraderInformation**](TraderInformation.md) |  | [optional]
**essential_information** | [**\OpenAPI\Client\Model\EssentialInformation**](EssentialInformation.md) |  | [optional]
**travel_purpose** | **string** | Value potentially passed in during the availability request to indicate the purpose of the trip designated by the traveler. | [optional]
**itinerary_history** | [**\OpenAPI\Client\Model\ItineraryHistoryItem[]**](ItineraryHistoryItem.md) |  | [optional]
**room_history** | **\OpenAPI\Client\Model\RoomHistoryItem[][]** | An array of rooms each containing an array of room history events. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
