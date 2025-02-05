<?php
/**
 * EmailPerformance
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
 * EmailPerformance Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailPerformance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailPerformance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active_customers' => 'int',
        'actual_customers' => 'int',
        'bounce_count' => 'int',
        'bounce_percentage' => 'float',
        'bounce_percentage_formatted' => 'string',
        'customer_histogram' => '\ultracart\v2\models\EmailPerformanceCustomerHistogram',
        'daily_stats' => '\ultracart\v2\models\EmailPerformanceDaily[]',
        'delivered_count' => 'int',
        'max_active_customers' => 'int',
        'max_emails_per_day' => 'int',
        'max_emails_per_hour' => 'int',
        'max_emails_per_month' => 'int',
        'paused_for_spam' => 'bool',
        'revenue' => 'float',
        'sent_emails_per_day' => 'int',
        'sent_emails_per_hour' => 'int',
        'sent_emails_per_month' => 'int',
        'sequence_send_count' => 'int',
        'spam_count' => 'int',
        'spam_percentage' => 'float',
        'spam_percentage_formatted' => 'string',
        'transactional_send_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active_customers' => 'int32',
        'actual_customers' => 'int32',
        'bounce_count' => 'int32',
        'bounce_percentage' => null,
        'bounce_percentage_formatted' => null,
        'customer_histogram' => null,
        'daily_stats' => null,
        'delivered_count' => 'int32',
        'max_active_customers' => 'int32',
        'max_emails_per_day' => 'int32',
        'max_emails_per_hour' => 'int32',
        'max_emails_per_month' => 'int32',
        'paused_for_spam' => null,
        'revenue' => null,
        'sent_emails_per_day' => 'int32',
        'sent_emails_per_hour' => 'int32',
        'sent_emails_per_month' => 'int32',
        'sequence_send_count' => 'int32',
        'spam_count' => 'int32',
        'spam_percentage' => null,
        'spam_percentage_formatted' => null,
        'transactional_send_count' => 'int32'
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
        'active_customers' => 'active_customers',
        'actual_customers' => 'actual_customers',
        'bounce_count' => 'bounce_count',
        'bounce_percentage' => 'bounce_percentage',
        'bounce_percentage_formatted' => 'bounce_percentage_formatted',
        'customer_histogram' => 'customer_histogram',
        'daily_stats' => 'daily_stats',
        'delivered_count' => 'delivered_count',
        'max_active_customers' => 'max_active_customers',
        'max_emails_per_day' => 'max_emails_per_day',
        'max_emails_per_hour' => 'max_emails_per_hour',
        'max_emails_per_month' => 'max_emails_per_month',
        'paused_for_spam' => 'paused_for_spam',
        'revenue' => 'revenue',
        'sent_emails_per_day' => 'sent_emails_per_day',
        'sent_emails_per_hour' => 'sent_emails_per_hour',
        'sent_emails_per_month' => 'sent_emails_per_month',
        'sequence_send_count' => 'sequence_send_count',
        'spam_count' => 'spam_count',
        'spam_percentage' => 'spam_percentage',
        'spam_percentage_formatted' => 'spam_percentage_formatted',
        'transactional_send_count' => 'transactional_send_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_customers' => 'setActiveCustomers',
        'actual_customers' => 'setActualCustomers',
        'bounce_count' => 'setBounceCount',
        'bounce_percentage' => 'setBouncePercentage',
        'bounce_percentage_formatted' => 'setBouncePercentageFormatted',
        'customer_histogram' => 'setCustomerHistogram',
        'daily_stats' => 'setDailyStats',
        'delivered_count' => 'setDeliveredCount',
        'max_active_customers' => 'setMaxActiveCustomers',
        'max_emails_per_day' => 'setMaxEmailsPerDay',
        'max_emails_per_hour' => 'setMaxEmailsPerHour',
        'max_emails_per_month' => 'setMaxEmailsPerMonth',
        'paused_for_spam' => 'setPausedForSpam',
        'revenue' => 'setRevenue',
        'sent_emails_per_day' => 'setSentEmailsPerDay',
        'sent_emails_per_hour' => 'setSentEmailsPerHour',
        'sent_emails_per_month' => 'setSentEmailsPerMonth',
        'sequence_send_count' => 'setSequenceSendCount',
        'spam_count' => 'setSpamCount',
        'spam_percentage' => 'setSpamPercentage',
        'spam_percentage_formatted' => 'setSpamPercentageFormatted',
        'transactional_send_count' => 'setTransactionalSendCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_customers' => 'getActiveCustomers',
        'actual_customers' => 'getActualCustomers',
        'bounce_count' => 'getBounceCount',
        'bounce_percentage' => 'getBouncePercentage',
        'bounce_percentage_formatted' => 'getBouncePercentageFormatted',
        'customer_histogram' => 'getCustomerHistogram',
        'daily_stats' => 'getDailyStats',
        'delivered_count' => 'getDeliveredCount',
        'max_active_customers' => 'getMaxActiveCustomers',
        'max_emails_per_day' => 'getMaxEmailsPerDay',
        'max_emails_per_hour' => 'getMaxEmailsPerHour',
        'max_emails_per_month' => 'getMaxEmailsPerMonth',
        'paused_for_spam' => 'getPausedForSpam',
        'revenue' => 'getRevenue',
        'sent_emails_per_day' => 'getSentEmailsPerDay',
        'sent_emails_per_hour' => 'getSentEmailsPerHour',
        'sent_emails_per_month' => 'getSentEmailsPerMonth',
        'sequence_send_count' => 'getSequenceSendCount',
        'spam_count' => 'getSpamCount',
        'spam_percentage' => 'getSpamPercentage',
        'spam_percentage_formatted' => 'getSpamPercentageFormatted',
        'transactional_send_count' => 'getTransactionalSendCount'
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
        $this->container['active_customers'] = isset($data['active_customers']) ? $data['active_customers'] : null;
        $this->container['actual_customers'] = isset($data['actual_customers']) ? $data['actual_customers'] : null;
        $this->container['bounce_count'] = isset($data['bounce_count']) ? $data['bounce_count'] : null;
        $this->container['bounce_percentage'] = isset($data['bounce_percentage']) ? $data['bounce_percentage'] : null;
        $this->container['bounce_percentage_formatted'] = isset($data['bounce_percentage_formatted']) ? $data['bounce_percentage_formatted'] : null;
        $this->container['customer_histogram'] = isset($data['customer_histogram']) ? $data['customer_histogram'] : null;
        $this->container['daily_stats'] = isset($data['daily_stats']) ? $data['daily_stats'] : null;
        $this->container['delivered_count'] = isset($data['delivered_count']) ? $data['delivered_count'] : null;
        $this->container['max_active_customers'] = isset($data['max_active_customers']) ? $data['max_active_customers'] : null;
        $this->container['max_emails_per_day'] = isset($data['max_emails_per_day']) ? $data['max_emails_per_day'] : null;
        $this->container['max_emails_per_hour'] = isset($data['max_emails_per_hour']) ? $data['max_emails_per_hour'] : null;
        $this->container['max_emails_per_month'] = isset($data['max_emails_per_month']) ? $data['max_emails_per_month'] : null;
        $this->container['paused_for_spam'] = isset($data['paused_for_spam']) ? $data['paused_for_spam'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['sent_emails_per_day'] = isset($data['sent_emails_per_day']) ? $data['sent_emails_per_day'] : null;
        $this->container['sent_emails_per_hour'] = isset($data['sent_emails_per_hour']) ? $data['sent_emails_per_hour'] : null;
        $this->container['sent_emails_per_month'] = isset($data['sent_emails_per_month']) ? $data['sent_emails_per_month'] : null;
        $this->container['sequence_send_count'] = isset($data['sequence_send_count']) ? $data['sequence_send_count'] : null;
        $this->container['spam_count'] = isset($data['spam_count']) ? $data['spam_count'] : null;
        $this->container['spam_percentage'] = isset($data['spam_percentage']) ? $data['spam_percentage'] : null;
        $this->container['spam_percentage_formatted'] = isset($data['spam_percentage_formatted']) ? $data['spam_percentage_formatted'] : null;
        $this->container['transactional_send_count'] = isset($data['transactional_send_count']) ? $data['transactional_send_count'] : null;
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
     * Gets active_customers
     *
     * @return int
     */
    public function getActiveCustomers()
    {
        return $this->container['active_customers'];
    }

    /**
     * Sets active_customers
     *
     * @param int $active_customers Active customers.  The value will be -1 if calculation is pending.
     *
     * @return $this
     */
    public function setActiveCustomers($active_customers)
    {
        $this->container['active_customers'] = $active_customers;

        return $this;
    }

    /**
     * Gets actual_customers
     *
     * @return int
     */
    public function getActualCustomers()
    {
        return $this->container['actual_customers'];
    }

    /**
     * Sets actual_customers
     *
     * @param int $actual_customers Actual customers that they have regardless of active state.  The value will be -1 if calculation is pending.
     *
     * @return $this
     */
    public function setActualCustomers($actual_customers)
    {
        $this->container['actual_customers'] = $actual_customers;

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
     * @param int $bounce_count Bounce count
     *
     * @return $this
     */
    public function setBounceCount($bounce_count)
    {
        $this->container['bounce_count'] = $bounce_count;

        return $this;
    }

    /**
     * Gets bounce_percentage
     *
     * @return float
     */
    public function getBouncePercentage()
    {
        return $this->container['bounce_percentage'];
    }

    /**
     * Sets bounce_percentage
     *
     * @param float $bounce_percentage bounce percentage rate based upon our look back window.  This should be under five percent or the account will be paused for sending.
     *
     * @return $this
     */
    public function setBouncePercentage($bounce_percentage)
    {
        $this->container['bounce_percentage'] = $bounce_percentage;

        return $this;
    }

    /**
     * Gets bounce_percentage_formatted
     *
     * @return string
     */
    public function getBouncePercentageFormatted()
    {
        return $this->container['bounce_percentage_formatted'];
    }

    /**
     * Sets bounce_percentage_formatted
     *
     * @param string $bounce_percentage_formatted bounce percentage rate (formatted) based upon our look back window.  This should be under five percent or the account will be paused for sending.
     *
     * @return $this
     */
    public function setBouncePercentageFormatted($bounce_percentage_formatted)
    {
        $this->container['bounce_percentage_formatted'] = $bounce_percentage_formatted;

        return $this;
    }

    /**
     * Gets customer_histogram
     *
     * @return \ultracart\v2\models\EmailPerformanceCustomerHistogram
     */
    public function getCustomerHistogram()
    {
        return $this->container['customer_histogram'];
    }

    /**
     * Sets customer_histogram
     *
     * @param \ultracart\v2\models\EmailPerformanceCustomerHistogram $customer_histogram customer_histogram
     *
     * @return $this
     */
    public function setCustomerHistogram($customer_histogram)
    {
        $this->container['customer_histogram'] = $customer_histogram;

        return $this;
    }

    /**
     * Gets daily_stats
     *
     * @return \ultracart\v2\models\EmailPerformanceDaily[]
     */
    public function getDailyStats()
    {
        return $this->container['daily_stats'];
    }

    /**
     * Sets daily_stats
     *
     * @param \ultracart\v2\models\EmailPerformanceDaily[] $daily_stats Daily statistics used for charting
     *
     * @return $this
     */
    public function setDailyStats($daily_stats)
    {
        $this->container['daily_stats'] = $daily_stats;

        return $this;
    }

    /**
     * Gets delivered_count
     *
     * @return int
     */
    public function getDeliveredCount()
    {
        return $this->container['delivered_count'];
    }

    /**
     * Sets delivered_count
     *
     * @param int $delivered_count Delivered count
     *
     * @return $this
     */
    public function setDeliveredCount($delivered_count)
    {
        $this->container['delivered_count'] = $delivered_count;

        return $this;
    }

    /**
     * Gets max_active_customers
     *
     * @return int
     */
    public function getMaxActiveCustomers()
    {
        return $this->container['max_active_customers'];
    }

    /**
     * Sets max_active_customers
     *
     * @param int $max_active_customers Maximum active customers allowed under their billing plan
     *
     * @return $this
     */
    public function setMaxActiveCustomers($max_active_customers)
    {
        $this->container['max_active_customers'] = $max_active_customers;

        return $this;
    }

    /**
     * Gets max_emails_per_day
     *
     * @return int
     */
    public function getMaxEmailsPerDay()
    {
        return $this->container['max_emails_per_day'];
    }

    /**
     * Sets max_emails_per_day
     *
     * @param int $max_emails_per_day Max emails per day
     *
     * @return $this
     */
    public function setMaxEmailsPerDay($max_emails_per_day)
    {
        $this->container['max_emails_per_day'] = $max_emails_per_day;

        return $this;
    }

    /**
     * Gets max_emails_per_hour
     *
     * @return int
     */
    public function getMaxEmailsPerHour()
    {
        return $this->container['max_emails_per_hour'];
    }

    /**
     * Sets max_emails_per_hour
     *
     * @param int $max_emails_per_hour Max emails per hour
     *
     * @return $this
     */
    public function setMaxEmailsPerHour($max_emails_per_hour)
    {
        $this->container['max_emails_per_hour'] = $max_emails_per_hour;

        return $this;
    }

    /**
     * Gets max_emails_per_month
     *
     * @return int
     */
    public function getMaxEmailsPerMonth()
    {
        return $this->container['max_emails_per_month'];
    }

    /**
     * Sets max_emails_per_month
     *
     * @param int $max_emails_per_month Max emails per month
     *
     * @return $this
     */
    public function setMaxEmailsPerMonth($max_emails_per_month)
    {
        $this->container['max_emails_per_month'] = $max_emails_per_month;

        return $this;
    }

    /**
     * Gets paused_for_spam
     *
     * @return bool
     */
    public function getPausedForSpam()
    {
        return $this->container['paused_for_spam'];
    }

    /**
     * Sets paused_for_spam
     *
     * @param bool $paused_for_spam True if campaign/flow emails are paused due to spam complaints.
     *
     * @return $this
     */
    public function setPausedForSpam($paused_for_spam)
    {
        $this->container['paused_for_spam'] = $paused_for_spam;

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
     * @param float $revenue Revenue
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets sent_emails_per_day
     *
     * @return int
     */
    public function getSentEmailsPerDay()
    {
        return $this->container['sent_emails_per_day'];
    }

    /**
     * Sets sent_emails_per_day
     *
     * @param int $sent_emails_per_day Sent emails last 24 hours
     *
     * @return $this
     */
    public function setSentEmailsPerDay($sent_emails_per_day)
    {
        $this->container['sent_emails_per_day'] = $sent_emails_per_day;

        return $this;
    }

    /**
     * Gets sent_emails_per_hour
     *
     * @return int
     */
    public function getSentEmailsPerHour()
    {
        return $this->container['sent_emails_per_hour'];
    }

    /**
     * Sets sent_emails_per_hour
     *
     * @param int $sent_emails_per_hour Sent emails last hour
     *
     * @return $this
     */
    public function setSentEmailsPerHour($sent_emails_per_hour)
    {
        $this->container['sent_emails_per_hour'] = $sent_emails_per_hour;

        return $this;
    }

    /**
     * Gets sent_emails_per_month
     *
     * @return int
     */
    public function getSentEmailsPerMonth()
    {
        return $this->container['sent_emails_per_month'];
    }

    /**
     * Sets sent_emails_per_month
     *
     * @param int $sent_emails_per_month Sent emails last 31 days
     *
     * @return $this
     */
    public function setSentEmailsPerMonth($sent_emails_per_month)
    {
        $this->container['sent_emails_per_month'] = $sent_emails_per_month;

        return $this;
    }

    /**
     * Gets sequence_send_count
     *
     * @return int
     */
    public function getSequenceSendCount()
    {
        return $this->container['sequence_send_count'];
    }

    /**
     * Sets sequence_send_count
     *
     * @param int $sequence_send_count Total sequence (campaign/flow) emails sent
     *
     * @return $this
     */
    public function setSequenceSendCount($sequence_send_count)
    {
        $this->container['sequence_send_count'] = $sequence_send_count;

        return $this;
    }

    /**
     * Gets spam_count
     *
     * @return int
     */
    public function getSpamCount()
    {
        return $this->container['spam_count'];
    }

    /**
     * Sets spam_count
     *
     * @param int $spam_count Spam complaints
     *
     * @return $this
     */
    public function setSpamCount($spam_count)
    {
        $this->container['spam_count'] = $spam_count;

        return $this;
    }

    /**
     * Gets spam_percentage
     *
     * @return float
     */
    public function getSpamPercentage()
    {
        return $this->container['spam_percentage'];
    }

    /**
     * Sets spam_percentage
     *
     * @param float $spam_percentage Spam percentage rate based upon our look back window.  This should be under one half a percent or the account will be paused for sending.
     *
     * @return $this
     */
    public function setSpamPercentage($spam_percentage)
    {
        $this->container['spam_percentage'] = $spam_percentage;

        return $this;
    }

    /**
     * Gets spam_percentage_formatted
     *
     * @return string
     */
    public function getSpamPercentageFormatted()
    {
        return $this->container['spam_percentage_formatted'];
    }

    /**
     * Sets spam_percentage_formatted
     *
     * @param string $spam_percentage_formatted Spam percentage rate (formatted) based upon our look back window.  This should be under one half a percent or the account will be paused for sending.
     *
     * @return $this
     */
    public function setSpamPercentageFormatted($spam_percentage_formatted)
    {
        $this->container['spam_percentage_formatted'] = $spam_percentage_formatted;

        return $this;
    }

    /**
     * Gets transactional_send_count
     *
     * @return int
     */
    public function getTransactionalSendCount()
    {
        return $this->container['transactional_send_count'];
    }

    /**
     * Sets transactional_send_count
     *
     * @param int $transactional_send_count Total transactions emails sent
     *
     * @return $this
     */
    public function setTransactionalSendCount($transactional_send_count)
    {
        $this->container['transactional_send_count'] = $transactional_send_count;

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


