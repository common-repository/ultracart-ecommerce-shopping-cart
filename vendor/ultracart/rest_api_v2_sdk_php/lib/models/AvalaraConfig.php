<?php
/**
 * AvalaraConfig
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
 * AvalaraConfig Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvalaraConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvalaraConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'active' => 'bool',
        'avalara_oid' => 'int',
        'company_id' => 'string',
        'enable_upc' => 'bool',
        'estimate_only' => 'bool',
        'guest_customer_code' => 'string',
        'last_test_dts' => 'string',
        'license_key' => 'string',
        'sandbox' => 'bool',
        'send_test_orders' => 'bool',
        'service_url' => 'string',
        'test_results' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'active' => null,
        'avalara_oid' => 'int32',
        'company_id' => null,
        'enable_upc' => null,
        'estimate_only' => null,
        'guest_customer_code' => null,
        'last_test_dts' => 'dateTime',
        'license_key' => null,
        'sandbox' => null,
        'send_test_orders' => null,
        'service_url' => null,
        'test_results' => null
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
        'account_id' => 'account_id',
        'active' => 'active',
        'avalara_oid' => 'avalara_oid',
        'company_id' => 'company_id',
        'enable_upc' => 'enable_upc',
        'estimate_only' => 'estimate_only',
        'guest_customer_code' => 'guest_customer_code',
        'last_test_dts' => 'last_test_dts',
        'license_key' => 'license_key',
        'sandbox' => 'sandbox',
        'send_test_orders' => 'send_test_orders',
        'service_url' => 'service_url',
        'test_results' => 'test_results'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'active' => 'setActive',
        'avalara_oid' => 'setAvalaraOid',
        'company_id' => 'setCompanyId',
        'enable_upc' => 'setEnableUpc',
        'estimate_only' => 'setEstimateOnly',
        'guest_customer_code' => 'setGuestCustomerCode',
        'last_test_dts' => 'setLastTestDts',
        'license_key' => 'setLicenseKey',
        'sandbox' => 'setSandbox',
        'send_test_orders' => 'setSendTestOrders',
        'service_url' => 'setServiceUrl',
        'test_results' => 'setTestResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'active' => 'getActive',
        'avalara_oid' => 'getAvalaraOid',
        'company_id' => 'getCompanyId',
        'enable_upc' => 'getEnableUpc',
        'estimate_only' => 'getEstimateOnly',
        'guest_customer_code' => 'getGuestCustomerCode',
        'last_test_dts' => 'getLastTestDts',
        'license_key' => 'getLicenseKey',
        'sandbox' => 'getSandbox',
        'send_test_orders' => 'getSendTestOrders',
        'service_url' => 'getServiceUrl',
        'test_results' => 'getTestResults'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['avalara_oid'] = isset($data['avalara_oid']) ? $data['avalara_oid'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['enable_upc'] = isset($data['enable_upc']) ? $data['enable_upc'] : null;
        $this->container['estimate_only'] = isset($data['estimate_only']) ? $data['estimate_only'] : null;
        $this->container['guest_customer_code'] = isset($data['guest_customer_code']) ? $data['guest_customer_code'] : null;
        $this->container['last_test_dts'] = isset($data['last_test_dts']) ? $data['last_test_dts'] : null;
        $this->container['license_key'] = isset($data['license_key']) ? $data['license_key'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['send_test_orders'] = isset($data['send_test_orders']) ? $data['send_test_orders'] : null;
        $this->container['service_url'] = isset($data['service_url']) ? $data['service_url'] : null;
        $this->container['test_results'] = isset($data['test_results']) ? $data['test_results'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id Avalara account ID
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active True if Avalara is active for this merchant
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets avalara_oid
     *
     * @return int
     */
    public function getAvalaraOid()
    {
        return $this->container['avalara_oid'];
    }

    /**
     * Sets avalara_oid
     *
     * @param int $avalara_oid Unique identifier for this avalara config object
     *
     * @return $this
     */
    public function setAvalaraOid($avalara_oid)
    {
        $this->container['avalara_oid'] = $avalara_oid;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id Avalara company ID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets enable_upc
     *
     * @return bool
     */
    public function getEnableUpc()
    {
        return $this->container['enable_upc'];
    }

    /**
     * Sets enable_upc
     *
     * @param bool $enable_upc True if this Avalara configuration is set to enable tax valuation by UPC
     *
     * @return $this
     */
    public function setEnableUpc($enable_upc)
    {
        $this->container['enable_upc'] = $enable_upc;

        return $this;
    }

    /**
     * Gets estimate_only
     *
     * @return bool
     */
    public function getEstimateOnly()
    {
        return $this->container['estimate_only'];
    }

    /**
     * Sets estimate_only
     *
     * @param bool $estimate_only True if this Avalara configuration is to estimate taxes only and not report placed orders to Avalara
     *
     * @return $this
     */
    public function setEstimateOnly($estimate_only)
    {
        $this->container['estimate_only'] = $estimate_only;

        return $this;
    }

    /**
     * Gets guest_customer_code
     *
     * @return string
     */
    public function getGuestCustomerCode()
    {
        return $this->container['guest_customer_code'];
    }

    /**
     * Sets guest_customer_code
     *
     * @param string $guest_customer_code Optional customer code for customers without profiles, defaults to GuestCustomer
     *
     * @return $this
     */
    public function setGuestCustomerCode($guest_customer_code)
    {
        $this->container['guest_customer_code'] = $guest_customer_code;

        return $this;
    }

    /**
     * Gets last_test_dts
     *
     * @return string
     */
    public function getLastTestDts()
    {
        return $this->container['last_test_dts'];
    }

    /**
     * Sets last_test_dts
     *
     * @param string $last_test_dts Date/time of the connection test to Avalara
     *
     * @return $this
     */
    public function setLastTestDts($last_test_dts)
    {
        $this->container['last_test_dts'] = $last_test_dts;

        return $this;
    }

    /**
     * Gets license_key
     *
     * @return string
     */
    public function getLicenseKey()
    {
        return $this->container['license_key'];
    }

    /**
     * Sets license_key
     *
     * @param string $license_key Avalara license key
     *
     * @return $this
     */
    public function setLicenseKey($license_key)
    {
        $this->container['license_key'] = $license_key;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool $sandbox True if this Avalara instance is pointed at the Avalara Sandbox
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets send_test_orders
     *
     * @return bool
     */
    public function getSendTestOrders()
    {
        return $this->container['send_test_orders'];
    }

    /**
     * Sets send_test_orders
     *
     * @param bool $send_test_orders Send test orders through to Avalara.  The default is to not transmit test orders to Avalara.
     *
     * @return $this
     */
    public function setSendTestOrders($send_test_orders)
    {
        $this->container['send_test_orders'] = $send_test_orders;

        return $this;
    }

    /**
     * Gets service_url
     *
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->container['service_url'];
    }

    /**
     * Sets service_url
     *
     * @param string $service_url Avalara service URL
     *
     * @return $this
     */
    public function setServiceUrl($service_url)
    {
        $this->container['service_url'] = $service_url;

        return $this;
    }

    /**
     * Gets test_results
     *
     * @return string
     */
    public function getTestResults()
    {
        return $this->container['test_results'];
    }

    /**
     * Sets test_results
     *
     * @param string $test_results Test results of the last connection test to Avalara
     *
     * @return $this
     */
    public function setTestResults($test_results)
    {
        $this->container['test_results'] = $test_results;

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


