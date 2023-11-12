# OpenAPI\Client\ManageBookingApi

All URIs are relative to https://test.ean.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeRoomDetails()**](ManageBookingApi.md#changeRoomDetails) | **PUT** /itineraries/{itinerary_id}/rooms/{room_id} | Change details of a room. |
| [**commitChange()**](ManageBookingApi.md#commitChange) | **PUT** /itineraries/{itinerary_id}/rooms/{room_id}/pricing | Commit a change of itinerary that may require additional payment or refund. |
| [**deleteHeldBooking()**](ManageBookingApi.md#deleteHeldBooking) | **DELETE** /itineraries/{itinerary_id} | Cancel Held Booking |
| [**deleteRoom()**](ManageBookingApi.md#deleteRoom) | **DELETE** /itineraries/{itinerary_id}/rooms/{room_id} | Cancel a room. |
| [**getReservation()**](ManageBookingApi.md#getReservation) | **GET** /itineraries | Search for and retrieve Bookings with Affiliate Reference Id |
| [**getReservationByItineraryId()**](ManageBookingApi.md#getReservationByItineraryId) | **GET** /itineraries/{itinerary_id} | Retrieve Booking |


## `changeRoomDetails()`

```php
changeRoomDetails($accept, $accept_encoding, $content_type, $customer_ip, $user_agent, $itinerary_id, $room_id, $token, $change_room_details_request, $customer_session_id, $test)
```

Change details of a room.

This link will be available in the retrieve response. Changes in smoking preference and special request will be passed along to the property and are not guaranteed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManageBookingApi(
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
$itinerary_id = 8955599932111; // string | This parameter is used only to prefix the token value - no ID value is used.<br>
$room_id = 123abc; // string | Room ID of a property.<br>
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$change_room_details_request = new \OpenAPI\Client\Model\ChangeRoomDetailsRequest(); // \OpenAPI\Client\Model\ChangeRoomDetailsRequest | The request body is required, but only the fields that are being changed need to be passed in. Fields that are not being changed should not be included in the request body.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The change call has a test header that can be used to return set responses with the following keywords:<br> * `standard` - Requires valid test booking. * `service_unavailable` * `unknown_internal_error`

try {
    $apiInstance->changeRoomDetails($accept, $accept_encoding, $content_type, $customer_ip, $user_agent, $itinerary_id, $room_id, $token, $change_room_details_request, $customer_session_id, $test);
} catch (Exception $e) {
    echo 'Exception when calling ManageBookingApi->changeRoomDetails: ', $e->getMessage(), PHP_EOL;
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
| **itinerary_id** | **string**| This parameter is used only to prefix the token value - no ID value is used.&lt;br&gt; | |
| **room_id** | **string**| Room ID of a property.&lt;br&gt; | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **change_room_details_request** | [**\OpenAPI\Client\Model\ChangeRoomDetailsRequest**](../Model/ChangeRoomDetailsRequest.md)| The request body is required, but only the fields that are being changed need to be passed in. Fields that are not being changed should not be included in the request body. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The change call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; - Requires valid test booking. * &#x60;service_unavailable&#x60; * &#x60;unknown_internal_error&#x60; | [optional] |

### Return type

void (empty response body)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commitChange()`

```php
commitChange($accept, $accept_encoding, $authorization, $content_type, $customer_ip, $user_agent, $itinerary_id, $room_id, $token, $customer_session_id, $test, $commit_change_room_request_body)
```

Commit a change of itinerary that may require additional payment or refund.

This link will be available in the change response to confirm and complete the change transaction.  If additional charges are due, a payment must be submitted with this request. Note that Two-Factor  Authentication is not supported at this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManageBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$authorization = 'authorization_example'; // string | The custom generated authentication header. Refer to our [signature authentication](https://developer.expediapartnersolutions.com/reference/signature-authentication) page for full details.
$content_type = application/json; // string | This parameter is to specify what format the request body is in. The only supported value is application/json.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration. Send IPV4 addresses only.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$itinerary_id = 8955599932111; // string | This parameter is used only to prefix the token value - no ID value is used.<br>
$room_id = 123abc; // string | Room ID of a property.<br>
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The change call has a test header that can be used to return set responses with the following keywords:<br> * `standard` - Requires valid test booking. * `service_unavailable` * `unknown_internal_error`
$commit_change_room_request_body = new \OpenAPI\Client\Model\CommitChangeRoomRequestBody(); // \OpenAPI\Client\Model\CommitChangeRoomRequestBody | The request body is required if additional payment is necessary. The body can optionally contain the `change_reference_id`.

try {
    $apiInstance->commitChange($accept, $accept_encoding, $authorization, $content_type, $customer_ip, $user_agent, $itinerary_id, $room_id, $token, $customer_session_id, $test, $commit_change_room_request_body);
} catch (Exception $e) {
    echo 'Exception when calling ManageBookingApi->commitChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **authorization** | **string**| The custom generated authentication header. Refer to our [signature authentication](https://developer.expediapartnersolutions.com/reference/signature-authentication) page for full details. | |
| **content_type** | **string**| This parameter is to specify what format the request body is in. The only supported value is application/json. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration. Send IPV4 addresses only.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **itinerary_id** | **string**| This parameter is used only to prefix the token value - no ID value is used.&lt;br&gt; | |
| **room_id** | **string**| Room ID of a property.&lt;br&gt; | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The change call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; - Requires valid test booking. * &#x60;service_unavailable&#x60; * &#x60;unknown_internal_error&#x60; | [optional] |
| **commit_change_room_request_body** | [**\OpenAPI\Client\Model\CommitChangeRoomRequestBody**](../Model/CommitChangeRoomRequestBody.md)| The request body is required if additional payment is necessary. The body can optionally contain the &#x60;change_reference_id&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHeldBooking()`

```php
deleteHeldBooking($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $token, $customer_session_id, $test)
```

Cancel Held Booking

This link will be available in a held booking response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManageBookingApi(
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
$test = 'test_example'; // string | The cancel call has a test header that can be used to return set responses with the following keywords:<br> * `standard` - Requires valid test held booking. * `service_unavailable` * `internal_server_error` * `post_stay_cancel`

try {
    $apiInstance->deleteHeldBooking($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $token, $customer_session_id, $test);
} catch (Exception $e) {
    echo 'Exception when calling ManageBookingApi->deleteHeldBooking: ', $e->getMessage(), PHP_EOL;
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
| **test** | **string**| The cancel call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; - Requires valid test held booking. * &#x60;service_unavailable&#x60; * &#x60;internal_server_error&#x60; * &#x60;post_stay_cancel&#x60; | [optional] |

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

## `deleteRoom()`

```php
deleteRoom($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $room_id, $token, $customer_session_id, $test)
```

Cancel a room.

This link will be available in the retrieve response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManageBookingApi(
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
$room_id = 123abc; // string | Room ID of a property.<br>
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The cancel call has a test header that can be used to return set responses with the following keywords:<br> * `standard` - Requires valid test booking. * `service_unavailable` * `unknown_internal_error` * `post_stay_cancel`

try {
    $apiInstance->deleteRoom($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $room_id, $token, $customer_session_id, $test);
} catch (Exception $e) {
    echo 'Exception when calling ManageBookingApi->deleteRoom: ', $e->getMessage(), PHP_EOL;
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
| **room_id** | **string**| Room ID of a property.&lt;br&gt; | |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The cancel call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; - Requires valid test booking. * &#x60;service_unavailable&#x60; * &#x60;unknown_internal_error&#x60; * &#x60;post_stay_cancel&#x60; | [optional] |

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

## `getReservation()`

```php
getReservation($accept, $accept_encoding, $customer_ip, $user_agent, $affiliate_reference_id, $email, $customer_session_id, $test, $include): \OpenAPI\Client\Model\Itinerary[]
```

Search for and retrieve Bookings with Affiliate Reference Id

This can be called directly without a token when an affiliate reference id is provided. It returns details about bookings associated with an affiliate reference id, along with cancel links to cancel the bookings.  <i>Note: Newly created itineraries may sometimes have a small delay between the time of creation and the time that the itinerary can be retrieved. If you receive no results while trying to find an itinerary that was successfully created, please wait a few minutes before trying to search for the itinerary again.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManageBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$customer_ip = 'customer_ip_example'; // string | IP address of the customer, as captured by your integration.<br> Ensure your integration passes the customer's IP, not your own. This value helps determine their location and assign the correct payment gateway.<br> Also used for fraud recovery and other important analytics.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$affiliate_reference_id = 111A222BB33344CC5555; // string | The affilliate reference id value. This field supports a maximum of 28 characters.
$email = test@example.com; // string | Email associated with the booking. Special characters in the local part or domain should be encoded.<br>
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The retrieve call has a test header that can be used to return set responses with the following keywords:<br> * `standard` - Requires valid test booking. * `service_unavailable` * `internal_server_error`
$include = ["history"]; // string[] | Options for which information to return in the response. The value must be lower case.   * history - Include itinerary history, showing details of the changes made to this itinerary

try {
    $result = $apiInstance->getReservation($accept, $accept_encoding, $customer_ip, $user_agent, $affiliate_reference_id, $email, $customer_session_id, $test, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageBookingApi->getReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **customer_ip** | **string**| IP address of the customer, as captured by your integration.&lt;br&gt; Ensure your integration passes the customer&#39;s IP, not your own. This value helps determine their location and assign the correct payment gateway.&lt;br&gt; Also used for fraud recovery and other important analytics. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **affiliate_reference_id** | **string**| The affilliate reference id value. This field supports a maximum of 28 characters. | |
| **email** | **string**| Email associated with the booking. Special characters in the local part or domain should be encoded.&lt;br&gt; | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The retrieve call has a test header that can be used to return set responses with the following keywords:&lt;br&gt; * &#x60;standard&#x60; - Requires valid test booking. * &#x60;service_unavailable&#x60; * &#x60;internal_server_error&#x60; | [optional] |
| **include** | [**string[]**](../Model/string.md)| Options for which information to return in the response. The value must be lower case.   * history - Include itinerary history, showing details of the changes made to this itinerary | [optional] |

### Return type

[**\OpenAPI\Client\Model\Itinerary[]**](../Model/Itinerary.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReservationByItineraryId()`

```php
getReservationByItineraryId($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $customer_session_id, $test, $token, $email, $include): \OpenAPI\Client\Model\Itinerary
```

Retrieve Booking

This API call returns itinerary details and links to resume or cancel the booking. There are two methods to retrieve a booking: * Using the link included in the original Book response, example: https://api.ean.com/v3/itineraries/8955599932111?token=QldfCGlcUA4GXVlSAQ4W * Using the email of the booking. If the email contains special characters, they must be encoded to successfully retrieve the booking. Example: https://api.ean.com/v3/itineraries/8955599932111?email=customer@email.com  <i>Note: Newly created itineraries may sometimes have a small delay between the time of creation and the time that the itinerary can be retrieved. If you receive an error when trying to retrieve an itinerary that was successfully created, please wait a few minutes before trying to retrieve the itinerary again.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManageBookingApi(
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
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$test = 'test_example'; // string | The retrieve call has a test header that can be used to return set responses. Passing standard in the Test header will retrieve a test booking, and passing any of the errors listed below will return a stubbed error response that you can use to test your error handling code. Additionally, refer to the Test Request documentation for more details on how these header values are used. * `standard` - Requires valid test booking. * `service_unavailable` * `internal_server_error`
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed.
$email = test@example.com; // string | Email associated with the booking. Special characters in the local part or domain should be encoded. (Email is required if the token is not provided the request) <br>
$include = ["history"]; // string[] | Options for which information to return in the response. The value must be lower case.   * history - Include itinerary history, showing details of the changes made to this itinerary

try {
    $result = $apiInstance->getReservationByItineraryId($accept, $accept_encoding, $customer_ip, $user_agent, $itinerary_id, $customer_session_id, $test, $token, $email, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageBookingApi->getReservationByItineraryId: ', $e->getMessage(), PHP_EOL;
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
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **test** | **string**| The retrieve call has a test header that can be used to return set responses. Passing standard in the Test header will retrieve a test booking, and passing any of the errors listed below will return a stubbed error response that you can use to test your error handling code. Additionally, refer to the Test Request documentation for more details on how these header values are used. * &#x60;standard&#x60; - Requires valid test booking. * &#x60;service_unavailable&#x60; * &#x60;internal_server_error&#x60; | [optional] |
| **token** | **string**| Provided as part of the link object and used to maintain state across calls. This simplifies each subsequent call by limiting the amount of information required at each step and reduces the potential for errors. Token values cannot be viewed or changed. | [optional] |
| **email** | **string**| Email associated with the booking. Special characters in the local part or domain should be encoded. (Email is required if the token is not provided the request) &lt;br&gt; | [optional] |
| **include** | [**string[]**](../Model/string.md)| Options for which information to return in the response. The value must be lower case.   * history - Include itinerary history, showing details of the changes made to this itinerary | [optional] |

### Return type

[**\OpenAPI\Client\Model\Itinerary**](../Model/Itinerary.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
