<?php
/**
 * ExperimentVariation
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
 * ExperimentVariation Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExperimentVariation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExperimentVariation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_to_cart_count' => 'int',
        'average_duration_seconds' => 'int',
        'average_objective_per_session' => 'float',
        'average_order_value' => 'float',
        'bounce_count' => 'int',
        'conversion_rate' => 'float',
        'duration_seconds_sum' => 'int',
        'initiate_checkout_count' => 'int',
        'order_count' => 'int',
        'original_traffic_percentage' => 'float',
        'page_view_count' => 'int',
        'revenue' => 'float',
        'session_count' => 'int',
        'traffic_percentage' => 'float',
        'url' => 'string',
        'variation_name' => 'string',
        'variation_number' => 'int',
        'winner' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_to_cart_count' => 'int32',
        'average_duration_seconds' => 'int32',
        'average_objective_per_session' => null,
        'average_order_value' => null,
        'bounce_count' => 'int32',
        'conversion_rate' => null,
        'duration_seconds_sum' => 'int64',
        'initiate_checkout_count' => 'int32',
        'order_count' => 'int32',
        'original_traffic_percentage' => null,
        'page_view_count' => 'int32',
        'revenue' => null,
        'session_count' => 'int32',
        'traffic_percentage' => null,
        'url' => null,
        'variation_name' => null,
        'variation_number' => 'int32',
        'winner' => null
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
        'add_to_cart_count' => 'add_to_cart_count',
        'average_duration_seconds' => 'average_duration_seconds',
        'average_objective_per_session' => 'average_objective_per_session',
        'average_order_value' => 'average_order_value',
        'bounce_count' => 'bounce_count',
        'conversion_rate' => 'conversion_rate',
        'duration_seconds_sum' => 'duration_seconds_sum',
        'initiate_checkout_count' => 'initiate_checkout_count',
        'order_count' => 'order_count',
        'original_traffic_percentage' => 'original_traffic_percentage',
        'page_view_count' => 'page_view_count',
        'revenue' => 'revenue',
        'session_count' => 'session_count',
        'traffic_percentage' => 'traffic_percentage',
        'url' => 'url',
        'variation_name' => 'variation_name',
        'variation_number' => 'variation_number',
        'winner' => 'winner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_to_cart_count' => 'setAddToCartCount',
        'average_duration_seconds' => 'setAverageDurationSeconds',
        'average_objective_per_session' => 'setAverageObjectivePerSession',
        'average_order_value' => 'setAverageOrderValue',
        'bounce_count' => 'setBounceCount',
        'conversion_rate' => 'setConversionRate',
        'duration_seconds_sum' => 'setDurationSecondsSum',
        'initiate_checkout_count' => 'setInitiateCheckoutCount',
        'order_count' => 'setOrderCount',
        'original_traffic_percentage' => 'setOriginalTrafficPercentage',
        'page_view_count' => 'setPageViewCount',
        'revenue' => 'setRevenue',
        'session_count' => 'setSessionCount',
        'traffic_percentage' => 'setTrafficPercentage',
        'url' => 'setUrl',
        'variation_name' => 'setVariationName',
        'variation_number' => 'setVariationNumber',
        'winner' => 'setWinner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_to_cart_count' => 'getAddToCartCount',
        'average_duration_seconds' => 'getAverageDurationSeconds',
        'average_objective_per_session' => 'getAverageObjectivePerSession',
        'average_order_value' => 'getAverageOrderValue',
        'bounce_count' => 'getBounceCount',
        'conversion_rate' => 'getConversionRate',
        'duration_seconds_sum' => 'getDurationSecondsSum',
        'initiate_checkout_count' => 'getInitiateCheckoutCount',
        'order_count' => 'getOrderCount',
        'original_traffic_percentage' => 'getOriginalTrafficPercentage',
        'page_view_count' => 'getPageViewCount',
        'revenue' => 'getRevenue',
        'session_count' => 'getSessionCount',
        'traffic_percentage' => 'getTrafficPercentage',
        'url' => 'getUrl',
        'variation_name' => 'getVariationName',
        'variation_number' => 'getVariationNumber',
        'winner' => 'getWinner'
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
        $this->container['add_to_cart_count'] = isset($data['add_to_cart_count']) ? $data['add_to_cart_count'] : null;
        $this->container['average_duration_seconds'] = isset($data['average_duration_seconds']) ? $data['average_duration_seconds'] : null;
        $this->container['average_objective_per_session'] = isset($data['average_objective_per_session']) ? $data['average_objective_per_session'] : null;
        $this->container['average_order_value'] = isset($data['average_order_value']) ? $data['average_order_value'] : null;
        $this->container['bounce_count'] = isset($data['bounce_count']) ? $data['bounce_count'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['duration_seconds_sum'] = isset($data['duration_seconds_sum']) ? $data['duration_seconds_sum'] : null;
        $this->container['initiate_checkout_count'] = isset($data['initiate_checkout_count']) ? $data['initiate_checkout_count'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['original_traffic_percentage'] = isset($data['original_traffic_percentage']) ? $data['original_traffic_percentage'] : null;
        $this->container['page_view_count'] = isset($data['page_view_count']) ? $data['page_view_count'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['session_count'] = isset($data['session_count']) ? $data['session_count'] : null;
        $this->container['traffic_percentage'] = isset($data['traffic_percentage']) ? $data['traffic_percentage'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['variation_name'] = isset($data['variation_name']) ? $data['variation_name'] : null;
        $this->container['variation_number'] = isset($data['variation_number']) ? $data['variation_number'] : null;
        $this->container['winner'] = isset($data['winner']) ? $data['winner'] : null;
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
     * Gets add_to_cart_count
     *
     * @return int
     */
    public function getAddToCartCount()
    {
        return $this->container['add_to_cart_count'];
    }

    /**
     * Sets add_to_cart_count
     *
     * @param int $add_to_cart_count Total add to cart count for this variation
     *
     * @return $this
     */
    public function setAddToCartCount($add_to_cart_count)
    {
        $this->container['add_to_cart_count'] = $add_to_cart_count;

        return $this;
    }

    /**
     * Gets average_duration_seconds
     *
     * @return int
     */
    public function getAverageDurationSeconds()
    {
        return $this->container['average_duration_seconds'];
    }

    /**
     * Sets average_duration_seconds
     *
     * @param int $average_duration_seconds Average duration seconds per session for this variation
     *
     * @return $this
     */
    public function setAverageDurationSeconds($average_duration_seconds)
    {
        $this->container['average_duration_seconds'] = $average_duration_seconds;

        return $this;
    }

    /**
     * Gets average_objective_per_session
     *
     * @return float
     */
    public function getAverageObjectivePerSession()
    {
        return $this->container['average_objective_per_session'];
    }

    /**
     * Sets average_objective_per_session
     *
     * @param float $average_objective_per_session Average objective value per session for this variation
     *
     * @return $this
     */
    public function setAverageObjectivePerSession($average_objective_per_session)
    {
        $this->container['average_objective_per_session'] = $average_objective_per_session;

        return $this;
    }

    /**
     * Gets average_order_value
     *
     * @return float
     */
    public function getAverageOrderValue()
    {
        return $this->container['average_order_value'];
    }

    /**
     * Sets average_order_value
     *
     * @param float $average_order_value Average order value for this variation
     *
     * @return $this
     */
    public function setAverageOrderValue($average_order_value)
    {
        $this->container['average_order_value'] = $average_order_value;

        return $this;
    }

    /**
     * Gets bounce_count
     *
     * @return int
     */
    public function getBounceCount()
    {
        return $this->container['bounce_count'];
    }

    /**
     * Sets bounce_count
     *
     * @param int $bounce_count Total bounce count for this variation
     *
     * @return $this
     */
    public function setBounceCount($bounce_count)
    {
        $this->container['bounce_count'] = $bounce_count;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float $conversion_rate Conversion rate for this variation
     *
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets duration_seconds_sum
     *
     * @return int
     */
    public function getDurationSecondsSum()
    {
        return $this->container['duration_seconds_sum'];
    }

    /**
     * Sets duration_seconds_sum
     *
     * @param int $duration_seconds_sum Total number of seconds spent on the site for this variation
     *
     * @return $this
     */
    public function setDurationSecondsSum($duration_seconds_sum)
    {
        $this->container['duration_seconds_sum'] = $duration_seconds_sum;

        return $this;
    }

    /**
     * Gets initiate_checkout_count
     *
     * @return int
     */
    public function getInitiateCheckoutCount()
    {
        return $this->container['initiate_checkout_count'];
    }

    /**
     * Sets initiate_checkout_count
     *
     * @param int $initiate_checkout_count Total initiate checkout count for this variation
     *
     * @return $this
     */
    public function setInitiateCheckoutCount($initiate_checkout_count)
    {
        $this->container['initiate_checkout_count'] = $initiate_checkout_count;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count Total order count for this variation
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets original_traffic_percentage
     *
     * @return float
     */
    public function getOriginalTrafficPercentage()
    {
        return $this->container['original_traffic_percentage'];
    }

    /**
     * Sets original_traffic_percentage
     *
     * @param float $original_traffic_percentage Percentage of the traffic the variation originally started out with
     *
     * @return $this
     */
    public function setOriginalTrafficPercentage($original_traffic_percentage)
    {
        $this->container['original_traffic_percentage'] = $original_traffic_percentage;

        return $this;
    }

    /**
     * Gets page_view_count
     *
     * @return int
     */
    public function getPageViewCount()
    {
        return $this->container['page_view_count'];
    }

    /**
     * Sets page_view_count
     *
     * @param int $page_view_count Total page view count for this variation
     *
     * @return $this
     */
    public function setPageViewCount($page_view_count)
    {
        $this->container['page_view_count'] = $page_view_count;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param float $revenue Total revenue for this variation
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets session_count
     *
     * @return int
     */
    public function getSessionCount()
    {
        return $this->container['session_count'];
    }

    /**
     * Sets session_count
     *
     * @param int $session_count Total sessions for this variation
     *
     * @return $this
     */
    public function setSessionCount($session_count)
    {
        $this->container['session_count'] = $session_count;

        return $this;
    }

    /**
     * Gets traffic_percentage
     *
     * @return float
     */
    public function getTrafficPercentage()
    {
        return $this->container['traffic_percentage'];
    }

    /**
     * Sets traffic_percentage
     *
     * @param float $traffic_percentage Percentage of the traffic this variation is currently receiving
     *
     * @return $this
     */
    public function setTrafficPercentage($traffic_percentage)
    {
        $this->container['traffic_percentage'] = $traffic_percentage;

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
     * @param string $url Url of the variation if this experiment is a url experiment.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets variation_name
     *
     * @return string
     */
    public function getVariationName()
    {
        return $this->container['variation_name'];
    }

    /**
     * Sets variation_name
     *
     * @param string $variation_name Name of the variation
     *
     * @return $this
     */
    public function setVariationName($variation_name)
    {
        $this->container['variation_name'] = $variation_name;

        return $this;
    }

    /**
     * Gets variation_number
     *
     * @return int
     */
    public function getVariationNumber()
    {
        return $this->container['variation_number'];
    }

    /**
     * Sets variation_number
     *
     * @param int $variation_number Variation number
     *
     * @return $this
     */
    public function setVariationNumber($variation_number)
    {
        $this->container['variation_number'] = $variation_number;

        return $this;
    }

    /**
     * Gets winner
     *
     * @return bool
     */
    public function getWinner()
    {
        return $this->container['winner'];
    }

    /**
     * Sets winner
     *
     * @param bool $winner True if this variation has been declared the winner
     *
     * @return $this
     */
    public function setWinner($winner)
    {
        $this->container['winner'] = $winner;

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


