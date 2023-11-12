# OpenAPI\Client\ShoppingApi

All URIs are relative to https://test.ean.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdditionalAvailability()**](ShoppingApi.md#getAdditionalAvailability) | **GET** /properties/{property_id}/availability | Get additional property room rates and availability |
| [**getAvailability()**](ShoppingApi.md#getAvailability) | **GET** /properties/availability | Get property room rates and availability |
| [**getCalendarAvailability()**](ShoppingApi.md#getCalendarAvailability) | **GET** /calendars/availability | Get a calendar of availability dates for properties. This is currently a Vrbo property only feature. |
| [**getPaymentOptions()**](ShoppingApi.md#getPaymentOptions) | **GET** /properties/{property_id}/payment-options | Get Accepted Payment Types - EPS MOR Only |
| [**priceCheck()**](ShoppingApi.md#priceCheck) | **GET** /properties/{property_id}/rooms/{room_id}/rates/{rate_id} | Price-Check |


## `getAdditionalAvailability()`

```php
getAdditionalAvailability($accept, $accept_encoding, $user_agent, $property_id, $token, $customer_ip, $customer_session_id, $test, $checkin, $checkout, $exclusion, $filter, $occupancy, $rate_option, $sales_channel, $sales_environment): \OpenAPI\Client\Model\PropertyAvailability[]
```

Get additional property room rates and availability

Returns additional rates on available room types, using the parameters of the previous call.  The response includes rate details such as promos, whether the rate is refundable, cancellation penalties and a full price breakdown to meet the price display requirements for your market. _Note_: If there are no available rooms, the response will be an empty array. * The `nightly` array includes each individual night's charges. When the total price includes fees, charges, or adjustments that are not divided by night, these amounts will be included in the `stay` rate array, which details charges applied to the entire stay (each check-in).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShoppingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$property_id = 19248; // string | Expedia Property ID.<br>
$token = 'token_example'; // string | A hashed collection of query parameters. Used to maintain state across calls. This token is provided as part of the `additional_rates` link from the shop response, or the `shop` link on a `sold_out` price check response. It is also provided from the `shop_for_change` link on an itinerary retrieve.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | Shop calls have a test header that can be used to return set responses with the following keywords:<br> * `standard` * `service_unavailable` * `unknown_internal_error` * `no_availability` * `forbidden`
$checkin = 2024-01-11; // string | Check-in date, in ISO 8601 format (YYYY-MM-DD)<br> Note: Only needed for hard change if desired check-in date is different than original booking. If specified must also specify `checkout`.
$checkout = 2024-01-13; // string | Check-out date, in ISO 8601 format (YYYY-MM-DD). Availability can be searched up to 500 days in advance of this date. Total length of stay cannot exceed 28 nights.<br> Note: Only needed for hard change if desired check-out date is different than original booking. If specified must also specify `checkin`.<br>
$exclusion = ["refundable_damage_deposit"]; // string[] | Single exclusion type. Send multiple instances of this parameter to request multiple exclusions.<br> Note: Optional parameter for use with hard change requests. <br> * `refundable_damage_deposit` - Excludes rates with refundable damage deposits from the response.
$filter = ["refundable","expedia_collect"]; // string[] | Single filter type. Send multiple instances of this parameter to request multiple filters.<br> Note: Optional parameter for use with hard change requests.<br> * `refundable` - Filters results to only show fully refundable rates. * `expedia_collect` - Filters results to only show rates where payment is collected by Expedia at the time of booking. These properties can be eligible for payments via Expedia Affiliate Collect(EAC). * `property_collect` - Filters results to only show rates where payment is collected by the property after booking. This can include rates that require a deposit by the property, dependent upon the deposit policies.
$occupancy = array('occupancy_example'); // string[] | Defines the requested occupancy for a single room. Each room must have at least 1 adult occupant.<br> Format: `numberOfAdults[-firstChildAge[,nextChildAge]]`<br> To request multiple rooms (of the same type), include one instance of occupancy for each room requested. Up to 8 rooms may be requested or booked at once.<br> Note: Only needed for hard change if desired occupancy is different than original booking.<br> Examples: * 2 adults, one 9-year-old and one 4-year-old would be represented by `occupancy=2-9,4`.<br> * A multi-room request to lodge an additional 2 adults would be represented by `occupancy=2-9,4&occupancy=2`
$rate_option = ["member","net_rates"]; // string[] | Request specific rate options for each property. Send multiple instances of this parameter to request multiple rate options. Note: Optional parameter for use with hard change requests.<br> Accepted values:<br> * `member` - Return member rates for each property. This feature must be enabled and requires a user to be logged in to request these rates. * `net_rates` - Return net rates for each property. This feature must be enabled to request these rates. * `cross_sell` - Identify if the traffic is coming from a cross sell booking. Where the traveler has booked another service (flight, car, activities...) before hotel.
$sales_channel = 'sales_channel_example'; // string | Provide the sales channel if you wish to override the sales_channel provided in the previous call. EPS dynamically provides the best content for optimal conversion on each sales channel.<br> Note: Must specify this value for hard change requests.<br> * `website` - Standard website accessed from the customer's computer * `agent_tool` - Your own agent tool used by your call center or retail store agent * `mobile_app` - An application installed on a phone or tablet device * `mobile_web` - A web browser application on a phone or tablet device * `meta` - Rates will be passed to and displayed on a 3rd party comparison website * `cache` - Rates will be used to populate a local cache
$sales_environment = 'sales_environment_example'; // string | Provide the sales environment if you wish to override the sales_environment provided in the previous call. EPS dynamically provides the best content for optimal conversion. If you have a sales environment that is not currently supported in this list, please contact our support team.<br> Note: Must specify this value for hard change requests.<br> * `hotel_package` - Standard website accessed from the customer's computer * `hotel_only` - Your own agent tool used by your call center or retail store agent * `loyalty` - An application installed on a phone or tablet device

try {
    $result = $apiInstance->getAdditionalAvailability($accept, $accept_encoding, $user_agent, $property_id, $token, $customer_ip, $customer_session_id, $test, $checkin, $checkout, $exclusion, $filter, $occupancy, $rate_option, $sales_channel, $sales_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingApi->getAdditionalAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **property_id** | **string**| Expedia Property ID.&lt;br&gt; | |
| **token** | **string**| A hashed collection of query parameters. Used to maintain state across calls. This token is provided as part of the &#x60;additional_rates&#x60; link from the shop response, or the &#x60;shop&#x60; link on a &#x60;sold_out&#x60; price check response. It is also provided from the &#x60;shop_for_change&#x60; link on an itinerary retrieve. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | [optional] |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| Shop calls have a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; * &#x60;service_unavailable&#x60; * &#x60;unknown_internal_error&#x60; * &#x60;no_availability&#x60; * &#x60;forbidden&#x60; | [optional] |
| **checkin** | **string**| Check-in date, in ISO 8601 format (YYYY-MM-DD)&lt;br&gt; Note: Only needed for hard change if desired check-in date is different than original booking. If specified must also specify &#x60;checkout&#x60;. | [optional] |
| **checkout** | **string**| Check-out date, in ISO 8601 format (YYYY-MM-DD). Availability can be searched up to 500 days in advance of this date. Total length of stay cannot exceed 28 nights.&lt;br&gt; Note: Only needed for hard change if desired check-out date is different than original booking. If specified must also specify &#x60;checkin&#x60;.&lt;br&gt; | [optional] |
| **exclusion** | [**string[]**](../Model/string.md)| Single exclusion type. Send multiple instances of this parameter to request multiple exclusions.&lt;br&gt; Note: Optional parameter for use with hard change requests. &lt;br&gt; * &#x60;refundable_damage_deposit&#x60; - Excludes rates with refundable damage deposits from the response. | [optional] |
| **filter** | [**string[]**](../Model/string.md)| Single filter type. Send multiple instances of this parameter to request multiple filters.&lt;br&gt; Note: Optional parameter for use with hard change requests.&lt;br&gt; * &#x60;refundable&#x60; - Filters results to only show fully refundable rates. * &#x60;expedia_collect&#x60; - Filters results to only show rates where payment is collected by Expedia at the time of booking. These properties can be eligible for payments via Expedia Affiliate Collect(EAC). * &#x60;property_collect&#x60; - Filters results to only show rates where payment is collected by the property after booking. This can include rates that require a deposit by the property, dependent upon the deposit policies. | [optional] |
| **occupancy** | [**string[]**](../Model/string.md)| Defines the requested occupancy for a single room. Each room must have at least 1 adult occupant.&lt;br&gt; Format: &#x60;numberOfAdults[-firstChildAge[,nextChildAge]]&#x60;&lt;br&gt; To request multiple rooms (of the same type), include one instance of occupancy for each room requested. Up to 8 rooms may be requested or booked at once.&lt;br&gt; Note: Only needed for hard change if desired occupancy is different than original booking.&lt;br&gt; Examples: * 2 adults, one 9-year-old and one 4-year-old would be represented by &#x60;occupancy&#x3D;2-9,4&#x60;.&lt;br&gt; * A multi-room request to lodge an additional 2 adults would be represented by &#x60;occupancy&#x3D;2-9,4&amp;occupancy&#x3D;2&#x60; | [optional] |
| **rate_option** | [**string[]**](../Model/string.md)| Request specific rate options for each property. Send multiple instances of this parameter to request multiple rate options. Note: Optional parameter for use with hard change requests.&lt;br&gt; Accepted values:&lt;br&gt; * &#x60;member&#x60; - Return member rates for each property. This feature must be enabled and requires a user to be logged in to request these rates. * &#x60;net_rates&#x60; - Return net rates for each property. This feature must be enabled to request these rates. * &#x60;cross_sell&#x60; - Identify if the traffic is coming from a cross sell booking. Where the traveler has booked another service (flight, car, activities...) before hotel. | [optional] |
| **sales_channel** | **string**| Provide the sales channel if you wish to override the sales_channel provided in the previous call. EPS dynamically provides the best content for optimal conversion on each sales channel.&lt;br&gt; Note: Must specify this value for hard change requests.&lt;br&gt; * &#x60;website&#x60; - Standard website accessed from the customer&#39;s computer * &#x60;agent_tool&#x60; - Your own agent tool used by your call center or retail store agent * &#x60;mobile_app&#x60; - An application installed on a phone or tablet device * &#x60;mobile_web&#x60; - A web browser application on a phone or tablet device * &#x60;meta&#x60; - Rates will be passed to and displayed on a 3rd party comparison website * &#x60;cache&#x60; - Rates will be used to populate a local cache | [optional] |
| **sales_environment** | **string**| Provide the sales environment if you wish to override the sales_environment provided in the previous call. EPS dynamically provides the best content for optimal conversion. If you have a sales environment that is not currently supported in this list, please contact our support team.&lt;br&gt; Note: Must specify this value for hard change requests.&lt;br&gt; * &#x60;hotel_package&#x60; - Standard website accessed from the customer&#39;s computer * &#x60;hotel_only&#x60; - Your own agent tool used by your call center or retail store agent * &#x60;loyalty&#x60; - An application installed on a phone or tablet device | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertyAvailability[]**](../Model/PropertyAvailability.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailability()`

```php
getAvailability($accept, $accept_encoding, $user_agent, $checkin, $checkout, $currency, $country_code, $language, $occupancy, $property_id, $rate_plan_count, $sales_channel, $sales_environment, $customer_ip, $customer_session_id, $test, $amenity_category, $exclusion, $filter, $include, $rate_option, $travel_purpose, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name): \OpenAPI\Client\Model\Property[]
```

Get property room rates and availability

Returns rates on available room types for specified properties (maximum of 250 properties per request).  The response includes rate details such as promos, whether the rate is refundable, cancellation penalties and a full price breakdown to meet the price display requirements for your market. _Note_: If there are no available rooms, the response will be an empty array. * Multiple rooms of the same type may be requested by including multiple instances of the `occupancy` parameter. * The `nightly` array includes each individual night's charges. When the total price includes fees, charges, or adjustments that are not divided by night, these amounts will be included in the `stay` rate array, which details charges applied to the entire stay (each check-in).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShoppingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$checkin = 2024-01-11; // string | Check-in date, in ISO 8601 format (YYYY-MM-DD)
$checkout = 2024-01-13; // string | Check-out date, in ISO 8601 format (YYYY-MM-DD). Availability can be searched up to 500 days in advance of this date. Total length of stay cannot exceed 28 nights.
$currency = USD; // string | Requested currency for the rates, in ISO 4217 format<br><br> Currency Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/currency-options](https://developers.expediagroup.com/docs/rapid/resources/reference/currency-options)
$country_code = US; // string | The country code of the traveler's point of sale, in ISO 3166-1 alpha-2 format. This should represent the country where the shopping transaction is taking place.<br> For more information see: [https://www.iso.org/obp/ui/#search/code/](https://www.iso.org/obp/ui/#search/code/)
$language = en-US; // string | Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)<br> Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options)
$occupancy = 2; // string[] | Defines the requested occupancy for a single room. Each room must have at least 1 adult occupant.<br> Format: `numberOfAdults[-firstChildAge[,nextChildAge]]`<br> To request multiple rooms (of the same type), include one instance of occupancy for each room requested. Up to 8 rooms may be requested or booked at once.<br> Examples: * 2 adults, one 9-year-old and one 4-year-old would be represented by `occupancy=2-9,4`.<br> * A multi-room request to lodge an additional 2 adults would be represented by `occupancy=2-9,4&occupancy=2`
$property_id = [20321]; // string[] | The ID of the property you want to search for. You can provide 1 to 250 property_id parameters.
$rate_plan_count = 1; // float | The number of rates to return per property. The rates with the best value will be returned, e.g. a rate_plan_count=4 will return the best 4 rates, but the rates are not ordered from lowest to highest or vice versa in the response. Generally lowest rates will be prioritized.<br><br> The value must be between 1 and 250.
$sales_channel = website; // string | You must provide the sales channel for the display of rates. EPS dynamically provides the best content for optimal conversion on each sales channel. If you have a sales channel that is not currently supported in this list, please contact our support team.<br> * `website` - Standard website accessed from the customer's computer * `agent_tool` - Your own agent tool used by your call center or retail store agent * `mobile_app` - An application installed on a phone or tablet device * `mobile_web` - A web browser application on a phone or tablet device * `meta` - Rates will be passed to and displayed on a 3rd party comparison website * `cache` - Rates will be used to populate a local cache
$sales_environment = hotel_only; // string | You must provide the sales environment in which rates will be sold. EPS dynamically provides the best content for optimal conversion. If you have a sales environment that is not currently supported in this list, please contact our support team.<br> * `hotel_package` - Use when selling the hotel with a transport product, e.g. flight & hotel. * `hotel_only` - Use when selling the hotel as an individual product. * `loyalty` - Use when you are selling the hotel as part of a loyalty program and the price is converted to points.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | Shop calls have a test header that can be used to return set responses with the following keywords:<br> * `standard` * `service_unavailable` * `unknown_internal_error`
$amenity_category = ["swimming_pool"]; // string[] | Single amenity category. Send multiple instances of this parameter to request rates that match multiple amenity categories.<br> See the Amenity Categories section of the [Content Reference Lists](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for a list of values.
$exclusion = ["refundable_damage_deposit"]; // string[] | Single exclusion type. Send multiple instances of this parameter to request multiple exclusions.<br> * `refundable_damage_deposit` - Excludes rates with refundable damage deposits from the response.
$filter = ["expedia_collect"]; // string[] | Single filter type. Send multiple instances of this parameter to request multiple filters.<br> * `refundable` - Filters results to only show fully refundable rates. * `expedia_collect` - Filters results to only show rates where payment is collected by Expedia at the time of booking. These properties can be eligible for payments via Expedia Affiliate Collect(EAC). * `property_collect` - Filters results to only show rates where payment is collected by the property after booking. This can include rates that require a deposit by the property, dependent upon the deposit policies.
$include = unavailable_reason; // string[] | Modify the response by including types of responses that are not provided by default.<br> * `unavailable_reason` - When a property is unavailable for an actionable reason, return a response with that reason - See [Unavailable Reason Codes](https://developers.expediagroup.com/docs/rapid/resources/reference/unavailable-reason-codes) for possible values.
$rate_option = array('rate_option_example'); // string[] | Request specific rate options for each property. Send multiple instances of this parameter to request multiple rate options. Accepted values:<br> * `member` - Return member rates for each property. This feature must be enabled and requires a user to be logged in to request these rates. * `net_rates` - Return net rates for each property. This feature must be enabled to request these rates. * `cross_sell` - Identify if the traffic is coming from a cross sell booking. Where the traveler has booked another service (flight, car, activities...) before hotel.
$travel_purpose = leisure; // string | This parameter is to specify the travel purpose of the booking. This may impact available rate plans, pricing, or tax calculations. * `leisure` * `business`
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getAvailability($accept, $accept_encoding, $user_agent, $checkin, $checkout, $currency, $country_code, $language, $occupancy, $property_id, $rate_plan_count, $sales_channel, $sales_environment, $customer_ip, $customer_session_id, $test, $amenity_category, $exclusion, $filter, $include, $rate_option, $travel_purpose, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingApi->getAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **checkin** | **string**| Check-in date, in ISO 8601 format (YYYY-MM-DD) | |
| **checkout** | **string**| Check-out date, in ISO 8601 format (YYYY-MM-DD). Availability can be searched up to 500 days in advance of this date. Total length of stay cannot exceed 28 nights. | |
| **currency** | **string**| Requested currency for the rates, in ISO 4217 format&lt;br&gt;&lt;br&gt; Currency Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/currency-options](https://developers.expediagroup.com/docs/rapid/resources/reference/currency-options) | |
| **country_code** | **string**| The country code of the traveler&#39;s point of sale, in ISO 3166-1 alpha-2 format. This should represent the country where the shopping transaction is taking place.&lt;br&gt; For more information see: [https://www.iso.org/obp/ui/#search/code/](https://www.iso.org/obp/ui/#search/code/) | |
| **language** | **string**| Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)&lt;br&gt; Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options) | |
| **occupancy** | [**string[]**](../Model/string.md)| Defines the requested occupancy for a single room. Each room must have at least 1 adult occupant.&lt;br&gt; Format: &#x60;numberOfAdults[-firstChildAge[,nextChildAge]]&#x60;&lt;br&gt; To request multiple rooms (of the same type), include one instance of occupancy for each room requested. Up to 8 rooms may be requested or booked at once.&lt;br&gt; Examples: * 2 adults, one 9-year-old and one 4-year-old would be represented by &#x60;occupancy&#x3D;2-9,4&#x60;.&lt;br&gt; * A multi-room request to lodge an additional 2 adults would be represented by &#x60;occupancy&#x3D;2-9,4&amp;occupancy&#x3D;2&#x60; | |
| **property_id** | [**string[]**](../Model/string.md)| The ID of the property you want to search for. You can provide 1 to 250 property_id parameters. | |
| **rate_plan_count** | **float**| The number of rates to return per property. The rates with the best value will be returned, e.g. a rate_plan_count&#x3D;4 will return the best 4 rates, but the rates are not ordered from lowest to highest or vice versa in the response. Generally lowest rates will be prioritized.&lt;br&gt;&lt;br&gt; The value must be between 1 and 250. | |
| **sales_channel** | **string**| You must provide the sales channel for the display of rates. EPS dynamically provides the best content for optimal conversion on each sales channel. If you have a sales channel that is not currently supported in this list, please contact our support team.&lt;br&gt; * &#x60;website&#x60; - Standard website accessed from the customer&#39;s computer * &#x60;agent_tool&#x60; - Your own agent tool used by your call center or retail store agent * &#x60;mobile_app&#x60; - An application installed on a phone or tablet device * &#x60;mobile_web&#x60; - A web browser application on a phone or tablet device * &#x60;meta&#x60; - Rates will be passed to and displayed on a 3rd party comparison website * &#x60;cache&#x60; - Rates will be used to populate a local cache | |
| **sales_environment** | **string**| You must provide the sales environment in which rates will be sold. EPS dynamically provides the best content for optimal conversion. If you have a sales environment that is not currently supported in this list, please contact our support team.&lt;br&gt; * &#x60;hotel_package&#x60; - Use when selling the hotel with a transport product, e.g. flight &amp; hotel. * &#x60;hotel_only&#x60; - Use when selling the hotel as an individual product. * &#x60;loyalty&#x60; - Use when you are selling the hotel as part of a loyalty program and the price is converted to points. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | [optional] |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| Shop calls have a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; * &#x60;service_unavailable&#x60; * &#x60;unknown_internal_error&#x60; | [optional] |
| **amenity_category** | [**string[]**](../Model/string.md)| Single amenity category. Send multiple instances of this parameter to request rates that match multiple amenity categories.&lt;br&gt; See the Amenity Categories section of the [Content Reference Lists](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for a list of values. | [optional] |
| **exclusion** | [**string[]**](../Model/string.md)| Single exclusion type. Send multiple instances of this parameter to request multiple exclusions.&lt;br&gt; * &#x60;refundable_damage_deposit&#x60; - Excludes rates with refundable damage deposits from the response. | [optional] |
| **filter** | [**string[]**](../Model/string.md)| Single filter type. Send multiple instances of this parameter to request multiple filters.&lt;br&gt; * &#x60;refundable&#x60; - Filters results to only show fully refundable rates. * &#x60;expedia_collect&#x60; - Filters results to only show rates where payment is collected by Expedia at the time of booking. These properties can be eligible for payments via Expedia Affiliate Collect(EAC). * &#x60;property_collect&#x60; - Filters results to only show rates where payment is collected by the property after booking. This can include rates that require a deposit by the property, dependent upon the deposit policies. | [optional] |
| **include** | [**string[]**](../Model/string.md)| Modify the response by including types of responses that are not provided by default.&lt;br&gt; * &#x60;unavailable_reason&#x60; - When a property is unavailable for an actionable reason, return a response with that reason - See [Unavailable Reason Codes](https://developers.expediagroup.com/docs/rapid/resources/reference/unavailable-reason-codes) for possible values. | [optional] |
| **rate_option** | [**string[]**](../Model/string.md)| Request specific rate options for each property. Send multiple instances of this parameter to request multiple rate options. Accepted values:&lt;br&gt; * &#x60;member&#x60; - Return member rates for each property. This feature must be enabled and requires a user to be logged in to request these rates. * &#x60;net_rates&#x60; - Return net rates for each property. This feature must be enabled to request these rates. * &#x60;cross_sell&#x60; - Identify if the traffic is coming from a cross sell booking. Where the traveler has booked another service (flight, car, activities...) before hotel. | [optional] |
| **travel_purpose** | **string**| This parameter is to specify the travel purpose of the booking. This may impact available rate plans, pricing, or tax calculations. * &#x60;leisure&#x60; * &#x60;business&#x60; | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarAvailability()`

```php
getCalendarAvailability($accept, $accept_encoding, $authorization, $user_agent, $property_id, $start_date, $end_date, $test): \OpenAPI\Client\Model\PropertyCalendarAvailability[]
```

Get a calendar of availability dates for properties. This is currently a Vrbo property only feature.

Returns availability information for the specified properties (maximum of 25 properties per request).  The response includes per day information about the property's availability, information about if check-in or check-out is available for the day,   and information regarding the stay constraints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShoppingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$authorization = 'authorization_example'; // string | The custom generated authentication header. Refer to our [signature authentication](https://developer.expediapartnersolutions.com/reference/signature-authentication) page for full details.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$property_id = property_id=1234&property_id=5678; // string[] | The ID of the property you want to search for. You can provide 1 to 250 property_id parameters.
$start_date = 2023-01-15; // \DateTime | The first day of availability information to be returned, in ISO 8601 format (YYYY-MM-DD), up to 500 days in the future from the current date.
$end_date = 2023-12-17; // \DateTime | The last day of availability information to be returned, in ISO 8601 format (YYYY-MM-DD). This must be 365 days or less from the start_date.
$test = 'test_example'; // string | Shop calls have a test header that can be used to return set responses with the following keywords:<br> * `standard` * `service_unavailable` * `unknown_internal_error`

try {
    $result = $apiInstance->getCalendarAvailability($accept, $accept_encoding, $authorization, $user_agent, $property_id, $start_date, $end_date, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingApi->getCalendarAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **authorization** | **string**| The custom generated authentication header. Refer to our [signature authentication](https://developer.expediapartnersolutions.com/reference/signature-authentication) page for full details. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **property_id** | [**string[]**](../Model/string.md)| The ID of the property you want to search for. You can provide 1 to 250 property_id parameters. | |
| **start_date** | **\DateTime**| The first day of availability information to be returned, in ISO 8601 format (YYYY-MM-DD), up to 500 days in the future from the current date. | |
| **end_date** | **\DateTime**| The last day of availability information to be returned, in ISO 8601 format (YYYY-MM-DD). This must be 365 days or less from the start_date. | |
| **test** | **string**| Shop calls have a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; * &#x60;service_unavailable&#x60; * &#x60;unknown_internal_error&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertyCalendarAvailability[]**](../Model/PropertyCalendarAvailability.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Example`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentOptions()`

```php
getPaymentOptions($accept, $accept_encoding, $property_id, $token, $user_agent, $customer_ip, $customer_session_id): \OpenAPI\Client\Model\PaymentOption
```

Get Accepted Payment Types - EPS MOR Only

Returns the accepted payment options.  Use this API to power your checkout page and display valid forms of payment, ensuring a smooth booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShoppingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$property_id = 19248; // string | Expedia Property ID.<br>
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.

try {
    $result = $apiInstance->getPaymentOptions($accept, $accept_encoding, $property_id, $token, $user_agent, $customer_ip, $customer_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingApi->getPaymentOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **property_id** | **string**| Expedia Property ID.&lt;br&gt; | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | [optional] |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentOption**](../Model/PaymentOption.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceCheck()`

```php
priceCheck($accept, $accept_encoding, $user_agent, $property_id, $room_id, $rate_id, $token, $customer_ip, $customer_session_id, $test): \OpenAPI\Client\Model\RoomPriceCheck
```

Price-Check

Confirms the price returned by the Property Availability response. Use this API to verify a previously-selected rate is still valid before booking. If the price is matched, the response returns a link to request a booking. If the price has changed, the response returns new price details and a booking link for the new price. If the rate is no longer available, the response will return a new Property Availability request link to search again for different rates. In the event of a price change, go back to Property Availability and book the property at the new price or return to additional rates for the property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ShoppingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$property_id = 19248; // string | Expedia Property ID.<br>
$room_id = 123abc; // string | Room ID of a property.<br>
$rate_id = 123abc; // string | Rate ID of a room.<br>
$token = 'token_example'; // string | A hashed collection of query parameters. Used to maintain state across calls. This token is provided as part of the price check link from the shop response.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | Price check calls have a test header that can be used to return set responses with the following keywords:   * `available`   * `price_changed`   * `sold_out`   * `service_unavailable`   * `unknown_internal_error`

try {
    $result = $apiInstance->priceCheck($accept, $accept_encoding, $user_agent, $property_id, $room_id, $rate_id, $token, $customer_ip, $customer_session_id, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingApi->priceCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **property_id** | **string**| Expedia Property ID.&lt;br&gt; | |
| **room_id** | **string**| Room ID of a property.&lt;br&gt; | |
| **rate_id** | **string**| Rate ID of a room.&lt;br&gt; | |
| **token** | **string**| A hashed collection of query parameters. Used to maintain state across calls. This token is provided as part of the price check link from the shop response. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | [optional] |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| Price check calls have a test header that can be used to return set responses with the following keywords:   * &#x60;available&#x60;   * &#x60;price_changed&#x60;   * &#x60;sold_out&#x60;   * &#x60;service_unavailable&#x60;   * &#x60;unknown_internal_error&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\RoomPriceCheck**](../Model/RoomPriceCheck.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
