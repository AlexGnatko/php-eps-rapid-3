# # CreateItineraryRequestRoom

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**given_name** | **string** | First name of room guest. Max 60 characters. Special characters (\&quot;&lt;\&quot;, \&quot;&gt;\&quot;, \&quot;(\&quot;, \&quot;)\&quot;, and \&quot;&amp;\&quot;) entered in this field will be re-encoded. |
**family_name** | **string** | Last name of room guest. Max 60 characters. Special characters (\&quot;&lt;\&quot;, \&quot;&gt;\&quot;, \&quot;(\&quot;, \&quot;)\&quot;, and \&quot;&amp;\&quot;) entered in this field will be re-encoded. |
**smoking** | **bool** | Specify if the guest would prefer a smoking room. This field is only a request and the property is not guaranteed to honor it, it will not override any non-smoking policies by the hotel. | [optional]
**special_request** | **string** | Special requests to send to hotel (not guaranteed). Do not use this field to communicate B2B customer service requests or pass any sensitive personal or financial information (PII). Special characters (\&quot;&lt;\&quot;, \&quot;&gt;\&quot;, \&quot;(\&quot;, \&quot;)\&quot;, and \&quot;&amp;\&quot;) entered in this field will be re-encoded. | [optional]
**loyalty_id** | **string** | A loyalty identifier for a hotel loyalty program associated with this room guest. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
