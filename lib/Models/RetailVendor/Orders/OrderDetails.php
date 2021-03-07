<?php
/**
 * OrderDetails
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
 * OrderDetails Class Doc Comment
 *
 * @category Class
 * @description Details of an order.
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchase_order_date' => '\DateTime',
'purchase_order_changed_date' => '\DateTime',
'purchase_order_state_changed_date' => '\DateTime',
'purchase_order_type' => 'string',
'import_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ImportDetails',
'deal_code' => 'string',
'payment_method' => 'string',
'buying_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification',
'selling_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification',
'ship_to_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification',
'bill_to_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification',
'ship_window' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\DateTimeInterval',
'delivery_window' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\DateTimeInterval',
'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\OrderItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchase_order_date' => 'date-time',
'purchase_order_changed_date' => 'date-time',
'purchase_order_state_changed_date' => 'date-time',
'purchase_order_type' => null,
'import_details' => null,
'deal_code' => null,
'payment_method' => null,
'buying_party' => null,
'selling_party' => null,
'ship_to_party' => null,
'bill_to_party' => null,
'ship_window' => null,
'delivery_window' => null,
'items' => null    ];

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
        'purchase_order_date' => 'purchaseOrderDate',
'purchase_order_changed_date' => 'purchaseOrderChangedDate',
'purchase_order_state_changed_date' => 'purchaseOrderStateChangedDate',
'purchase_order_type' => 'purchaseOrderType',
'import_details' => 'importDetails',
'deal_code' => 'dealCode',
'payment_method' => 'paymentMethod',
'buying_party' => 'buyingParty',
'selling_party' => 'sellingParty',
'ship_to_party' => 'shipToParty',
'bill_to_party' => 'billToParty',
'ship_window' => 'shipWindow',
'delivery_window' => 'deliveryWindow',
'items' => 'items'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_date' => 'setPurchaseOrderDate',
'purchase_order_changed_date' => 'setPurchaseOrderChangedDate',
'purchase_order_state_changed_date' => 'setPurchaseOrderStateChangedDate',
'purchase_order_type' => 'setPurchaseOrderType',
'import_details' => 'setImportDetails',
'deal_code' => 'setDealCode',
'payment_method' => 'setPaymentMethod',
'buying_party' => 'setBuyingParty',
'selling_party' => 'setSellingParty',
'ship_to_party' => 'setShipToParty',
'bill_to_party' => 'setBillToParty',
'ship_window' => 'setShipWindow',
'delivery_window' => 'setDeliveryWindow',
'items' => 'setItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_date' => 'getPurchaseOrderDate',
'purchase_order_changed_date' => 'getPurchaseOrderChangedDate',
'purchase_order_state_changed_date' => 'getPurchaseOrderStateChangedDate',
'purchase_order_type' => 'getPurchaseOrderType',
'import_details' => 'getImportDetails',
'deal_code' => 'getDealCode',
'payment_method' => 'getPaymentMethod',
'buying_party' => 'getBuyingParty',
'selling_party' => 'getSellingParty',
'ship_to_party' => 'getShipToParty',
'bill_to_party' => 'getBillToParty',
'ship_window' => 'getShipWindow',
'delivery_window' => 'getDeliveryWindow',
'items' => 'getItems'    ];

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

    const PURCHASE_ORDER_TYPE_REGULAR_ORDER = 'RegularOrder';
const PURCHASE_ORDER_TYPE_CONSIGNED_ORDER = 'ConsignedOrder';
const PURCHASE_ORDER_TYPE_NEW_PRODUCT_INTRODUCTION = 'NewProductIntroduction';
const PURCHASE_ORDER_TYPE_RUSH_ORDER = 'RushOrder';
const PAYMENT_METHOD_INVOICE = 'Invoice';
const PAYMENT_METHOD_CONSIGNMENT = 'Consignment';
const PAYMENT_METHOD_CREDIT_CARD = 'CreditCard';
const PAYMENT_METHOD_PREPAID = 'Prepaid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurchaseOrderTypeAllowableValues()
    {
        return [
            self::PURCHASE_ORDER_TYPE_REGULAR_ORDER,
self::PURCHASE_ORDER_TYPE_CONSIGNED_ORDER,
self::PURCHASE_ORDER_TYPE_NEW_PRODUCT_INTRODUCTION,
self::PURCHASE_ORDER_TYPE_RUSH_ORDER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_INVOICE,
self::PAYMENT_METHOD_CONSIGNMENT,
self::PAYMENT_METHOD_CREDIT_CARD,
self::PAYMENT_METHOD_PREPAID,        ];
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
        $this->container['purchase_order_date'] = isset($data['purchase_order_date']) ? $data['purchase_order_date'] : null;
        $this->container['purchase_order_changed_date'] = isset($data['purchase_order_changed_date']) ? $data['purchase_order_changed_date'] : null;
        $this->container['purchase_order_state_changed_date'] = isset($data['purchase_order_state_changed_date']) ? $data['purchase_order_state_changed_date'] : null;
        $this->container['purchase_order_type'] = isset($data['purchase_order_type']) ? $data['purchase_order_type'] : null;
        $this->container['import_details'] = isset($data['import_details']) ? $data['import_details'] : null;
        $this->container['deal_code'] = isset($data['deal_code']) ? $data['deal_code'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['buying_party'] = isset($data['buying_party']) ? $data['buying_party'] : null;
        $this->container['selling_party'] = isset($data['selling_party']) ? $data['selling_party'] : null;
        $this->container['ship_to_party'] = isset($data['ship_to_party']) ? $data['ship_to_party'] : null;
        $this->container['bill_to_party'] = isset($data['bill_to_party']) ? $data['bill_to_party'] : null;
        $this->container['ship_window'] = isset($data['ship_window']) ? $data['ship_window'] : null;
        $this->container['delivery_window'] = isset($data['delivery_window']) ? $data['delivery_window'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchase_order_date'] === null) {
            $invalidProperties[] = "'purchase_order_date' can't be null";
        }
        if ($this->container['purchase_order_state_changed_date'] === null) {
            $invalidProperties[] = "'purchase_order_state_changed_date' can't be null";
        }
        $allowedValues = $this->getPurchaseOrderTypeAllowableValues();
        if (!is_null($this->container['purchase_order_type']) && !in_array($this->container['purchase_order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'purchase_order_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets purchase_order_date
     *
     * @return \DateTime
     */
    public function getPurchaseOrderDate()
    {
        return $this->container['purchase_order_date'];
    }

    /**
     * Sets purchase_order_date
     *
     * @param \DateTime $purchase_order_date The date the purchase order was placed. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @return $this
     */
    public function setPurchaseOrderDate($purchase_order_date)
    {
        $this->container['purchase_order_date'] = $purchase_order_date;

        return $this;
    }

    /**
     * Gets purchase_order_changed_date
     *
     * @return \DateTime
     */
    public function getPurchaseOrderChangedDate()
    {
        return $this->container['purchase_order_changed_date'];
    }

    /**
     * Sets purchase_order_changed_date
     *
     * @param \DateTime $purchase_order_changed_date The date when purchase order was last changed by Amazon after order was placed. This date will be greater than 'purchaseOrderDate' and means PO data was changed on that date and vendors are required to fulfill updated PO. The PO changes can be related to Item Quantity, Ship to Location, Ship Window etc. Please refer API reference guide for detailed list of PO changes. This field will not be present in orders which has not changed after create. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @return $this
     */
    public function setPurchaseOrderChangedDate($purchase_order_changed_date)
    {
        $this->container['purchase_order_changed_date'] = $purchase_order_changed_date;

        return $this;
    }

    /**
     * Gets purchase_order_state_changed_date
     *
     * @return \DateTime
     */
    public function getPurchaseOrderStateChangedDate()
    {
        return $this->container['purchase_order_state_changed_date'];
    }

    /**
     * Sets purchase_order_state_changed_date
     *
     * @param \DateTime $purchase_order_state_changed_date The date when current purchase order state was changed. Current purchase order state is available in the field 'purchaseOrderState'. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @return $this
     */
    public function setPurchaseOrderStateChangedDate($purchase_order_state_changed_date)
    {
        $this->container['purchase_order_state_changed_date'] = $purchase_order_state_changed_date;

        return $this;
    }

    /**
     * Gets purchase_order_type
     *
     * @return string
     */
    public function getPurchaseOrderType()
    {
        return $this->container['purchase_order_type'];
    }

    /**
     * Sets purchase_order_type
     *
     * @param string $purchase_order_type Type of Purchase Order.
     *
     * @return $this
     */
    public function setPurchaseOrderType($purchase_order_type)
    {
        $allowedValues = $this->getPurchaseOrderTypeAllowableValues();
        if (!is_null($purchase_order_type) && !in_array($purchase_order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'purchase_order_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purchase_order_type'] = $purchase_order_type;

        return $this;
    }

    /**
     * Gets import_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ImportDetails
     */
    public function getImportDetails()
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\ImportDetails $import_details import_details
     *
     * @return $this
     */
    public function setImportDetails($import_details)
    {
        $this->container['import_details'] = $import_details;

        return $this;
    }

    /**
     * Gets deal_code
     *
     * @return string
     */
    public function getDealCode()
    {
        return $this->container['deal_code'];
    }

    /**
     * Sets deal_code
     *
     * @param string $deal_code If requested by the recipient, this field will contain a promotional/deal number. The discount code line is optional. It is used to obtain a price discount on items on the order.
     *
     * @return $this
     */
    public function setDealCode($deal_code)
    {
        $this->container['deal_code'] = $deal_code;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Payment method used.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets buying_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification
     */
    public function getBuyingParty()
    {
        return $this->container['buying_party'];
    }

    /**
     * Sets buying_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification $buying_party buying_party
     *
     * @return $this
     */
    public function setBuyingParty($buying_party)
    {
        $this->container['buying_party'] = $buying_party;

        return $this;
    }

    /**
     * Gets selling_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification $selling_party selling_party
     *
     * @return $this
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_to_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification $ship_to_party ship_to_party
     *
     * @return $this
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets bill_to_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\PartyIdentification $bill_to_party bill_to_party
     *
     * @return $this
     */
    public function setBillToParty($bill_to_party)
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets ship_window
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\DateTimeInterval
     */
    public function getShipWindow()
    {
        return $this->container['ship_window'];
    }

    /**
     * Sets ship_window
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\DateTimeInterval $ship_window ship_window
     *
     * @return $this
     */
    public function setShipWindow($ship_window)
    {
        $this->container['ship_window'] = $ship_window;

        return $this;
    }

    /**
     * Gets delivery_window
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\DateTimeInterval
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\DateTimeInterval $delivery_window delivery_window
     *
     * @return $this
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\OrderItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Orders\OrderItem[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
