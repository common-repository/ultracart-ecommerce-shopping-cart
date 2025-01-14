<?php
/**
 * OrderFraudScore
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
 * OrderFraudScore Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderFraudScore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderFraudScore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anonymous_proxy' => 'bool',
        'bin_match' => 'string',
        'carder_email' => 'bool',
        'country_code' => 'string',
        'country_match' => 'bool',
        'customer_phone_in_billing_location' => 'string',
        'distance_km' => 'int',
        'free_email' => 'bool',
        'high_risk_country' => 'bool',
        'ip_city' => 'string',
        'ip_isp' => 'string',
        'ip_latitude' => 'string',
        'ip_longitude' => 'string',
        'ip_org' => 'string',
        'ip_region' => 'string',
        'proxy_score' => 'float',
        'score' => 'float',
        'ship_forwarder' => 'bool',
        'spam_score' => 'float',
        'transparent_proxy' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'anonymous_proxy' => null,
        'bin_match' => null,
        'carder_email' => null,
        'country_code' => null,
        'country_match' => null,
        'customer_phone_in_billing_location' => null,
        'distance_km' => 'int32',
        'free_email' => null,
        'high_risk_country' => null,
        'ip_city' => null,
        'ip_isp' => null,
        'ip_latitude' => null,
        'ip_longitude' => null,
        'ip_org' => null,
        'ip_region' => null,
        'proxy_score' => null,
        'score' => null,
        'ship_forwarder' => null,
        'spam_score' => null,
        'transparent_proxy' => null
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
        'anonymous_proxy' => 'anonymous_proxy',
        'bin_match' => 'bin_match',
        'carder_email' => 'carder_email',
        'country_code' => 'country_code',
        'country_match' => 'country_match',
        'customer_phone_in_billing_location' => 'customer_phone_in_billing_location',
        'distance_km' => 'distance_km',
        'free_email' => 'free_email',
        'high_risk_country' => 'high_risk_country',
        'ip_city' => 'ip_city',
        'ip_isp' => 'ip_isp',
        'ip_latitude' => 'ip_latitude',
        'ip_longitude' => 'ip_longitude',
        'ip_org' => 'ip_org',
        'ip_region' => 'ip_region',
        'proxy_score' => 'proxy_score',
        'score' => 'score',
        'ship_forwarder' => 'ship_forwarder',
        'spam_score' => 'spam_score',
        'transparent_proxy' => 'transparent_proxy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anonymous_proxy' => 'setAnonymousProxy',
        'bin_match' => 'setBinMatch',
        'carder_email' => 'setCarderEmail',
        'country_code' => 'setCountryCode',
        'country_match' => 'setCountryMatch',
        'customer_phone_in_billing_location' => 'setCustomerPhoneInBillingLocation',
        'distance_km' => 'setDistanceKm',
        'free_email' => 'setFreeEmail',
        'high_risk_country' => 'setHighRiskCountry',
        'ip_city' => 'setIpCity',
        'ip_isp' => 'setIpIsp',
        'ip_latitude' => 'setIpLatitude',
        'ip_longitude' => 'setIpLongitude',
        'ip_org' => 'setIpOrg',
        'ip_region' => 'setIpRegion',
        'proxy_score' => 'setProxyScore',
        'score' => 'setScore',
        'ship_forwarder' => 'setShipForwarder',
        'spam_score' => 'setSpamScore',
        'transparent_proxy' => 'setTransparentProxy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anonymous_proxy' => 'getAnonymousProxy',
        'bin_match' => 'getBinMatch',
        'carder_email' => 'getCarderEmail',
        'country_code' => 'getCountryCode',
        'country_match' => 'getCountryMatch',
        'customer_phone_in_billing_location' => 'getCustomerPhoneInBillingLocation',
        'distance_km' => 'getDistanceKm',
        'free_email' => 'getFreeEmail',
        'high_risk_country' => 'getHighRiskCountry',
        'ip_city' => 'getIpCity',
        'ip_isp' => 'getIpIsp',
        'ip_latitude' => 'getIpLatitude',
        'ip_longitude' => 'getIpLongitude',
        'ip_org' => 'getIpOrg',
        'ip_region' => 'getIpRegion',
        'proxy_score' => 'getProxyScore',
        'score' => 'getScore',
        'ship_forwarder' => 'getShipForwarder',
        'spam_score' => 'getSpamScore',
        'transparent_proxy' => 'getTransparentProxy'
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

    const BIN_MATCH_NA = 'NA';
    const BIN_MATCH_NO = 'No';
    const BIN_MATCH_NOT_FOUND = 'NotFound';
    const BIN_MATCH_YES = 'Yes';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBinMatchAllowableValues()
    {
        return [
            self::BIN_MATCH_NA,
            self::BIN_MATCH_NO,
            self::BIN_MATCH_NOT_FOUND,
            self::BIN_MATCH_YES,
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
        $this->container['anonymous_proxy'] = isset($data['anonymous_proxy']) ? $data['anonymous_proxy'] : null;
        $this->container['bin_match'] = isset($data['bin_match']) ? $data['bin_match'] : null;
        $this->container['carder_email'] = isset($data['carder_email']) ? $data['carder_email'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['country_match'] = isset($data['country_match']) ? $data['country_match'] : null;
        $this->container['customer_phone_in_billing_location'] = isset($data['customer_phone_in_billing_location']) ? $data['customer_phone_in_billing_location'] : null;
        $this->container['distance_km'] = isset($data['distance_km']) ? $data['distance_km'] : null;
        $this->container['free_email'] = isset($data['free_email']) ? $data['free_email'] : null;
        $this->container['high_risk_country'] = isset($data['high_risk_country']) ? $data['high_risk_country'] : null;
        $this->container['ip_city'] = isset($data['ip_city']) ? $data['ip_city'] : null;
        $this->container['ip_isp'] = isset($data['ip_isp']) ? $data['ip_isp'] : null;
        $this->container['ip_latitude'] = isset($data['ip_latitude']) ? $data['ip_latitude'] : null;
        $this->container['ip_longitude'] = isset($data['ip_longitude']) ? $data['ip_longitude'] : null;
        $this->container['ip_org'] = isset($data['ip_org']) ? $data['ip_org'] : null;
        $this->container['ip_region'] = isset($data['ip_region']) ? $data['ip_region'] : null;
        $this->container['proxy_score'] = isset($data['proxy_score']) ? $data['proxy_score'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['ship_forwarder'] = isset($data['ship_forwarder']) ? $data['ship_forwarder'] : null;
        $this->container['spam_score'] = isset($data['spam_score']) ? $data['spam_score'] : null;
        $this->container['transparent_proxy'] = isset($data['transparent_proxy']) ? $data['transparent_proxy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBinMatchAllowableValues();
        if (!in_array($this->container['bin_match'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bin_match', must be one of '%s'",
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

        $allowedValues = $this->getBinMatchAllowableValues();
        if (!in_array($this->container['bin_match'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets anonymous_proxy
     *
     * @return bool
     */
    public function getAnonymousProxy()
    {
        return $this->container['anonymous_proxy'];
    }

    /**
     * Sets anonymous_proxy
     *
     * @param bool $anonymous_proxy True if the IP address is a known anonymous proxy server
     *
     * @return $this
     */
    public function setAnonymousProxy($anonymous_proxy)
    {
        $this->container['anonymous_proxy'] = $anonymous_proxy;

        return $this;
    }

    /**
     * Gets bin_match
     *
     * @return string
     */
    public function getBinMatch()
    {
        return $this->container['bin_match'];
    }

    /**
     * Sets bin_match
     *
     * @param string $bin_match Whether the BIN (first six digits) matched the country
     *
     * @return $this
     */
    public function setBinMatch($bin_match)
    {
        $allowedValues = $this->getBinMatchAllowableValues();
        if (!is_null($bin_match) && !in_array($bin_match, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bin_match', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bin_match'] = $bin_match;

        return $this;
    }

    /**
     * Gets carder_email
     *
     * @return bool
     */
    public function getCarderEmail()
    {
        return $this->container['carder_email'];
    }

    /**
     * Sets carder_email
     *
     * @param bool $carder_email True if the email address belongs to a known credit card fraudster
     *
     * @return $this
     */
    public function setCarderEmail($carder_email)
    {
        $this->container['carder_email'] = $carder_email;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_match
     *
     * @return bool
     */
    public function getCountryMatch()
    {
        return $this->container['country_match'];
    }

    /**
     * Sets country_match
     *
     * @param bool $country_match Country code matches BIN country
     *
     * @return $this
     */
    public function setCountryMatch($country_match)
    {
        $this->container['country_match'] = $country_match;

        return $this;
    }

    /**
     * Gets customer_phone_in_billing_location
     *
     * @return string
     */
    public function getCustomerPhoneInBillingLocation()
    {
        return $this->container['customer_phone_in_billing_location'];
    }

    /**
     * Sets customer_phone_in_billing_location
     *
     * @param string $customer_phone_in_billing_location Whether the customer's phone number is located in the area of the billing address
     *
     * @return $this
     */
    public function setCustomerPhoneInBillingLocation($customer_phone_in_billing_location)
    {
        $this->container['customer_phone_in_billing_location'] = $customer_phone_in_billing_location;

        return $this;
    }

    /**
     * Gets distance_km
     *
     * @return int
     */
    public function getDistanceKm()
    {
        return $this->container['distance_km'];
    }

    /**
     * Sets distance_km
     *
     * @param int $distance_km Distance in kilometers between the IP address and the BIN
     *
     * @return $this
     */
    public function setDistanceKm($distance_km)
    {
        $this->container['distance_km'] = $distance_km;

        return $this;
    }

    /**
     * Gets free_email
     *
     * @return bool
     */
    public function getFreeEmail()
    {
        return $this->container['free_email'];
    }

    /**
     * Sets free_email
     *
     * @param bool $free_email True if the email address is for a free service like gmail.com
     *
     * @return $this
     */
    public function setFreeEmail($free_email)
    {
        $this->container['free_email'] = $free_email;

        return $this;
    }

    /**
     * Gets high_risk_country
     *
     * @return bool
     */
    public function getHighRiskCountry()
    {
        return $this->container['high_risk_country'];
    }

    /**
     * Sets high_risk_country
     *
     * @param bool $high_risk_country True if the customer is in a high risk country known for internet fraud
     *
     * @return $this
     */
    public function setHighRiskCountry($high_risk_country)
    {
        $this->container['high_risk_country'] = $high_risk_country;

        return $this;
    }

    /**
     * Gets ip_city
     *
     * @return string
     */
    public function getIpCity()
    {
        return $this->container['ip_city'];
    }

    /**
     * Sets ip_city
     *
     * @param string $ip_city City associated with the IP address
     *
     * @return $this
     */
    public function setIpCity($ip_city)
    {
        $this->container['ip_city'] = $ip_city;

        return $this;
    }

    /**
     * Gets ip_isp
     *
     * @return string
     */
    public function getIpIsp()
    {
        return $this->container['ip_isp'];
    }

    /**
     * Sets ip_isp
     *
     * @param string $ip_isp ISP that owns the IP address
     *
     * @return $this
     */
    public function setIpIsp($ip_isp)
    {
        $this->container['ip_isp'] = $ip_isp;

        return $this;
    }

    /**
     * Gets ip_latitude
     *
     * @return string
     */
    public function getIpLatitude()
    {
        return $this->container['ip_latitude'];
    }

    /**
     * Sets ip_latitude
     *
     * @param string $ip_latitude Approximate latitude associated with the IP address
     *
     * @return $this
     */
    public function setIpLatitude($ip_latitude)
    {
        $this->container['ip_latitude'] = $ip_latitude;

        return $this;
    }

    /**
     * Gets ip_longitude
     *
     * @return string
     */
    public function getIpLongitude()
    {
        return $this->container['ip_longitude'];
    }

    /**
     * Sets ip_longitude
     *
     * @param string $ip_longitude Approximate longitude associated with the IP address
     *
     * @return $this
     */
    public function setIpLongitude($ip_longitude)
    {
        $this->container['ip_longitude'] = $ip_longitude;

        return $this;
    }

    /**
     * Gets ip_org
     *
     * @return string
     */
    public function getIpOrg()
    {
        return $this->container['ip_org'];
    }

    /**
     * Sets ip_org
     *
     * @param string $ip_org Organization that owns the IP address
     *
     * @return $this
     */
    public function setIpOrg($ip_org)
    {
        $this->container['ip_org'] = $ip_org;

        return $this;
    }

    /**
     * Gets ip_region
     *
     * @return string
     */
    public function getIpRegion()
    {
        return $this->container['ip_region'];
    }

    /**
     * Sets ip_region
     *
     * @param string $ip_region State/region associated with the IP address
     *
     * @return $this
     */
    public function setIpRegion($ip_region)
    {
        $this->container['ip_region'] = $ip_region;

        return $this;
    }

    /**
     * Gets proxy_score
     *
     * @return float
     */
    public function getProxyScore()
    {
        return $this->container['proxy_score'];
    }

    /**
     * Sets proxy_score
     *
     * @param float $proxy_score Likelihood of the IP address being a proxy server
     *
     * @return $this
     */
    public function setProxyScore($proxy_score)
    {
        $this->container['proxy_score'] = $proxy_score;

        return $this;
    }

    /**
     * Gets score
     *
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float $score Overall score.  This is the score that is compared to see if the order is rejected or held for review by the fraud filter rules.
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets ship_forwarder
     *
     * @return bool
     */
    public function getShipForwarder()
    {
        return $this->container['ship_forwarder'];
    }

    /**
     * Sets ship_forwarder
     *
     * @param bool $ship_forwarder True if the address is a known ship forwarding company
     *
     * @return $this
     */
    public function setShipForwarder($ship_forwarder)
    {
        $this->container['ship_forwarder'] = $ship_forwarder;

        return $this;
    }

    /**
     * Gets spam_score
     *
     * @return float
     */
    public function getSpamScore()
    {
        return $this->container['spam_score'];
    }

    /**
     * Sets spam_score
     *
     * @param float $spam_score Likelihood of the email address being associated with a spammer
     *
     * @return $this
     */
    public function setSpamScore($spam_score)
    {
        $this->container['spam_score'] = $spam_score;

        return $this;
    }

    /**
     * Gets transparent_proxy
     *
     * @return bool
     */
    public function getTransparentProxy()
    {
        return $this->container['transparent_proxy'];
    }

    /**
     * Sets transparent_proxy
     *
     * @param bool $transparent_proxy True if the IP address that placed the order is a transparent proxy server
     *
     * @return $this
     */
    public function setTransparentProxy($transparent_proxy)
    {
        $this->container['transparent_proxy'] = $transparent_proxy;

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


