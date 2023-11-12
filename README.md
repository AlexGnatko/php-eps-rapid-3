# OpenAPIClient-php

EPS Rapid V3


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://test.ean.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingsApi* | [**postItinerary**](docs/Api/BookingsApi.md#postitinerary) | **POST** /itineraries | Create Booking
*BookingsApi* | [**postPaymentSessions**](docs/Api/BookingsApi.md#postpaymentsessions) | **POST** /payment-sessions | Register Payments
*BookingsApi* | [**putCompletePaymentSession**](docs/Api/BookingsApi.md#putcompletepaymentsession) | **PUT** /itineraries/{itinerary_id}/payment-sessions | Complete Payment Session
*BookingsApi* | [**putResumeBooking**](docs/Api/BookingsApi.md#putresumebooking) | **PUT** /itineraries/{itinerary_id} | Resume Booking
*ContentApi* | [**getChainReference**](docs/Api/ContentApi.md#getchainreference) | **GET** /chains | Chain Reference
*ContentApi* | [**getInactiveProperties**](docs/Api/ContentApi.md#getinactiveproperties) | **GET** /properties/inactive | Inactive Properties
*ContentApi* | [**getPropertyCatalogFile**](docs/Api/ContentApi.md#getpropertycatalogfile) | **GET** /files/properties/catalog | Property Catalog File
*ContentApi* | [**getPropertyContent**](docs/Api/ContentApi.md#getpropertycontent) | **GET** /properties/content | Property Content
*ContentApi* | [**getPropertyContentFile**](docs/Api/ContentApi.md#getpropertycontentfile) | **GET** /files/properties/content | Property Content File
*ContentApi* | [**getPropertyGuestReviews**](docs/Api/ContentApi.md#getpropertyguestreviews) | **GET** /properties/{property_id}/guest-reviews | Property Guest Reviews
*GeographyApi* | [**getRegion**](docs/Api/GeographyApi.md#getregion) | **GET** /regions/{region_id} | Region
*GeographyApi* | [**getRegions**](docs/Api/GeographyApi.md#getregions) | **GET** /regions | Regions
*GeographyApi* | [**postGeography**](docs/Api/GeographyApi.md#postgeography) | **POST** /properties/geography | Properties within Polygon
*ManageBookingApi* | [**changeRoomDetails**](docs/Api/ManageBookingApi.md#changeroomdetails) | **PUT** /itineraries/{itinerary_id}/rooms/{room_id} | Change details of a room.
*ManageBookingApi* | [**commitChange**](docs/Api/ManageBookingApi.md#commitchange) | **PUT** /itineraries/{itinerary_id}/rooms/{room_id}/pricing | Commit a change of itinerary that may require additional payment or refund.
*ManageBookingApi* | [**deleteHeldBooking**](docs/Api/ManageBookingApi.md#deleteheldbooking) | **DELETE** /itineraries/{itinerary_id} | Cancel Held Booking
*ManageBookingApi* | [**deleteRoom**](docs/Api/ManageBookingApi.md#deleteroom) | **DELETE** /itineraries/{itinerary_id}/rooms/{room_id} | Cancel a room.
*ManageBookingApi* | [**getReservation**](docs/Api/ManageBookingApi.md#getreservation) | **GET** /itineraries | Search for and retrieve Bookings with Affiliate Reference Id
*ManageBookingApi* | [**getReservationByItineraryId**](docs/Api/ManageBookingApi.md#getreservationbyitineraryid) | **GET** /itineraries/{itinerary_id} | Retrieve Booking
*NotificationsApi* | [**requestTestNotification**](docs/Api/NotificationsApi.md#requesttestnotification) | **POST** /notifications | Request Test Notification
*NotificationsApi* | [**requestUndeliveredNotifications**](docs/Api/NotificationsApi.md#requestundeliverednotifications) | **GET** /notifications | Request Undelivered Notifications
*ShoppingApi* | [**getAdditionalAvailability**](docs/Api/ShoppingApi.md#getadditionalavailability) | **GET** /properties/{property_id}/availability | Get additional property room rates and availability
*ShoppingApi* | [**getAvailability**](docs/Api/ShoppingApi.md#getavailability) | **GET** /properties/availability | Get property room rates and availability
*ShoppingApi* | [**getCalendarAvailability**](docs/Api/ShoppingApi.md#getcalendaravailability) | **GET** /calendars/availability | Get a calendar of availability dates for properties. This is currently a Vrbo property only feature.
*ShoppingApi* | [**getPaymentOptions**](docs/Api/ShoppingApi.md#getpaymentoptions) | **GET** /properties/{property_id}/payment-options | Get Accepted Payment Types - EPS MOR Only
*ShoppingApi* | [**priceCheck**](docs/Api/ShoppingApi.md#pricecheck) | **GET** /properties/{property_id}/rooms/{room_id}/rates/{rate_id} | Price-Check

## Models

- [Address](docs/Model/Address.md)
- [Address1](docs/Model/Address1.md)
- [Adjustment](docs/Model/Adjustment.md)
- [AffiliateCollect](docs/Model/AffiliateCollect.md)
- [AllInclusive](docs/Model/AllInclusive.md)
- [Amenity](docs/Model/Amenity.md)
- [Amount](docs/Model/Amount.md)
- [Ancestors](docs/Model/Ancestors.md)
- [Area](docs/Model/Area.md)
- [AssociatedAirports](docs/Model/AssociatedAirports.md)
- [Attribute](docs/Model/Attribute.md)
- [Attributes](docs/Model/Attributes.md)
- [BedGroup](docs/Model/BedGroup.md)
- [BedGroupAvailability](docs/Model/BedGroupAvailability.md)
- [BedGroupAvailabilityLinks](docs/Model/BedGroupAvailabilityLinks.md)
- [BedGroupConfiguration](docs/Model/BedGroupConfiguration.md)
- [BillingContact](docs/Model/BillingContact.md)
- [BillingContactRequest](docs/Model/BillingContactRequest.md)
- [BillingContactRequestAddress](docs/Model/BillingContactRequestAddress.md)
- [BillingContactRequestWithPhone](docs/Model/BillingContactRequestWithPhone.md)
- [BoundingPolygon](docs/Model/BoundingPolygon.md)
- [Brand](docs/Model/Brand.md)
- [BusinessModel](docs/Model/BusinessModel.md)
- [CancelPenalty](docs/Model/CancelPenalty.md)
- [CancelRefund](docs/Model/CancelRefund.md)
- [CardOption](docs/Model/CardOption.md)
- [CategoryAge](docs/Model/CategoryAge.md)
- [CategoryProperty](docs/Model/CategoryProperty.md)
- [CategoryValueAdd](docs/Model/CategoryValueAdd.md)
- [Chain](docs/Model/Chain.md)
- [ChangeRoomDetailsRequest](docs/Model/ChangeRoomDetailsRequest.md)
- [Charge](docs/Model/Charge.md)
- [ChargeCalculated](docs/Model/ChargeCalculated.md)
- [Checkin](docs/Model/Checkin.md)
- [Checkout](docs/Model/Checkout.md)
- [CommitChangeRoomRequestBody](docs/Model/CommitChangeRoomRequestBody.md)
- [CompletePaymentSession](docs/Model/CompletePaymentSession.md)
- [CompletePaymentSessionLinks](docs/Model/CompletePaymentSessionLinks.md)
- [ConfirmationId](docs/Model/ConfirmationId.md)
- [Conversations](docs/Model/Conversations.md)
- [Coordinates](docs/Model/Coordinates.md)
- [CoordinatesRegion](docs/Model/CoordinatesRegion.md)
- [CreateItineraryRequest](docs/Model/CreateItineraryRequest.md)
- [CreateItineraryRequestRoom](docs/Model/CreateItineraryRequestRoom.md)
- [CreditCard](docs/Model/CreditCard.md)
- [CreditCardMerchant](docs/Model/CreditCardMerchant.md)
- [Dates](docs/Model/Dates.md)
- [Day](docs/Model/Day.md)
- [Deal](docs/Model/Deal.md)
- [Deposit](docs/Model/Deposit.md)
- [DepositItinerary](docs/Model/DepositItinerary.md)
- [Descriptions](docs/Model/Descriptions.md)
- [DescriptionsRoom](docs/Model/DescriptionsRoom.md)
- [EnhancedHouseRules](docs/Model/EnhancedHouseRules.md)
- [Error](docs/Model/Error.md)
- [ErrorIndividual](docs/Model/ErrorIndividual.md)
- [Essential](docs/Model/Essential.md)
- [EssentialInformation](docs/Model/EssentialInformation.md)
- [Fees](docs/Model/Fees.md)
- [FeesPricingInformation](docs/Model/FeesPricingInformation.md)
- [Field](docs/Model/Field.md)
- [Frequency](docs/Model/Frequency.md)
- [GuestRating](docs/Model/GuestRating.md)
- [GuestReviews](docs/Model/GuestReviews.md)
- [GuestReviewsVerified](docs/Model/GuestReviewsVerified.md)
- [Image](docs/Model/Image.md)
- [Image1](docs/Model/Image1.md)
- [Itinerary](docs/Model/Itinerary.md)
- [ItineraryCreation](docs/Model/ItineraryCreation.md)
- [ItineraryCreationLinks](docs/Model/ItineraryCreationLinks.md)
- [ItineraryHistoryItem](docs/Model/ItineraryHistoryItem.md)
- [ItineraryLinks](docs/Model/ItineraryLinks.md)
- [Link](docs/Model/Link.md)
- [Localized](docs/Model/Localized.md)
- [Location](docs/Model/Location.md)
- [MaxAllowed](docs/Model/MaxAllowed.md)
- [MerchantOfRecord](docs/Model/MerchantOfRecord.md)
- [MultiPolygon](docs/Model/MultiPolygon.md)
- [NightCharge](docs/Model/NightCharge.md)
- [NightChargeType](docs/Model/NightChargeType.md)
- [NonrefundableDateRange](docs/Model/NonrefundableDateRange.md)
- [Notification](docs/Model/Notification.md)
- [Occupancy](docs/Model/Occupancy.md)
- [OfferType](docs/Model/OfferType.md)
- [OnsitePayments](docs/Model/OnsitePayments.md)
- [PaymentOption](docs/Model/PaymentOption.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PaymentRequestWithPhone](docs/Model/PaymentRequestWithPhone.md)
- [PaymentSessions](docs/Model/PaymentSessions.md)
- [PaymentSessionsLinks](docs/Model/PaymentSessionsLinks.md)
- [PaymentSessionsRequest](docs/Model/PaymentSessionsRequest.md)
- [PaymentSessionsRequestCustomerAccountDetails](docs/Model/PaymentSessionsRequestCustomerAccountDetails.md)
- [PaymentType](docs/Model/PaymentType.md)
- [Phone](docs/Model/Phone.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [Policies](docs/Model/Policies.md)
- [Polygon](docs/Model/Polygon.md)
- [Preferred](docs/Model/Preferred.md)
- [PricingInformation](docs/Model/PricingInformation.md)
- [Promotions](docs/Model/Promotions.md)
- [PromotionsItinerary](docs/Model/PromotionsItinerary.md)
- [PropertiesGeoJsonRequest](docs/Model/PropertiesGeoJsonRequest.md)
- [Property](docs/Model/Property.md)
- [PropertyAvailability](docs/Model/PropertyAvailability.md)
- [PropertyAvailabilityLinks](docs/Model/PropertyAvailabilityLinks.md)
- [PropertyCalendarAvailability](docs/Model/PropertyCalendarAvailability.md)
- [PropertyContent](docs/Model/PropertyContent.md)
- [PropertyGeography](docs/Model/PropertyGeography.md)
- [PropertyInactive](docs/Model/PropertyInactive.md)
- [PropertyManager](docs/Model/PropertyManager.md)
- [PropertyManagerLinks](docs/Model/PropertyManagerLinks.md)
- [PropertyRating](docs/Model/PropertyRating.md)
- [PropertyUnavailability](docs/Model/PropertyUnavailability.md)
- [Rate](docs/Model/Rate.md)
- [RateContent](docs/Model/RateContent.md)
- [RateHistory](docs/Model/RateHistory.md)
- [RateItinerary](docs/Model/RateItinerary.md)
- [RateLinks](docs/Model/RateLinks.md)
- [Ratings](docs/Model/Ratings.md)
- [Region](docs/Model/Region.md)
- [RentalAgreement](docs/Model/RentalAgreement.md)
- [RentalAgreementLinks](docs/Model/RentalAgreementLinks.md)
- [Review](docs/Model/Review.md)
- [RoomAvailability](docs/Model/RoomAvailability.md)
- [RoomContent](docs/Model/RoomContent.md)
- [RoomHistoryItem](docs/Model/RoomHistoryItem.md)
- [RoomItinerary](docs/Model/RoomItinerary.md)
- [RoomItineraryLinks](docs/Model/RoomItineraryLinks.md)
- [RoomPriceCheck](docs/Model/RoomPriceCheck.md)
- [RoomPriceCheckLinks](docs/Model/RoomPriceCheckLinks.md)
- [SaleScenario](docs/Model/SaleScenario.md)
- [SpokenLanguage](docs/Model/SpokenLanguage.md)
- [Statistic](docs/Model/Statistic.md)
- [Status](docs/Model/Status.md)
- [StatusItinerary](docs/Model/StatusItinerary.md)
- [StatusPriceCheck](docs/Model/StatusPriceCheck.md)
- [Stay](docs/Model/Stay.md)
- [StayConstraints](docs/Model/StayConstraints.md)
- [StayType](docs/Model/StayType.md)
- [SupplyContact](docs/Model/SupplyContact.md)
- [TestNotificationRequest](docs/Model/TestNotificationRequest.md)
- [Theme](docs/Model/Theme.md)
- [ThirdPartyAuthRequest](docs/Model/ThirdPartyAuthRequest.md)
- [Totals](docs/Model/Totals.md)
- [TraderAddress](docs/Model/TraderAddress.md)
- [TraderDetailsInner](docs/Model/TraderDetailsInner.md)
- [TraderInformation](docs/Model/TraderInformation.md)
- [TravelCompanion](docs/Model/TravelCompanion.md)
- [TripReason](docs/Model/TripReason.md)
- [UnavailableReason](docs/Model/UnavailableReason.md)
- [UnitConfiguration](docs/Model/UnitConfiguration.md)
- [VacationRentalDetails](docs/Model/VacationRentalDetails.md)
- [ValueAdd](docs/Model/ValueAdd.md)
- [View](docs/Model/View.md)

## Authorization

Authentication schemes defined for the API:
### rapidAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
