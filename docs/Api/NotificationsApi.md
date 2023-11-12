# OpenAPI\Client\NotificationsApi

All URIs are relative to https://test.ean.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**requestTestNotification()**](NotificationsApi.md#requestTestNotification) | **POST** /notifications | Request Test Notification |
| [**requestUndeliveredNotifications()**](NotificationsApi.md#requestUndeliveredNotifications) | **GET** /notifications | Request Undelivered Notifications |


## `requestTestNotification()`

```php
requestTestNotification($test_notification_request, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name)
```

Request Test Notification

This request triggers a test notification according to the specified event_type. All event types supported by the Notifications API are available to test.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_notification_request = new \OpenAPI\Client\Model\TestNotificationRequest(); // \OpenAPI\Client\Model\TestNotificationRequest
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $apiInstance->requestTestNotification($test_notification_request, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->requestTestNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **test_notification_request** | [**\OpenAPI\Client\Model\TestNotificationRequest**](../Model/TestNotificationRequest.md)|  | |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

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

## `requestUndeliveredNotifications()`

```php
requestUndeliveredNotifications($undeliverable, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name): \OpenAPI\Client\Model\Notification[]
```

Request Undelivered Notifications

Use this API to fetch undelivered notifications. Up to 25 notifications are returned with each call. Each undelivered notification will be returned only once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$undeliverable = True; // bool | Undeliverable notifications are returned when this parameter is set to `true`.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->requestUndeliveredNotifications($undeliverable, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->requestUndeliveredNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **undeliverable** | **bool**| Undeliverable notifications are returned when this parameter is set to &#x60;true&#x60;. | |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
