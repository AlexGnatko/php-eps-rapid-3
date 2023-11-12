# # PricingInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nightly** | **\OpenAPI\Client\Model\NightCharge[][]** | Array of arrays of amount objects. Each sub-array of amount objects represents a single night&#39;s charges. | [optional]
**stay** | [**\OpenAPI\Client\Model\Stay[]**](Stay.md) | Array of amount objects. Details any charges that apply to the entire stay (not divided per-night). Any per-room adjustments are applied to the &#x60;base_rate&#x60; amount within this object. | [optional]
**totals** | [**\OpenAPI\Client\Model\Totals**](Totals.md) |  | [optional]
**fees** | [**\OpenAPI\Client\Model\FeesPricingInformation**](FeesPricingInformation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
