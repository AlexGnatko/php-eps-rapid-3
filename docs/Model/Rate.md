# # Rate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Identifier for a rate. | [optional]
**status** | [**\OpenAPI\Client\Model\Status**](Status.md) |  | [optional]
**available_rooms** | **float** | The number of bookable rooms remaining with this rate in EPS inventory. Use this value to create rules for urgency messaging to alert users to low availability on busy travel dates or at popular properties. If the value returns as 2147483647 (max int value), the actual value could not be determined. Ensure your urgency messaging ignores such instances when returned. | [optional]
**refundable** | **bool** | Indicates if the rate is fully refundable at the time of booking. Cancel penalties may still apply. Please refer to the cancel penalties section for reference. | [optional]
**member_deal_available** | **bool** | Indicates if a \&quot;Member Only Deal\&quot; is available for this rate. | [optional]
**sale_scenario** | [**\OpenAPI\Client\Model\SaleScenario**](SaleScenario.md) |  | [optional]
**merchant_of_record** | [**\OpenAPI\Client\Model\MerchantOfRecord**](MerchantOfRecord.md) |  | [optional]
**amenities** | [**array<string,\OpenAPI\Client\Model\Amenity>**](Amenity.md) | Room amenities. | [optional]
**links** | [**\OpenAPI\Client\Model\RateLinks**](RateLinks.md) |  | [optional]
**bed_groups** | [**array<string,\OpenAPI\Client\Model\BedGroupAvailability>**](BedGroupAvailability.md) | A map of the room&#39;s bed groups. | [optional]
**cancel_penalties** | [**\OpenAPI\Client\Model\CancelPenalty[]**](CancelPenalty.md) | Array of &#x60;cancel_penalty&#x60; objects containing cancel penalty information. | [optional]
**nonrefundable_date_ranges** | [**\OpenAPI\Client\Model\NonrefundableDateRange[]**](NonrefundableDateRange.md) | An array of stay date ranges within this check-in / check-out range that are not refundable. Stay dates within these ranges provide no refund on cancellation, regardless of cancel penalty windows. The stay dates are determined by the would be check-in of that night. With a check-in date of 2023-09-01, and a check-out date of 2023-09-06, this would be a 5 night stay. A &#x60;nonrefundable_date_range&#x60; with start: 2023-09-02 and end: 2023-09-03 would mean 2 of the nights are nonrefundable. The 1st night is refundable, the 2nd and 3rd nights are nonrefundable, and the 4th and 5th nights are refundable, subject to &#x60;cancel_penalties&#x60; restrictions. | [optional]
**occupancy_pricing** | [**array<string,\OpenAPI\Client\Model\PricingInformation>**](PricingInformation.md) | A map of room information by occupancy. | [optional]
**promotions** | [**\OpenAPI\Client\Model\Promotions**](Promotions.md) |  | [optional]
**card_on_file_limit** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**refundable_damage_deposit** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**deposits** | [**\OpenAPI\Client\Model\Deposit[]**](Deposit.md) | Array of deposits for the rate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
