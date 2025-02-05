<?php
/**
 * CartSettingsPaymentPayPal
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
 * CartSettingsPaymentPayPal Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartSettingsPaymentPayPal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartSettingsPaymentPayPal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paypal_button_alt_text' => 'string',
        'paypal_button_url' => 'string',
        'paypal_credit_button_url' => 'string',
        'paypal_credit_legal_image_url' => 'string',
        'paypal_credit_legal_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paypal_button_alt_text' => null,
        'paypal_button_url' => null,
        'paypal_credit_button_url' => null,
        'paypal_credit_legal_image_url' => null,
        'paypal_credit_legal_url' => null
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
        'paypal_button_alt_text' => 'paypal_button_alt_text',
        'paypal_button_url' => 'paypal_button_url',
        'paypal_credit_button_url' => 'paypal_credit_button_url',
        'paypal_credit_legal_image_url' => 'paypal_credit_legal_image_url',
        'paypal_credit_legal_url' => 'paypal_credit_legal_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paypal_button_alt_text' => 'setPaypalButtonAltText',
        'paypal_button_url' => 'setPaypalButtonUrl',
        'paypal_credit_button_url' => 'setPaypalCreditButtonUrl',
        'paypal_credit_legal_image_url' => 'setPaypalCreditLegalImageUrl',
        'paypal_credit_legal_url' => 'setPaypalCreditLegalUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paypal_button_alt_text' => 'getPaypalButtonAltText',
        'paypal_button_url' => 'getPaypalButtonUrl',
        'paypal_credit_button_url' => 'getPaypalCreditButtonUrl',
        'paypal_credit_legal_image_url' => 'getPaypalCreditLegalImageUrl',
        'paypal_credit_legal_url' => 'getPaypalCreditLegalUrl'
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
        $this->container['paypal_button_alt_text'] = isset($data['paypal_button_alt_text']) ? $data['paypal_button_alt_text'] : null;
        $this->container['paypal_button_url'] = isset($data['paypal_button_url']) ? $data['paypal_button_url'] : null;
        $this->container['paypal_credit_button_url'] = isset($data['paypal_credit_button_url']) ? $data['paypal_credit_button_url'] : null;
        $this->container['paypal_credit_legal_image_url'] = isset($data['paypal_credit_legal_image_url']) ? $data['paypal_credit_legal_image_url'] : null;
        $this->container['paypal_credit_legal_url'] = isset($data['paypal_credit_legal_url']) ? $data['paypal_credit_legal_url'] : null;
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
     * Gets paypal_button_alt_text
     *
     * @return string
     */
    public function getPaypalButtonAltText()
    {
        return $this->container['paypal_button_alt_text'];
    }

    /**
     * Sets paypal_button_alt_text
     *
     * @param string $paypal_button_alt_text PayPal button alt text
     *
     * @return $this
     */
    public function setPaypalButtonAltText($paypal_button_alt_text)
    {
        $this->container['paypal_button_alt_text'] = $paypal_button_alt_text;

        return $this;
    }

    /**
     * Gets paypal_button_url
     *
     * @return string
     */
    public function getPaypalButtonUrl()
    {
        return $this->container['paypal_button_url'];
    }

    /**
     * Sets paypal_button_url
     *
     * @param string $paypal_button_url PayPal button URL
     *
     * @return $this
     */
    public function setPaypalButtonUrl($paypal_button_url)
    {
        $this->container['paypal_button_url'] = $paypal_button_url;

        return $this;
    }

    /**
     * Gets paypal_credit_button_url
     *
     * @return string
     */
    public function getPaypalCreditButtonUrl()
    {
        return $this->container['paypal_credit_button_url'];
    }

    /**
     * Sets paypal_credit_button_url
     *
     * @param string $paypal_credit_button_url PayPal Credit button URL
     *
     * @return $this
     */
    public function setPaypalCreditButtonUrl($paypal_credit_button_url)
    {
        $this->container['paypal_credit_button_url'] = $paypal_credit_button_url;

        return $this;
    }

    /**
     * Gets paypal_credit_legal_image_url
     *
     * @return string
     */
    public function getPaypalCreditLegalImageUrl()
    {
        return $this->container['paypal_credit_legal_image_url'];
    }

    /**
     * Sets paypal_credit_legal_image_url
     *
     * @param string $paypal_credit_legal_image_url PayPal Credit legal image URL
     *
     * @return $this
     */
    public function setPaypalCreditLegalImageUrl($paypal_credit_legal_image_url)
    {
        $this->container['paypal_credit_legal_image_url'] = $paypal_credit_legal_image_url;

        return $this;
    }

    /**
     * Gets paypal_credit_legal_url
     *
     * @return string
     */
    public function getPaypalCreditLegalUrl()
    {
        return $this->container['paypal_credit_legal_url'];
    }

    /**
     * Sets paypal_credit_legal_url
     *
     * @param string $paypal_credit_legal_url PayPal Credit legal URL
     *
     * @return $this
     */
    public function setPaypalCreditLegalUrl($paypal_credit_legal_url)
    {
        $this->container['paypal_credit_legal_url'] = $paypal_credit_legal_url;

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


