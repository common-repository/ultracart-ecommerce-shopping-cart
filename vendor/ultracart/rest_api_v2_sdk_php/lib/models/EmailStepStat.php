<?php
/**
 * EmailStepStat
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
 * EmailStepStat Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailStepStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailStepStat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'left_conversion_count' => 'int',
        'left_conversion_count_formatted' => 'string',
        'left_customer_count' => 'int',
        'left_customer_count_formatted' => 'string',
        'left_order_count' => 'int',
        'left_order_count_formatted' => 'string',
        'left_profit' => 'float',
        'left_profit_formatted' => 'string',
        'left_revenue' => 'float',
        'left_revenue_formatted' => 'string',
        'right_conversion_count' => 'int',
        'right_conversion_count_formatted' => 'string',
        'right_customer_count' => 'int',
        'right_customer_count_formatted' => 'string',
        'right_order_count' => 'int',
        'right_order_count_formatted' => 'string',
        'right_profit' => 'float',
        'right_profit_formatted' => 'string',
        'right_revenue' => 'float',
        'right_revenue_formatted' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'left_conversion_count' => 'int32',
        'left_conversion_count_formatted' => null,
        'left_customer_count' => 'int32',
        'left_customer_count_formatted' => null,
        'left_order_count' => 'int32',
        'left_order_count_formatted' => null,
        'left_profit' => null,
        'left_profit_formatted' => null,
        'left_revenue' => null,
        'left_revenue_formatted' => null,
        'right_conversion_count' => 'int32',
        'right_conversion_count_formatted' => null,
        'right_customer_count' => 'int32',
        'right_customer_count_formatted' => null,
        'right_order_count' => 'int32',
        'right_order_count_formatted' => null,
        'right_profit' => null,
        'right_profit_formatted' => null,
        'right_revenue' => null,
        'right_revenue_formatted' => null
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
        'left_conversion_count' => 'left_conversion_count',
        'left_conversion_count_formatted' => 'left_conversion_count_formatted',
        'left_customer_count' => 'left_customer_count',
        'left_customer_count_formatted' => 'left_customer_count_formatted',
        'left_order_count' => 'left_order_count',
        'left_order_count_formatted' => 'left_order_count_formatted',
        'left_profit' => 'left_profit',
        'left_profit_formatted' => 'left_profit_formatted',
        'left_revenue' => 'left_revenue',
        'left_revenue_formatted' => 'left_revenue_formatted',
        'right_conversion_count' => 'right_conversion_count',
        'right_conversion_count_formatted' => 'right_conversion_count_formatted',
        'right_customer_count' => 'right_customer_count',
        'right_customer_count_formatted' => 'right_customer_count_formatted',
        'right_order_count' => 'right_order_count',
        'right_order_count_formatted' => 'right_order_count_formatted',
        'right_profit' => 'right_profit',
        'right_profit_formatted' => 'right_profit_formatted',
        'right_revenue' => 'right_revenue',
        'right_revenue_formatted' => 'right_revenue_formatted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'left_conversion_count' => 'setLeftConversionCount',
        'left_conversion_count_formatted' => 'setLeftConversionCountFormatted',
        'left_customer_count' => 'setLeftCustomerCount',
        'left_customer_count_formatted' => 'setLeftCustomerCountFormatted',
        'left_order_count' => 'setLeftOrderCount',
        'left_order_count_formatted' => 'setLeftOrderCountFormatted',
        'left_profit' => 'setLeftProfit',
        'left_profit_formatted' => 'setLeftProfitFormatted',
        'left_revenue' => 'setLeftRevenue',
        'left_revenue_formatted' => 'setLeftRevenueFormatted',
        'right_conversion_count' => 'setRightConversionCount',
        'right_conversion_count_formatted' => 'setRightConversionCountFormatted',
        'right_customer_count' => 'setRightCustomerCount',
        'right_customer_count_formatted' => 'setRightCustomerCountFormatted',
        'right_order_count' => 'setRightOrderCount',
        'right_order_count_formatted' => 'setRightOrderCountFormatted',
        'right_profit' => 'setRightProfit',
        'right_profit_formatted' => 'setRightProfitFormatted',
        'right_revenue' => 'setRightRevenue',
        'right_revenue_formatted' => 'setRightRevenueFormatted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'left_conversion_count' => 'getLeftConversionCount',
        'left_conversion_count_formatted' => 'getLeftConversionCountFormatted',
        'left_customer_count' => 'getLeftCustomerCount',
        'left_customer_count_formatted' => 'getLeftCustomerCountFormatted',
        'left_order_count' => 'getLeftOrderCount',
        'left_order_count_formatted' => 'getLeftOrderCountFormatted',
        'left_profit' => 'getLeftProfit',
        'left_profit_formatted' => 'getLeftProfitFormatted',
        'left_revenue' => 'getLeftRevenue',
        'left_revenue_formatted' => 'getLeftRevenueFormatted',
        'right_conversion_count' => 'getRightConversionCount',
        'right_conversion_count_formatted' => 'getRightConversionCountFormatted',
        'right_customer_count' => 'getRightCustomerCount',
        'right_customer_count_formatted' => 'getRightCustomerCountFormatted',
        'right_order_count' => 'getRightOrderCount',
        'right_order_count_formatted' => 'getRightOrderCountFormatted',
        'right_profit' => 'getRightProfit',
        'right_profit_formatted' => 'getRightProfitFormatted',
        'right_revenue' => 'getRightRevenue',
        'right_revenue_formatted' => 'getRightRevenueFormatted'
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
        $this->container['left_conversion_count'] = isset($data['left_conversion_count']) ? $data['left_conversion_count'] : null;
        $this->container['left_conversion_count_formatted'] = isset($data['left_conversion_count_formatted']) ? $data['left_conversion_count_formatted'] : null;
        $this->container['left_customer_count'] = isset($data['left_customer_count']) ? $data['left_customer_count'] : null;
        $this->container['left_customer_count_formatted'] = isset($data['left_customer_count_formatted']) ? $data['left_customer_count_formatted'] : null;
        $this->container['left_order_count'] = isset($data['left_order_count']) ? $data['left_order_count'] : null;
        $this->container['left_order_count_formatted'] = isset($data['left_order_count_formatted']) ? $data['left_order_count_formatted'] : null;
        $this->container['left_profit'] = isset($data['left_profit']) ? $data['left_profit'] : null;
        $this->container['left_profit_formatted'] = isset($data['left_profit_formatted']) ? $data['left_profit_formatted'] : null;
        $this->container['left_revenue'] = isset($data['left_revenue']) ? $data['left_revenue'] : null;
        $this->container['left_revenue_formatted'] = isset($data['left_revenue_formatted']) ? $data['left_revenue_formatted'] : null;
        $this->container['right_conversion_count'] = isset($data['right_conversion_count']) ? $data['right_conversion_count'] : null;
        $this->container['right_conversion_count_formatted'] = isset($data['right_conversion_count_formatted']) ? $data['right_conversion_count_formatted'] : null;
        $this->container['right_customer_count'] = isset($data['right_customer_count']) ? $data['right_customer_count'] : null;
        $this->container['right_customer_count_formatted'] = isset($data['right_customer_count_formatted']) ? $data['right_customer_count_formatted'] : null;
        $this->container['right_order_count'] = isset($data['right_order_count']) ? $data['right_order_count'] : null;
        $this->container['right_order_count_formatted'] = isset($data['right_order_count_formatted']) ? $data['right_order_count_formatted'] : null;
        $this->container['right_profit'] = isset($data['right_profit']) ? $data['right_profit'] : null;
        $this->container['right_profit_formatted'] = isset($data['right_profit_formatted']) ? $data['right_profit_formatted'] : null;
        $this->container['right_revenue'] = isset($data['right_revenue']) ? $data['right_revenue'] : null;
        $this->container['right_revenue_formatted'] = isset($data['right_revenue_formatted']) ? $data['right_revenue_formatted'] : null;
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
     * Gets left_conversion_count
     *
     * @return int
     */
    public function getLeftConversionCount()
    {
        return $this->container['left_conversion_count'];
    }

    /**
     * Sets left_conversion_count
     *
     * @param int $left_conversion_count conversion count (left/default side)
     *
     * @return $this
     */
    public function setLeftConversionCount($left_conversion_count)
    {
        $this->container['left_conversion_count'] = $left_conversion_count;

        return $this;
    }

    /**
     * Gets left_conversion_count_formatted
     *
     * @return string
     */
    public function getLeftConversionCountFormatted()
    {
        return $this->container['left_conversion_count_formatted'];
    }

    /**
     * Sets left_conversion_count_formatted
     *
     * @param string $left_conversion_count_formatted conversion count formatted (left/default side)
     *
     * @return $this
     */
    public function setLeftConversionCountFormatted($left_conversion_count_formatted)
    {
        $this->container['left_conversion_count_formatted'] = $left_conversion_count_formatted;

        return $this;
    }

    /**
     * Gets left_customer_count
     *
     * @return int
     */
    public function getLeftCustomerCount()
    {
        return $this->container['left_customer_count'];
    }

    /**
     * Sets left_customer_count
     *
     * @param int $left_customer_count customer count (left/default side)
     *
     * @return $this
     */
    public function setLeftCustomerCount($left_customer_count)
    {
        $this->container['left_customer_count'] = $left_customer_count;

        return $this;
    }

    /**
     * Gets left_customer_count_formatted
     *
     * @return string
     */
    public function getLeftCustomerCountFormatted()
    {
        return $this->container['left_customer_count_formatted'];
    }

    /**
     * Sets left_customer_count_formatted
     *
     * @param string $left_customer_count_formatted customer count formatted (left/default side)
     *
     * @return $this
     */
    public function setLeftCustomerCountFormatted($left_customer_count_formatted)
    {
        $this->container['left_customer_count_formatted'] = $left_customer_count_formatted;

        return $this;
    }

    /**
     * Gets left_order_count
     *
     * @return int
     */
    public function getLeftOrderCount()
    {
        return $this->container['left_order_count'];
    }

    /**
     * Sets left_order_count
     *
     * @param int $left_order_count order count (left/default side)
     *
     * @return $this
     */
    public function setLeftOrderCount($left_order_count)
    {
        $this->container['left_order_count'] = $left_order_count;

        return $this;
    }

    /**
     * Gets left_order_count_formatted
     *
     * @return string
     */
    public function getLeftOrderCountFormatted()
    {
        return $this->container['left_order_count_formatted'];
    }

    /**
     * Sets left_order_count_formatted
     *
     * @param string $left_order_count_formatted order count formatted (left/default side)
     *
     * @return $this
     */
    public function setLeftOrderCountFormatted($left_order_count_formatted)
    {
        $this->container['left_order_count_formatted'] = $left_order_count_formatted;

        return $this;
    }

    /**
     * Gets left_profit
     *
     * @return float
     */
    public function getLeftProfit()
    {
        return $this->container['left_profit'];
    }

    /**
     * Sets left_profit
     *
     * @param float $left_profit profit (left/default side)
     *
     * @return $this
     */
    public function setLeftProfit($left_profit)
    {
        $this->container['left_profit'] = $left_profit;

        return $this;
    }

    /**
     * Gets left_profit_formatted
     *
     * @return string
     */
    public function getLeftProfitFormatted()
    {
        return $this->container['left_profit_formatted'];
    }

    /**
     * Sets left_profit_formatted
     *
     * @param string $left_profit_formatted profit formatted (left/default side)
     *
     * @return $this
     */
    public function setLeftProfitFormatted($left_profit_formatted)
    {
        $this->container['left_profit_formatted'] = $left_profit_formatted;

        return $this;
    }

    /**
     * Gets left_revenue
     *
     * @return float
     */
    public function getLeftRevenue()
    {
        return $this->container['left_revenue'];
    }

    /**
     * Sets left_revenue
     *
     * @param float $left_revenue revenue (left/default side)
     *
     * @return $this
     */
    public function setLeftRevenue($left_revenue)
    {
        $this->container['left_revenue'] = $left_revenue;

        return $this;
    }

    /**
     * Gets left_revenue_formatted
     *
     * @return string
     */
    public function getLeftRevenueFormatted()
    {
        return $this->container['left_revenue_formatted'];
    }

    /**
     * Sets left_revenue_formatted
     *
     * @param string $left_revenue_formatted revenue formatted (left/default side)
     *
     * @return $this
     */
    public function setLeftRevenueFormatted($left_revenue_formatted)
    {
        $this->container['left_revenue_formatted'] = $left_revenue_formatted;

        return $this;
    }

    /**
     * Gets right_conversion_count
     *
     * @return int
     */
    public function getRightConversionCount()
    {
        return $this->container['right_conversion_count'];
    }

    /**
     * Sets right_conversion_count
     *
     * @param int $right_conversion_count conversion count (right side)
     *
     * @return $this
     */
    public function setRightConversionCount($right_conversion_count)
    {
        $this->container['right_conversion_count'] = $right_conversion_count;

        return $this;
    }

    /**
     * Gets right_conversion_count_formatted
     *
     * @return string
     */
    public function getRightConversionCountFormatted()
    {
        return $this->container['right_conversion_count_formatted'];
    }

    /**
     * Sets right_conversion_count_formatted
     *
     * @param string $right_conversion_count_formatted conversion count formatted (right side)
     *
     * @return $this
     */
    public function setRightConversionCountFormatted($right_conversion_count_formatted)
    {
        $this->container['right_conversion_count_formatted'] = $right_conversion_count_formatted;

        return $this;
    }

    /**
     * Gets right_customer_count
     *
     * @return int
     */
    public function getRightCustomerCount()
    {
        return $this->container['right_customer_count'];
    }

    /**
     * Sets right_customer_count
     *
     * @param int $right_customer_count customer count (right side)
     *
     * @return $this
     */
    public function setRightCustomerCount($right_customer_count)
    {
        $this->container['right_customer_count'] = $right_customer_count;

        return $this;
    }

    /**
     * Gets right_customer_count_formatted
     *
     * @return string
     */
    public function getRightCustomerCountFormatted()
    {
        return $this->container['right_customer_count_formatted'];
    }

    /**
     * Sets right_customer_count_formatted
     *
     * @param string $right_customer_count_formatted customer count formatted (right side)
     *
     * @return $this
     */
    public function setRightCustomerCountFormatted($right_customer_count_formatted)
    {
        $this->container['right_customer_count_formatted'] = $right_customer_count_formatted;

        return $this;
    }

    /**
     * Gets right_order_count
     *
     * @return int
     */
    public function getRightOrderCount()
    {
        return $this->container['right_order_count'];
    }

    /**
     * Sets right_order_count
     *
     * @param int $right_order_count order count (right side)
     *
     * @return $this
     */
    public function setRightOrderCount($right_order_count)
    {
        $this->container['right_order_count'] = $right_order_count;

        return $this;
    }

    /**
     * Gets right_order_count_formatted
     *
     * @return string
     */
    public function getRightOrderCountFormatted()
    {
        return $this->container['right_order_count_formatted'];
    }

    /**
     * Sets right_order_count_formatted
     *
     * @param string $right_order_count_formatted order count formatted (right side)
     *
     * @return $this
     */
    public function setRightOrderCountFormatted($right_order_count_formatted)
    {
        $this->container['right_order_count_formatted'] = $right_order_count_formatted;

        return $this;
    }

    /**
     * Gets right_profit
     *
     * @return float
     */
    public function getRightProfit()
    {
        return $this->container['right_profit'];
    }

    /**
     * Sets right_profit
     *
     * @param float $right_profit profit (right side)
     *
     * @return $this
     */
    public function setRightProfit($right_profit)
    {
        $this->container['right_profit'] = $right_profit;

        return $this;
    }

    /**
     * Gets right_profit_formatted
     *
     * @return string
     */
    public function getRightProfitFormatted()
    {
        return $this->container['right_profit_formatted'];
    }

    /**
     * Sets right_profit_formatted
     *
     * @param string $right_profit_formatted profit formatted (right side)
     *
     * @return $this
     */
    public function setRightProfitFormatted($right_profit_formatted)
    {
        $this->container['right_profit_formatted'] = $right_profit_formatted;

        return $this;
    }

    /**
     * Gets right_revenue
     *
     * @return float
     */
    public function getRightRevenue()
    {
        return $this->container['right_revenue'];
    }

    /**
     * Sets right_revenue
     *
     * @param float $right_revenue revenue (right side)
     *
     * @return $this
     */
    public function setRightRevenue($right_revenue)
    {
        $this->container['right_revenue'] = $right_revenue;

        return $this;
    }

    /**
     * Gets right_revenue_formatted
     *
     * @return string
     */
    public function getRightRevenueFormatted()
    {
        return $this->container['right_revenue_formatted'];
    }

    /**
     * Sets right_revenue_formatted
     *
     * @param string $right_revenue_formatted revenue formatted (right side)
     *
     * @return $this
     */
    public function setRightRevenueFormatted($right_revenue_formatted)
    {
        $this->container['right_revenue_formatted'] = $right_revenue_formatted;

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


