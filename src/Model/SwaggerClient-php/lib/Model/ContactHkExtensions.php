<?php
/**
 * ContactHkExtensions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ContactHkExtensions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactHkExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactHkExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_type' => '\Swagger\Client\Model\HkDocumentTypeConstants',
        'others' => 'string',
        'document_number' => 'string',
        'document_origin' => 'string',
        'above18' => 'bool',
        'industry_type' => '\Swagger\Client\Model\HkIndustryTypeConstants'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_type' => null,
        'others' => null,
        'document_number' => null,
        'document_origin' => null,
        'above18' => null,
        'industry_type' => null
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
        'document_type' => 'documentType',
        'others' => 'others',
        'document_number' => 'documentNumber',
        'document_origin' => 'documentOrigin',
        'above18' => 'above18',
        'industry_type' => 'industryType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type' => 'setDocumentType',
        'others' => 'setOthers',
        'document_number' => 'setDocumentNumber',
        'document_origin' => 'setDocumentOrigin',
        'above18' => 'setAbove18',
        'industry_type' => 'setIndustryType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type' => 'getDocumentType',
        'others' => 'getOthers',
        'document_number' => 'getDocumentNumber',
        'document_origin' => 'getDocumentOrigin',
        'above18' => 'getAbove18',
        'industry_type' => 'getIndustryType'
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
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['others'] = isset($data['others']) ? $data['others'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['document_origin'] = isset($data['document_origin']) ? $data['document_origin'] : null;
        $this->container['above18'] = isset($data['above18']) ? $data['above18'] : null;
        $this->container['industry_type'] = isset($data['industry_type']) ? $data['industry_type'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets document_type
     *
     * @return \Swagger\Client\Model\HkDocumentTypeConstants
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \Swagger\Client\Model\HkDocumentTypeConstants $document_type The document types.
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets others
     *
     * @return string
     */
    public function getOthers()
    {
        return $this->container['others'];
    }

    /**
     * Sets others
     *
     * @param string $others Additional descriptions for OTHIDV and OTHORG.
     *
     * @return $this
     */
    public function setOthers($others)
    {
        $this->container['others'] = $others;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number Document number.
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets document_origin
     *
     * @return string
     */
    public function getDocumentOrigin()
    {
        return $this->container['document_origin'];
    }

    /**
     * Sets document_origin
     *
     * @param string $document_origin Country of licensure.
     *
     * @return $this
     */
    public function setDocumentOrigin($document_origin)
    {
        $this->container['document_origin'] = $document_origin;

        return $this;
    }

    /**
     * Gets above18
     *
     * @return bool
     */
    public function getAbove18()
    {
        return $this->container['above18'];
    }

    /**
     * Sets above18
     *
     * @param bool $above18 Is the person 18 years of age or older. For Person only.
     *
     * @return $this
     */
    public function setAbove18($above18)
    {
        $this->container['above18'] = $above18;

        return $this;
    }

    /**
     * Gets industry_type
     *
     * @return \Swagger\Client\Model\HkIndustryTypeConstants
     */
    public function getIndustryType()
    {
        return $this->container['industry_type'];
    }

    /**
     * Sets industry_type
     *
     * @param \Swagger\Client\Model\HkIndustryTypeConstants $industry_type The industry types.
     *
     * @return $this
     */
    public function setIndustryType($industry_type)
    {
        $this->container['industry_type'] = $industry_type;

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
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns all values
     * toArray(true) => returns only non empty values
     * toArray(true, ["key"]) => returns all non empty values and "key" even if empty
     * toArray(true, ["key:no_empty_value"]) => returns all non empty values and "key" if not empty
     */
    public function toArray($removeEmptyValues = false, $retrieveKeys = []){
        $container = $this->container;
        foreach($container as $key => &$value){
            if(!in_array($key, $retrieveKeys) && $removeEmptyValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            if(in_array($key.":no_empty_value", $retrieveKeys)){
                unset($container[$key]);
                continue;
            }
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
        };
        return $container;
    }
}

