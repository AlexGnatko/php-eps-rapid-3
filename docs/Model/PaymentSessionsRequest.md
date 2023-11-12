# # PaymentSessionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The version of the EgPayments.js library. |
**browser_accept_header** | **string** | The customer&#39;s browser accept header that was used in the booking request. |
**encoded_browser_metadata** | **string** | Encoded browser metadata, provided by the EgPayments.js library. |
**preferred_challenge_window_size** | **string** | The preferred window size that needs to be displayed to the customer. Following are the possible values of this field:   * &#x60;extra_small&#x60;: 250 x 400   * &#x60;small&#x60;: 390 x 400   * &#x60;medium&#x60;: 600 x 400   * &#x60;large&#x60;: 500 x 600   * &#x60;full_screen&#x60;: Full screen |
**merchant_url** | **string** | Fully qualified URL of merchant website or customer care site. |
**customer_account_details** | [**\OpenAPI\Client\Model\PaymentSessionsRequestCustomerAccountDetails**](PaymentSessionsRequestCustomerAccountDetails.md) |  |
**payments** | [**\OpenAPI\Client\Model\PaymentRequest[]**](PaymentRequest.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
