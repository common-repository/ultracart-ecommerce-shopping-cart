<?php
/**
 * OrderTaxes
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
 * OrderTaxes Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderTaxes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderTaxes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arbitrary_tax' => 'float',
        'arbitrary_tax_rate' => 'float',
        'arbitrary_taxable_subtotal' => 'float',
        'tax_city_accounting_code' => 'string',
        'tax_country_accounting_code' => 'string',
        'tax_county' => 'string',
        'tax_county_accounting_code' => 'string',
        'tax_gift_charge' => 'bool',
        'tax_postal_code_accounting_code' => 'string',
        'tax_rate' => 'float',
        'tax_rate_city' => 'float',
        'tax_rate_country' => 'float',
        'tax_rate_county' => 'float',
        'tax_rate_postal_code' => 'float',
        'tax_rate_state' => 'float',
        'tax_shipping' => 'bool',
        'tax_state_accounting_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arbitrary_tax' => null,
        'arbitrary_tax_rate' => null,
        'arbitrary_taxable_subtotal' => null,
        'tax_city_accounting_code' => null,
        'tax_country_accounting_code' => null,
        'tax_county' => null,
        'tax_county_accounting_code' => null,
        'tax_gift_charge' => null,
        'tax_postal_code_accounting_code' => null,
        'tax_rate' => null,
        'tax_rate_city' => null,
        'tax_rate_country' => null,
        'tax_rate_county' => null,
        'tax_rate_postal_code' => null,
        'tax_rate_state' => null,
        'tax_shipping' => null,
        'tax_state_accounting_code' => null
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
        'arbitrary_tax' => 'arbitrary_tax',
        'arbitrary_tax_rate' => 'arbitrary_tax_rate',
        'arbitrary_taxable_subtotal' => 'arbitrary_taxable_subtotal',
        'tax_city_accounting_code' => 'tax_city_accounting_code',
        'tax_country_accounting_code' => 'tax_country_accounting_code',
        'tax_county' => 'tax_county',
        'tax_county_accounting_code' => 'tax_county_accounting_code',
        'tax_gift_charge' => 'tax_gift_charge',
        'tax_postal_code_accounting_code' => 'tax_postal_code_accounting_code',
        'tax_rate' => 'tax_rate',
        'tax_rate_city' => 'tax_rate_city',
        'tax_rate_country' => 'tax_rate_country',
        'tax_rate_county' => 'tax_rate_county',
        'tax_rate_postal_code' => 'tax_rate_postal_code',
        'tax_rate_state' => 'tax_rate_state',
        'tax_shipping' => 'tax_shipping',
        'tax_state_accounting_code' => 'tax_state_accounting_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arbitrary_tax' => 'setArbitraryTax',
        'arbitrary_tax_rate' => 'setArbitraryTaxRate',
        'arbitrary_taxable_subtotal' => 'setArbitraryTaxableSubtotal',
        'tax_city_accounting_code' => 'setTaxCityAccountingCode',
        'tax_country_accounting_code' => 'setTaxCountryAccountingCode',
        'tax_county' => 'setTaxCounty',
        'tax_county_accounting_code' => 'setTaxCountyAccountingCode',
        'tax_gift_charge' => 'setTaxGiftCharge',
        'tax_postal_code_accounting_code' => 'setTaxPostalCodeAccountingCode',
        'tax_rate' => 'setTaxRate',
        'tax_rate_city' => 'setTaxRateCity',
        'tax_rate_country' => 'setTaxRateCountry',
        'tax_rate_county' => 'setTaxRateCounty',
        'tax_rate_postal_code' => 'setTaxRatePostalCode',
        'tax_rate_state' => 'setTaxRateState',
        'tax_shipping' => 'setTaxShipping',
        'tax_state_accounting_code' => 'setTaxStateAccountingCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arbitrary_tax' => 'getArbitraryTax',
        'arbitrary_tax_rate' => 'getArbitraryTaxRate',
        'arbitrary_taxable_subtotal' => 'getArbitraryTaxableSubtotal',
        'tax_city_accounting_code' => 'getTaxCityAccountingCode',
        'tax_country_accounting_code' => 'getTaxCountryAccountingCode',
        'tax_county' => 'getTaxCounty',
        'tax_county_accounting_code' => 'getTaxCountyAccountingCode',
        'tax_gift_charge' => 'getTaxGiftCharge',
        'tax_postal_code_accounting_code' => 'getTaxPostalCodeAccountingCode',
        'tax_rate' => 'getTaxRate',
        'tax_rate_city' => 'getTaxRateCity',
        'tax_rate_country' => 'getTaxRateCountry',
        'tax_rate_county' => 'getTaxRateCounty',
        'tax_rate_postal_code' => 'getTaxRatePostalCode',
        'tax_rate_state' => 'getTaxRateState',
        'tax_shipping' => 'getTaxShipping',
        'tax_state_accounting_code' => 'getTaxStateAccountingCode'
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
        $this->container['arbitrary_tax'] = isset($data['arbitrary_tax']) ? $data['arbitrary_tax'] : null;
        $this->container['arbitrary_tax_rate'] = isset($data['arbitrary_tax_rate']) ? $data['arbitrary_tax_rate'] : null;
        $this->container['arbitrary_taxable_subtotal'] = isset($data['arbitrary_taxable_subtotal']) ? $data['arbitrary_taxable_subtotal'] : null;
        $this->container['tax_city_accounting_code'] = isset($data['tax_city_accounting_code']) ? $data['tax_city_accounting_code'] : null;
        $this->container['tax_country_accounting_code'] = isset($data['tax_country_accounting_code']) ? $data['tax_country_accounting_code'] : null;
        $this->container['tax_county'] = isset($data['tax_county']) ? $data['tax_county'] : null;
        $this->container['tax_county_accounting_code'] = isset($data['tax_county_accounting_code']) ? $data['tax_county_accounting_code'] : null;
        $this->container['tax_gift_charge'] = isset($data['tax_gift_charge']) ? $data['tax_gift_charge'] : null;
        $this->container['tax_postal_code_accounting_code'] = isset($data['tax_postal_code_accounting_code']) ? $data['tax_postal_code_accounting_code'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_rate_city'] = isset($data['tax_rate_city']) ? $data['tax_rate_city'] : null;
        $this->container['tax_rate_country'] = isset($data['tax_rate_country']) ? $data['tax_rate_country'] : null;
        $this->container['tax_rate_county'] = isset($data['tax_rate_county']) ? $data['tax_rate_county'] : null;
        $this->container['tax_rate_postal_code'] = isset($data['tax_rate_postal_code']) ? $data['tax_rate_postal_code'] : null;
        $this->container['tax_rate_state'] = isset($data['tax_rate_state']) ? $data['tax_rate_state'] : null;
        $this->container['tax_shipping'] = isset($data['tax_shipping']) ? $data['tax_shipping'] : null;
        $this->container['tax_state_accounting_code'] = isset($data['tax_state_accounting_code']) ? $data['tax_state_accounting_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['tax_county']) && (mb_strlen($this->container['tax_county']) > 32)) {
            $invalidProperties[] = "invalid value for 'tax_county', the character length must be smaller than or equal to 32.";
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

        if (mb_strlen($this->container['tax_county']) > 32) {
            return false;
        }
        return true;
    }


    /**
     * Gets arbitrary_tax
     *
     * @return float
     */
    public function getArbitraryTax()
    {
        return $this->container['arbitrary_tax'];
    }

    /**
     * Sets arbitrary_tax
     *
     * @param float $arbitrary_tax Arbitrary Tax, this is meaningless for updating an order.  For inserting a new order, this will override any internal tax calculations and should only be used for orders completed outside the system.
     *
     * @return $this
     */
    public function setArbitraryTax($arbitrary_tax)
    {
        $this->container['arbitrary_tax'] = $arbitrary_tax;

        return $this;
    }

    /**
     * Gets arbitrary_tax_rate
     *
     * @return float
     */
    public function getArbitraryTaxRate()
    {
        return $this->container['arbitrary_tax_rate'];
    }

    /**
     * Sets arbitrary_tax_rate
     *
     * @param float $arbitrary_tax_rate Arbitrary tax rate, this is meaningless for updating an order.  For inserting a new order, this will override any internal tax calculations and should only be used for orders completed outside the system.
     *
     * @return $this
     */
    public function setArbitraryTaxRate($arbitrary_tax_rate)
    {
        $this->container['arbitrary_tax_rate'] = $arbitrary_tax_rate;

        return $this;
    }

    /**
     * Gets arbitrary_taxable_subtotal
     *
     * @return float
     */
    public function getArbitraryTaxableSubtotal()
    {
        return $this->container['arbitrary_taxable_subtotal'];
    }

    /**
     * Sets arbitrary_taxable_subtotal
     *
     * @param float $arbitrary_taxable_subtotal Arbitrary taxable subtotal, this is meaningless for updating an order.  For inserting a new order, this will override any internal tax calculations and should only be used for orders completed outside the system.
     *
     * @return $this
     */
    public function setArbitraryTaxableSubtotal($arbitrary_taxable_subtotal)
    {
        $this->container['arbitrary_taxable_subtotal'] = $arbitrary_taxable_subtotal;

        return $this;
    }

    /**
     * Gets tax_city_accounting_code
     *
     * @return string
     */
    public function getTaxCityAccountingCode()
    {
        return $this->container['tax_city_accounting_code'];
    }

    /**
     * Sets tax_city_accounting_code
     *
     * @param string $tax_city_accounting_code QuickBooks tax city code
     *
     * @return $this
     */
    public function setTaxCityAccountingCode($tax_city_accounting_code)
    {
        $this->container['tax_city_accounting_code'] = $tax_city_accounting_code;

        return $this;
    }

    /**
     * Gets tax_country_accounting_code
     *
     * @return string
     */
    public function getTaxCountryAccountingCode()
    {
        return $this->container['tax_country_accounting_code'];
    }

    /**
     * Sets tax_country_accounting_code
     *
     * @param string $tax_country_accounting_code QuickBooks tax country code
     *
     * @return $this
     */
    public function setTaxCountryAccountingCode($tax_country_accounting_code)
    {
        $this->container['tax_country_accounting_code'] = $tax_country_accounting_code;

        return $this;
    }

    /**
     * Gets tax_county
     *
     * @return string
     */
    public function getTaxCounty()
    {
        return $this->container['tax_county'];
    }

    /**
     * Sets tax_county
     *
     * @param string $tax_county County used for tax calculation purposes (only in the United States)
     *
     * @return $this
     */
    public function setTaxCounty($tax_county)
    {
        if (!is_null($tax_county) && (mb_strlen($tax_county) > 32)) {
            throw new \InvalidArgumentException('invalid length for $tax_county when calling OrderTaxes., must be smaller than or equal to 32.');
        }

        $this->container['tax_county'] = $tax_county;

        return $this;
    }

    /**
     * Gets tax_county_accounting_code
     *
     * @return string
     */
    public function getTaxCountyAccountingCode()
    {
        return $this->container['tax_county_accounting_code'];
    }

    /**
     * Sets tax_county_accounting_code
     *
     * @param string $tax_county_accounting_code QuickBooks tax county code
     *
     * @return $this
     */
    public function setTaxCountyAccountingCode($tax_county_accounting_code)
    {
        $this->container['tax_county_accounting_code'] = $tax_county_accounting_code;

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
     * @param bool $tax_gift_charge True if gift charge is taxed
     *
     * @return $this
     */
    public function setTaxGiftCharge($tax_gift_charge)
    {
        $this->container['tax_gift_charge'] = $tax_gift_charge;

        return $this;
    }

    /**
     * Gets tax_postal_code_accounting_code
     *
     * @return string
     */
    public function getTaxPostalCodeAccountingCode()
    {
        return $this->container['tax_postal_code_accounting_code'];
    }

    /**
     * Sets tax_postal_code_accounting_code
     *
     * @param string $tax_postal_code_accounting_code QuickBooks tax postal code code
     *
     * @return $this
     */
    public function setTaxPostalCodeAccountingCode($tax_postal_code_accounting_code)
    {
        $this->container['tax_postal_code_accounting_code'] = $tax_postal_code_accounting_code;

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
     * @param float $tax_rate Tax rate, this is meaningless for updating an order.  For inserting a new order, if you need to override internal tax calculations, use the arbitrary fields.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_rate_city
     *
     * @return float
     */
    public function getTaxRateCity()
    {
        return $this->container['tax_rate_city'];
    }

    /**
     * Sets tax_rate_city
     *
     * @param float $tax_rate_city Tax rate at the city level
     *
     * @return $this
     */
    public function setTaxRateCity($tax_rate_city)
    {
        $this->container['tax_rate_city'] = $tax_rate_city;

        return $this;
    }

    /**
     * Gets tax_rate_country
     *
     * @return float
     */
    public function getTaxRateCountry()
    {
        return $this->container['tax_rate_country'];
    }

    /**
     * Sets tax_rate_country
     *
     * @param float $tax_rate_country Tax rate at the country level
     *
     * @return $this
     */
    public function setTaxRateCountry($tax_rate_country)
    {
        $this->container['tax_rate_country'] = $tax_rate_country;

        return $this;
    }

    /**
     * Gets tax_rate_county
     *
     * @return float
     */
    public function getTaxRateCounty()
    {
        return $this->container['tax_rate_county'];
    }

    /**
     * Sets tax_rate_county
     *
     * @param float $tax_rate_county Tax rate at the county level
     *
     * @return $this
     */
    public function setTaxRateCounty($tax_rate_county)
    {
        $this->container['tax_rate_county'] = $tax_rate_county;

        return $this;
    }

    /**
     * Gets tax_rate_postal_code
     *
     * @return float
     */
    public function getTaxRatePostalCode()
    {
        return $this->container['tax_rate_postal_code'];
    }

    /**
     * Sets tax_rate_postal_code
     *
     * @param float $tax_rate_postal_code Tax rate at the postal code level
     *
     * @return $this
     */
    public function setTaxRatePostalCode($tax_rate_postal_code)
    {
        $this->container['tax_rate_postal_code'] = $tax_rate_postal_code;

        return $this;
    }

    /**
     * Gets tax_rate_state
     *
     * @return float
     */
    public function getTaxRateState()
    {
        return $this->container['tax_rate_state'];
    }

    /**
     * Sets tax_rate_state
     *
     * @param float $tax_rate_state Tax rate at the state level
     *
     * @return $this
     */
    public function setTaxRateState($tax_rate_state)
    {
        $this->container['tax_rate_state'] = $tax_rate_state;

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
     * @param bool $tax_shipping True if shipping is taxed
     *
     * @return $this
     */
    public function setTaxShipping($tax_shipping)
    {
        $this->container['tax_shipping'] = $tax_shipping;

        return $this;
    }

    /**
     * Gets tax_state_accounting_code
     *
     * @return string
     */
    public function getTaxStateAccountingCode()
    {
        return $this->container['tax_state_accounting_code'];
    }

    /**
     * Sets tax_state_accounting_code
     *
     * @param string $tax_state_accounting_code QuickBooks tax state code
     *
     * @return $this
     */
    public function setTaxStateAccountingCode($tax_state_accounting_code)
    {
        $this->container['tax_state_accounting_code'] = $tax_state_accounting_code;

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


