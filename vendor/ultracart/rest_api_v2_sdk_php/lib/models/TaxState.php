<?php
/**
 * TaxState
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
 * TaxState Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_code' => 'string',
        'counties' => '\ultracart\v2\models\TaxCounty[]',
        'country_oid' => 'int',
        'dont_collect_city' => 'bool',
        'dont_collect_county' => 'bool',
        'dont_collect_postal_code' => 'bool',
        'dont_collect_state' => 'bool',
        'state_code' => 'string',
        'state_oid' => 'int',
        'tax_gift_charge' => 'bool',
        'tax_gift_wrap' => 'bool',
        'tax_rate' => 'float',
        'tax_rate_formatted' => 'string',
        'tax_shipping' => 'bool',
        'use_ultracart_managed_rates' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounting_code' => null,
        'counties' => null,
        'country_oid' => 'int32',
        'dont_collect_city' => null,
        'dont_collect_county' => null,
        'dont_collect_postal_code' => null,
        'dont_collect_state' => null,
        'state_code' => null,
        'state_oid' => 'int32',
        'tax_gift_charge' => null,
        'tax_gift_wrap' => null,
        'tax_rate' => null,
        'tax_rate_formatted' => null,
        'tax_shipping' => null,
        'use_ultracart_managed_rates' => null
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
        'accounting_code' => 'accounting_code',
        'counties' => 'counties',
        'country_oid' => 'country_oid',
        'dont_collect_city' => 'dont_collect_city',
        'dont_collect_county' => 'dont_collect_county',
        'dont_collect_postal_code' => 'dont_collect_postal_code',
        'dont_collect_state' => 'dont_collect_state',
        'state_code' => 'state_code',
        'state_oid' => 'state_oid',
        'tax_gift_charge' => 'tax_gift_charge',
        'tax_gift_wrap' => 'tax_gift_wrap',
        'tax_rate' => 'tax_rate',
        'tax_rate_formatted' => 'tax_rate_formatted',
        'tax_shipping' => 'tax_shipping',
        'use_ultracart_managed_rates' => 'use_ultracart_managed_rates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_code' => 'setAccountingCode',
        'counties' => 'setCounties',
        'country_oid' => 'setCountryOid',
        'dont_collect_city' => 'setDontCollectCity',
        'dont_collect_county' => 'setDontCollectCounty',
        'dont_collect_postal_code' => 'setDontCollectPostalCode',
        'dont_collect_state' => 'setDontCollectState',
        'state_code' => 'setStateCode',
        'state_oid' => 'setStateOid',
        'tax_gift_charge' => 'setTaxGiftCharge',
        'tax_gift_wrap' => 'setTaxGiftWrap',
        'tax_rate' => 'setTaxRate',
        'tax_rate_formatted' => 'setTaxRateFormatted',
        'tax_shipping' => 'setTaxShipping',
        'use_ultracart_managed_rates' => 'setUseUltracartManagedRates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_code' => 'getAccountingCode',
        'counties' => 'getCounties',
        'country_oid' => 'getCountryOid',
        'dont_collect_city' => 'getDontCollectCity',
        'dont_collect_county' => 'getDontCollectCounty',
        'dont_collect_postal_code' => 'getDontCollectPostalCode',
        'dont_collect_state' => 'getDontCollectState',
        'state_code' => 'getStateCode',
        'state_oid' => 'getStateOid',
        'tax_gift_charge' => 'getTaxGiftCharge',
        'tax_gift_wrap' => 'getTaxGiftWrap',
        'tax_rate' => 'getTaxRate',
        'tax_rate_formatted' => 'getTaxRateFormatted',
        'tax_shipping' => 'getTaxShipping',
        'use_ultracart_managed_rates' => 'getUseUltracartManagedRates'
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
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['counties'] = isset($data['counties']) ? $data['counties'] : null;
        $this->container['country_oid'] = isset($data['country_oid']) ? $data['country_oid'] : null;
        $this->container['dont_collect_city'] = isset($data['dont_collect_city']) ? $data['dont_collect_city'] : null;
        $this->container['dont_collect_county'] = isset($data['dont_collect_county']) ? $data['dont_collect_county'] : null;
        $this->container['dont_collect_postal_code'] = isset($data['dont_collect_postal_code']) ? $data['dont_collect_postal_code'] : null;
        $this->container['dont_collect_state'] = isset($data['dont_collect_state']) ? $data['dont_collect_state'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['state_oid'] = isset($data['state_oid']) ? $data['state_oid'] : null;
        $this->container['tax_gift_charge'] = isset($data['tax_gift_charge']) ? $data['tax_gift_charge'] : null;
        $this->container['tax_gift_wrap'] = isset($data['tax_gift_wrap']) ? $data['tax_gift_wrap'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_rate_formatted'] = isset($data['tax_rate_formatted']) ? $data['tax_rate_formatted'] : null;
        $this->container['tax_shipping'] = isset($data['tax_shipping']) ? $data['tax_shipping'] : null;
        $this->container['use_ultracart_managed_rates'] = isset($data['use_ultracart_managed_rates']) ? $data['use_ultracart_managed_rates'] : null;
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
     * Gets accounting_code
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->container['accounting_code'];
    }

    /**
     * Sets accounting_code
     *
     * @param string $accounting_code Accounting code for programs such as QuickBooks
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets counties
     *
     * @return \ultracart\v2\models\TaxCounty[]
     */
    public function getCounties()
    {
        return $this->container['counties'];
    }

    /**
     * Sets counties
     *
     * @param \ultracart\v2\models\TaxCounty[] $counties Counties within this state
     *
     * @return $this
     */
    public function setCounties($counties)
    {
        $this->container['counties'] = $counties;

        return $this;
    }

    /**
     * Gets country_oid
     *
     * @return int
     */
    public function getCountryOid()
    {
        return $this->container['country_oid'];
    }

    /**
     * Sets country_oid
     *
     * @param int $country_oid Tax record object identifier used internally by database
     *
     * @return $this
     */
    public function setCountryOid($country_oid)
    {
        $this->container['country_oid'] = $country_oid;

        return $this;
    }

    /**
     * Gets dont_collect_city
     *
     * @return bool
     */
    public function getDontCollectCity()
    {
        return $this->container['dont_collect_city'];
    }

    /**
     * Sets dont_collect_city
     *
     * @param bool $dont_collect_city Flag instructing engine to not collect city tax for this state
     *
     * @return $this
     */
    public function setDontCollectCity($dont_collect_city)
    {
        $this->container['dont_collect_city'] = $dont_collect_city;

        return $this;
    }

    /**
     * Gets dont_collect_county
     *
     * @return bool
     */
    public function getDontCollectCounty()
    {
        return $this->container['dont_collect_county'];
    }

    /**
     * Sets dont_collect_county
     *
     * @param bool $dont_collect_county Flag instructing engine to not collect county tax for this state
     *
     * @return $this
     */
    public function setDontCollectCounty($dont_collect_county)
    {
        $this->container['dont_collect_county'] = $dont_collect_county;

        return $this;
    }

    /**
     * Gets dont_collect_postal_code
     *
     * @return bool
     */
    public function getDontCollectPostalCode()
    {
        return $this->container['dont_collect_postal_code'];
    }

    /**
     * Sets dont_collect_postal_code
     *
     * @param bool $dont_collect_postal_code Flag instructing engine to not collect postal code tax for this state
     *
     * @return $this
     */
    public function setDontCollectPostalCode($dont_collect_postal_code)
    {
        $this->container['dont_collect_postal_code'] = $dont_collect_postal_code;

        return $this;
    }

    /**
     * Gets dont_collect_state
     *
     * @return bool
     */
    public function getDontCollectState()
    {
        return $this->container['dont_collect_state'];
    }

    /**
     * Sets dont_collect_state
     *
     * @param bool $dont_collect_state Flag instructing engine to not collect state tax for this state
     *
     * @return $this
     */
    public function setDontCollectState($dont_collect_state)
    {
        $this->container['dont_collect_state'] = $dont_collect_state;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string $state_code State code
     *
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets state_oid
     *
     * @return int
     */
    public function getStateOid()
    {
        return $this->container['state_oid'];
    }

    /**
     * Sets state_oid
     *
     * @param int $state_oid Tax record object identifier used internally by database
     *
     * @return $this
     */
    public function setStateOid($state_oid)
    {
        $this->container['state_oid'] = $state_oid;

        return $this;
    }

    /**
     * Gets tax_gift_charge
     *
     * @return bool
     */
    public function getTaxGiftCharge()
    {
        return $this->container['tax_gift_charge'];
    }

    /**
     * Sets tax_gift_charge
     *
     * @param bool $tax_gift_charge True if taxation within this jurisdiction should charge tax on gift charge
     *
     * @return $this
     */
    public function setTaxGiftCharge($tax_gift_charge)
    {
        $this->container['tax_gift_charge'] = $tax_gift_charge;

        return $this;
    }

    /**
     * Gets tax_gift_wrap
     *
     * @return bool
     */
    public function getTaxGiftWrap()
    {
        return $this->container['tax_gift_wrap'];
    }

    /**
     * Sets tax_gift_wrap
     *
     * @param bool $tax_gift_wrap True if taxation within this jurisdiction should charge tax on gift wrap
     *
     * @return $this
     */
    public function setTaxGiftWrap($tax_gift_wrap)
    {
        $this->container['tax_gift_wrap'] = $tax_gift_wrap;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate Tax Rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_rate_formatted
     *
     * @return string
     */
    public function getTaxRateFormatted()
    {
        return $this->container['tax_rate_formatted'];
    }

    /**
     * Sets tax_rate_formatted
     *
     * @param string $tax_rate_formatted Tax rate formatted
     *
     * @return $this
     */
    public function setTaxRateFormatted($tax_rate_formatted)
    {
        $this->container['tax_rate_formatted'] = $tax_rate_formatted;

        return $this;
    }

    /**
     * Gets tax_shipping
     *
     * @return bool
     */
    public function getTaxShipping()
    {
        return $this->container['tax_shipping'];
    }

    /**
     * Sets tax_shipping
     *
     * @param bool $tax_shipping True if taxation within this jurisdiction should charge tax on shipping
     *
     * @return $this
     */
    public function setTaxShipping($tax_shipping)
    {
        $this->container['tax_shipping'] = $tax_shipping;

        return $this;
    }

    /**
     * Gets use_ultracart_managed_rates
     *
     * @return bool
     */
    public function getUseUltracartManagedRates()
    {
        return $this->container['use_ultracart_managed_rates'];
    }

    /**
     * Sets use_ultracart_managed_rates
     *
     * @param bool $use_ultracart_managed_rates If true, use UltraCart managed rates for this state
     *
     * @return $this
     */
    public function setUseUltracartManagedRates($use_ultracart_managed_rates)
    {
        $this->container['use_ultracart_managed_rates'] = $use_ultracart_managed_rates;

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


