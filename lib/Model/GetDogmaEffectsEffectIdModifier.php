<?php
/**
 * GetDogmaEffectsEffectIdModifier
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 1.7.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17-SNAPSHOT
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
 * GetDogmaEffectsEffectIdModifier Class Doc Comment
 *
 * @category Class
 * @description modifier object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDogmaEffectsEffectIdModifier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_dogma_effects_effect_id_modifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain' => 'string',
        'effect_id' => 'int',
        'func' => 'string',
        'modified_attribute_id' => 'int',
        'modifying_attribute_id' => 'int',
        'operator' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain' => null,
        'effect_id' => 'int32',
        'func' => null,
        'modified_attribute_id' => 'int32',
        'modifying_attribute_id' => 'int32',
        'operator' => 'int32'
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
        'domain' => 'domain',
        'effect_id' => 'effect_id',
        'func' => 'func',
        'modified_attribute_id' => 'modified_attribute_id',
        'modifying_attribute_id' => 'modifying_attribute_id',
        'operator' => 'operator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'effect_id' => 'setEffectId',
        'func' => 'setFunc',
        'modified_attribute_id' => 'setModifiedAttributeId',
        'modifying_attribute_id' => 'setModifyingAttributeId',
        'operator' => 'setOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'effect_id' => 'getEffectId',
        'func' => 'getFunc',
        'modified_attribute_id' => 'getModifiedAttributeId',
        'modifying_attribute_id' => 'getModifyingAttributeId',
        'operator' => 'getOperator'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['effect_id'] = isset($data['effect_id']) ? $data['effect_id'] : null;
        $this->container['func'] = isset($data['func']) ? $data['func'] : null;
        $this->container['modified_attribute_id'] = isset($data['modified_attribute_id']) ? $data['modified_attribute_id'] : null;
        $this->container['modifying_attribute_id'] = isset($data['modifying_attribute_id']) ? $data['modifying_attribute_id'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['func'] === null) {
            $invalidProperties[] = "'func' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain string
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets effect_id
     *
     * @return int
     */
    public function getEffectId()
    {
        return $this->container['effect_id'];
    }

    /**
     * Sets effect_id
     *
     * @param int $effect_id effect_id integer
     *
     * @return $this
     */
    public function setEffectId($effect_id)
    {
        $this->container['effect_id'] = $effect_id;

        return $this;
    }

    /**
     * Gets func
     *
     * @return string
     */
    public function getFunc()
    {
        return $this->container['func'];
    }

    /**
     * Sets func
     *
     * @param string $func func string
     *
     * @return $this
     */
    public function setFunc($func)
    {
        $this->container['func'] = $func;

        return $this;
    }

    /**
     * Gets modified_attribute_id
     *
     * @return int
     */
    public function getModifiedAttributeId()
    {
        return $this->container['modified_attribute_id'];
    }

    /**
     * Sets modified_attribute_id
     *
     * @param int $modified_attribute_id modified_attribute_id integer
     *
     * @return $this
     */
    public function setModifiedAttributeId($modified_attribute_id)
    {
        $this->container['modified_attribute_id'] = $modified_attribute_id;

        return $this;
    }

    /**
     * Gets modifying_attribute_id
     *
     * @return int
     */
    public function getModifyingAttributeId()
    {
        return $this->container['modifying_attribute_id'];
    }

    /**
     * Sets modifying_attribute_id
     *
     * @param int $modifying_attribute_id modifying_attribute_id integer
     *
     * @return $this
     */
    public function setModifyingAttributeId($modifying_attribute_id)
    {
        $this->container['modifying_attribute_id'] = $modifying_attribute_id;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return int
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param int $operator operator integer
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

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


