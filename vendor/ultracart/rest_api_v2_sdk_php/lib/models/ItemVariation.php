<?php
/**
 * ItemVariation
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
 * ItemVariation Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemVariation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemVariation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_text' => 'string',
        'default_text_translated_text_instance_oid' => 'int',
        'name' => 'string',
        'name_translated_text_instance_oid' => 'int',
        'options' => '\ultracart\v2\models\ItemVariationOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_text' => null,
        'default_text_translated_text_instance_oid' => 'int32',
        'name' => null,
        'name_translated_text_instance_oid' => 'int32',
        'options' => null
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
        'default_text' => 'default_text',
        'default_text_translated_text_instance_oid' => 'default_text_translated_text_instance_oid',
        'name' => 'name',
        'name_translated_text_instance_oid' => 'name_translated_text_instance_oid',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_text' => 'setDefaultText',
        'default_text_translated_text_instance_oid' => 'setDefaultTextTranslatedTextInstanceOid',
        'name' => 'setName',
        'name_translated_text_instance_oid' => 'setNameTranslatedTextInstanceOid',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_text' => 'getDefaultText',
        'default_text_translated_text_instance_oid' => 'getDefaultTextTranslatedTextInstanceOid',
        'name' => 'getName',
        'name_translated_text_instance_oid' => 'getNameTranslatedTextInstanceOid',
        'options' => 'getOptions'
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
        $this->container['default_text'] = isset($data['default_text']) ? $data['default_text'] : null;
        $this->container['default_text_translated_text_instance_oid'] = isset($data['default_text_translated_text_instance_oid']) ? $data['default_text_translated_text_instance_oid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_translated_text_instance_oid'] = isset($data['name_translated_text_instance_oid']) ? $data['name_translated_text_instance_oid'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['default_text']) && (mb_strlen($this->container['default_text']) > 50)) {
            $invalidProperties[] = "invalid value for 'default_text', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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

        if (mb_strlen($this->container['default_text']) > 50) {
            return false;
        }
        if (mb_strlen($this->container['name']) > 50) {
            return false;
        }
        return true;
    }


    /**
     * Gets default_text
     *
     * @return string
     */
    public function getDefaultText()
    {
        return $this->container['default_text'];
    }

    /**
     * Sets default_text
     *
     * @param string $default_text Default text
     *
     * @return $this
     */
    public function setDefaultText($default_text)
    {
        if (!is_null($default_text) && (mb_strlen($default_text) > 50)) {
            throw new \InvalidArgumentException('invalid length for $default_text when calling ItemVariation., must be smaller than or equal to 50.');
        }

        $this->container['default_text'] = $default_text;

        return $this;
    }

    /**
     * Gets default_text_translated_text_instance_oid
     *
     * @return int
     */
    public function getDefaultTextTranslatedTextInstanceOid()
    {
        return $this->container['default_text_translated_text_instance_oid'];
    }

    /**
     * Sets default_text_translated_text_instance_oid
     *
     * @param int $default_text_translated_text_instance_oid Default text translated text instance id
     *
     * @return $this
     */
    public function setDefaultTextTranslatedTextInstanceOid($default_text_translated_text_instance_oid)
    {
        $this->container['default_text_translated_text_instance_oid'] = $default_text_translated_text_instance_oid;

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
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ItemVariation., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translated_text_instance_oid
     *
     * @return int
     */
    public function getNameTranslatedTextInstanceOid()
    {
        return $this->container['name_translated_text_instance_oid'];
    }

    /**
     * Sets name_translated_text_instance_oid
     *
     * @param int $name_translated_text_instance_oid Name translated text instance id
     *
     * @return $this
     */
    public function setNameTranslatedTextInstanceOid($name_translated_text_instance_oid)
    {
        $this->container['name_translated_text_instance_oid'] = $name_translated_text_instance_oid;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \ultracart\v2\models\ItemVariationOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \ultracart\v2\models\ItemVariationOption[] $options Options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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

