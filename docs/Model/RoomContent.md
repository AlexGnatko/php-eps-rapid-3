# # RoomContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for a room type. | [optional]
**name** | **string** | Room type name. | [optional]
**descriptions** | [**\OpenAPI\Client\Model\DescriptionsRoom**](DescriptionsRoom.md) |  | [optional]
**amenities** | [**array<string,\OpenAPI\Client\Model\Amenity>**](Amenity.md) | Lists all of the amenities available in the room. See our [amenities reference](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for current known amenity ID and name values. | [optional]
**images** | [**\OpenAPI\Client\Model\Image[]**](Image.md) | The room&#39;s images. Contains all room images available. | [optional]
**bed_groups** | [**array<string,\OpenAPI\Client\Model\BedGroup>**](BedGroup.md) | A map of the room&#39;s bed groups. | [optional]
**area** | [**\OpenAPI\Client\Model\Area**](Area.md) |  | [optional]
**views** | [**array<string,\OpenAPI\Client\Model\View>**](View.md) | A map of the room views. See our [view reference](https://developers.expediagroup.com/docs/rapid/lodging/content/content-reference-lists) for current known room view ID and name values. | [optional]
**occupancy** | [**\OpenAPI\Client\Model\Occupancy**](Occupancy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
