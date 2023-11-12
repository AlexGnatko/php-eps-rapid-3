# # RoomHistoryItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**history_id** | **string** | Room history id for particular change. | [optional]
**event_timestamp** | **string** | Date and time in UTC of the change event, in extended ISO 8601 format. | [optional]
**event_type** | **string** | Type type of event associated with this history item such as modified or canceled. | [optional]
**event_source** | **string** | The source of the event. If &#x60;voyager_agent&#x60;, &#x60;agent_id&#x60; will be supplied. | [optional]
**change_reference_id** | **string** | Optional identifier provided during changes via Rapid. | [optional]
**agent_id** | **int** | An agent user id number associated with a modification. | [optional]
**room_id** | **string** | The room id. | [optional]
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
**amount_charged** | [**\OpenAPI\Client\Model\Charge**](Charge.md) |  | [optional]
**amount_refunded** | [**\OpenAPI\Client\Model\Charge**](Charge.md) |  | [optional]
**penalty** | [**\OpenAPI\Client\Model\Charge**](Charge.md) |  | [optional]
**rate** | [**\OpenAPI\Client\Model\RateHistory**](RateHistory.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
