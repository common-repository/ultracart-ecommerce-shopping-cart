<?php
/**
 * ItemInstantPaymentNotification
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
 * ItemInstantPaymentNotification Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemInstantPaymentNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemInstantPaymentNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'post_operation' => 'bool',
        'successful_response_text' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'post_operation' => null,
        'successful_response_text' => null,
        'url' => null
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
        'post_operation' => 'post_operation',
        'successful_response_text' => 'successful_response_text',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'post_operation' => 'setPostOperation',
        'successful_response_text' => 'setSuccessfulResponseText',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'post_operation' => 'getPostOperation',
        'successful_response_text' => 'getSuccessfulResponseText',
        'url' => 'getUrl'
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
        $this->container['post_operation'] = isset($data['post_operation']) ? $data['post_operation'] : null;
        $this->container['successful_response_text'] = isset($data['successful_response_text']) ? $data['successful_response_text'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['successful_response_text']) && (mb_strlen($this->container['successful_response_text']) > 1024)) {
            $invalidProperties[] = "invalid value for 'successful_response_text', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
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

        if (mb_strlen($this->container['successful_response_text']) > 1024) {
            return false;
        }
        if (mb_strlen($this->container['url']) > 1024) {
            return false;
        }
        return true;
    }


    /**
     * Gets post_operation
     *
     * @return bool
     */
    public function getPostOperation()
    {
        return $this->container['post_operation'];
    }

    /**
     * Sets post_operation
     *
     * @param bool $post_operation True for HTTP POST instead of GET
     *
     * @return $this
     */
    public function setPostOperation($post_operation)
    {
        $this->container['post_operation'] = $post_operation;

        return $this;
    }

    /**
     * Gets successful_response_text
     *
     * @return string
     */
    public function getSuccessfulResponseText()
    {
        return $this->container['successful_response_text'];
    }

    /**
     * Sets successful_response_text
     *
     * @param string $successful_response_text Successful response text
     *
     * @return $this
     */
    public function setSuccessfulResponseText($successful_response_text)
    {
        if (!is_null($successful_response_text) && (mb_strlen($successful_response_text) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $successful_response_text when calling ItemInstantPaymentNotification., must be smaller than or equal to 1024.');
        }

        $this->container['successful_response_text'] = $successful_response_text;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if (!is_null($url) && (mb_strlen($url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $url when calling ItemInstantPaymentNotification., must be smaller than or equal to 1024.');
        }

        $this->container['url'] = $url;

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


