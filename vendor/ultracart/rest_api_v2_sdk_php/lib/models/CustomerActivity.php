<?php
/**
 * CustomerActivity
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
 * CustomerActivity Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activities' => '\ultracart\v2\models\Activity[]',
        'memberships' => '\ultracart\v2\models\ListSegmentMembership[]',
        'metrics' => '\ultracart\v2\models\Metric[]',
        'properties_list' => '\ultracart\v2\models\Property[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activities' => null,
        'memberships' => null,
        'metrics' => null,
        'properties_list' => null
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
        'activities' => 'activities',
        'memberships' => 'memberships',
        'metrics' => 'metrics',
        'properties_list' => 'properties_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activities' => 'setActivities',
        'memberships' => 'setMemberships',
        'metrics' => 'setMetrics',
        'properties_list' => 'setPropertiesList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activities' => 'getActivities',
        'memberships' => 'getMemberships',
        'metrics' => 'getMetrics',
        'properties_list' => 'getPropertiesList'
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
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['memberships'] = isset($data['memberships']) ? $data['memberships'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['properties_list'] = isset($data['properties_list']) ? $data['properties_list'] : null;
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
     * Gets activities
     *
     * @return \ultracart\v2\models\Activity[]
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \ultracart\v2\models\Activity[] $activities activities
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets memberships
     *
     * @return \ultracart\v2\models\ListSegmentMembership[]
     */
    public function getMemberships()
    {
        return $this->container['memberships'];
    }

    /**
     * Sets memberships
     *
     * @param \ultracart\v2\models\ListSegmentMembership[] $memberships memberships
     *
     * @return $this
     */
    public function setMemberships($memberships)
    {
        $this->container['memberships'] = $memberships;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \ultracart\v2\models\Metric[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \ultracart\v2\models\Metric[] $metrics metrics
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets properties_list
     *
     * @return \ultracart\v2\models\Property[]
     */
    public function getPropertiesList()
    {
        return $this->container['properties_list'];
    }

    /**
     * Sets properties_list
     *
     * @param \ultracart\v2\models\Property[] $properties_list properties_list
     *
     * @return $this
     */
    public function setPropertiesList($properties_list)
    {
        $this->container['properties_list'] = $properties_list;

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


