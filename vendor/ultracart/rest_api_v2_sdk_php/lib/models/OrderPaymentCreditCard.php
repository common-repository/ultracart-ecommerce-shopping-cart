<?php
/**
 * OrderPaymentCreditCard
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
 * OrderPaymentCreditCard Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderPaymentCreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderPaymentCreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_auth_ticket' => 'string',
        'card_authorization_amount' => 'float',
        'card_authorization_dts' => 'string',
        'card_authorization_reference_number' => 'string',
        'card_expiration_month' => 'int',
        'card_expiration_year' => 'int',
        'card_number' => 'string',
        'card_number_token' => 'string',
        'card_number_truncated' => 'bool',
        'card_type' => 'string',
        'card_verification_number_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_auth_ticket' => null,
        'card_authorization_amount' => null,
        'card_authorization_dts' => 'dateTime',
        'card_authorization_reference_number' => null,
        'card_expiration_month' => 'int32',
        'card_expiration_year' => 'int32',
        'card_number' => null,
        'card_number_token' => null,
        'card_number_truncated' => null,
        'card_type' => null,
        'card_verification_number_token' => null
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
        'card_auth_ticket' => 'card_auth_ticket',
        'card_authorization_amount' => 'card_authorization_amount',
        'card_authorization_dts' => 'card_authorization_dts',
        'card_authorization_reference_number' => 'card_authorization_reference_number',
        'card_expiration_month' => 'card_expiration_month',
        'card_expiration_year' => 'card_expiration_year',
        'card_number' => 'card_number',
        'card_number_token' => 'card_number_token',
        'card_number_truncated' => 'card_number_truncated',
        'card_type' => 'card_type',
        'card_verification_number_token' => 'card_verification_number_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_auth_ticket' => 'setCardAuthTicket',
        'card_authorization_amount' => 'setCardAuthorizationAmount',
        'card_authorization_dts' => 'setCardAuthorizationDts',
        'card_authorization_reference_number' => 'setCardAuthorizationReferenceNumber',
        'card_expiration_month' => 'setCardExpirationMonth',
        'card_expiration_year' => 'setCardExpirationYear',
        'card_number' => 'setCardNumber',
        'card_number_token' => 'setCardNumberToken',
        'card_number_truncated' => 'setCardNumberTruncated',
        'card_type' => 'setCardType',
        'card_verification_number_token' => 'setCardVerificationNumberToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_auth_ticket' => 'getCardAuthTicket',
        'card_authorization_amount' => 'getCardAuthorizationAmount',
        'card_authorization_dts' => 'getCardAuthorizationDts',
        'card_authorization_reference_number' => 'getCardAuthorizationReferenceNumber',
        'card_expiration_month' => 'getCardExpirationMonth',
        'card_expiration_year' => 'getCardExpirationYear',
        'card_number' => 'getCardNumber',
        'card_number_token' => 'getCardNumberToken',
        'card_number_truncated' => 'getCardNumberTruncated',
        'card_type' => 'getCardType',
        'card_verification_number_token' => 'getCardVerificationNumberToken'
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
    const CARD_TYPE_JCB = 'JCB';
    const CARD_TYPE_MASTER_CARD = 'MasterCard';
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
            self::CARD_TYPE_JCB,
            self::CARD_TYPE_MASTER_CARD,
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
        $this->container['card_auth_ticket'] = isset($data['card_auth_ticket']) ? $data['card_auth_ticket'] : null;
        $this->container['card_authorization_amount'] = isset($data['card_authorization_amount']) ? $data['card_authorization_amount'] : null;
        $this->container['card_authorization_dts'] = isset($data['card_authorization_dts']) ? $data['card_authorization_dts'] : null;
        $this->container['card_authorization_reference_number'] = isset($data['card_authorization_reference_number']) ? $data['card_authorization_reference_number'] : null;
        $this->container['card_expiration_month'] = isset($data['card_expiration_month']) ? $data['card_expiration_month'] : null;
        $this->container['card_expiration_year'] = isset($data['card_expiration_year']) ? $data['card_expiration_year'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_number_token'] = isset($data['card_number_token']) ? $data['card_number_token'] : null;
        $this->container['card_number_truncated'] = isset($data['card_number_truncated']) ? $data['card_number_truncated'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['card_verification_number_token'] = isset($data['card_verification_number_token']) ? $data['card_verification_number_token'] : null;
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
     * Gets card_auth_ticket
     *
     * @return string
     */
    public function getCardAuthTicket()
    {
        return $this->container['card_auth_ticket'];
    }

    /**
     * Sets card_auth_ticket
     *
     * @param string $card_auth_ticket Card authorization ticket
     *
     * @return $this
     */
    public function setCardAuthTicket($card_auth_ticket)
    {
        $this->container['card_auth_ticket'] = $card_auth_ticket;

        return $this;
    }

    /**
     * Gets card_authorization_amount
     *
     * @return float
     */
    public function getCardAuthorizationAmount()
    {
        return $this->container['card_authorization_amount'];
    }

    /**
     * Sets card_authorization_amount
     *
     * @param float $card_authorization_amount Card authorization amount
     *
     * @return $this
     */
    public function setCardAuthorizationAmount($card_authorization_amount)
    {
        $this->container['card_authorization_amount'] = $card_authorization_amount;

        return $this;
    }

    /**
     * Gets card_authorization_dts
     *
     * @return string
     */
    public function getCardAuthorizationDts()
    {
        return $this->container['card_authorization_dts'];
    }

    /**
     * Sets card_authorization_dts
     *
     * @param string $card_authorization_dts Card authorization date/time
     *
     * @return $this
     */
    public function setCardAuthorizationDts($card_authorization_dts)
    {
        $this->container['card_authorization_dts'] = $card_authorization_dts;

        return $this;
    }

    /**
     * Gets card_authorization_reference_number
     *
     * @return string
     */
    public function getCardAuthorizationReferenceNumber()
    {
        return $this->container['card_authorization_reference_number'];
    }

    /**
     * Sets card_authorization_reference_number
     *
     * @param string $card_authorization_reference_number Card authorization reference number
     *
     * @return $this
     */
    public function setCardAuthorizationReferenceNumber($card_authorization_reference_number)
    {
        $this->container['card_authorization_reference_number'] = $card_authorization_reference_number;

        return $this;
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
     * @param int $card_expiration_year Card expiration year (Four digit year)
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
     * @param string $card_number Card number (masked to last 4)
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_number_token
     *
     * @return string
     */
    public function getCardNumberToken()
    {
        return $this->container['card_number_token'];
    }

    /**
     * Sets card_number_token
     *
     * @param string $card_number_token Card number token from hosted fields used to update the cart number
     *
     * @return $this
     */
    public function setCardNumberToken($card_number_token)
    {
        $this->container['card_number_token'] = $card_number_token;

        return $this;
    }

    /**
     * Gets card_number_truncated
     *
     * @return bool
     */
    public function getCardNumberTruncated()
    {
        return $this->container['card_number_truncated'];
    }

    /**
     * Sets card_number_truncated
     *
     * @param bool $card_number_truncated True if the card has been truncated
     *
     * @return $this
     */
    public function setCardNumberTruncated($card_number_truncated)
    {
        $this->container['card_number_truncated'] = $card_number_truncated;

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
     * Gets card_verification_number_token
     *
     * @return string
     */
    public function getCardVerificationNumberToken()
    {
        return $this->container['card_verification_number_token'];
    }

    /**
     * Sets card_verification_number_token
     *
     * @param string $card_verification_number_token Card verification number token from hosted fields, only for import/insert of new orders, completely ignored for updates, and always null/empty for queries
     *
     * @return $this
     */
    public function setCardVerificationNumberToken($card_verification_number_token)
    {
        $this->container['card_verification_number_token'] = $card_verification_number_token;

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


