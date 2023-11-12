# # RoomPriceCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\OpenAPI\Client\Model\StatusPriceCheck**](StatusPriceCheck.md) |  | [optional]
**occupancy_pricing** | [**array<string,\OpenAPI\Client\Model\PricingInformation>**](PricingInformation.md) | A map of room information by occupancy. | [optional]
**links** | [**\OpenAPI\Client\Model\RoomPriceCheckLinks**](RoomPriceCheckLinks.md) |  | [optional]
**card_on_file_limit** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**refundable_damage_deposit** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**deposits** | [**\OpenAPI\Client\Model\Deposit[]**](Deposit.md) | Array of deposits. | [optional]
**refund** | [**\OpenAPI\Client\Model\Charge**](Charge.md) |  | [optional]
**amount_owed** | [**\OpenAPI\Client\Model\Charge**](Charge.md) |  | [optional]
**penalty** | [**\OpenAPI\Client\Model\Charge**](Charge.md) |  | [optional]
**trader_information** | [**\OpenAPI\Client\Model\TraderInformation**](TraderInformation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
