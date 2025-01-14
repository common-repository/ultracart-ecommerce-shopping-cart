<?php
/**
 * OrderDigitalItem
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
 * OrderDigitalItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDigitalItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDigitalItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_size' => 'int',
        'last_download' => 'string',
        'last_download_ip_address' => 'string',
        'original_filename' => 'string',
        'product_code' => 'string',
        'product_description' => 'string',
        'remaining_downloads' => 'int',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_size' => 'int64',
        'last_download' => 'dateTime',
        'last_download_ip_address' => null,
        'original_filename' => null,
        'product_code' => null,
        'product_description' => null,
        'remaining_downloads' => 'int32',
        'url' => null
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
        'file_size' => 'file_size',
        'last_download' => 'last_download',
        'last_download_ip_address' => 'last_download_ip_address',
        'original_filename' => 'original_filename',
        'product_code' => 'product_code',
        'product_description' => 'product_description',
        'remaining_downloads' => 'remaining_downloads',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_size' => 'setFileSize',
        'last_download' => 'setLastDownload',
        'last_download_ip_address' => 'setLastDownloadIpAddress',
        'original_filename' => 'setOriginalFilename',
        'product_code' => 'setProductCode',
        'product_description' => 'setProductDescription',
        'remaining_downloads' => 'setRemainingDownloads',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_size' => 'getFileSize',
        'last_download' => 'getLastDownload',
        'last_download_ip_address' => 'getLastDownloadIpAddress',
        'original_filename' => 'getOriginalFilename',
        'product_code' => 'getProductCode',
        'product_description' => 'getProductDescription',
        'remaining_downloads' => 'getRemainingDownloads',
        'url' => 'getUrl'
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
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['last_download'] = isset($data['last_download']) ? $data['last_download'] : null;
        $this->container['last_download_ip_address'] = isset($data['last_download_ip_address']) ? $data['last_download_ip_address'] : null;
        $this->container['original_filename'] = isset($data['original_filename']) ? $data['original_filename'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['remaining_downloads'] = isset($data['remaining_downloads']) ? $data['remaining_downloads'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size File size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets last_download
     *
     * @return string
     */
    public function getLastDownload()
    {
        return $this->container['last_download'];
    }

    /**
     * Sets last_download
     *
     * @param string $last_download Last download
     *
     * @return $this
     */
    public function setLastDownload($last_download)
    {
        $this->container['last_download'] = $last_download;

        return $this;
    }

    /**
     * Gets last_download_ip_address
     *
     * @return string
     */
    public function getLastDownloadIpAddress()
    {
        return $this->container['last_download_ip_address'];
    }

    /**
     * Sets last_download_ip_address
     *
     * @param string $last_download_ip_address IP address that performed the last download
     *
     * @return $this
     */
    public function setLastDownloadIpAddress($last_download_ip_address)
    {
        $this->container['last_download_ip_address'] = $last_download_ip_address;

        return $this;
    }

    /**
     * Gets original_filename
     *
     * @return string
     */
    public function getOriginalFilename()
    {
        return $this->container['original_filename'];
    }

    /**
     * Sets original_filename
     *
     * @param string $original_filename Original file name
     *
     * @return $this
     */
    public function setOriginalFilename($original_filename)
    {
        $this->container['original_filename'] = $original_filename;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code Item id associated with this item
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param string $product_description Item description associated with this item
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets remaining_downloads
     *
     * @return int
     */
    public function getRemainingDownloads()
    {
        return $this->container['remaining_downloads'];
    }

    /**
     * Sets remaining_downloads
     *
     * @param int $remaining_downloads Remaining number of downloads
     *
     * @return $this
     */
    public function setRemainingDownloads($remaining_downloads)
    {
        $this->container['remaining_downloads'] = $remaining_downloads;

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
     * @param string $url URL that the customer can click to download the specific digital item
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


