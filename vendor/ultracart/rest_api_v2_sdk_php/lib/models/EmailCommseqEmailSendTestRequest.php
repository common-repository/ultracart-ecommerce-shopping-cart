<?php
/**
 * EmailCommseqEmailSendTestRequest
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
 * EmailCommseqEmailSendTestRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailCommseqEmailSendTestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailCommseqEmailSendTestRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cart_id' => 'string',
        'cart_item_ids' => 'string[]',
        'esp_commseq_email_uuid' => 'string',
        'esp_commseq_step_uuid' => 'string',
        'esp_commseq_uuid' => 'string',
        'name' => 'string',
        'order_id' => 'string',
        'please_review' => 'bool',
        'send_to_additional_emails' => 'string[]',
        'send_to_logged_in_user' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cart_id' => null,
        'cart_item_ids' => null,
        'esp_commseq_email_uuid' => null,
        'esp_commseq_step_uuid' => null,
        'esp_commseq_uuid' => null,
        'name' => null,
        'order_id' => null,
        'please_review' => null,
        'send_to_additional_emails' => null,
        'send_to_logged_in_user' => null
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
        'cart_id' => 'cart_id',
        'cart_item_ids' => 'cart_item_ids',
        'esp_commseq_email_uuid' => 'esp_commseq_email_uuid',
        'esp_commseq_step_uuid' => 'esp_commseq_step_uuid',
        'esp_commseq_uuid' => 'esp_commseq_uuid',
        'name' => 'name',
        'order_id' => 'order_id',
        'please_review' => 'please_review',
        'send_to_additional_emails' => 'send_to_additional_emails',
        'send_to_logged_in_user' => 'send_to_logged_in_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cart_id' => 'setCartId',
        'cart_item_ids' => 'setCartItemIds',
        'esp_commseq_email_uuid' => 'setEspCommseqEmailUuid',
        'esp_commseq_step_uuid' => 'setEspCommseqStepUuid',
        'esp_commseq_uuid' => 'setEspCommseqUuid',
        'name' => 'setName',
        'order_id' => 'setOrderId',
        'please_review' => 'setPleaseReview',
        'send_to_additional_emails' => 'setSendToAdditionalEmails',
        'send_to_logged_in_user' => 'setSendToLoggedInUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cart_id' => 'getCartId',
        'cart_item_ids' => 'getCartItemIds',
        'esp_commseq_email_uuid' => 'getEspCommseqEmailUuid',
        'esp_commseq_step_uuid' => 'getEspCommseqStepUuid',
        'esp_commseq_uuid' => 'getEspCommseqUuid',
        'name' => 'getName',
        'order_id' => 'getOrderId',
        'please_review' => 'getPleaseReview',
        'send_to_additional_emails' => 'getSendToAdditionalEmails',
        'send_to_logged_in_user' => 'getSendToLoggedInUser'
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
        $this->container['cart_id'] = isset($data['cart_id']) ? $data['cart_id'] : null;
        $this->container['cart_item_ids'] = isset($data['cart_item_ids']) ? $data['cart_item_ids'] : null;
        $this->container['esp_commseq_email_uuid'] = isset($data['esp_commseq_email_uuid']) ? $data['esp_commseq_email_uuid'] : null;
        $this->container['esp_commseq_step_uuid'] = isset($data['esp_commseq_step_uuid']) ? $data['esp_commseq_step_uuid'] : null;
        $this->container['esp_commseq_uuid'] = isset($data['esp_commseq_uuid']) ? $data['esp_commseq_uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['please_review'] = isset($data['please_review']) ? $data['please_review'] : null;
        $this->container['send_to_additional_emails'] = isset($data['send_to_additional_emails']) ? $data['send_to_additional_emails'] : null;
        $this->container['send_to_logged_in_user'] = isset($data['send_to_logged_in_user']) ? $data['send_to_logged_in_user'] : null;
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
     * Gets cart_id
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string $cart_id cart_id
     *
     * @return $this
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets cart_item_ids
     *
     * @return string[]
     */
    public function getCartItemIds()
    {
        return $this->container['cart_item_ids'];
    }

    /**
     * Sets cart_item_ids
     *
     * @param string[] $cart_item_ids cart_item_ids
     *
     * @return $this
     */
    public function setCartItemIds($cart_item_ids)
    {
        $this->container['cart_item_ids'] = $cart_item_ids;

        return $this;
    }

    /**
     * Gets esp_commseq_email_uuid
     *
     * @return string
     */
    public function getEspCommseqEmailUuid()
    {
        return $this->container['esp_commseq_email_uuid'];
    }

    /**
     * Sets esp_commseq_email_uuid
     *
     * @param string $esp_commseq_email_uuid esp_commseq_email_uuid
     *
     * @return $this
     */
    public function setEspCommseqEmailUuid($esp_commseq_email_uuid)
    {
        $this->container['esp_commseq_email_uuid'] = $esp_commseq_email_uuid;

        return $this;
    }

    /**
     * Gets esp_commseq_step_uuid
     *
     * @return string
     */
    public function getEspCommseqStepUuid()
    {
        return $this->container['esp_commseq_step_uuid'];
    }

    /**
     * Sets esp_commseq_step_uuid
     *
     * @param string $esp_commseq_step_uuid esp_commseq_step_uuid
     *
     * @return $this
     */
    public function setEspCommseqStepUuid($esp_commseq_step_uuid)
    {
        $this->container['esp_commseq_step_uuid'] = $esp_commseq_step_uuid;

        return $this;
    }

    /**
     * Gets esp_commseq_uuid
     *
     * @return string
     */
    public function getEspCommseqUuid()
    {
        return $this->container['esp_commseq_uuid'];
    }

    /**
     * Sets esp_commseq_uuid
     *
     * @param string $esp_commseq_uuid esp_commseq_uuid
     *
     * @return $this
     */
    public function setEspCommseqUuid($esp_commseq_uuid)
    {
        $this->container['esp_commseq_uuid'] = $esp_commseq_uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets please_review
     *
     * @return bool
     */
    public function getPleaseReview()
    {
        return $this->container['please_review'];
    }

    /**
     * Sets please_review
     *
     * @param bool $please_review please_review
     *
     * @return $this
     */
    public function setPleaseReview($please_review)
    {
        $this->container['please_review'] = $please_review;

        return $this;
    }

    /**
     * Gets send_to_additional_emails
     *
     * @return string[]
     */
    public function getSendToAdditionalEmails()
    {
        return $this->container['send_to_additional_emails'];
    }

    /**
     * Sets send_to_additional_emails
     *
     * @param string[] $send_to_additional_emails send_to_additional_emails
     *
     * @return $this
     */
    public function setSendToAdditionalEmails($send_to_additional_emails)
    {
        $this->container['send_to_additional_emails'] = $send_to_additional_emails;

        return $this;
    }

    /**
     * Gets send_to_logged_in_user
     *
     * @return bool
     */
    public function getSendToLoggedInUser()
    {
        return $this->container['send_to_logged_in_user'];
    }

    /**
     * Sets send_to_logged_in_user
     *
     * @param bool $send_to_logged_in_user send_to_logged_in_user
     *
     * @return $this
     */
    public function setSendToLoggedInUser($send_to_logged_in_user)
    {
        $this->container['send_to_logged_in_user'] = $send_to_logged_in_user;

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


