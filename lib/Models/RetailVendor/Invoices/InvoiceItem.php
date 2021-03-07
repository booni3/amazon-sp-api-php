<?php
/**
 * InvoiceItem
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
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @description Details of the item being invoiced
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_sequence_number' => 'int',
'amazon_product_identifier' => 'string',
'vendor_product_identifier' => 'string',
'invoiced_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ItemQuantity',
'net_cost' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Money',
'purchase_order_number' => 'string',
'hsn_code' => 'string',
'credit_note_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\CreditNoteDetails',
'tax_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\TaxDetails[]',
'charge_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ChargeDetails[]',
'allowance_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AllowanceDetails[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_sequence_number' => null,
'amazon_product_identifier' => null,
'vendor_product_identifier' => null,
'invoiced_quantity' => null,
'net_cost' => null,
'purchase_order_number' => null,
'hsn_code' => null,
'credit_note_details' => null,
'tax_details' => null,
'charge_details' => null,
'allowance_details' => null    ];

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
        'item_sequence_number' => 'itemSequenceNumber',
'amazon_product_identifier' => 'amazonProductIdentifier',
'vendor_product_identifier' => 'vendorProductIdentifier',
'invoiced_quantity' => 'invoicedQuantity',
'net_cost' => 'netCost',
'purchase_order_number' => 'purchaseOrderNumber',
'hsn_code' => 'hsnCode',
'credit_note_details' => 'creditNoteDetails',
'tax_details' => 'taxDetails',
'charge_details' => 'chargeDetails',
'allowance_details' => 'allowanceDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
'amazon_product_identifier' => 'setAmazonProductIdentifier',
'vendor_product_identifier' => 'setVendorProductIdentifier',
'invoiced_quantity' => 'setInvoicedQuantity',
'net_cost' => 'setNetCost',
'purchase_order_number' => 'setPurchaseOrderNumber',
'hsn_code' => 'setHsnCode',
'credit_note_details' => 'setCreditNoteDetails',
'tax_details' => 'setTaxDetails',
'charge_details' => 'setChargeDetails',
'allowance_details' => 'setAllowanceDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
'amazon_product_identifier' => 'getAmazonProductIdentifier',
'vendor_product_identifier' => 'getVendorProductIdentifier',
'invoiced_quantity' => 'getInvoicedQuantity',
'net_cost' => 'getNetCost',
'purchase_order_number' => 'getPurchaseOrderNumber',
'hsn_code' => 'getHsnCode',
'credit_note_details' => 'getCreditNoteDetails',
'tax_details' => 'getTaxDetails',
'charge_details' => 'getChargeDetails',
'allowance_details' => 'getAllowanceDetails'    ];

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
        $this->container['item_sequence_number'] = isset($data['item_sequence_number']) ? $data['item_sequence_number'] : null;
        $this->container['amazon_product_identifier'] = isset($data['amazon_product_identifier']) ? $data['amazon_product_identifier'] : null;
        $this->container['vendor_product_identifier'] = isset($data['vendor_product_identifier']) ? $data['vendor_product_identifier'] : null;
        $this->container['invoiced_quantity'] = isset($data['invoiced_quantity']) ? $data['invoiced_quantity'] : null;
        $this->container['net_cost'] = isset($data['net_cost']) ? $data['net_cost'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['hsn_code'] = isset($data['hsn_code']) ? $data['hsn_code'] : null;
        $this->container['credit_note_details'] = isset($data['credit_note_details']) ? $data['credit_note_details'] : null;
        $this->container['tax_details'] = isset($data['tax_details']) ? $data['tax_details'] : null;
        $this->container['charge_details'] = isset($data['charge_details']) ? $data['charge_details'] : null;
        $this->container['allowance_details'] = isset($data['allowance_details']) ? $data['allowance_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }
        if ($this->container['invoiced_quantity'] === null) {
            $invalidProperties[] = "'invoiced_quantity' can't be null";
        }
        if ($this->container['net_cost'] === null) {
            $invalidProperties[] = "'net_cost' can't be null";
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
     * Gets item_sequence_number
     *
     * @return int
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number
     *
     * @param int $item_sequence_number This field will be a unique number related to this line item.
     *
     * @return $this
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier
     *
     * @return string
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier
     *
     * @param string $amazon_product_identifier Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return $this
     */
    public function setAmazonProductIdentifier($amazon_product_identifier)
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier
     *
     * @return string
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string $vendor_product_identifier The vendor selected product identification of the item. Should be the same as was sent in the Purchase Order.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets invoiced_quantity
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ItemQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->container['invoiced_quantity'];
    }

    /**
     * Sets invoiced_quantity
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ItemQuantity $invoiced_quantity invoiced_quantity
     *
     * @return $this
     */
    public function setInvoicedQuantity($invoiced_quantity)
    {
        $this->container['invoiced_quantity'] = $invoiced_quantity;

        return $this;
    }

    /**
     * Gets net_cost
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Money
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Money $net_cost net_cost
     *
     * @return $this
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number This field will contain the Amazon PO number for this invoiced line item. Formatting Notes: 8-character alpha-numeric code. This field is mandatory only when invoiceType is Invoice and is not required when invoiceType is CreditNote
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets hsn_code
     *
     * @return string
     */
    public function getHsnCode()
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code
     *
     * @param string $hsn_code HSN Tax code. The HSN number cannot contain alphabets.
     *
     * @return $this
     */
    public function setHsnCode($hsn_code)
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }

    /**
     * Gets credit_note_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\CreditNoteDetails
     */
    public function getCreditNoteDetails()
    {
        return $this->container['credit_note_details'];
    }

    /**
     * Sets credit_note_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\CreditNoteDetails $credit_note_details credit_note_details
     *
     * @return $this
     */
    public function setCreditNoteDetails($credit_note_details)
    {
        $this->container['credit_note_details'] = $credit_note_details;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\TaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\TaxDetails[] $tax_details Individual tax details per line item.
     *
     * @return $this
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets charge_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ChargeDetails[]
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ChargeDetails[] $charge_details Individual charge details per line item.
     *
     * @return $this
     */
    public function setChargeDetails($charge_details)
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets allowance_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AllowanceDetails[]
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AllowanceDetails[] $allowance_details Individual allowance details per line items
     *
     * @return $this
     */
    public function setAllowanceDetails($allowance_details)
    {
        $this->container['allowance_details'] = $allowance_details;

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
