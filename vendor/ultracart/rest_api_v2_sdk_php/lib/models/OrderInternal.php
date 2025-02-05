<?php
/**
 * OrderInternal
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * OrderInternal Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderInternal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderInternal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exported_to_accounting' => 'bool',
        'merchant_notes' => 'string',
        'placed_by_user' => 'string',
        'refund_by_user' => 'string',
        'sales_rep_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exported_to_accounting' => null,
        'merchant_notes' => null,
        'placed_by_user' => null,
        'refund_by_user' => null,
        'sales_rep_code' => null
    ];

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
        'exported_to_accounting' => 'exported_to_accounting',
        'merchant_notes' => 'merchant_notes',
        'placed_by_user' => 'placed_by_user',
        'refund_by_user' => 'refund_by_user',
        'sales_rep_code' => 'sales_rep_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exported_to_accounting' => 'setExportedToAccounting',
        'merchant_notes' => 'setMerchantNotes',
        'placed_by_user' => 'setPlacedByUser',
        'refund_by_user' => 'setRefundByUser',
        'sales_rep_code' => 'setSalesRepCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exported_to_accounting' => 'getExportedToAccounting',
        'merchant_notes' => 'getMerchantNotes',
        'placed_by_user' => 'getPlacedByUser',
        'refund_by_user' => 'getRefundByUser',
        'sales_rep_code' => 'getSalesRepCode'
    ];

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
        $this->container['exported_to_accounting'] = isset($data['exported_to_accounting']) ? $data['exported_to_accounting'] : null;
        $this->container['merchant_notes'] = isset($data['merchant_notes']) ? $data['merchant_notes'] : null;
        $this->container['placed_by_user'] = isset($data['placed_by_user']) ? $data['placed_by_user'] : null;
        $this->container['refund_by_user'] = isset($data['refund_by_user']) ? $data['refund_by_user'] : null;
        $this->container['sales_rep_code'] = isset($data['sales_rep_code']) ? $data['sales_rep_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sales_rep_code']) && (mb_strlen($this->container['sales_rep_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'sales_rep_code', the character length must be smaller than or equal to 10.";
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

        if (mb_strlen($this->container['sales_rep_code']) > 10) {
            return false;
        }
        return true;
    }


    /**
     * Gets exported_to_accounting
     *
     * @return bool
     */
    public function getExportedToAccounting()
    {
        return $this->container['exported_to_accounting'];
    }

    /**
     * Sets exported_to_accounting
     *
     * @param bool $exported_to_accounting True if the order has been exported to QuickBooks. If QuickBooks is not configured, then this will already be true
     *
     * @return $this
     */
    public function setExportedToAccounting($exported_to_accounting)
    {
        $this->container['exported_to_accounting'] = $exported_to_accounting;

        return $this;
    }

    /**
     * Gets merchant_notes
     *
     * @return string
     */
    public function getMerchantNotes()
    {
        return $this->container['merchant_notes'];
    }

    /**
     * Sets merchant_notes
     *
     * @param string $merchant_notes Merchant notes
     *
     * @return $this
     */
    public function setMerchantNotes($merchant_notes)
    {
        $this->container['merchant_notes'] = $merchant_notes;

        return $this;
    }

    /**
     * Gets placed_by_user
     *
     * @return string
     */
    public function getPlacedByUser()
    {
        return $this->container['placed_by_user'];
    }

    /**
     * Sets placed_by_user
     *
     * @param string $placed_by_user If placed via the BEOE, this is the user that placed the order
     *
     * @return $this
     */
    public function setPlacedByUser($placed_by_user)
    {
        $this->container['placed_by_user'] = $placed_by_user;

        return $this;
    }

    /**
     * Gets refund_by_user
     *
     * @return string
     */
    public function getRefundByUser()
    {
        return $this->container['refund_by_user'];
    }

    /**
     * Sets refund_by_user
     *
     * @param string $refund_by_user User that issued the refund
     *
     * @return $this
     */
    public function setRefundByUser($refund_by_user)
    {
        $this->container['refund_by_user'] = $refund_by_user;

        return $this;
    }

    /**
     * Gets sales_rep_code
     *
     * @return string
     */
    public function getSalesRepCode()
    {
        return $this->container['sales_rep_code'];
    }

    /**
     * Sets sales_rep_code
     *
     * @param string $sales_rep_code Sales rep code associated with the order
     *
     * @return $this
     */
    public function setSalesRepCode($sales_rep_code)
    {
        if (!is_null($sales_rep_code) && (mb_strlen($sales_rep_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $sales_rep_code when calling OrderInternal., must be smaller than or equal to 10.');
        }

        $this->container['sales_rep_code'] = $sales_rep_code;

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


