<?php
/**
 * PaymentTerms
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API Retail Procurement Payments Model
 *
 * These APIs allow programmatic access to vendors payments data.
 *
 * OpenAPI spec version: v1
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices;

use \ArrayAccess;
use \ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * PaymentTerms Class Doc Comment
 *
 * @category Class
 * @description Terms of the payment for the invoice. Basis of payment terms is Invoice date.
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTerms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTerms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'discount_percent' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Decimal',
'discount_due_days' => 'float',
'net_due_days' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'discount_percent' => null,
'discount_due_days' => null,
'net_due_days' => null    ];

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
        'type' => 'type',
'discount_percent' => 'discountPercent',
'discount_due_days' => 'discountDueDays',
'net_due_days' => 'netDueDays'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'discount_percent' => 'setDiscountPercent',
'discount_due_days' => 'setDiscountDueDays',
'net_due_days' => 'setNetDueDays'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'discount_percent' => 'getDiscountPercent',
'discount_due_days' => 'getDiscountDueDays',
'net_due_days' => 'getNetDueDays'    ];

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

    const TYPE_BASIC = 'Basic';
const TYPE_END_OF_MONTH = 'EndOfMonth';
const TYPE_FIXED_DATE = 'FixedDate';
const TYPE_PROXIMO = 'Proximo';
const TYPE_PAYMENT_DUE_UPON_RECEIPT_OF_INVOICE = 'PaymentDueUponReceiptOfInvoice';
const TYPE_LETTEROF_CREDIT = 'LetterofCredit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BASIC,
self::TYPE_END_OF_MONTH,
self::TYPE_FIXED_DATE,
self::TYPE_PROXIMO,
self::TYPE_PAYMENT_DUE_UPON_RECEIPT_OF_INVOICE,
self::TYPE_LETTEROF_CREDIT,        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['discount_due_days'] = isset($data['discount_due_days']) ? $data['discount_due_days'] : null;
        $this->container['net_due_days'] = isset($data['net_due_days']) ? $data['net_due_days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The payment term type for the Invoice.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Decimal
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Decimal $discount_percent discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_due_days
     *
     * @return float
     */
    public function getDiscountDueDays()
    {
        return $this->container['discount_due_days'];
    }

    /**
     * Sets discount_due_days
     *
     * @param float $discount_due_days This field will contain the number of calendar days from the Base date (Invoice date) until the discount is no longer valid.
     *
     * @return $this
     */
    public function setDiscountDueDays($discount_due_days)
    {
        $this->container['discount_due_days'] = $discount_due_days;

        return $this;
    }

    /**
     * Gets net_due_days
     *
     * @return float
     */
    public function getNetDueDays()
    {
        return $this->container['net_due_days'];
    }

    /**
     * Sets net_due_days
     *
     * @param float $net_due_days This field will contain the number of calendar days from the Base date (Invoice date) until the total amount on the invoice is due.
     *
     * @return $this
     */
    public function setNetDueDays($net_due_days)
    {
        $this->container['net_due_days'] = $net_due_days;

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
