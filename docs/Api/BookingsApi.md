# OpenAPI\Client\BookingsApi

All URIs are relative to https://test.ean.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postItinerary()**](BookingsApi.md#postItinerary) | **POST** /itineraries | Create Booking |
| [**postPaymentSessions()**](BookingsApi.md#postPaymentSessions) | **POST** /payment-sessions | Register Payments |
| [**putCompletePaymentSession()**](BookingsApi.md#putCompletePaymentSession) | **PUT** /itineraries/{itinerary_id}/payment-sessions | Complete Payment Session |
| [**putResumeBooking()**](BookingsApi.md#putResumeBooking) | **PUT** /itineraries/{itinerary_id} | Resume Booking |


## `postItinerary()`

```php
postItinerary($accept, $accept_encoding, $content_type, $customer_ip, $user_agent, $token, $create_itinerary_request, $customer_session_id, $test): \OpenAPI\Client\Model\ItineraryCreation
```

Create Booking

This link will be available in the Price Check response or in the register payments response when Two-Factor Authentication is used. It returns an itinerary id and links to retrieve reservation details, cancel a held booking, resume a held booking or complete payment session. Please note that depending on the state of the booking, the response will contain only the applicable link(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$content_type = application/json; // string | This parameter is to specify what format the request body is in. The only supported value is application/json.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$create_itinerary_request = new \OpenAPI\Client\Model\CreateItineraryRequest(); // \OpenAPI\Client\Model\CreateItineraryRequest
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The book call has a test header that can be used to return set responses with the following keywords:<br> * `standard` * `complete_payment_session` * `service_unavailable` * `internal_server_error` * `price_mismatch` * `cc_declined` * `rooms_unavailable`

try {
    $result = $apiInstance->postItinerary($accept, $accept_encoding, $content_type, $customer_ip, $user_agent, $token, $create_itinerary_request, $customer_session_id, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->postItinerary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **content_type** | **string**| This parameter is to specify what format the request body is in. The only supported value is application/json. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **create_itinerary_request** | [**\OpenAPI\Client\Model\CreateItineraryRequest**](../Model/CreateItineraryRequest.md)|  | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The book call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; * &#x60;complete_payment_session&#x60; * &#x60;service_unavailable&#x60; * &#x60;internal_server_error&#x60; * &#x60;price_mismatch&#x60; * &#x60;cc_declined&#x60; * &#x60;rooms_unavailable&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItineraryCreation**](../Model/ItineraryCreation.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentSessions()`

```php
postPaymentSessions($accept, $accept_encoding, $content_type, $customer_ip, $user_agent, $token, $payment_sessions_request, $customer_session_id, $test): \OpenAPI\Client\Model\PaymentSessions
```

Register Payments

<b>This link only applies to transactions where EPS takes the customer's payment information. This includes both Expedia Collect and Property Collect transactions.</b><br> This link will be available in the Price Check response if payment registration is required. It returns a payment session ID and a link to create a booking. This will be the first step in the booking flow only if you've opted into Two-Factor Authentication to comply with the September 2019 EU Regulations for PSD2. Learn more with our [PSD2 Overview](https://developers.expediagroup.com/docs/rapid/lodging/booking/psd2-regulation)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$content_type = application/json; // string | This parameter is to specify what format the request body is in. The only supported value is application/json.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$payment_sessions_request = new \OpenAPI\Client\Model\PaymentSessionsRequest(); // \OpenAPI\Client\Model\PaymentSessionsRequest
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The book call has a test header that can be used to return set responses with the following keywords:<br> * `standard` * `service_unavailable` * `internal_server_error`

try {
    $result = $apiInstance->postPaymentSessions($accept, $accept_encoding, $content_type, $customer_ip, $user_agent, $token, $payment_sessions_request, $customer_session_id, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->postPaymentSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **content_type** | **string**| This parameter is to specify what format the request body is in. The only supported value is application/json. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **payment_sessions_request** | [**\OpenAPI\Client\Model\PaymentSessionsRequest**](../Model/PaymentSessionsRequest.md)|  | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The book call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; * &#x60;service_unavailable&#x60; * &#x60;internal_server_error&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentSessions**](../Model/PaymentSessions.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCompletePaymentSession()`

```php
putCompletePaymentSession($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $token, $customer_session_id, $test): \OpenAPI\Client\Model\CompletePaymentSession
```

Complete Payment Session

<b>This link only applies to transactions where EPS takes the customer's payment information. This includes both Expedia Collect and Property Collect transactions.</b><br> This link will be available in the booking response only if you've opted into Two-Factor Authentication to comply with the September 2019 EU Regulations for PSD2. It should be called after Two-Factor Authentication has been completed by the customer in order to finalize the payment and complete the booking or hold attempt. Learn more with our [PSD2 Overview](https://developers.expediagroup.com/docs/rapid/lodging/booking/psd2-regulation)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$itinerary_id = 8955599932111; // string | This parameter is used only to prefix the token value - no ID value is used.<br>
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The payment-sessions call has a test header that can be used to return set responses with the following keywords:<br> * `standard` * `service_unavailable` * `internal_server_error`

try {
    $result = $apiInstance->putCompletePaymentSession($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $token, $customer_session_id, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->putCompletePaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **itinerary_id** | **string**| This parameter is used only to prefix the token value - no ID value is used.&lt;br&gt; | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The payment-sessions call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; * &#x60;service_unavailable&#x60; * &#x60;internal_server_error&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\CompletePaymentSession**](../Model/CompletePaymentSession.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putResumeBooking()`

```php
putResumeBooking($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $token, $customer_session_id, $test)
```

Resume Booking

This link will be available in the booking response after creating a held booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$itinerary_id = 8955599932111; // string | This parameter is used only to prefix the token value - no ID value is used.<br>
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The resume call has a test header that can be used to return set responses with the following keywords:<br> * `standard` - Requires valid test held booking. * `service_unavailable` - Returns the HTTP 202 response caused by partial service unavailablity. * `internal_server_error`

try {
    $apiInstance->putResumeBooking($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $token, $customer_session_id, $test);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->putResumeBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **itinerary_id** | **string**| This parameter is used only to prefix the token value - no ID value is used.&lt;br&gt; | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The resume call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; - Requires valid test held booking. * &#x60;service_unavailable&#x60; - Returns the HTTP 202 response caused by partial service unavailablity. * &#x60;internal_server_error&#x60; | [optional] |

### Return type

void (empty response body)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
