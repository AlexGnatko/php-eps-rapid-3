# OpenAPI\Client\ContentApi

All URIs are relative to https://test.ean.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getChainReference()**](ContentApi.md#getChainReference) | **GET** /chains | Chain Reference |
| [**getInactiveProperties()**](ContentApi.md#getInactiveProperties) | **GET** /properties/inactive | Inactive Properties |
| [**getPropertyCatalogFile()**](ContentApi.md#getPropertyCatalogFile) | **GET** /files/properties/catalog | Property Catalog File |
| [**getPropertyContent()**](ContentApi.md#getPropertyContent) | **GET** /properties/content | Property Content |
| [**getPropertyContentFile()**](ContentApi.md#getPropertyContentFile) | **GET** /files/properties/content | Property Content File |
| [**getPropertyGuestReviews()**](ContentApi.md#getPropertyGuestReviews) | **GET** /properties/{property_id}/guest-reviews | Property Guest Reviews |


## `getChainReference()`

```php
getChainReference($accept, $accept_encoding, $user_agent, $customer_session_id, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name): array<string,\OpenAPI\Client\Model\Chain>
```

Chain Reference

Returns a complete collection of chains recognized by the Rapid API.  <br>Chains represent a parent company which can have multiple brands associated with it. A brand can only be associated with one chain. For example, Hilton Worldwide is a chain that has multiple associated brands including Doubletree, Hampton Inn and Embassy Suites.  <br>The response is a JSON map where the key is the chain ID and the value is a chain object. Each chain object also contains a map of its related brands.  <br>Note that the set of chain IDs and brand IDs are totally independent of one another. It is possible for a chain and a brand to both use the same number as their ID, but this is just a coincidence that holds no meaning.  <br>Chain and brand names are provided in English only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getChainReference($accept, $accept_encoding, $user_agent, $customer_session_id, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getChainReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**array<string,\OpenAPI\Client\Model\Chain>**](../Model/Chain.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInactiveProperties()`

```php
getInactiveProperties($accept, $accept_encoding, $user_agent, $customer_session_id, $since, $token, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name): \OpenAPI\Client\Model\PropertyInactive[]
```

Inactive Properties

Request a list of properties that are inactive because they have been removed from sale since a specified date.<br><br> When there are a large number of properties in the response, it will be paginated. See the `Link` header in the 200 response section.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are  building an application then the `User-Agent` value should be `{app name}/{app version}`.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$since = 2023-05-01; // string | Required on initial call, not accepted on subsequent paging links provided in response header.<br> The earliest date that a property became inactive to include in the results. ISO 8601 format (YYYY-MM-DD)
$token = MY5S3j36cOcLfLBZjPYQ1abhfc8CqmjmFVzkk7euvWaunE57LLeDgaxm516m; // string | Only used for requesting additional pages of data. Provided by the `next` URL in the `Link` response header.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getInactiveProperties($accept, $accept_encoding, $user_agent, $customer_session_id, $since, $token, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getInactiveProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are  building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **since** | **string**| Required on initial call, not accepted on subsequent paging links provided in response header.&lt;br&gt; The earliest date that a property became inactive to include in the results. ISO 8601 format (YYYY-MM-DD) | [optional] |
| **token** | **string**| Only used for requesting additional pages of data. Provided by the &#x60;next&#x60; URL in the &#x60;Link&#x60; response header. | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertyInactive[]**](../Model/PropertyInactive.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyCatalogFile()`

```php
getPropertyCatalogFile($accept, $accept_encoding, $user_agent, $language, $supply_source, $customer_session_id, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name): \OpenAPI\Client\Model\Link
```

Property Catalog File

Returns a link to download the master list of EPS's active properties in the requested language. The response includes high-level details about each property.  <br>This file is in JSONL format and is gzipped. The schema of each JSON object in the JSONL file is a subset of the schema of each JSON object from the Property Content call. The subset of fields included are:    * property_id   * name   * address   * ratings   * location   * phone   * fax   * category   * rank   * business_model   * dates   * statistics   * chain   * brand   * supply_source  <br>Example of a JSONL file with 2 properties: ``` {\"property_id\":\"12345\",\"name\":\"Test Property Name\",\"address\":{\"line_1\":\"123 Main St\",\"line_2\":\"Apt A\",\"city\":\"Springfield\",\"state_province_code\":\"MO\",\"state_province_name\":\"Missouri\",\"postal_code\":\"65804\",\"country_code\":\"US\",\"obfuscation_required\":false,\"localized\":{\"links\":{\"es-ES\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=es-ES&include=address&property_id=12345\"},\"fr-FR\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=fr-FR&include=address&property_id=12345\"}}}},\"ratings\":{\"property\":{\"rating\":\"3.5\",\"type\":\"Star\"},\"guest\":{\"count\":48382,\"overall\":\"3.1\",\"cleanliness\":\"4.2\",\"service\":\"1.1\",\"comfort\":\"4.3\",\"condition\":\"1.6\",\"location\":\"4.0\",\"neighborhood\":\"3.4\",\"quality\":\"3.4\",\"value\":\"2.2\",\"amenities\":\"1.4\",\"recommendation_percent\":\"73%\"}},\"location\":{\"coordinates\":{\"latitude\":37.15845,\"longitude\":-93.26838}},\"phone\":\"1-417-862-0153\",\"fax\":\"1-417-863-7249\",\"category\":{\"id\":\"1\",\"name\":\"Hotel\"},\"rank\":42,\"business_model\":{\"expedia_collect\":true,\"property_collect\":false},\"dates\":{\"added\":\"1998-07-19T05:00:00.000Z\",\"updated\":\"2018-03-22T07:23:14.000Z\"},\"statistics\":{\"52\":{\"id\":\"52\",\"name\":\"Total number of rooms - 820\",\"value\":\"820\"},\"54\":{\"id\":\"54\",\"name\":\"Number of floors - 38\",\"value\":\"38\"}},\"chain\":{\"id\":\"-6\",\"name\":\"Hyatt Hotels\"},\"brand\":{\"id\":\"2209\",\"name\":\"Hyatt Place\"},\"supply_source\":\"expedia\"} {\"property_id\":\"67890\",\"name\":\"Test Property Name 2\",\"address\":{\"line_1\":\"123 Main St\",\"line_2\":\"Apt A\",\"city\":\"Springfield\",\"state_province_code\":\"MO\",\"state_province_name\":\"Missouri\",\"postal_code\":\"65804\",\"country_code\":\"US\",\"obfuscation_required\":true,\"localized\":{\"links\":{\"es-ES\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=es-ES&include=address&property_id=67890\"},\"de-DE\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=de-DE&include=address&property_id=67890\"}}}},\"ratings\":{\"property\":{\"rating\":\"3.5\",\"type\":\"Star\"},\"guest\":{\"count\":7651,\"overall\":\"4.3\",\"cleanliness\":\"4.2\",\"service\":\"1.1\",\"comfort\":\"4.3\",\"condition\":\"1.6\",\"location\":\"4.0\",\"neighborhood\":\"3.4\",\"quality\":\"3.4\",\"value\":\"2.2\",\"amenities\":\"1.4\",\"recommendation_percent\":\"80%\"}},\"location\":{\"coordinates\":{\"latitude\":37.15845,\"longitude\":-93.26838}},\"phone\":\"1-417-862-0153\",\"fax\":\"1-417-863-7249\",\"category\":{\"id\":\"1\",\"name\":\"Hotel\"},\"rank\":42,\"business_model\":{\"expedia_collect\":true,\"property_collect\":true},\"dates\":{\"added\":\"1998-07-20T05:00:00.000Z\",\"updated\":\"2018-03-22T13:33:17.000Z\"},\"statistics\":{\"52\":{\"id\":\"52\",\"name\":\"Total number of rooms - 820\",\"value\":\"820\"},\"54\":{\"id\":\"54\",\"name\":\"Number of floors - 38\",\"value\":\"38\"}},\"chain\":{\"id\":\"-5\",\"name\":\"Hilton Worldwide\"},\"brand\":{\"id\":\"358\",\"name\":\"Hampton Inn\"},\"supply_source\":\"expedia\"} ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$language = language=en-US; // string | Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options)
$supply_source = vrbo; // string | Options for which supply source you would like returned in the content response. This parameter may only be supplied once and will return all properties that match the requested supply source. An error is thrown if the parameter is provided multiple times.   * `expedia` - Standard Expedia supply.   * `vrbo` - VRBO supply - This option is restricted to partners who have VRBO supply enabled for their profile. See [Vacation Rentals](https://developers.expediagroup.com/docs/rapid/lodging/vacation-rentals) for more information.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getPropertyCatalogFile($accept, $accept_encoding, $user_agent, $language, $supply_source, $customer_session_id, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getPropertyCatalogFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **language** | **string**| Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options) | |
| **supply_source** | **string**| Options for which supply source you would like returned in the content response. This parameter may only be supplied once and will return all properties that match the requested supply source. An error is thrown if the parameter is provided multiple times.   * &#x60;expedia&#x60; - Standard Expedia supply.   * &#x60;vrbo&#x60; - VRBO supply - This option is restricted to partners who have VRBO supply enabled for their profile. See [Vacation Rentals](https://developers.expediagroup.com/docs/rapid/lodging/vacation-rentals) for more information. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Link**](../Model/Link.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyContent()`

```php
getPropertyContent($accept, $accept_encoding, $user_agent, $language, $supply_source, $customer_session_id, $brand_id, $business_model, $category_id_exclude, $chain_id, $country_code, $date_added_end, $date_added_start, $date_updated_end, $date_updated_start, $include, $multi_unit, $property_id, $property_rating_max, $property_rating_min, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name): array<string,\OpenAPI\Client\Model\PropertyContent>
```

Property Content

Search property content for active properties in the requested language.<br><br> When searching with query parameter, `property_id`, you may request 1 to 250 properties at a time.<br><br> When searching with query parameters other than `property_id`, the response will be paginated. See the `Link` header in the 200 response section.<br><br> The response is a JSON map where the key is the property ID and the value is the property object itself, which can include property-level, room-level and rate-level information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$language = language=en-US; // string | Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options)
$supply_source = vrbo; // string | Options for which supply source you would like returned in the content response. This parameter may only be supplied once and will return all properties that match the requested supply source. An error is thrown if the parameter is provided multiple times.   * `expedia` - Standard Expedia supply.   * `vrbo` - VRBO supply - This option is restricted to partners who have VRBO supply enabled for their profile. See [Vacation Rentals](https://developers.expediagroup.com/docs/rapid/lodging/vacation-rentals) for more information.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$brand_id = brand_id=123&brand_id=456; // string[] | The ID of the brand you want to search for. This parameter can be supplied multiple times with different values, which will include properties that match any of the requested brand IDs.
$business_model = business_model=expedia_collect&business_model=property_collect; // string[] | Search for properties with the requested business model enabled. This parameter can be supplied multiple times with different values, which will return all properties that match any of the requested business models. The value must be lower case.  Possible values:   * expedia_collect - Return only properties where the payment is collected by Expedia.   * property_collect - Return only properties where the payment is collected at the property.
$category_id_exclude = category_id_exclude=3&category_id_exclude=1; // string[] | Search to exclude properties that do not have the requested [category ID](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists). If this parameter is not supplied, all category IDs are included. This parameter can be supplied multiple times with different values, which will exclude properties that match any of the requested category IDs.
$chain_id = chain_id=-6&chain_id=1; // string[] | The ID of the chain you want to search for. These chain IDs can be positive and negative numbers. This parameter can be supplied multiple times with different values, which will include properties that match any of the requested chain IDs.
$country_code = country_code=US&country_code=JP; // string[] | Search for properties with the requested country code, in ISO 3166-1 alpha-2 format. This parameter can be supplied multiple times with different values, which will include properties that match any of the requested country codes.
$date_added_end = date_added_end=2018-12-31; // string | Search for properties added on or before the requested UTC date, in ISO 8601 format (YYYY-MM-DD)
$date_added_start = date_added_start=2018-09-15; // string | Search for properties added on or after the requested UTC date, in ISO 8601 format (YYYY-MM-DD)
$date_updated_end = date_updated_end=2018-12-31; // string | Search for properties updated on or before the requested UTC date, in ISO 8601 format (YYYY-MM-DD)
$date_updated_start = date_updated_start=2018-09-15; // string | Search for properties updated on or after the requested UTC date, in ISO 8601 format (YYYY-MM-DD)
$include = include=property_ids&include=address; // string[] | Option for limiting what fields to return in the response. The value must be lower case. This parameter can be supplied multiple times with different values, which will return a combination of all fields asked for.  Possible values:  * property_ids - Return only the property id of the property object.  * catalog - Return only the property catalog property-level fields.  * address - Returns only the address fields.
$multi_unit = True; // bool | Search for multi-unit properties. If this parameter is not supplied, both single-unit and multi-unit properties will be included.  Possible values:   * true - Include only properties that are multi-unit.   * false - Do not include properties that are multi-unit.
$property_id = property_id=19248&property_id=20321; // string[] | The ID of the property you want to search for. You can provide 1 to 250 property_id parameters.
$property_rating_max = property_rating_max=5.0; // string | Search for properties with a property rating less than or equal to the requested rating. The highest property rating value is 5.0.
$property_rating_min = property_rating_min=2.5; // string | Search for properties with a property rating greater than or equal to the requested rating. The lowest property rating value is 0.0.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getPropertyContent($accept, $accept_encoding, $user_agent, $language, $supply_source, $customer_session_id, $brand_id, $business_model, $category_id_exclude, $chain_id, $country_code, $date_added_end, $date_added_start, $date_updated_end, $date_updated_start, $include, $multi_unit, $property_id, $property_rating_max, $property_rating_min, $billing_terms, $partner_point_of_sale, $payment_terms, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getPropertyContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **language** | **string**| Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options) | |
| **supply_source** | **string**| Options for which supply source you would like returned in the content response. This parameter may only be supplied once and will return all properties that match the requested supply source. An error is thrown if the parameter is provided multiple times.   * &#x60;expedia&#x60; - Standard Expedia supply.   * &#x60;vrbo&#x60; - VRBO supply - This option is restricted to partners who have VRBO supply enabled for their profile. See [Vacation Rentals](https://developers.expediagroup.com/docs/rapid/lodging/vacation-rentals) for more information. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **brand_id** | [**string[]**](../Model/string.md)| The ID of the brand you want to search for. This parameter can be supplied multiple times with different values, which will include properties that match any of the requested brand IDs. | [optional] |
| **business_model** | [**string[]**](../Model/string.md)| Search for properties with the requested business model enabled. This parameter can be supplied multiple times with different values, which will return all properties that match any of the requested business models. The value must be lower case.  Possible values:   * expedia_collect - Return only properties where the payment is collected by Expedia.   * property_collect - Return only properties where the payment is collected at the property. | [optional] |
| **category_id_exclude** | [**string[]**](../Model/string.md)| Search to exclude properties that do not have the requested [category ID](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists). If this parameter is not supplied, all category IDs are included. This parameter can be supplied multiple times with different values, which will exclude properties that match any of the requested category IDs. | [optional] |
| **chain_id** | [**string[]**](../Model/string.md)| The ID of the chain you want to search for. These chain IDs can be positive and negative numbers. This parameter can be supplied multiple times with different values, which will include properties that match any of the requested chain IDs. | [optional] |
| **country_code** | [**string[]**](../Model/string.md)| Search for properties with the requested country code, in ISO 3166-1 alpha-2 format. This parameter can be supplied multiple times with different values, which will include properties that match any of the requested country codes. | [optional] |
| **date_added_end** | **string**| Search for properties added on or before the requested UTC date, in ISO 8601 format (YYYY-MM-DD) | [optional] |
| **date_added_start** | **string**| Search for properties added on or after the requested UTC date, in ISO 8601 format (YYYY-MM-DD) | [optional] |
| **date_updated_end** | **string**| Search for properties updated on or before the requested UTC date, in ISO 8601 format (YYYY-MM-DD) | [optional] |
| **date_updated_start** | **string**| Search for properties updated on or after the requested UTC date, in ISO 8601 format (YYYY-MM-DD) | [optional] |
| **include** | [**string[]**](../Model/string.md)| Option for limiting what fields to return in the response. The value must be lower case. This parameter can be supplied multiple times with different values, which will return a combination of all fields asked for.  Possible values:  * property_ids - Return only the property id of the property object.  * catalog - Return only the property catalog property-level fields.  * address - Returns only the address fields. | [optional] |
| **multi_unit** | **bool**| Search for multi-unit properties. If this parameter is not supplied, both single-unit and multi-unit properties will be included.  Possible values:   * true - Include only properties that are multi-unit.   * false - Do not include properties that are multi-unit. | [optional] |
| **property_id** | [**string[]**](../Model/string.md)| The ID of the property you want to search for. You can provide 1 to 250 property_id parameters. | [optional] |
| **property_rating_max** | **string**| Search for properties with a property rating less than or equal to the requested rating. The highest property rating value is 5.0. | [optional] |
| **property_rating_min** | **string**| Search for properties with a property rating greater than or equal to the requested rating. The lowest property rating value is 0.0. | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**array<string,\OpenAPI\Client\Model\PropertyContent>**](../Model/PropertyContent.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyContentFile()`

```php
getPropertyContentFile($accept, $accept_encoding, $user_agent, $language, $supply_source, $customer_session_id, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name): \OpenAPI\Client\Model\Link
```

Property Content File

Returns a link to download all content for all of EPS’s active properties in the requested language. The response includes property-level, room-level and rate-level information.  <br>This file is in JSONL format and is gzipped. The schema of each JSON object in the JSONL file is the same as the schema of each JSON object from the Property Content call.  <br>Example of a JSONL file with 2 properties:   ```   {\"property_id\":\"12345\",\"name\":\"Test Property Name\",\"address\":{\"line_1\":\"123 Main St\",\"line_2\":\"Apt A\",\"city\":\"Springfield\",\"state_province_code\":\"MO\",\"state_province_name\":\"Missouri\",\"postal_code\":\"65804\",\"country_code\":\"US\",\"obfuscation_required\":false,\"localized\":{\"links\":{\"es-ES\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=es-ES&include=address&property_id=12345\"},\"fr-FR\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=fr-FR&include=address&property_id=12345\"}}}},\"ratings\":{\"property\":{\"rating\":\"3.5\",\"type\":\"Star\"},\"guest\":{\"count\":48382,\"overall\":\"3.1\",\"cleanliness\":\"4.2\",\"service\":\"1.1\",\"comfort\":\"4.3\",\"condition\":\"1.6\",\"location\":\"4.0\",\"neighborhood\":\"3.4\",\"quality\":\"3.4\",\"value\":\"2.2\",\"amenities\":\"1.4\",\"recommendation_percent\":\"73%\"}},\"location\":{\"coordinates\":{\"latitude\":37.15845,\"longitude\":-93.26838}},\"phone\":\"1-417-862-0153\",\"fax\":\"1-417-863-7249\",\"category\":{\"id\":\"1\",\"name\":\"Hotel\"},\"rank\":42,\"business_model\":{\"expedia_collect\":true,\"property_collect\":false},\"checkin\":{\"24_hour\":\"24-hour check-in\",\"begin_time\":\"3:00 PM\",\"end_time\":\"11:00 PM\",\"instructions\":\"Extra-person charges may apply and vary depending on hotel policy. &lt;br />Government-issued photo identification and a credit card or cash deposit are required at check-in for incidental charges. &lt;br />Special requests are subject to availability upon check-in and may incur additional charges. Special requests cannot be guaranteed. &lt;br />\",\"special_instructions\":\"There is no front desk at this property. To make arrangements for check-in please contact the property ahead of time using the information on the booking confirmation.\",\"min_age\":18},\"checkout\":{\"time\":\"11:00 AM\"},\"fees\":{\"mandatory\":\"<p>You'll be asked to pay the following charges at the hotel:</p> <ul><li>Deposit: USD 50 per day</li><li>Resort fee: USD 29.12 per accommodation, per night</li></ul> The hotel resort fee includes:<ul><li>Fitness center access</li><li>Internet access</li><li>Phone calls</li><li>Additional inclusions</li></ul> <p>We have included all charges provided to us by the property. However, charges can vary, for example, based on length of stay or the room you book. </p>\",\"optional\":\"Fee for in-room wireless Internet: USD 15 per hour (rates may vary)</li> <li>Airport shuttle fee: USD 350 per vehicle (one way)</li>           <li>Rollaway bed fee: USD 175 per night</li>\"},\"policies\":{\"know_before_you_go\":\"Reservations are required for massage services and spa treatments. Reservations can be made by contacting the hotel prior to arrival, using the contact information on the booking confirmation. </li><li>Children 11 years old and younger stay free when occupying the parent or guardian's room, using existing bedding. </li><li>Only registered guests are allowed in the guestrooms. </li> <li>Some facilities may have restricted access. Guests can contact the property for details using the contact information on the booking confirmation. </li> </ul>\"},\"attributes\":{\"general\":{\"2549\":{\"id\":\"2549\",\"name\":\"No elevators\"},\"3357\":{\"id\":\"3357\",\"name\":\"Caters to adults only\"}},\"pets\":{\"51\":{\"id\":\"51\",\"name\":\"Pets allowed\"},\"2809\":{\"id\":\"2809\",\"name\":\"Dogs only\"},\"3321\":{\"id\":\"3321\",\"name\":\"Pet maximum weight in kg is - 24\",\"value\":24}}},\"amenities\":{\"9\":{\"id\":\"9\",\"name\":\"Fitness facilities\"},\"2820\":{\"id\":\"2820\",\"name\":\"Number of indoor pools - 10\",\"value\":10}},\"images\":[{\"caption\":\"Featured Image\",\"hero_image\":true,\"category\":3,\"links\":{\"70px\":{\"method\":\"GET\",\"href\":\"https://i.travelapi.com/hotels/1000000/20000/15300/15237/bef1b976_t.jpg\"}}}],\"onsite_payments\":{\"currency\":\"USD\",\"types\":{\"171\":{\"id\":\"171\",\"name\":\"American Express\"}}},\"rooms\":{\"224829\":{\"id\":\"224829\",\"name\":\"Single Room\",\"descriptions\":{\"overview\":\"<strong>2 Twin Beds</strong><br />269-sq-foot (25-sq-meter) room with mountain views<br /><br /><b>Internet</b> - Free WiFi <br /> <b>Entertainment</b> - Flat-screen TV with cable channels<br /><b>Food & Drink</b> - Refrigerator, coffee/tea maker,  room service, and free bottled water<br /><b>Sleep</b> - Premium bedding <br /><b>Bathroom</b> - Private bathroom, shower, bathrobes, and free toiletries<br /><b>Practical</b> - Safe and desk; cribs/infant beds available on request<br /><b>Comfort</b> - Climate-controlled air conditioning and daily housekeeping<br />Non-Smoking<br />\"},\"amenities\":{\"130\":{\"id\":\"130\",\"name\":\"Refrigerator\"},\"1234\":{\"id\":\"1234\",\"name\":\"Test Amenity - 200\",\"value\":\"200\"}},\"images\":[{\"hero_image\":true,\"category\":21001,\"links\":{\"70px\":{\"method\":\"GET\",\"href\":\"https://i.travelapi.com/hotels/1000000/20000/15300/15237/bef1b976_t.jpg\"}},\"caption\":\"Guestroom\"}],\"bed_groups\":{\"37321\":{\"id\":\"37321\",\"description\":\"1 King Bed\",\"configuration\":[{\"type\":\"KingBed\",\"size\":\"King\",\"quantity\":1}]}},\"area\":{\"square_meters\":20,\"square_feet\":215},\"views\":{\"4146\":{\"id\":\"4146\",\"name\":\"Courtyard view\"}},\"occupancy\":{\"max_allowed\":{\"total\":5,\"children\":2,\"adults\":4},\"age_categories\":{\"Adult\":{\"name\":\"Adult\",\"minimum_age\":9}}}}},\"rates\":{\"333abc\":{\"id\":\"333abc\",\"amenities\":{\"1234\":{\"id\":\"1234\",\"name\":\"Test Amenity - 200\",\"value\":\"200\"},\"2104\":{\"id\":\"2104\",\"name\":\"Full Breakfast\"}},\"special_offer_description\":\"<strong>Breakfast for 2</strong> - Rate includes the following:\\r\\n<ul><li>Accommodations as selected</li>\\r\\n<li>Breakfast in hotel restaurant for up to 2 adults and children 12 years old and under registered in the same room</li>\\r\\n</ul><em>Must book this rate plan to receive benefits. Details provided at check-in. Taxes and gratuity may not be included. No refunds for any unused portion of offer. Offer subject to availability. Offer is not valid with groups/conventions and may not be combined with other promotional offers. Other restrictions and blackout dates may apply.</em>\\r\\n\"}},\"dates\":{\"added\":\"1998-07-19T05:00:00.000Z\",\"updated\":\"2018-03-22T07:23:14.000Z\"},\"descriptions\":{\"amenities\":\"Don't miss out on the many recreational opportunities, including an outdoor pool, a sauna, and a fitness center. Additional features at this hotel include complimentary wireless Internet access, concierge services, and an arcade/game room.\",\"dining\":\"Grab a bite at one of the hotel's 3 restaurants, or stay in and take advantage of 24-hour room service. Quench your thirst with your favorite drink at a bar/lounge. Buffet breakfasts are available daily for a fee.\",\"renovations\":\"During renovations, the hotel will make every effort to minimize noise and disturbance.  The property will be renovating from 08 May 2017 to 18 May 2017 (completion date subject to change). The following areas are affected:  <ul><li>Fitness facilities</li></ul>\",\"national_ratings\":\"For the benefit of our customers, we have provided a rating based on our rating system.\",\"business_amenities\":\"Featured amenities include complimentary wired Internet access, a 24-hour business center, and limo/town car service. Event facilities at this hotel consist of a conference center and meeting rooms. Free self parking is available onsite.\",\"rooms\":\"Make yourself at home in one of the 334 air-conditioned rooms featuring LCD televisions. Complimentary wired and wireless Internet access keeps you connected, and satellite programming provides entertainment. Private bathrooms with separate bathtubs and showers feature deep soaking bathtubs and complimentary toiletries. Conveniences include phones, as well as safes and desks.\",\"attractions\":\"Distances are calculated in a straight line from the property's location to the point of interest or attraction, and may not reflect actual travel distance. <br /><br /> Distances are displayed to the nearest 0.1 mile and kilometer. <p>Sogo Department Store - 0.7 km / 0.4 mi <br />National Museum of Natural Science - 1.1 km / 0.7 mi <br />Shr-Hwa International Tower - 1.4 km / 0.8 mi <br />Shinkong Mitsukoshi Department Store - 1.5 km / 0.9 mi <br />Taichung Metropolitan Opera House - 1.7 km / 1 mi <br />Tiger City Mall - 1.8 km / 1.1 mi <br />Maple Garden Park - 1.9 km / 1.2 mi <br />National Museum of Fine Arts - 2.1 km / 1.3 mi <br />Feng Chia University - 2.4 km / 1.5 mi <br />Bao An Temple - 2.5 km / 1.6 mi <br />Fengjia Night Market - 2.5 km / 1.6 mi <br />Zhonghua Night Market - 2.7 km / 1.7 mi <br />Chonglun Park - 2.9 km / 1.8 mi <br />Wan He Temple - 2.9 km / 1.8 mi <br />Chungyo Department Store - 3.1 km / 1.9 mi <br /></p><p>The nearest airports are:<br />Taichung (RMQ) - 12 km / 7.5 mi<br />Taipei (TPE-Taoyuan Intl.) - 118.3 km / 73.5 mi<br />Taipei (TSA-Songshan) - 135.5 km / 84.2 mi<br /></p><p></p>\",\"location\":\"This 4-star hotel is within close proximity of Shr-Hwa International Tower and Shinkong Mitsukoshi Department Store.  A stay at Tempus Hotel Taichung places you in the heart of Taichung, convenient to Sogo Department Store and National Museum of Natural Science.\",\"headline\":\"Near National Museum of Natural Science\",\"general\":\"General description\"},\"statistics\":{\"52\":{\"id\":\"52\",\"name\":\"Total number of rooms - 820\",\"value\":\"820\"},\"54\":{\"id\":\"54\",\"name\":\"Number of floors - 38\",\"value\":\"38\"}},\"airports\":{\"preferred\":{\"iata_airport_code\":\"SGF\"}},\"themes\":{\"2337\":{\"id\":\"2337\",\"name\":\"Luxury Hotel\"},\"2341\":{\"id\":\"2341\",\"name\":\"Spa Hotel\"}},\"all_inclusive\":{\"all_rate_plans\":true,\"some_rate_plans\":false,\"details\":\"<p>This resort is all-inclusive. Onsite food and beverages are included in the room price (some restrictions may apply). </p><p><strong>Activities and facilities/equipment</strong><br />Land activities<ul><li>Fitness facilities</li></ul><br />Lessons/classes/games <ul><li>Pilates</li><li>Yoga</li></ul></p><p><strong>Entertainment</strong><ul><li>Onsite entertainment and activities</li><li>Onsite live performances</li></ul></p>\"},\"tax_id\":\"AB-012-987-1234-01\",\"chain\":{\"id\":\"-6\",\"name\":\"Hyatt Hotels\"},\"brand\":{\"id\":\"2209\",\"name\":\"Hyatt Place\"},\"spoken_languages\":{\"vi\":{\"id\":\"vi\",\"name\":\"Vietnamese\"}},\"multi_unit\":true,\"payment_registration_recommended\":false,\"vacation_rental_details\": {\"registry_number\": \"Property Registration Number 123456\",\"private_host\": \"true\",\"property_manager\": {\"name\": \"Victor\",\"links\": {\"image\": {\"method\": \"GET\",\"href\": \"https://test-image/test/test/836f1097-fbcf-43b5-bc02-c8ff6658cb90.c1.jpg\"}}},\"rental_agreement\": {\"links\": {\"rental_agreement\": {\"method\": \"GET\",\"href\": \"https://test-link.test.amazonaws.com/rentalconditions_property_d65e7eb5-4a7c-4a80-a8a3-171999f9f444.pdf\"}}},\"house_rules\": [\"Children welcome\",\"No pets\",\"No smoking\",\"No parties or events\"],\"amenities\": {\"4296\": {\"id\": \"4296\",\"name\": \"Furnished balcony or patio\"},\"2859\": {\"id\": \"2859\",\"name\": \"Private pool\"}},\"vrbo_srp_id\": \"123.1234567.5678910\",\"listing_id\": \"1234567\",\"listing_number\": \"5678910\",\"listing_source\": \"HOMEAWAY_US\",\"listing_unit\": \"/units/0000/32d82dfa-1a48-45d6-9132-49fdbf1bfc60\"},\"supply_source\":\"vrbo\"}   {\"property_id\":\"67890\",\"name\":\"Test Property Name 2\",\"address\":{\"line_1\":\"123 Main St\",\"line_2\":\"Apt A\",\"city\":\"Springfield\",\"state_province_code\":\"MO\",\"state_province_name\":\"Missouri\",\"postal_code\":\"65804\",\"country_code\":\"US\",\"obfuscation_required\":true,\"localized\":{\"links\":{\"es-ES\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=es-ES&include=address&property_id=67890\"},\"de-DE\":{\"method\":\"GET\",\"href\":\"https://api.ean.com/v3/properties/content?language=de-DE&include=address&property_id=67890\"}}}},\"ratings\":{\"property\":{\"rating\":\"3.5\",\"type\":\"Star\"},\"guest\":{\"count\":7651,\"overall\":\"4.3\",\"cleanliness\":\"4.2\",\"service\":\"1.1\",\"comfort\":\"4.3\",\"condition\":\"1.6\",\"location\":\"4.0\",\"neighborhood\":\"3.4\",\"quality\":\"3.4\",\"value\":\"2.2\",\"amenities\":\"1.4\",\"recommendation_percent\":\"80%\"}},\"location\":{\"coordinates\":{\"latitude\":37.15845,\"longitude\":-93.26838},\"obfuscated_coordinates\":{\"latitude\":28.339303,\"longitude\":-81.47791},\"obfuscation_required\":true},\"phone\":\"1-417-862-0153\",\"fax\":\"1-417-863-7249\",\"category\":{\"id\":\"1\",\"name\":\"Hotel\"},\"rank\":42,\"business_model\":{\"expedia_collect\":true,\"property_collect\":true},\"checkin\":{\"24_hour\":\"24-hour check-in\",\"begin_time\":\"3:00 PM\",\"end_time\":\"11:00 PM\",\"instructions\":\"Extra-person charges may apply and vary depending on hotel policy. &lt;br />Government-issued photo identification and a credit card or cash deposit are required at check-in for incidental charges. &lt;br />Special requests are subject to availability upon check-in and may incur additional charges. Special requests cannot be guaranteed. &lt;br />\",\"special_instructions\":\"There is no front desk at this property. To make arrangements for check-in please contact the property ahead of time using the information on the booking confirmation.\",\"min_age\":18},\"checkout\":{\"time\":\"11:00 AM\"},\"fees\":{\"mandatory\":\"<p>You'll be asked to pay the following charges at the hotel:</p> <ul><li>Deposit: USD 50 per day</li><li>Resort fee: USD 29.12 per accommodation, per night</li></ul> The hotel resort fee includes:<ul><li>Fitness center access</li><li>Internet access</li><li>Phone calls</li><li>Additional inclusions</li></ul> <p>We have included all charges provided to us by the property. However, charges can vary, for example, based on length of stay or the room you book. </p>\",\"optional\":\"Fee for in-room wireless Internet: USD 15 per hour (rates may vary)</li> <li>Airport shuttle fee: USD 350 per vehicle (one way)</li>           <li>Rollaway bed fee: USD 175 per night</li>\"},\"policies\":{\"know_before_you_go\":\"Reservations are required for massage services and spa treatments. Reservations can be made by contacting the hotel prior to arrival, using the contact information on the booking confirmation. </li><li>Children 11 years old and younger stay free when occupying the parent or guardian's room, using existing bedding. </li><li>Only registered guests are allowed in the guestrooms. </li> <li>Some facilities may have restricted access. Guests can contact the property for details using the contact information on the booking confirmation. </li> </ul>\"},\"attributes\":{\"general\":{\"2549\":{\"id\":\"2549\",\"name\":\"No elevators\"},\"3357\":{\"id\":\"3357\",\"name\":\"Caters to adults only\"}},\"pets\":{\"51\":{\"id\":\"51\",\"name\":\"Pets allowed\"},\"2809\":{\"id\":\"2809\",\"name\":\"Dogs only\"},\"3321\":{\"id\":\"3321\",\"name\":\"Pet maximum weight in kg is - 24\",\"value\":24}}},\"amenities\":{\"9\":{\"id\":\"9\",\"name\":\"Fitness facilities\"},\"2820\":{\"id\":\"2820\",\"name\":\"Number of indoor pools - 10\",\"value\":10}},\"images\":[{\"caption\":\"Featured Image\",\"hero_image\":true,\"category\":3,\"links\":{\"70px\":{\"method\":\"GET\",\"href\":\"https://i.travelapi.com/hotels/1000000/20000/15300/15237/bef1b976_t.jpg\"}}}],\"onsite_payments\":{\"currency\":\"USD\",\"types\":{\"171\":{\"id\":\"171\",\"name\":\"American Express\"}}},\"rooms\":{\"224829\":{\"id\":\"224829\",\"name\":\"Single Room\",\"descriptions\":{\"overview\":\"<strong>2 Twin Beds</strong><br />269-sq-foot (25-sq-meter) room with mountain views<br /><br /><b>Internet</b> - Free WiFi <br /> <b>Entertainment</b> - Flat-screen TV with cable channels<br /><b>Food & Drink</b> - Refrigerator, coffee/tea maker,  room service, and free bottled water<br /><b>Sleep</b> - Premium bedding <br /><b>Bathroom</b> - Private bathroom, shower, bathrobes, and free toiletries<br /><b>Practical</b> - Safe and desk; cribs/infant beds available on request<br /><b>Comfort</b> - Climate-controlled air conditioning and daily housekeeping<br />Non-Smoking<br />\"},\"amenities\":{\"130\":{\"id\":\"130\",\"name\":\"Refrigerator\"},\"1234\":{\"id\":\"1234\",\"name\":\"Test Amenity - 200\",\"value\":\"200\"}},\"images\":[{\"hero_image\":true,\"category\":21001,\"links\":{\"70px\":{\"method\":\"GET\",\"href\":\"https://i.travelapi.com/hotels/1000000/20000/15300/15237/bef1b976_t.jpg\"}},\"caption\":\"Guestroom\"}],\"bed_groups\":{\"37321\":{\"id\":\"37321\",\"description\":\"1 King Bed\",\"configuration\":[{\"type\":\"KingBed\",\"size\":\"King\",\"quantity\":1}]}},\"area\":{\"square_meters\":17},\"views\":{\"4134\":{\"id\":\"4134\",\"name\":\"City view\"}},\"occupancy\":{\"max_allowed\":{\"total\":3,\"children\":2,\"adults\":3},\"age_categories\":{\"ChildAgeA\":{\"name\":\"ChildAgeA\",\"minimum_age\":3}}}}},\"rates\":{\"333abc\":{\"id\":\"333abc\",\"amenities\":{\"1234\":{\"id\":\"1234\",\"name\":\"Test Amenity - 200\",\"value\":\"200\"},\"2104\":{\"id\":\"2104\",\"name\":\"Full Breakfast\"}},\"special_offer_description\":\"<strong>Breakfast for 2</strong> - Rate includes the following:\\r\\n<ul><li>Accommodations as selected</li>\\r\\n<li>Breakfast in hotel restaurant for up to 2 adults and children 12 years old and under registered in the same room</li>\\r\\n</ul><em>Must book this rate plan to receive benefits. Details provided at check-in. Taxes and gratuity may not be included. No refunds for any unused portion of offer. Offer subject to availability. Offer is not valid with groups/conventions and may not be combined with other promotional offers. Other restrictions and blackout dates may apply.</em>\\r\\n\"}},\"dates\":{\"added\":\"1998-07-20T05:00:00.000Z\",\"updated\":\"2018-03-22T13:33:17.000Z\"},\"descriptions\":{\"amenities\":\"Don't miss out on the many recreational opportunities, including an outdoor pool, a sauna, and a fitness center. Additional features at this hotel include complimentary wireless Internet access, concierge services, and an arcade/game room.\",\"dining\":\"Grab a bite at one of the hotel's 3 restaurants, or stay in and take advantage of 24-hour room service. Quench your thirst with your favorite drink at a bar/lounge. Buffet breakfasts are available daily for a fee.\",\"renovations\":\"During renovations, the hotel will make every effort to minimize noise and disturbance.  The property will be renovating from 08 May 2017 to 18 May 2017 (completion date subject to change). The following areas are affected:  <ul><li>Fitness facilities</li></ul>\",\"national_ratings\":\"For the benefit of our customers, we have provided a rating based on our rating system.\",\"business_amenities\":\"Featured amenities include complimentary wired Internet access, a 24-hour business center, and limo/town car service. Event facilities at this hotel consist of a conference center and meeting rooms. Free self parking is available onsite.\",\"rooms\":\"Make yourself at home in one of the 334 air-conditioned rooms featuring LCD televisions. Complimentary wired and wireless Internet access keeps you connected, and satellite programming provides entertainment. Private bathrooms with separate bathtubs and showers feature deep soaking bathtubs and complimentary toiletries. Conveniences include phones, as well as safes and desks.\",\"attractions\":\"Distances are calculated in a straight line from the property's location to the point of interest or attraction, and may not reflect actual travel distance. <br /><br /> Distances are displayed to the nearest 0.1 mile and kilometer. <p>Sogo Department Store - 0.7 km / 0.4 mi <br />National Museum of Natural Science - 1.1 km / 0.7 mi <br />Shr-Hwa International Tower - 1.4 km / 0.8 mi <br />Shinkong Mitsukoshi Department Store - 1.5 km / 0.9 mi <br />Taichung Metropolitan Opera House - 1.7 km / 1 mi <br />Tiger City Mall - 1.8 km / 1.1 mi <br />Maple Garden Park - 1.9 km / 1.2 mi <br />National Museum of Fine Arts - 2.1 km / 1.3 mi <br />Feng Chia University - 2.4 km / 1.5 mi <br />Bao An Temple - 2.5 km / 1.6 mi <br />Fengjia Night Market - 2.5 km / 1.6 mi <br />Zhonghua Night Market - 2.7 km / 1.7 mi <br />Chonglun Park - 2.9 km / 1.8 mi <br />Wan He Temple - 2.9 km / 1.8 mi <br />Chungyo Department Store - 3.1 km / 1.9 mi <br /></p><p>The nearest airports are:<br />Taichung (RMQ) - 12 km / 7.5 mi<br />Taipei (TPE-Taoyuan Intl.) - 118.3 km / 73.5 mi<br />Taipei (TSA-Songshan) - 135.5 km / 84.2 mi<br /></p><p></p>\",\"location\":\"This 4-star hotel is within close proximity of Shr-Hwa International Tower and Shinkong Mitsukoshi Department Store.  A stay at Tempus Hotel Taichung places you in the heart of Taichung, convenient to Sogo Department Store and National Museum of Natural Science.\",\"headline\":\"Near National Museum of Natural Science\",\"general\":\"General description\"},\"statistics\":{\"52\":{\"id\":\"52\",\"name\":\"Total number of rooms - 820\",\"value\":\"820\"},\"54\":{\"id\":\"54\",\"name\":\"Number of floors - 38\",\"value\":\"38\"}},\"airports\":{\"preferred\":{\"iata_airport_code\":\"SGF\"}},\"themes\":{\"2337\":{\"id\":\"2337\",\"name\":\"Luxury Hotel\"},\"2341\":{\"id\":\"2341\",\"name\":\"Spa Hotel\"}},\"all_inclusive\":{\"all_rate_plans\":true,\"some_rate_plans\":false,\"details\":\"<p>This resort is all-inclusive. Onsite food and beverages are included in the room price (some restrictions may apply). </p><p><strong>Activities and facilities/equipment</strong><br />Land activities<ul><li>Fitness facilities</li></ul><br />Lessons/classes/games <ul><li>Pilates</li><li>Yoga</li></ul></p><p><strong>Entertainment</strong><ul><li>Onsite entertainment and activities</li><li>Onsite live performances</li></ul></p>\"},\"tax_id\":\"CD-012-987-1234-02\",\"chain\":{\"id\":\"-5\",\"name\":\"Hilton Worldwide\"},\"brand\":{\"id\":\"358\",\"name\":\"Hampton Inn\"},\"spoken_languages\":{\"en\":{\"id\":\"en\",\"name\":\"English\"}},\"multi_unit\":true,\"payment_registration_recommended\":true,\"vacation_rental_details\":{\"registry_number\":\"Property Registration Number 123456\",\"private_host\":\"true\",\"property_manager\":{\"name\":\"John Smith\",\"links\":{\"image\":{\"method\":\"GET\",\"href\":\"https://example.com/profile.jpg\"}}},\"rental_agreement\":{\"links\":{\"rental_agreement\":{\"method\":\"GET\",\"href\":\"https:/example.com/rentalconditions.pdf\"}}},\"house_rules\":[\"Children welcome\",\"No pets\",\"No smoking\",\"No parties or events\"],\"amenities\":{\"2859\":{\"id\":\"2859\",\"name\":\"Private pool\"},\"4296\":{\"id\":\"4296\",\"name\":\"Furnished balcony or patio\"}},\"vrbo_srp_id\":\"123.1234567.5678910\",\"listing_id\":\"1234567\",\"listing_number\":\"5678910\",\"listing_source\":\"HOMEAWAY_US\",\"listing_unit\":\"/units/0000/32d82dfa-1a48-45d6-9132-49fdbf1bfc60\"},\"supply_source\":\"vrbo\"}   ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$language = language=en-US; // string | Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options)
$supply_source = vrbo; // string | Options for which supply source you would like returned in the content response. This parameter may only be supplied once and will return all properties that match the requested supply source. An error is thrown if the parameter is provided multiple times.   * `expedia` - Standard Expedia supply.   * `vrbo` - VRBO supply - This option is restricted to partners who have VRBO supply enabled for their profile. See [Vacation Rentals](https://developers.expediagroup.com/docs/rapid/lodging/vacation-rentals) for more information.
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getPropertyContentFile($accept, $accept_encoding, $user_agent, $language, $supply_source, $customer_session_id, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getPropertyContentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **language** | **string**| Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options) | |
| **supply_source** | **string**| Options for which supply source you would like returned in the content response. This parameter may only be supplied once and will return all properties that match the requested supply source. An error is thrown if the parameter is provided multiple times.   * &#x60;expedia&#x60; - Standard Expedia supply.   * &#x60;vrbo&#x60; - VRBO supply - This option is restricted to partners who have VRBO supply enabled for their profile. See [Vacation Rentals](https://developers.expediagroup.com/docs/rapid/lodging/vacation-rentals) for more information. | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Link**](../Model/Link.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyGuestReviews()`

```php
getPropertyGuestReviews($accept, $accept_encoding, $user_agent, $property_id, $language, $customer_session_id, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name): \OpenAPI\Client\Model\GuestReviews
```

Property Guest Reviews

<i>Note: Property Guest Reviews are only available if your account is configured for access and all launch requirements have been followed. Please find the launch requirements here [https://support.expediapartnersolutions.com/hc/en-us/articles/360008646799](https://support.expediapartnersolutions.com/hc/en-us/articles/360008646799) and contact your Account Manager for more details.</i>  The response is an individual Guest Reviews object containing multiple guest reviews for the requested active property.  To ensure you always show the latest guest reviews, this call should be made whenever a customer looks at the details for a specific property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: rapidAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; // string | Specifies the response format that the client would like to receive back. This must be `application/json`.
$accept_encoding = gzip; // string | Specifies the response encoding that the client would like to receive back. This must be `gzip`.
$user_agent = TravelNow/3.30.112; // string | The `User-Agent` header string from the customer's request, as captured by your integration. If you are building an application then the `User-Agent` value should be `{app name}/{app version}`.
$property_id = 19248; // string | Expedia Property ID.<br>
$language = language=en-US; // string | Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options)
$customer_session_id = 'customer_session_id_example'; // string | Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user's session, using a new value for every new customer session.<br> Including this value greatly eases EPS's internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user's session.
$billing_terms = 'billing_terms_example'; // string | This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately.
$payment_terms = 'payment_terms_example'; // string | This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately.
$partner_point_of_sale = 'partner_point_of_sale_example'; // string | This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately.
$platform_name = 'platform_name_example'; // string | This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately.

try {
    $result = $apiInstance->getPropertyGuestReviews($accept, $accept_encoding, $user_agent, $property_id, $language, $customer_session_id, $billing_terms, $payment_terms, $partner_point_of_sale, $platform_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getPropertyGuestReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specifies the response format that the client would like to receive back. This must be &#x60;application/json&#x60;. | |
| **accept_encoding** | **string**| Specifies the response encoding that the client would like to receive back. This must be &#x60;gzip&#x60;. | |
| **user_agent** | **string**| The &#x60;User-Agent&#x60; header string from the customer&#39;s request, as captured by your integration. If you are building an application then the &#x60;User-Agent&#x60; value should be &#x60;{app name}/{app version}&#x60;. | |
| **property_id** | **string**| Expedia Property ID.&lt;br&gt; | |
| **language** | **string**| Desired language for the response as a subset of BCP47 format that only uses hyphenated pairs of two-digit language and country codes. Use only ISO 639-1 alpha-2 language codes and ISO 3166-1 alpha-2 country codes. See [https://www.w3.org/International/articles/language-tags/](https://www.w3.org/International/articles/language-tags/)  Language Options: [https://developers.expediagroup.com/docs/rapid/resources/reference/language-options](https://developers.expediagroup.com/docs/rapid/resources/reference/language-options) | |
| **customer_session_id** | **string**| Insert your own unique value for each user session, beginning with the first API call. Continue to pass the same value for each subsequent API call during the user&#39;s session, using a new value for every new customer session.&lt;br&gt; Including this value greatly eases EPS&#39;s internal debugging process for issues with partner requests, as it explicitly links together request paths for individual user&#39;s session. | [optional] |
| **billing_terms** | **string**| This parameter is to specify the terms of how a resulting booking should be billed. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **payment_terms** | **string**| This parameter is to specify what terms should be used when being paid for a resulting booking. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **partner_point_of_sale** | **string**| This parameter is to specify what point of sale is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |
| **platform_name** | **string**| This parameter is to specify what platform is being used to shop and book. If this field is needed, the value for this will be provided to you separately. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuestReviews**](../Model/GuestReviews.md)

### Authorization

[rapidAuth](../../README.md#rapidAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
