<?php
/**
 * CartCustomerProfileCreditCard
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
 * CartCustomerProfileCreditCard Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartCustomerProfileCreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartCustomerProfileCreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_expiration_month' => 'int',
        'card_expiration_year' => 'int',
        'card_number' => 'string',
        'card_type' => 'string',
        'customer_profile_credit_card_id' => 'int',
        'last_used_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_expiration_month' => 'int32',
        'card_expiration_year' => 'int32',
        'card_number' => null,
        'card_type' => null,
        'customer_profile_credit_card_id' => 'int32',
        'last_used_date' => 'dateTime'
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
        'card_expiration_month' => 'card_expiration_month',
        'card_expiration_year' => 'card_expiration_year',
        'card_number' => 'card_number',
        'card_type' => 'card_type',
        'customer_profile_credit_card_id' => 'customer_profile_credit_card_id',
        'last_used_date' => 'last_used_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_expiration_month' => 'setCardExpirationMonth',
        'card_expiration_year' => 'setCardExpirationYear',
        'card_number' => 'setCardNumber',
        'card_type' => 'setCardType',
        'customer_profile_credit_card_id' => 'setCustomerProfileCreditCardId',
        'last_used_date' => 'setLastUsedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_expiration_month' => 'getCardExpirationMonth',
        'card_expiration_year' => 'getCardExpirationYear',
        'card_number' => 'getCardNumber',
        'card_type' => 'getCardType',
        'customer_profile_credit_card_id' => 'getCustomerProfileCreditCardId',
        'last_used_date' => 'getLastUsedDate'
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

    const CARD_TYPE_AMEX = 'AMEX';
    const CARD_TYPE_DINERS_CLUB = 'Diners Club';
    const CARD_TYPE_DISCOVER = 'Discover';
    const CARD_TYPE_MASTER_CARD = 'MasterCard';
    const CARD_TYPE_JCB = 'JCB';
    const CARD_TYPE_VISA = 'VISA';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_DINERS_CLUB,
            self::CARD_TYPE_DISCOVER,
            self::CARD_TYPE_MASTER_CARD,
            self::CARD_TYPE_JCB,
            self::CARD_TYPE_VISA,
        ];
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
        $this->container['card_expiration_month'] = isset($data['card_expiration_month']) ? $data['card_expiration_month'] : null;
        $this->container['card_expiration_year'] = isset($data['card_expiration_year']) ? $data['card_expiration_year'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['customer_profile_credit_card_id'] = isset($data['customer_profile_credit_card_id']) ? $data['customer_profile_credit_card_id'] : null;
        $this->container['last_used_date'] = isset($data['last_used_date']) ? $data['last_used_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!in_array($this->container['card_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'card_type', must be one of '%s'",
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

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!in_array($this->container['card_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets card_expiration_month
     *
     * @return int
     */
    public function getCardExpirationMonth()
    {
        return $this->container['card_expiration_month'];
    }

    /**
     * Sets card_expiration_month
     *
     * @param int $card_expiration_month Card expiration month (1-12)
     *
     * @return $this
     */
    public function setCardExpirationMonth($card_expiration_month)
    {
        $this->container['card_expiration_month'] = $card_expiration_month;

        return $this;
    }

    /**
     * Gets card_expiration_year
     *
     * @return int
     */
    public function getCardExpirationYear()
    {
        return $this->container['card_expiration_year'];
    }

    /**
     * Sets card_expiration_year
     *
     * @param int $card_expiration_year Card expiration year (four digit)
     *
     * @return $this
     */
    public function setCardExpirationYear($card_expiration_year)
    {
        $this->container['card_expiration_year'] = $card_expiration_year;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number Card number (masked last 4 digits)
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type Card type
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets customer_profile_credit_card_id
     *
     * @return int
     */
    public function getCustomerProfileCreditCardId()
    {
        return $this->container['customer_profile_credit_card_id'];
    }

    /**
     * Sets customer_profile_credit_card_id
     *
     * @param int $customer_profile_credit_card_id Unique identifier for this stored card
     *
     * @return $this
     */
    public function setCustomerProfileCreditCardId($customer_profile_credit_card_id)
    {
        $this->container['customer_profile_credit_card_id'] = $customer_profile_credit_card_id;

        return $this;
    }

    /**
     * Gets last_used_date
     *
     * @return string
     */
    public function getLastUsedDate()
    {
        return $this->container['last_used_date'];
    }

    /**
     * Sets last_used_date
     *
     * @param string $last_used_date Last used
     *
     * @return $this
     */
    public function setLastUsedDate($last_used_date)
    {
        $this->container['last_used_date'] = $last_used_date;

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


