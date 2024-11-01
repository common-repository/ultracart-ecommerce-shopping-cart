<?php
/**
 * ItemRelated
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
 * ItemRelated Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemRelated implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemRelated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'no_system_calculated_related_items' => 'bool',
        'not_relatable' => 'bool',
        'related_items' => '\ultracart\v2\models\ItemRelatedItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'no_system_calculated_related_items' => null,
        'not_relatable' => null,
        'related_items' => null
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
        'no_system_calculated_related_items' => 'no_system_calculated_related_items',
        'not_relatable' => 'not_relatable',
        'related_items' => 'related_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'no_system_calculated_related_items' => 'setNoSystemCalculatedRelatedItems',
        'not_relatable' => 'setNotRelatable',
        'related_items' => 'setRelatedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'no_system_calculated_related_items' => 'getNoSystemCalculatedRelatedItems',
        'not_relatable' => 'getNotRelatable',
        'related_items' => 'getRelatedItems'
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
        $this->container['no_system_calculated_related_items'] = isset($data['no_system_calculated_related_items']) ? $data['no_system_calculated_related_items'] : null;
        $this->container['not_relatable'] = isset($data['not_relatable']) ? $data['not_relatable'] : null;
        $this->container['related_items'] = isset($data['related_items']) ? $data['related_items'] : null;
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
     * Gets no_system_calculated_related_items
     *
     * @return bool
     */
    public function getNoSystemCalculatedRelatedItems()
    {
        return $this->container['no_system_calculated_related_items'];
    }

    /**
     * Sets no_system_calculated_related_items
     *
     * @param bool $no_system_calculated_related_items True to suppress system calculated relationships
     *
     * @return $this
     */
    public function setNoSystemCalculatedRelatedItems($no_system_calculated_related_items)
    {
        $this->container['no_system_calculated_related_items'] = $no_system_calculated_related_items;

        return $this;
    }

    /**
     * Gets not_relatable
     *
     * @return bool
     */
    public function getNotRelatable()
    {
        return $this->container['not_relatable'];
    }

    /**
     * Sets not_relatable
     *
     * @param bool $not_relatable Not relatable
     *
     * @return $this
     */
    public function setNotRelatable($not_relatable)
    {
        $this->container['not_relatable'] = $not_relatable;

        return $this;
    }

    /**
     * Gets related_items
     *
     * @return \ultracart\v2\models\ItemRelatedItem[]
     */
    public function getRelatedItems()
    {
        return $this->container['related_items'];
    }

    /**
     * Sets related_items
     *
     * @param \ultracart\v2\models\ItemRelatedItem[] $related_items Related items
     *
     * @return $this
     */
    public function setRelatedItems($related_items)
    {
        $this->container['related_items'] = $related_items;

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

