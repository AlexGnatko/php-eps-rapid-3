# # CreateItineraryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_reference_id** | **string** | Your unique reference value. This field supports from 3 to a maximum of 28 characters and is required to be unique (if provided). Entering special characters (\&quot;&lt;\&quot;, \&quot;&gt;\&quot;, \&quot;(\&quot;, \&quot;)\&quot;, and \&quot;&amp;\&quot;) in this field will result in the request being rejected. | [optional]
**hold** | **bool** | Flag for placing a booking on hold. The booking will be released if the resume link is not followed within the hold period. Please refer to our Hold and Resume documentation. | [optional]
**email** | **string** | Email address for the customer. Must adhere to standard RFC 822 email format. Special characters (\&quot;&lt;\&quot;, \&quot;&gt;\&quot;, \&quot;(\&quot;, \&quot;)\&quot;, and \&quot;&amp;\&quot;) entered in this field will be re-encoded. |
**phone** | [**\OpenAPI\Client\Model\PhoneRequest**](PhoneRequest.md) |  |
**rooms** | [**\OpenAPI\Client\Model\CreateItineraryRequestRoom[]**](CreateItineraryRequestRoom.md) |  |
**payments** | [**\OpenAPI\Client\Model\PaymentRequest[]**](PaymentRequest.md) | Required if payment information prior to booking was not submitted. If register payments was called prior to this call, do not submit payment information again. | [optional]
**affiliate_metadata** | **string** | Field that stores up to 256 characters of additional metadata with the itinerary. Will be returned on all retrieve responses for this itinerary. The data must be in the format &#39;key1:value|key2:value|key3:value&#39;. Other Special characters (\&quot;&lt;\&quot;, \&quot;&gt;\&quot;, \&quot;(\&quot;, \&quot;)\&quot;, and \&quot;&amp;\&quot;) entered in this field will be re-encoded. | [optional]
**tax_registration_number** | **string** | The customer&#39;s taxpayer identification number that is provided by the government to nationals or resident aliens. This number should be collected from individuals that pay taxes or participate in activities that provide revenue for one or more tax types. Note: This value is only needed from Brazilian and Indian customers. | [optional]
**traveler_handling_instructions** | **string** | Custom traveler handling instructions for the hotel. Do not include PCI sensitive data, such as credit card numbers, in this field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
