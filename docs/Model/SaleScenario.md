# # SaleScenario

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package** | **bool** | If true, this rate has been provided to be bundled with car, air, etc. and displayed as a total package price.  If shopping in a cross-sell scenario and using the cross-sell rate option, this indicates that the rate is a package rate available to be sold as an add-on to an existing itinerary. | [optional]
**member** | **bool** | If true, this rate has a \&quot;Member Only Deal\&quot; discount applied to the rate.  Partners must be enabled to receive \&quot;Member Only Deals\&quot;. If interested, partners should speak to their account representatives.  This parameter can be used to merchandise if a \&quot;Member Only Deal\&quot; has been applied, which will help drive loyalty. In addition, it can be used by OTA&#39;s to create an opaque, but public shopping experience.  This value will always be false for requests where the sales_environment is equal to \&quot;hotel_package\&quot;. | [optional]
**corporate** | **bool** | If true, this rate is a corporate negotiated rate.  These rates provide additional value adds (e.g. free breakfast, free wifi, discount) and same-day cancellation. | [optional]
**distribution** | **bool** | If true, this rate is an EPS Optimized Distribution rate. These rates are procured exclusively for EPS distribution and may contain benefits such as larger marketing fee, less restrictive cancellation policies, additional value adds, or unique availability. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
