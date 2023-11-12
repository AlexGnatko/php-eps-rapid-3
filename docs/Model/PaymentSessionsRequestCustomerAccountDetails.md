# # PaymentSessionsRequestCustomerAccountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authentication_method** | **string** | Mechanism used by the cardholder to authenticate to the merchant. | [optional]
**authentication_timestamp** | **string** | Date and time in UTC of the cardholder authentication, in extended ISO 8601 format. | [optional]
**create_date** | **string** | Date the cardholder opened the account with the merchant, in ISO 8601 format (YYYY-MM-DD). | [optional]
**change_date** | **string** | Date the cardholder’s account with the merchant was last changed, including Billing or Shipping address, new payment account, or new user(s) added, in ISO 8601 format (YYYY-MM-DD). | [optional]
**password_change_date** | **string** | Date the cardholder’s account with the merchant had a password change or account reset, in ISO 8601 format (YYYY-MM-DD). | [optional]
**add_card_attempts** | **float** | Number of add card attempts in the last 24 hours. | [optional]
**account_purchases** | **float** | Number of purchases with this cardholder&#39;s account during the previous six months. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
