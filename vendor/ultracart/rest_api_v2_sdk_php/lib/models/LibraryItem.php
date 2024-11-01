<?php
/**
 * LibraryItem
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
 * LibraryItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LibraryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LibraryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assets' => '\ultracart\v2\models\LibraryItemAsset[]',
        'categories' => 'string[]',
        'content' => 'string',
        'description' => 'string',
        'industries' => 'string[]',
        'library_item_oid' => 'int',
        'merchant_id' => 'string',
        'price' => 'float',
        'price_formatted' => 'string',
        'public_item' => 'bool',
        'published_dts' => 'string',
        'publishing_status' => 'string',
        'purchase_history' => 'int',
        'style' => 'string',
        'title' => 'string',
        'type' => 'string',
        'verison' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assets' => null,
        'categories' => null,
        'content' => null,
        'description' => null,
        'industries' => null,
        'library_item_oid' => 'int32',
        'merchant_id' => null,
        'price' => null,
        'price_formatted' => null,
        'public_item' => null,
        'published_dts' => null,
        'publishing_status' => null,
        'purchase_history' => 'int32',
        'style' => null,
        'title' => null,
        'type' => null,
        'verison' => null
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
        'assets' => 'assets',
        'categories' => 'categories',
        'content' => 'content',
        'description' => 'description',
        'industries' => 'industries',
        'library_item_oid' => 'library_item_oid',
        'merchant_id' => 'merchant_id',
        'price' => 'price',
        'price_formatted' => 'price_formatted',
        'public_item' => 'public_item',
        'published_dts' => 'published_dts',
        'publishing_status' => 'publishing_status',
        'purchase_history' => 'purchase_history',
        'style' => 'style',
        'title' => 'title',
        'type' => 'type',
        'verison' => 'verison'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assets' => 'setAssets',
        'categories' => 'setCategories',
        'content' => 'setContent',
        'description' => 'setDescription',
        'industries' => 'setIndustries',
        'library_item_oid' => 'setLibraryItemOid',
        'merchant_id' => 'setMerchantId',
        'price' => 'setPrice',
        'price_formatted' => 'setPriceFormatted',
        'public_item' => 'setPublicItem',
        'published_dts' => 'setPublishedDts',
        'publishing_status' => 'setPublishingStatus',
        'purchase_history' => 'setPurchaseHistory',
        'style' => 'setStyle',
        'title' => 'setTitle',
        'type' => 'setType',
        'verison' => 'setVerison'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assets' => 'getAssets',
        'categories' => 'getCategories',
        'content' => 'getContent',
        'description' => 'getDescription',
        'industries' => 'getIndustries',
        'library_item_oid' => 'getLibraryItemOid',
        'merchant_id' => 'getMerchantId',
        'price' => 'getPrice',
        'price_formatted' => 'getPriceFormatted',
        'public_item' => 'getPublicItem',
        'published_dts' => 'getPublishedDts',
        'publishing_status' => 'getPublishingStatus',
        'purchase_history' => 'getPurchaseHistory',
        'style' => 'getStyle',
        'title' => 'getTitle',
        'type' => 'getType',
        'verison' => 'getVerison'
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
        $this->container['assets'] = isset($data['assets']) ? $data['assets'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['library_item_oid'] = isset($data['library_item_oid']) ? $data['library_item_oid'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_formatted'] = isset($data['price_formatted']) ? $data['price_formatted'] : null;
        $this->container['public_item'] = isset($data['public_item']) ? $data['public_item'] : null;
        $this->container['published_dts'] = isset($data['published_dts']) ? $data['published_dts'] : null;
        $this->container['publishing_status'] = isset($data['publishing_status']) ? $data['publishing_status'] : null;
        $this->container['purchase_history'] = isset($data['purchase_history']) ? $data['purchase_history'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['verison'] = isset($data['verison']) ? $data['verison'] : null;
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
     * Gets assets
     *
     * @return \ultracart\v2\models\LibraryItemAsset[]
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \ultracart\v2\models\LibraryItemAsset[] $assets assets
     *
     * @return $this
     */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets industries
     *
     * @return string[]
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     *
     * @param string[] $industries industries
     *
     * @return $this
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets library_item_oid
     *
     * @return int
     */
    public function getLibraryItemOid()
    {
        return $this->container['library_item_oid'];
    }

    /**
     * Sets library_item_oid
     *
     * @param int $library_item_oid library_item_oid
     *
     * @return $this
     */
    public function setLibraryItemOid($library_item_oid)
    {
        $this->container['library_item_oid'] = $library_item_oid;

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
     * @param string $merchant_id merchant_id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_formatted
     *
     * @return string
     */
    public function getPriceFormatted()
    {
        return $this->container['price_formatted'];
    }

    /**
     * Sets price_formatted
     *
     * @param string $price_formatted price_formatted
     *
     * @return $this
     */
    public function setPriceFormatted($price_formatted)
    {
        $this->container['price_formatted'] = $price_formatted;

        return $this;
    }

    /**
     * Gets public_item
     *
     * @return bool
     */
    public function getPublicItem()
    {
        return $this->container['public_item'];
    }

    /**
     * Sets public_item
     *
     * @param bool $public_item public_item
     *
     * @return $this
     */
    public function setPublicItem($public_item)
    {
        $this->container['public_item'] = $public_item;

        return $this;
    }

    /**
     * Gets published_dts
     *
     * @return string
     */
    public function getPublishedDts()
    {
        return $this->container['published_dts'];
    }

    /**
     * Sets published_dts
     *
     * @param string $published_dts published_dts
     *
     * @return $this
     */
    public function setPublishedDts($published_dts)
    {
        $this->container['published_dts'] = $published_dts;

        return $this;
    }

    /**
     * Gets publishing_status
     *
     * @return string
     */
    public function getPublishingStatus()
    {
        return $this->container['publishing_status'];
    }

    /**
     * Sets publishing_status
     *
     * @param string $publishing_status publishing_status
     *
     * @return $this
     */
    public function setPublishingStatus($publishing_status)
    {
        $this->container['publishing_status'] = $publishing_status;

        return $this;
    }

    /**
     * Gets purchase_history
     *
     * @return int
     */
    public function getPurchaseHistory()
    {
        return $this->container['purchase_history'];
    }

    /**
     * Sets purchase_history
     *
     * @param int $purchase_history purchase_history
     *
     * @return $this
     */
    public function setPurchaseHistory($purchase_history)
    {
        $this->container['purchase_history'] = $purchase_history;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets verison
     *
     * @return string
     */
    public function getVerison()
    {
        return $this->container['verison'];
    }

    /**
     * Sets verison
     *
     * @param string $verison verison
     *
     * @return $this
     */
    public function setVerison($verison)
    {
        $this->container['verison'] = $verison;

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


