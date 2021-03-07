<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_type' => 'string',
'id' => 'string',
'reference_number' => 'string',
'date' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\\DateTime',
'remit_to_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification',
'ship_to_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification',
'ship_from_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification',
'bill_to_party' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification',
'payment_terms' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PaymentTerms',
'invoice_total' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Money',
'tax_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\TaxDetails[]',
'additional_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AdditionalDetails[]',
'charge_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ChargeDetails[]',
'allowance_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AllowanceDetails[]',
'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\InvoiceItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_type' => null,
'id' => null,
'reference_number' => null,
'date' => null,
'remit_to_party' => null,
'ship_to_party' => null,
'ship_from_party' => null,
'bill_to_party' => null,
'payment_terms' => null,
'invoice_total' => null,
'tax_details' => null,
'additional_details' => null,
'charge_details' => null,
'allowance_details' => null,
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
        'invoice_type' => 'invoiceType',
'id' => 'id',
'reference_number' => 'referenceNumber',
'date' => 'date',
'remit_to_party' => 'remitToParty',
'ship_to_party' => 'shipToParty',
'ship_from_party' => 'shipFromParty',
'bill_to_party' => 'billToParty',
'payment_terms' => 'paymentTerms',
'invoice_total' => 'invoiceTotal',
'tax_details' => 'taxDetails',
'additional_details' => 'additionalDetails',
'charge_details' => 'chargeDetails',
'allowance_details' => 'allowanceDetails',
'items' => 'items'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_type' => 'setInvoiceType',
'id' => 'setId',
'reference_number' => 'setReferenceNumber',
'date' => 'setDate',
'remit_to_party' => 'setRemitToParty',
'ship_to_party' => 'setShipToParty',
'ship_from_party' => 'setShipFromParty',
'bill_to_party' => 'setBillToParty',
'payment_terms' => 'setPaymentTerms',
'invoice_total' => 'setInvoiceTotal',
'tax_details' => 'setTaxDetails',
'additional_details' => 'setAdditionalDetails',
'charge_details' => 'setChargeDetails',
'allowance_details' => 'setAllowanceDetails',
'items' => 'setItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_type' => 'getInvoiceType',
'id' => 'getId',
'reference_number' => 'getReferenceNumber',
'date' => 'getDate',
'remit_to_party' => 'getRemitToParty',
'ship_to_party' => 'getShipToParty',
'ship_from_party' => 'getShipFromParty',
'bill_to_party' => 'getBillToParty',
'payment_terms' => 'getPaymentTerms',
'invoice_total' => 'getInvoiceTotal',
'tax_details' => 'getTaxDetails',
'additional_details' => 'getAdditionalDetails',
'charge_details' => 'getChargeDetails',
'allowance_details' => 'getAllowanceDetails',
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

    const INVOICE_TYPE_INVOICE = 'Invoice';
const INVOICE_TYPE_CREDIT_NOTE = 'CreditNote';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_INVOICE,
self::INVOICE_TYPE_CREDIT_NOTE,        ];
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
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['remit_to_party'] = isset($data['remit_to_party']) ? $data['remit_to_party'] : null;
        $this->container['ship_to_party'] = isset($data['ship_to_party']) ? $data['ship_to_party'] : null;
        $this->container['ship_from_party'] = isset($data['ship_from_party']) ? $data['ship_from_party'] : null;
        $this->container['bill_to_party'] = isset($data['bill_to_party']) ? $data['bill_to_party'] : null;
        $this->container['payment_terms'] = isset($data['payment_terms']) ? $data['payment_terms'] : null;
        $this->container['invoice_total'] = isset($data['invoice_total']) ? $data['invoice_total'] : null;
        $this->container['tax_details'] = isset($data['tax_details']) ? $data['tax_details'] : null;
        $this->container['additional_details'] = isset($data['additional_details']) ? $data['additional_details'] : null;
        $this->container['charge_details'] = isset($data['charge_details']) ? $data['charge_details'] : null;
        $this->container['allowance_details'] = isset($data['allowance_details']) ? $data['allowance_details'] : null;
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

        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoice_type']) && !in_array($this->container['invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['remit_to_party'] === null) {
            $invalidProperties[] = "'remit_to_party' can't be null";
        }
        if ($this->container['invoice_total'] === null) {
            $invalidProperties[] = "'invoice_total' can't be null";
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
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type Identification of a type of invoice. It will be either Invoice or CreditNote. Other fields in the document must be provided according to the invoice type provided here.
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique number relating to the charges defined in this document. This will be invoice number if document type is Invoice or CreditNote number if document type is Credit Note. Failure to provide this reference will result in a rejection.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number An additional unique reference number used for regulatory or other purposes
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\\DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\\DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets remit_to_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification $remit_to_party remit_to_party
     *
     * @return $this
     */
    public function setRemitToParty($remit_to_party)
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }

    /**
     * Gets ship_to_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification $ship_to_party ship_to_party
     *
     * @return $this
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification $ship_from_party ship_from_party
     *
     * @return $this
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets bill_to_party
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PartyIdentification $bill_to_party bill_to_party
     *
     * @return $this
     */
    public function setBillToParty($bill_to_party)
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\PaymentTerms $payment_terms payment_terms
     *
     * @return $this
     */
    public function setPaymentTerms($payment_terms)
    {
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\Money $invoice_total invoice_total
     *
     * @return $this
     */
    public function setInvoiceTotal($invoice_total)
    {
        $this->container['invoice_total'] = $invoice_total;

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
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\TaxDetails[] $tax_details Total tax amount details for all line items.
     *
     * @return $this
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets additional_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AdditionalDetails[]
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AdditionalDetails[] $additional_details Additional details provided by the selling party, for tax related or other purposes.
     *
     * @return $this
     */
    public function setAdditionalDetails($additional_details)
    {
        $this->container['additional_details'] = $additional_details;

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
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\ChargeDetails[] $charge_details Total charge amount details for all line items.
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
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\AllowanceDetails[] $allowance_details Total allowance amount details for all line items.
     *
     * @return $this
     */
    public function setAllowanceDetails($allowance_details)
    {
        $this->container['allowance_details'] = $allowance_details;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\RetailVendor\Invoices\InvoiceItem[] $items items
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
