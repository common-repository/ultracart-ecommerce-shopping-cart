<?php
/**
 * ItemDigitalItem
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
 * ItemDigitalItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemDigitalItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemDigitalItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'creation_dts' => 'string',
        'description' => 'string',
        'file_size' => 'int',
        'mime_type' => 'string',
        'original_filename' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'creation_dts' => 'dateTime',
        'description' => null,
        'file_size' => 'int64',
        'mime_type' => null,
        'original_filename' => null
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
        'creation_dts' => 'creation_dts',
        'description' => 'description',
        'file_size' => 'file_size',
        'mime_type' => 'mime_type',
        'original_filename' => 'original_filename'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_dts' => 'setCreationDts',
        'description' => 'setDescription',
        'file_size' => 'setFileSize',
        'mime_type' => 'setMimeType',
        'original_filename' => 'setOriginalFilename'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_dts' => 'getCreationDts',
        'description' => 'getDescription',
        'file_size' => 'getFileSize',
        'mime_type' => 'getMimeType',
        'original_filename' => 'getOriginalFilename'
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
        $this->container['creation_dts'] = isset($data['creation_dts']) ? $data['creation_dts'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['original_filename'] = isset($data['original_filename']) ? $data['original_filename'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['mime_type']) && (mb_strlen($this->container['mime_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'mime_type', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['original_filename']) && (mb_strlen($this->container['original_filename']) > 250)) {
            $invalidProperties[] = "invalid value for 'original_filename', the character length must be smaller than or equal to 250.";
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

        if (mb_strlen($this->container['description']) > 200) {
            return false;
        }
        if (mb_strlen($this->container['mime_type']) > 100) {
            return false;
        }
        if (mb_strlen($this->container['original_filename']) > 250) {
            return false;
        }
        return true;
    }


    /**
     * Gets creation_dts
     *
     * @return string
     */
    public function getCreationDts()
    {
        return $this->container['creation_dts'];
    }

    /**
     * Sets creation_dts
     *
     * @param string $creation_dts File creation date
     *
     * @return $this
     */
    public function setCreationDts($creation_dts)
    {
        $this->container['creation_dts'] = $creation_dts;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the digital item
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ItemDigitalItem., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size File size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type Mime type associated with the file
     *
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        if (!is_null($mime_type) && (mb_strlen($mime_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $mime_type when calling ItemDigitalItem., must be smaller than or equal to 100.');
        }

        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets original_filename
     *
     * @return string
     */
    public function getOriginalFilename()
    {
        return $this->container['original_filename'];
    }

    /**
     * Sets original_filename
     *
     * @param string $original_filename Original filename
     *
     * @return $this
     */
    public function setOriginalFilename($original_filename)
    {
        if (!is_null($original_filename) && (mb_strlen($original_filename) > 250)) {
            throw new \InvalidArgumentException('invalid length for $original_filename when calling ItemDigitalItem., must be smaller than or equal to 250.');
        }

        $this->container['original_filename'] = $original_filename;

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

