<?php
/**
 * Webhook
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
 * Webhook Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Webhook implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_user_oid' => 'int',
        'api_version' => 'string',
        'application_profile' => '\ultracart\v2\models\ApiUserApplicationProfile',
        'authentication_type' => 'string',
        'basic_password' => 'string',
        'basic_username' => 'string',
        'consecutive_failures' => 'int',
        'disabled' => 'bool',
        'event_categories' => '\ultracart\v2\models\WebhookEventCategory[]',
        'iam_access_key' => 'string',
        'iam_secret_key' => 'string',
        'maximum_events' => 'int',
        'maximum_size' => 'int',
        'merchant_id' => 'string',
        'next_retry_after' => 'string',
        'pending' => 'int',
        'webhook_oid' => 'int',
        'webhook_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_user_oid' => 'int32',
        'api_version' => null,
        'application_profile' => null,
        'authentication_type' => null,
        'basic_password' => null,
        'basic_username' => null,
        'consecutive_failures' => 'int32',
        'disabled' => null,
        'event_categories' => null,
        'iam_access_key' => null,
        'iam_secret_key' => null,
        'maximum_events' => 'int32',
        'maximum_size' => 'int32',
        'merchant_id' => null,
        'next_retry_after' => 'dateTime',
        'pending' => 'int32',
        'webhook_oid' => 'int32',
        'webhook_url' => null
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
        'api_user_oid' => 'api_user_oid',
        'api_version' => 'api_version',
        'application_profile' => 'application_profile',
        'authentication_type' => 'authentication_type',
        'basic_password' => 'basic_password',
        'basic_username' => 'basic_username',
        'consecutive_failures' => 'consecutive_failures',
        'disabled' => 'disabled',
        'event_categories' => 'event_categories',
        'iam_access_key' => 'iam_access_key',
        'iam_secret_key' => 'iam_secret_key',
        'maximum_events' => 'maximum_events',
        'maximum_size' => 'maximum_size',
        'merchant_id' => 'merchant_id',
        'next_retry_after' => 'next_retry_after',
        'pending' => 'pending',
        'webhook_oid' => 'webhook_oid',
        'webhook_url' => 'webhook_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_user_oid' => 'setApiUserOid',
        'api_version' => 'setApiVersion',
        'application_profile' => 'setApplicationProfile',
        'authentication_type' => 'setAuthenticationType',
        'basic_password' => 'setBasicPassword',
        'basic_username' => 'setBasicUsername',
        'consecutive_failures' => 'setConsecutiveFailures',
        'disabled' => 'setDisabled',
        'event_categories' => 'setEventCategories',
        'iam_access_key' => 'setIamAccessKey',
        'iam_secret_key' => 'setIamSecretKey',
        'maximum_events' => 'setMaximumEvents',
        'maximum_size' => 'setMaximumSize',
        'merchant_id' => 'setMerchantId',
        'next_retry_after' => 'setNextRetryAfter',
        'pending' => 'setPending',
        'webhook_oid' => 'setWebhookOid',
        'webhook_url' => 'setWebhookUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_user_oid' => 'getApiUserOid',
        'api_version' => 'getApiVersion',
        'application_profile' => 'getApplicationProfile',
        'authentication_type' => 'getAuthenticationType',
        'basic_password' => 'getBasicPassword',
        'basic_username' => 'getBasicUsername',
        'consecutive_failures' => 'getConsecutiveFailures',
        'disabled' => 'getDisabled',
        'event_categories' => 'getEventCategories',
        'iam_access_key' => 'getIamAccessKey',
        'iam_secret_key' => 'getIamSecretKey',
        'maximum_events' => 'getMaximumEvents',
        'maximum_size' => 'getMaximumSize',
        'merchant_id' => 'getMerchantId',
        'next_retry_after' => 'getNextRetryAfter',
        'pending' => 'getPending',
        'webhook_oid' => 'getWebhookOid',
        'webhook_url' => 'getWebhookUrl'
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

    const API_VERSION__01 = '2017-03-01';
    const AUTHENTICATION_TYPE_NONE = 'none';
    const AUTHENTICATION_TYPE_BASIC = 'basic';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApiVersionAllowableValues()
    {
        return [
            self::API_VERSION__01,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationTypeAllowableValues()
    {
        return [
            self::AUTHENTICATION_TYPE_NONE,
            self::AUTHENTICATION_TYPE_BASIC,
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
        $this->container['api_user_oid'] = isset($data['api_user_oid']) ? $data['api_user_oid'] : null;
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['application_profile'] = isset($data['application_profile']) ? $data['application_profile'] : null;
        $this->container['authentication_type'] = isset($data['authentication_type']) ? $data['authentication_type'] : null;
        $this->container['basic_password'] = isset($data['basic_password']) ? $data['basic_password'] : null;
        $this->container['basic_username'] = isset($data['basic_username']) ? $data['basic_username'] : null;
        $this->container['consecutive_failures'] = isset($data['consecutive_failures']) ? $data['consecutive_failures'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['event_categories'] = isset($data['event_categories']) ? $data['event_categories'] : null;
        $this->container['iam_access_key'] = isset($data['iam_access_key']) ? $data['iam_access_key'] : null;
        $this->container['iam_secret_key'] = isset($data['iam_secret_key']) ? $data['iam_secret_key'] : null;
        $this->container['maximum_events'] = isset($data['maximum_events']) ? $data['maximum_events'] : null;
        $this->container['maximum_size'] = isset($data['maximum_size']) ? $data['maximum_size'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['next_retry_after'] = isset($data['next_retry_after']) ? $data['next_retry_after'] : null;
        $this->container['pending'] = isset($data['pending']) ? $data['pending'] : null;
        $this->container['webhook_oid'] = isset($data['webhook_oid']) ? $data['webhook_oid'] : null;
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApiVersionAllowableValues();
        if (!in_array($this->container['api_version'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'api_version', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthenticationTypeAllowableValues();
        if (!in_array($this->container['authentication_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'authentication_type', must be one of '%s'",
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

        $allowedValues = $this->getApiVersionAllowableValues();
        if (!in_array($this->container['api_version'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getAuthenticationTypeAllowableValues();
        if (!in_array($this->container['authentication_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets api_user_oid
     *
     * @return int
     */
    public function getApiUserOid()
    {
        return $this->container['api_user_oid'];
    }

    /**
     * Sets api_user_oid
     *
     * @param int $api_user_oid Populated if webhook associated with an API user
     *
     * @return $this
     */
    public function setApiUserOid($api_user_oid)
    {
        $this->container['api_user_oid'] = $api_user_oid;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string $api_version Version of the API objects that are sent in notifications
     *
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $allowedValues = $this->getApiVersionAllowableValues();
        if (!is_null($api_version) && !in_array($api_version, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'api_version', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets application_profile
     *
     * @return \ultracart\v2\models\ApiUserApplicationProfile
     */
    public function getApplicationProfile()
    {
        return $this->container['application_profile'];
    }

    /**
     * Sets application_profile
     *
     * @param \ultracart\v2\models\ApiUserApplicationProfile $application_profile application_profile
     *
     * @return $this
     */
    public function setApplicationProfile($application_profile)
    {
        $this->container['application_profile'] = $application_profile;

        return $this;
    }

    /**
     * Gets authentication_type
     *
     * @return string
     */
    public function getAuthenticationType()
    {
        return $this->container['authentication_type'];
    }

    /**
     * Sets authentication_type
     *
     * @param string $authentication_type The type of authentication this webhook will use when communicating with your server
     *
     * @return $this
     */
    public function setAuthenticationType($authentication_type)
    {
        $allowedValues = $this->getAuthenticationTypeAllowableValues();
        if (!is_null($authentication_type) && !in_array($authentication_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'authentication_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authentication_type'] = $authentication_type;

        return $this;
    }

    /**
     * Gets basic_password
     *
     * @return string
     */
    public function getBasicPassword()
    {
        return $this->container['basic_password'];
    }

    /**
     * Sets basic_password
     *
     * @param string $basic_password Basic authentication password
     *
     * @return $this
     */
    public function setBasicPassword($basic_password)
    {
        $this->container['basic_password'] = $basic_password;

        return $this;
    }

    /**
     * Gets basic_username
     *
     * @return string
     */
    public function getBasicUsername()
    {
        return $this->container['basic_username'];
    }

    /**
     * Sets basic_username
     *
     * @param string $basic_username Basic authentication user name
     *
     * @return $this
     */
    public function setBasicUsername($basic_username)
    {
        $this->container['basic_username'] = $basic_username;

        return $this;
    }

    /**
     * Gets consecutive_failures
     *
     * @return int
     */
    public function getConsecutiveFailures()
    {
        return $this->container['consecutive_failures'];
    }

    /**
     * Sets consecutive_failures
     *
     * @param int $consecutive_failures The number of consecutive failures that have occurred trying to deliver notifications to the target server
     *
     * @return $this
     */
    public function setConsecutiveFailures($consecutive_failures)
    {
        $this->container['consecutive_failures'] = $consecutive_failures;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool $disabled True if the webhook has been disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets event_categories
     *
     * @return \ultracart\v2\models\WebhookEventCategory[]
     */
    public function getEventCategories()
    {
        return $this->container['event_categories'];
    }

    /**
     * Sets event_categories
     *
     * @param \ultracart\v2\models\WebhookEventCategory[] $event_categories The categories of events.  Individual events and subscriptions are handled in the child objects.  _placeholders parameter effects the population of this on a retrieval.
     *
     * @return $this
     */
    public function setEventCategories($event_categories)
    {
        $this->container['event_categories'] = $event_categories;

        return $this;
    }

    /**
     * Gets iam_access_key
     *
     * @return string
     */
    public function getIamAccessKey()
    {
        return $this->container['iam_access_key'];
    }

    /**
     * Sets iam_access_key
     *
     * @param string $iam_access_key IAM Access Key for AWS SQS Delivery
     *
     * @return $this
     */
    public function setIamAccessKey($iam_access_key)
    {
        $this->container['iam_access_key'] = $iam_access_key;

        return $this;
    }

    /**
     * Gets iam_secret_key
     *
     * @return string
     */
    public function getIamSecretKey()
    {
        return $this->container['iam_secret_key'];
    }

    /**
     * Sets iam_secret_key
     *
     * @param string $iam_secret_key IAM Secret Key for AWS SQS Delivery
     *
     * @return $this
     */
    public function setIamSecretKey($iam_secret_key)
    {
        $this->container['iam_secret_key'] = $iam_secret_key;

        return $this;
    }

    /**
     * Gets maximum_events
     *
     * @return int
     */
    public function getMaximumEvents()
    {
        return $this->container['maximum_events'];
    }

    /**
     * Sets maximum_events
     *
     * @param int $maximum_events The maximum number of events in the payload that UltraCart will deliver
     *
     * @return $this
     */
    public function setMaximumEvents($maximum_events)
    {
        $this->container['maximum_events'] = $maximum_events;

        return $this;
    }

    /**
     * Gets maximum_size
     *
     * @return int
     */
    public function getMaximumSize()
    {
        return $this->container['maximum_size'];
    }

    /**
     * Sets maximum_size
     *
     * @param int $maximum_size The maximum size of the payload that UltraCart will deliver
     *
     * @return $this
     */
    public function setMaximumSize($maximum_size)
    {
        $this->container['maximum_size'] = $maximum_size;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id The UltraCart merchant ID that owns this webhook
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets next_retry_after
     *
     * @return string
     */
    public function getNextRetryAfter()
    {
        return $this->container['next_retry_after'];
    }

    /**
     * Sets next_retry_after
     *
     * @param string $next_retry_after The next time UltraCart will attempt delivery if failures have been occurring
     *
     * @return $this
     */
    public function setNextRetryAfter($next_retry_after)
    {
        $this->container['next_retry_after'] = $next_retry_after;

        return $this;
    }

    /**
     * Gets pending
     *
     * @return int
     */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
     * Sets pending
     *
     * @param int $pending The number of pending events for this webhook
     *
     * @return $this
     */
    public function setPending($pending)
    {
        $this->container['pending'] = $pending;

        return $this;
    }

    /**
     * Gets webhook_oid
     *
     * @return int
     */
    public function getWebhookOid()
    {
        return $this->container['webhook_oid'];
    }

    /**
     * Sets webhook_oid
     *
     * @param int $webhook_oid The object identifier for this webhook
     *
     * @return $this
     */
    public function setWebhookOid($webhook_oid)
    {
        $this->container['webhook_oid'] = $webhook_oid;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url The URL to deliver events to.  Must be HTTPS for customer related information.
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

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


