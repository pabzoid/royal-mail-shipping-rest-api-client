<?php
/**
 * CreateShipmentServiceOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V3 (REST)
 *
 * API Shipping V3 (REST) provides the functionality for customers to take a shipping transaction from creation to collection.   It specifically covers how the Royal Mail API Shipping V3 can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail API Shipping V3 exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic and international items with Royal Mail.  Built on industry standards, Royal Mail API Shipping V3 provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming to allow customers greater flexibility when generating their labels. There are no costs to customers for using the Royal Mail API Shipping V3 services, however customers??? own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.  This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating/ cancelling a shipment and Manifesting please refer to http://www.royalmail.com/pro-shipping-help.
 *
 * OpenAPI spec version: 3.0.20
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\models;

use \ArrayAccess;
use \RoyalMail\Shipping\Rest\Api\ObjectSerializer;

/**
 * CreateShipmentServiceOptions Class Doc Comment
 *
 * @category Class
 * @description The Service Options for a Royal Mail Shipment, used in a shipment request.&lt;br /&gt;Required if have more than 1 possible Posting Location.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateShipmentServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateShipment.ServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postingLocation' => 'string',
'serviceLevel' => 'string',
'serviceFormat' => 'string',
'safeplace' => 'string',
'saturdayGuaranteed' => 'bool',
'consequentialLoss' => 'string',
'localCollect' => 'bool',
'trackingNotifications' => 'string',
'recordedSignedFor' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postingLocation' => null,
'serviceLevel' => null,
'serviceFormat' => null,
'safeplace' => null,
'saturdayGuaranteed' => null,
'consequentialLoss' => null,
'localCollect' => null,
'trackingNotifications' => null,
'recordedSignedFor' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'postingLocation' => 'PostingLocation',
'serviceLevel' => 'ServiceLevel',
'serviceFormat' => 'ServiceFormat',
'safeplace' => 'Safeplace',
'saturdayGuaranteed' => 'SaturdayGuaranteed',
'consequentialLoss' => 'ConsequentialLoss',
'localCollect' => 'LocalCollect',
'trackingNotifications' => 'TrackingNotifications',
'recordedSignedFor' => 'RecordedSignedFor'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postingLocation' => 'setPostingLocation',
'serviceLevel' => 'setServiceLevel',
'serviceFormat' => 'setServiceFormat',
'safeplace' => 'setSafeplace',
'saturdayGuaranteed' => 'setSaturdayGuaranteed',
'consequentialLoss' => 'setConsequentialLoss',
'localCollect' => 'setLocalCollect',
'trackingNotifications' => 'setTrackingNotifications',
'recordedSignedFor' => 'setRecordedSignedFor'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postingLocation' => 'getPostingLocation',
'serviceLevel' => 'getServiceLevel',
'serviceFormat' => 'getServiceFormat',
'safeplace' => 'getSafeplace',
'saturdayGuaranteed' => 'getSaturdayGuaranteed',
'consequentialLoss' => 'getConsequentialLoss',
'localCollect' => 'getLocalCollect',
'trackingNotifications' => 'getTrackingNotifications',
'recordedSignedFor' => 'getRecordedSignedFor'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const SERVICE_FORMAT_L = 'L';
const SERVICE_FORMAT_F = 'F';
const SERVICE_FORMAT_P = 'P';
const SERVICE_FORMAT_S = 'S';
const CONSEQUENTIAL_LOSS_LEVEL1 = 'Level1';
const CONSEQUENTIAL_LOSS_LEVEL2 = 'Level2';
const CONSEQUENTIAL_LOSS_LEVEL3 = 'Level3';
const CONSEQUENTIAL_LOSS_LEVEL4 = 'Level4';
const CONSEQUENTIAL_LOSS_LEVEL5 = 'Level5';
const TRACKING_NOTIFICATIONS_EMAIL = 'Email';
const TRACKING_NOTIFICATIONS_SMS = 'SMS';
const TRACKING_NOTIFICATIONS_EMAIL_AND_SMS = 'EmailAndSMS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceFormatAllowableValues()
    {
        return [
            self::SERVICE_FORMAT_L,
self::SERVICE_FORMAT_F,
self::SERVICE_FORMAT_P,
self::SERVICE_FORMAT_S,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConsequentialLossAllowableValues()
    {
        return [
            self::CONSEQUENTIAL_LOSS_LEVEL1,
self::CONSEQUENTIAL_LOSS_LEVEL2,
self::CONSEQUENTIAL_LOSS_LEVEL3,
self::CONSEQUENTIAL_LOSS_LEVEL4,
self::CONSEQUENTIAL_LOSS_LEVEL5,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrackingNotificationsAllowableValues()
    {
        return [
            self::TRACKING_NOTIFICATIONS_EMAIL,
self::TRACKING_NOTIFICATIONS_SMS,
self::TRACKING_NOTIFICATIONS_EMAIL_AND_SMS,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['postingLocation'] = isset($data['postingLocation']) ? $data['postingLocation'] : null;
        $this->container['serviceLevel'] = isset($data['serviceLevel']) ? $data['serviceLevel'] : null;
        $this->container['serviceFormat'] = isset($data['serviceFormat']) ? $data['serviceFormat'] : null;
        $this->container['safeplace'] = isset($data['safeplace']) ? $data['safeplace'] : null;
        $this->container['saturdayGuaranteed'] = isset($data['saturdayGuaranteed']) ? $data['saturdayGuaranteed'] : null;
        $this->container['consequentialLoss'] = isset($data['consequentialLoss']) ? $data['consequentialLoss'] : null;
        $this->container['localCollect'] = isset($data['localCollect']) ? $data['localCollect'] : null;
        $this->container['trackingNotifications'] = isset($data['trackingNotifications']) ? $data['trackingNotifications'] : null;
        $this->container['recordedSignedFor'] = isset($data['recordedSignedFor']) ? $data['recordedSignedFor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['postingLocation'] === null) {
            $invalidProperties[] = "'postingLocation' can't be null";
        }
        $allowedValues = $this->getServiceFormatAllowableValues();
        if (!is_null($this->container['serviceFormat']) && !in_array($this->container['serviceFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'serviceFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConsequentialLossAllowableValues();
        if (!is_null($this->container['consequentialLoss']) && !in_array($this->container['consequentialLoss'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'consequentialLoss', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrackingNotificationsAllowableValues();
        if (!is_null($this->container['trackingNotifications']) && !in_array($this->container['trackingNotifications'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trackingNotifications', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets postingLocation
     *
     * @return string
     */
    public function getPostingLocation()
    {
        return $this->container['postingLocation'];
    }

    /**
     * Sets postingLocation
     *
     * @param string $postingLocation Posting Location.<br />Optional if you only have 1 Posting Location.
     *
     * @return $this
     */
    public function setPostingLocation($postingLocation)
    {
        $this->container['postingLocation'] = $postingLocation;

        return $this;
    }

    /**
     * Gets serviceLevel
     *
     * @return string
     */
    public function getServiceLevel()
    {
        return $this->container['serviceLevel'];
    }

    /**
     * Sets serviceLevel
     *
     * @param string $serviceLevel Service Level<br />Valid values are 01-99.<br />Defaults to lowest service level if not provided.
     *
     * @return $this
     */
    public function setServiceLevel($serviceLevel)
    {
        $this->container['serviceLevel'] = $serviceLevel;

        return $this;
    }

    /**
     * Gets serviceFormat
     *
     * @return string
     */
    public function getServiceFormat()
    {
        return $this->container['serviceFormat'];
    }

    /**
     * Sets serviceFormat
     *
     * @param string $serviceFormat Service Format<br />            <br />**L** - Letter<br />**F** - Large Letter<br />**P** - Parcel<br />**S** - Printed Papers - International Services Only
     *
     * @return $this
     */
    public function setServiceFormat($serviceFormat)
    {
        $allowedValues = $this->getServiceFormatAllowableValues();
        if (!is_null($serviceFormat) && !in_array($serviceFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'serviceFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceFormat'] = $serviceFormat;

        return $this;
    }

    /**
     * Gets safeplace
     *
     * @return string
     */
    public function getSafeplace()
    {
        return $this->container['safeplace'];
    }

    /**
     * Sets safeplace
     *
     * @param string $safeplace Safe Place Enhancement<br />Free text to describe a safe place to leave the parcel.<br />Returns an error if the service does not allow Safeplace.
     *
     * @return $this
     */
    public function setSafeplace($safeplace)
    {
        $this->container['safeplace'] = $safeplace;

        return $this;
    }

    /**
     * Gets saturdayGuaranteed
     *
     * @return bool
     */
    public function getSaturdayGuaranteed()
    {
        return $this->container['saturdayGuaranteed'];
    }

    /**
     * Sets saturdayGuaranteed
     *
     * @param bool $saturdayGuaranteed Saturday Guaranteed Enhancement<br />Available for Domestic Special Delivery Services Only<br />Returns an error if requested and the service does not allow it.
     *
     * @return $this
     */
    public function setSaturdayGuaranteed($saturdayGuaranteed)
    {
        $this->container['saturdayGuaranteed'] = $saturdayGuaranteed;

        return $this;
    }

    /**
     * Gets consequentialLoss
     *
     * @return string
     */
    public function getConsequentialLoss()
    {
        return $this->container['consequentialLoss'];
    }

    /**
     * Sets consequentialLoss
     *
     * @param string $consequentialLoss Consequential Loss Enhancement<br />Available for Domestic Special Delivery Services Only.<br />            <br />**Level1** - ??1,000<br />**Level2** - ??2,500<br />**Level3** - ??5,000<br />**Level4** - ??7,500<br />**Level5** - ??10,000<br />            <br />Returns an error if requested and the service does not allow it.
     *
     * @return $this
     */
    public function setConsequentialLoss($consequentialLoss)
    {
        $allowedValues = $this->getConsequentialLossAllowableValues();
        if (!is_null($consequentialLoss) && !in_array($consequentialLoss, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'consequentialLoss', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['consequentialLoss'] = $consequentialLoss;

        return $this;
    }

    /**
     * Gets localCollect
     *
     * @return bool
     */
    public function getLocalCollect()
    {
        return $this->container['localCollect'];
    }

    /**
     * Sets localCollect
     *
     * @param bool $localCollect Local Collect Enhancement<br />Available for Domestic Special Delivery and Domestic Tracked services only.<br />Returns an error if requested and the service does not allow it.
     *
     * @return $this
     */
    public function setLocalCollect($localCollect)
    {
        $this->container['localCollect'] = $localCollect;

        return $this;
    }

    /**
     * Gets trackingNotifications
     *
     * @return string
     */
    public function getTrackingNotifications()
    {
        return $this->container['trackingNotifications'];
    }

    /**
     * Sets trackingNotifications
     *
     * @param string $trackingNotifications Tracking Notifications Enhancement<br />Available for Domestic Special Delivery and Domestic Tracked services.<br />The Email notification enhancement is also available for International Tracked and International Tracked and Signed services.<br />Returns an error if requested and the service does not allow it.
     *
     * @return $this
     */
    public function setTrackingNotifications($trackingNotifications)
    {
        $allowedValues = $this->getTrackingNotificationsAllowableValues();
        if (!is_null($trackingNotifications) && !in_array($trackingNotifications, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'trackingNotifications', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trackingNotifications'] = $trackingNotifications;

        return $this;
    }

    /**
     * Gets recordedSignedFor
     *
     * @return bool
     */
    public function getRecordedSignedFor()
    {
        return $this->container['recordedSignedFor'];
    }

    /**
     * Sets recordedSignedFor
     *
     * @param bool $recordedSignedFor Recorded Signed For<br />Available for all Domestic Services that are not Special Delivery, Tracked or BFPO.<br />This is an enhancement for services that don't have an in-built signature service like Special Delivery and Tracked.<br />Returns an error if requested and the service does not allow it.
     *
     * @return $this
     */
    public function setRecordedSignedFor($recordedSignedFor)
    {
        $this->container['recordedSignedFor'] = $recordedSignedFor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}