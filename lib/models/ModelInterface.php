<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api\models
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V2 (REST)
 *
 * This API specification details the requirements for integrating with Royal Mail API Shipping V2 (REST). It specifically covers how the Royal Mail API Shipping V2 (REST) can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail API Shipping V2 (REST) exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail. Built on industry standards, Royal Mail API Shipping V2 (REST) provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming and offline barcoding to allow customers greater flexibility when generating their labels.  There are no costs to customers for using the Royal Mail API Shipping V2 (REST) services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.  This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating cancelling a shipment and manifesting click here&#58; www.royalmail.com/pro-shipping-help
 *
 * OpenAPI spec version: 1.0.21
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\models;

/**
 * Interface abstracting model access.
 *
 * @package RoyalMail\Shipping\Rest\Api\models
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
