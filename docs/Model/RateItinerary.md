# # RateItinerary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the rate. | [optional]
**merchant_of_record** | [**\OpenAPI\Client\Model\MerchantOfRecord**](MerchantOfRecord.md) |  | [optional]
**refundable** | **bool** | Indicates whether the itinerary is refundable or not. | [optional]
**cancel_refund** | [**\OpenAPI\Client\Model\CancelRefund**](CancelRefund.md) |  | [optional]
**amenities** | **string[]** |  | [optional]
**promotions** | [**\OpenAPI\Client\Model\PromotionsItinerary**](PromotionsItinerary.md) |  | [optional]
**cancel_penalties** | [**\OpenAPI\Client\Model\CancelPenalty[]**](CancelPenalty.md) | The cancel penalties associated with the itinerary. | [optional]
**nonrefundable_date_ranges** | [**\OpenAPI\Client\Model\NonrefundableDateRange[]**](NonrefundableDateRange.md) | A list of date exceptions. Dates within these ranges provide no refund on cancellation, regardless of cancel penalty windows. Nonrefundable range begins at 00:00:00 on the start date, and ends at 23:59:59 on the end date, in the local time zone of the property. | [optional]
**deposits** | [**\OpenAPI\Client\Model\DepositItinerary[]**](DepositItinerary.md) |  | [optional]
**card_on_file_limit** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**refundable_damage_deposit** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**pricing** | [**\OpenAPI\Client\Model\PricingInformation**](PricingInformation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
