<?php
/**
 * AcknowledgementStatusDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API Retail Procurement Orders Model
 *
 * Provides programmatic access to Vendor Orders data.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders;

use \ArrayAccess;
use \ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * AcknowledgementStatusDetails Class Doc Comment
 *
 * @category Class
 * @description Details of Item quantity ordered
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcknowledgementStatusDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AcknowledgementStatusDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acknowledgement_date' => '\DateTime',
'accepted_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ItemQuantity',
'rejected_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ItemQuantity'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acknowledgement_date' => 'date-time',
'accepted_quantity' => null,
'rejected_quantity' => null    ];

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
        'acknowledgement_date' => 'acknowledgementDate',
'accepted_quantity' => 'acceptedQuantity',
'rejected_quantity' => 'rejectedQuantity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acknowledgement_date' => 'setAcknowledgementDate',
'accepted_quantity' => 'setAcceptedQuantity',
'rejected_quantity' => 'setRejectedQuantity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acknowledgement_date' => 'getAcknowledgementDate',
'accepted_quantity' => 'getAcceptedQuantity',
'rejected_quantity' => 'getRejectedQuantity'    ];

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
        $this->container['acknowledgement_date'] = isset($data['acknowledgement_date']) ? $data['acknowledgement_date'] : null;
        $this->container['accepted_quantity'] = isset($data['accepted_quantity']) ? $data['accepted_quantity'] : null;
        $this->container['rejected_quantity'] = isset($data['rejected_quantity']) ? $data['rejected_quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets acknowledgement_date
     *
     * @return \DateTime
     */
    public function getAcknowledgementDate()
    {
        return $this->container['acknowledgement_date'];
    }

    /**
     * Sets acknowledgement_date
     *
     * @param \DateTime $acknowledgement_date The date when the line item was confirmed by vendor. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @return $this
     */
    public function setAcknowledgementDate($acknowledgement_date)
    {
        $this->container['acknowledgement_date'] = $acknowledgement_date;

        return $this;
    }

    /**
     * Gets accepted_quantity
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ItemQuantity
     */
    public function getAcceptedQuantity()
    {
        return $this->container['accepted_quantity'];
    }

    /**
     * Sets accepted_quantity
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ItemQuantity $accepted_quantity accepted_quantity
     *
     * @return $this
     */
    public function setAcceptedQuantity($accepted_quantity)
    {
        $this->container['accepted_quantity'] = $accepted_quantity;

        return $this;
    }

    /**
     * Gets rejected_quantity
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ItemQuantity
     */
    public function getRejectedQuantity()
    {
        return $this->container['rejected_quantity'];
    }

    /**
     * Sets rejected_quantity
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ItemQuantity $rejected_quantity rejected_quantity
     *
     * @return $this
     */
    public function setRejectedQuantity($rejected_quantity)
    {
        $this->container['rejected_quantity'] = $rejected_quantity;

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
