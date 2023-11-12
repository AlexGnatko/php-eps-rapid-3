# # PaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Identifier for the type of payment. If affiliate_collect, card information is not required as EPS will not be processing the payment. However, billing contact information is still required. |
**number** | **string** | Card number. Required for credit card transactions. | [optional]
**security_code** | **string** | CVV/CSV code from the back of the customer&#39;s card. Required for credit card transactions. | [optional]
**expiration_month** | **string** | Two-digit month the credit card will expire. Required for credit card transactions. | [optional]
**expiration_year** | **string** | Year the credit card will expire. Required for credit card transactions. | [optional]
**billing_contact** | [**\OpenAPI\Client\Model\BillingContactRequest**](BillingContactRequest.md) |  |
**third_party_authentication** | [**\OpenAPI\Client\Model\ThirdPartyAuthRequest**](ThirdPartyAuthRequest.md) |  | [optional]
**enrollment_date** | **string** | Date the payment account was enrolled in the cardholder&#39;s account with the merchant, in ISO 8601 format (YYYY-MM-DD). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
