<?php
/**
 * EmailCommseqPostcard
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
 * EmailCommseqPostcard Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailCommseqPostcard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailCommseqPostcard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deleted' => 'bool',
        'edited_by_user' => 'string',
        'email_communication_sequence_postcard_uuid' => 'string',
        'filter_profile_equation_json' => 'string',
        'merchant_id' => 'string',
        'postcard_back_container_cjson' => 'string',
        'postcard_back_container_uuid' => 'string',
        'postcard_container_cjson_last_modified_dts' => 'string',
        'postcard_front_container_cjson' => 'string',
        'postcard_front_container_uuid' => 'string',
        'storefront_oid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deleted' => null,
        'edited_by_user' => null,
        'email_communication_sequence_postcard_uuid' => null,
        'filter_profile_equation_json' => null,
        'merchant_id' => null,
        'postcard_back_container_cjson' => null,
        'postcard_back_container_uuid' => null,
        'postcard_container_cjson_last_modified_dts' => 'dateTime',
        'postcard_front_container_cjson' => null,
        'postcard_front_container_uuid' => null,
        'storefront_oid' => 'int32'
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
        'deleted' => 'deleted',
        'edited_by_user' => 'edited_by_user',
        'email_communication_sequence_postcard_uuid' => 'email_communication_sequence_postcard_uuid',
        'filter_profile_equation_json' => 'filter_profile_equation_json',
        'merchant_id' => 'merchant_id',
        'postcard_back_container_cjson' => 'postcard_back_container_cjson',
        'postcard_back_container_uuid' => 'postcard_back_container_uuid',
        'postcard_container_cjson_last_modified_dts' => 'postcard_container_cjson_last_modified_dts',
        'postcard_front_container_cjson' => 'postcard_front_container_cjson',
        'postcard_front_container_uuid' => 'postcard_front_container_uuid',
        'storefront_oid' => 'storefront_oid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deleted' => 'setDeleted',
        'edited_by_user' => 'setEditedByUser',
        'email_communication_sequence_postcard_uuid' => 'setEmailCommunicationSequencePostcardUuid',
        'filter_profile_equation_json' => 'setFilterProfileEquationJson',
        'merchant_id' => 'setMerchantId',
        'postcard_back_container_cjson' => 'setPostcardBackContainerCjson',
        'postcard_back_container_uuid' => 'setPostcardBackContainerUuid',
        'postcard_container_cjson_last_modified_dts' => 'setPostcardContainerCjsonLastModifiedDts',
        'postcard_front_container_cjson' => 'setPostcardFrontContainerCjson',
        'postcard_front_container_uuid' => 'setPostcardFrontContainerUuid',
        'storefront_oid' => 'setStorefrontOid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deleted' => 'getDeleted',
        'edited_by_user' => 'getEditedByUser',
        'email_communication_sequence_postcard_uuid' => 'getEmailCommunicationSequencePostcardUuid',
        'filter_profile_equation_json' => 'getFilterProfileEquationJson',
        'merchant_id' => 'getMerchantId',
        'postcard_back_container_cjson' => 'getPostcardBackContainerCjson',
        'postcard_back_container_uuid' => 'getPostcardBackContainerUuid',
        'postcard_container_cjson_last_modified_dts' => 'getPostcardContainerCjsonLastModifiedDts',
        'postcard_front_container_cjson' => 'getPostcardFrontContainerCjson',
        'postcard_front_container_uuid' => 'getPostcardFrontContainerUuid',
        'storefront_oid' => 'getStorefrontOid'
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
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['edited_by_user'] = isset($data['edited_by_user']) ? $data['edited_by_user'] : null;
        $this->container['email_communication_sequence_postcard_uuid'] = isset($data['email_communication_sequence_postcard_uuid']) ? $data['email_communication_sequence_postcard_uuid'] : null;
        $this->container['filter_profile_equation_json'] = isset($data['filter_profile_equation_json']) ? $data['filter_profile_equation_json'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['postcard_back_container_cjson'] = isset($data['postcard_back_container_cjson']) ? $data['postcard_back_container_cjson'] : null;
        $this->container['postcard_back_container_uuid'] = isset($data['postcard_back_container_uuid']) ? $data['postcard_back_container_uuid'] : null;
        $this->container['postcard_container_cjson_last_modified_dts'] = isset($data['postcard_container_cjson_last_modified_dts']) ? $data['postcard_container_cjson_last_modified_dts'] : null;
        $this->container['postcard_front_container_cjson'] = isset($data['postcard_front_container_cjson']) ? $data['postcard_front_container_cjson'] : null;
        $this->container['postcard_front_container_uuid'] = isset($data['postcard_front_container_uuid']) ? $data['postcard_front_container_uuid'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
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
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets edited_by_user
     *
     * @return string
     */
    public function getEditedByUser()
    {
        return $this->container['edited_by_user'];
    }

    /**
     * Sets edited_by_user
     *
     * @param string $edited_by_user Edited by user
     *
     * @return $this
     */
    public function setEditedByUser($edited_by_user)
    {
        $this->container['edited_by_user'] = $edited_by_user;

        return $this;
    }

    /**
     * Gets email_communication_sequence_postcard_uuid
     *
     * @return string
     */
    public function getEmailCommunicationSequencePostcardUuid()
    {
        return $this->container['email_communication_sequence_postcard_uuid'];
    }

    /**
     * Sets email_communication_sequence_postcard_uuid
     *
     * @param string $email_communication_sequence_postcard_uuid communication sequence postcard uuid
     *
     * @return $this
     */
    public function setEmailCommunicationSequencePostcardUuid($email_communication_sequence_postcard_uuid)
    {
        $this->container['email_communication_sequence_postcard_uuid'] = $email_communication_sequence_postcard_uuid;

        return $this;
    }

    /**
     * Gets filter_profile_equation_json
     *
     * @return string
     */
    public function getFilterProfileEquationJson()
    {
        return $this->container['filter_profile_equation_json'];
    }

    /**
     * Sets filter_profile_equation_json
     *
     * @param string $filter_profile_equation_json Filter profile equation json
     *
     * @return $this
     */
    public function setFilterProfileEquationJson($filter_profile_equation_json)
    {
        $this->container['filter_profile_equation_json'] = $filter_profile_equation_json;

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
     * @param string $merchant_id Merchant ID
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets postcard_back_container_cjson
     *
     * @return string
     */
    public function getPostcardBackContainerCjson()
    {
        return $this->container['postcard_back_container_cjson'];
    }

    /**
     * Sets postcard_back_container_cjson
     *
     * @param string $postcard_back_container_cjson Postcard back container cjson
     *
     * @return $this
     */
    public function setPostcardBackContainerCjson($postcard_back_container_cjson)
    {
        $this->container['postcard_back_container_cjson'] = $postcard_back_container_cjson;

        return $this;
    }

    /**
     * Gets postcard_back_container_uuid
     *
     * @return string
     */
    public function getPostcardBackContainerUuid()
    {
        return $this->container['postcard_back_container_uuid'];
    }

    /**
     * Sets postcard_back_container_uuid
     *
     * @param string $postcard_back_container_uuid Postcard back container uuid
     *
     * @return $this
     */
    public function setPostcardBackContainerUuid($postcard_back_container_uuid)
    {
        $this->container['postcard_back_container_uuid'] = $postcard_back_container_uuid;

        return $this;
    }

    /**
     * Gets postcard_container_cjson_last_modified_dts
     *
     * @return string
     */
    public function getPostcardContainerCjsonLastModifiedDts()
    {
        return $this->container['postcard_container_cjson_last_modified_dts'];
    }

    /**
     * Sets postcard_container_cjson_last_modified_dts
     *
     * @param string $postcard_container_cjson_last_modified_dts Timestamp the last time the container was modified.
     *
     * @return $this
     */
    public function setPostcardContainerCjsonLastModifiedDts($postcard_container_cjson_last_modified_dts)
    {
        $this->container['postcard_container_cjson_last_modified_dts'] = $postcard_container_cjson_last_modified_dts;

        return $this;
    }

    /**
     * Gets postcard_front_container_cjson
     *
     * @return string
     */
    public function getPostcardFrontContainerCjson()
    {
        return $this->container['postcard_front_container_cjson'];
    }

    /**
     * Sets postcard_front_container_cjson
     *
     * @param string $postcard_front_container_cjson Postcard front container cjson
     *
     * @return $this
     */
    public function setPostcardFrontContainerCjson($postcard_front_container_cjson)
    {
        $this->container['postcard_front_container_cjson'] = $postcard_front_container_cjson;

        return $this;
    }

    /**
     * Gets postcard_front_container_uuid
     *
     * @return string
     */
    public function getPostcardFrontContainerUuid()
    {
        return $this->container['postcard_front_container_uuid'];
    }

    /**
     * Sets postcard_front_container_uuid
     *
     * @param string $postcard_front_container_uuid Postcard front container uuid
     *
     * @return $this
     */
    public function setPostcardFrontContainerUuid($postcard_front_container_uuid)
    {
        $this->container['postcard_front_container_uuid'] = $postcard_front_container_uuid;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int $storefront_oid Storefront oid
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

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


