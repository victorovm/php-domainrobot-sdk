<?php
/**
 * UserAcl
 *
 * PHP version 5
 *
 * @category Class
 * @package  IXDomainRobot
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

namespace IXDomainRobot\Model;

use \ArrayAccess;
use \IXDomainRobot\ObjectSerializer;

/**
 * UserAcl Class Doc Comment
 *
 * @category Class
 * @package  IXDomainRobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAcl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAcl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'functionCode' => 'string',
        'children' => '\IXDomainRobot\Model\BasicUser[]',
        'childrenLocked' => 'bool',
        'userLocked' => 'bool',
        'effective' => 'bool',
        'childrenRem' => '\IXDomainRobot\Model\BasicUser[]',
        'childrenAdd' => '\IXDomainRobot\Model\BasicUser[]',
        'restriction' => '\IXDomainRobot\Model\ACLRestriction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'functionCode' => null,
        'children' => null,
        'childrenLocked' => null,
        'userLocked' => null,
        'effective' => null,
        'childrenRem' => null,
        'childrenAdd' => null,
        'restriction' => null
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
        'functionCode' => 'functionCode',
        'children' => 'children',
        'childrenLocked' => 'childrenLocked',
        'userLocked' => 'userLocked',
        'effective' => 'effective',
        'childrenRem' => 'childrenRem',
        'childrenAdd' => 'childrenAdd',
        'restriction' => 'restriction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'functionCode' => 'setFunctionCode',
        'children' => 'setChildren',
        'childrenLocked' => 'setChildrenLocked',
        'userLocked' => 'setUserLocked',
        'effective' => 'setEffective',
        'childrenRem' => 'setChildrenRem',
        'childrenAdd' => 'setChildrenAdd',
        'restriction' => 'setRestriction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'functionCode' => 'getFunctionCode',
        'children' => 'getChildren',
        'childrenLocked' => 'getChildrenLocked',
        'userLocked' => 'getUserLocked',
        'effective' => 'getEffective',
        'childrenRem' => 'getChildrenRem',
        'childrenAdd' => 'getChildrenAdd',
        'restriction' => 'getRestriction'
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
        $this->container['functionCode'] = isset($data['functionCode']) ? $data['functionCode'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['childrenLocked'] = isset($data['childrenLocked']) ? $data['childrenLocked'] : null;
        $this->container['userLocked'] = isset($data['userLocked']) ? $data['userLocked'] : null;
        $this->container['effective'] = isset($data['effective']) ? $data['effective'] : null;
        $this->container['childrenRem'] = isset($data['childrenRem']) ? $data['childrenRem'] : null;
        $this->container['childrenAdd'] = isset($data['childrenAdd']) ? $data['childrenAdd'] : null;
        $this->container['restriction'] = isset($data['restriction']) ? $data['restriction'] : null;
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
     * Gets functionCode
     *
     * @return string
     */
    public function getFunctionCode()
    {
        return $this->container['functionCode'];
    }

    /**
     * Sets functionCode
     *
     * @param string $functionCode The function code to restrict
     *
     * @return $this
     */
    public function setFunctionCode($functionCode)
    {
        $this->container['functionCode'] = $functionCode;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \IXDomainRobot\Model\BasicUser[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \IXDomainRobot\Model\BasicUser[] $children The none locked children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets childrenLocked
     *
     * @return bool
     */
    public function getChildrenLocked()
    {
        return $this->container['childrenLocked'];
    }

    /**
     * Sets childrenLocked
     *
     * @param bool $childrenLocked The children lock
     *
     * @return $this
     */
    public function setChildrenLocked($childrenLocked)
    {
        $this->container['childrenLocked'] = $childrenLocked;

        return $this;
    }

    /**
     * Gets userLocked
     *
     * @return bool
     */
    public function getUserLocked()
    {
        return $this->container['userLocked'];
    }

    /**
     * Sets userLocked
     *
     * @param bool $userLocked The user lock
     *
     * @return $this
     */
    public function setUserLocked($userLocked)
    {
        $this->container['userLocked'] = $userLocked;

        return $this;
    }

    /**
     * Gets effective
     *
     * @return bool
     */
    public function getEffective()
    {
        return $this->container['effective'];
    }

    /**
     * Sets effective
     *
     * @param bool $effective The current active lock for the user
     *
     * @return $this
     */
    public function setEffective($effective)
    {
        $this->container['effective'] = $effective;

        return $this;
    }

    /**
     * Gets childrenRem
     *
     * @return \IXDomainRobot\Model\BasicUser[]
     */
    public function getChildrenRem()
    {
        return $this->container['childrenRem'];
    }

    /**
     * Sets childrenRem
     *
     * @param \IXDomainRobot\Model\BasicUser[] $childrenRem Children to remove from the exception list
     *
     * @return $this
     */
    public function setChildrenRem($childrenRem)
    {
        $this->container['childrenRem'] = $childrenRem;

        return $this;
    }

    /**
     * Gets childrenAdd
     *
     * @return \IXDomainRobot\Model\BasicUser[]
     */
    public function getChildrenAdd()
    {
        return $this->container['childrenAdd'];
    }

    /**
     * Sets childrenAdd
     *
     * @param \IXDomainRobot\Model\BasicUser[] $childrenAdd Children to add to the exception list
     *
     * @return $this
     */
    public function setChildrenAdd($childrenAdd)
    {
        $this->container['childrenAdd'] = $childrenAdd;

        return $this;
    }

    /**
     * Gets restriction
     *
     * @return \IXDomainRobot\Model\ACLRestriction
     */
    public function getRestriction()
    {
        return $this->container['restriction'];
    }

    /**
     * Sets restriction
     *
     * @param \IXDomainRobot\Model\ACLRestriction $restriction The human readable restriction mode
     *
     * @return $this
     */
    public function setRestriction($restriction)
    {
        $this->container['restriction'] = $restriction;

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

