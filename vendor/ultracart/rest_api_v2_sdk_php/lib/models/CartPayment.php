<?php
/**
 * CartPayment
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
 * CartPayment Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affirm' => '\ultracart\v2\models\CartPaymentAffirm',
        'amazon' => '\ultracart\v2\models\CartPaymentAmazon',
        'check' => '\ultracart\v2\models\CartPaymentCheck',
        'credit_card' => '\ultracart\v2\models\CartPaymentCreditCard',
        'payment_method' => 'string',
        'purchase_order' => '\ultracart\v2\models\CartPaymentPurchaseOrder',
        'rtg_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affirm' => null,
        'amazon' => null,
        'check' => null,
        'credit_card' => null,
        'payment_method' => null,
        'purchase_order' => null,
        'rtg_code' => null
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
        'affirm' => 'affirm',
        'amazon' => 'amazon',
        'check' => 'check',
        'credit_card' => 'credit_card',
        'payment_method' => 'payment_method',
        'purchase_order' => 'purchase_order',
        'rtg_code' => 'rtg_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affirm' => 'setAffirm',
        'amazon' => 'setAmazon',
        'check' => 'setCheck',
        'credit_card' => 'setCreditCard',
        'payment_method' => 'setPaymentMethod',
        'purchase_order' => 'setPurchaseOrder',
        'rtg_code' => 'setRtgCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affirm' => 'getAffirm',
        'amazon' => 'getAmazon',
        'check' => 'getCheck',
        'credit_card' => 'getCreditCard',
        'payment_method' => 'getPaymentMethod',
        'purchase_order' => 'getPurchaseOrder',
        'rtg_code' => 'getRtgCode'
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
        $this->container['affirm'] = isset($data['affirm']) ? $data['affirm'] : null;
        $this->container['amazon'] = isset($data['amazon']) ? $data['amazon'] : null;
        $this->container['check'] = isset($data['check']) ? $data['check'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['rtg_code'] = isset($data['rtg_code']) ? $data['rtg_code'] : null;
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

        return true;
    }


    /**
     * Gets affirm
     *
     * @return \ultracart\v2\models\CartPaymentAffirm
     */
    public function getAffirm()
    {
        return $this->container['affirm'];
    }

    /**
     * Sets affirm
     *
     * @param \ultracart\v2\models\CartPaymentAffirm $affirm affirm
     *
     * @return $this
     */
    public function setAffirm($affirm)
    {
        $this->container['affirm'] = $affirm;

        return $this;
    }

    /**
     * Gets amazon
     *
     * @return \ultracart\v2\models\CartPaymentAmazon
     */
    public function getAmazon()
    {
        return $this->container['amazon'];
    }

    /**
     * Sets amazon
     *
     * @param \ultracart\v2\models\CartPaymentAmazon $amazon amazon
     *
     * @return $this
     */
    public function setAmazon($amazon)
    {
        $this->container['amazon'] = $amazon;

        return $this;
    }

    /**
     * Gets check
     *
     * @return \ultracart\v2\models\CartPaymentCheck
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     *
     * @param \ultracart\v2\models\CartPaymentCheck $check check
     *
     * @return $this
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \ultracart\v2\models\CartPaymentCreditCard
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \ultracart\v2\models\CartPaymentCreditCard $credit_card credit_card
     *
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

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
     * @param string $payment_method Payment method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets purchase_order
     *
     * @return \ultracart\v2\models\CartPaymentPurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     *
     * @param \ultracart\v2\models\CartPaymentPurchaseOrder $purchase_order purchase_order
     *
     * @return $this
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

        return $this;
    }

    /**
     * Gets rtg_code
     *
     * @return string
     */
    public function getRtgCode()
    {
        return $this->container['rtg_code'];
    }

    /**
     * Sets rtg_code
     *
     * @param string $rtg_code Rotating transaction gateway code
     *
     * @return $this
     */
    public function setRtgCode($rtg_code)
    {
        $this->container['rtg_code'] = $rtg_code;

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


