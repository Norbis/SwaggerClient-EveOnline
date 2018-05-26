<?php
/**
 * GetCharactersCharacterIdFwStatsOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCharactersCharacterIdFwStatsOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdFwStatsOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_fw_stats_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'current_rank' => 'int',
        'enlisted_on' => '\DateTime',
        'faction_id' => 'int',
        'highest_rank' => 'int',
        'kills' => '\Swagger\Client\Model\GetCharactersCharacterIdFwStatsOkKills',
        'victory_points' => '\Swagger\Client\Model\GetCharactersCharacterIdFwStatsOkVictoryPoints'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'current_rank' => 'current_rank',
        'enlisted_on' => 'enlisted_on',
        'faction_id' => 'faction_id',
        'highest_rank' => 'highest_rank',
        'kills' => 'kills',
        'victory_points' => 'victory_points'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'current_rank' => 'setCurrentRank',
        'enlisted_on' => 'setEnlistedOn',
        'faction_id' => 'setFactionId',
        'highest_rank' => 'setHighestRank',
        'kills' => 'setKills',
        'victory_points' => 'setVictoryPoints'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'current_rank' => 'getCurrentRank',
        'enlisted_on' => 'getEnlistedOn',
        'faction_id' => 'getFactionId',
        'highest_rank' => 'getHighestRank',
        'kills' => 'getKills',
        'victory_points' => 'getVictoryPoints'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['current_rank'] = isset($data['current_rank']) ? $data['current_rank'] : null;
        $this->container['enlisted_on'] = isset($data['enlisted_on']) ? $data['enlisted_on'] : null;
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['highest_rank'] = isset($data['highest_rank']) ? $data['highest_rank'] : null;
        $this->container['kills'] = isset($data['kills']) ? $data['kills'] : null;
        $this->container['victory_points'] = isset($data['victory_points']) ? $data['victory_points'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['current_rank']) && ($this->container['current_rank'] > 9.0)) {
            $invalid_properties[] = "invalid value for 'current_rank', must be smaller than or equal to 9.0.";
        }

        if (!is_null($this->container['current_rank']) && ($this->container['current_rank'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'current_rank', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['highest_rank']) && ($this->container['highest_rank'] > 9.0)) {
            $invalid_properties[] = "invalid value for 'highest_rank', must be smaller than or equal to 9.0.";
        }

        if (!is_null($this->container['highest_rank']) && ($this->container['highest_rank'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'highest_rank', must be bigger than or equal to 0.0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['current_rank'] > 9.0) {
            return false;
        }
        if ($this->container['current_rank'] < 0.0) {
            return false;
        }
        if ($this->container['highest_rank'] > 9.0) {
            return false;
        }
        if ($this->container['highest_rank'] < 0.0) {
            return false;
        }
        return true;
    }


    /**
     * Gets current_rank
     * @return int
     */
    public function getCurrentRank()
    {
        return $this->container['current_rank'];
    }

    /**
     * Sets current_rank
     * @param int $current_rank The given character's current faction rank
     * @return $this
     */
    public function setCurrentRank($current_rank)
    {

        if ($current_rank > 9.0) {
            throw new \InvalidArgumentException('invalid value for $current_rank when calling GetCharactersCharacterIdFwStatsOk., must be smaller than or equal to 9.0.');
        }
        if ($current_rank < 0.0) {
            throw new \InvalidArgumentException('invalid value for $current_rank when calling GetCharactersCharacterIdFwStatsOk., must be bigger than or equal to 0.0.');
        }
        $this->container['current_rank'] = $current_rank;

        return $this;
    }

    /**
     * Gets enlisted_on
     * @return \DateTime
     */
    public function getEnlistedOn()
    {
        return $this->container['enlisted_on'];
    }

    /**
     * Sets enlisted_on
     * @param \DateTime $enlisted_on The enlistment date of the given character into faction warfare. Will not be included if character is not enlisted in faction warfare
     * @return $this
     */
    public function setEnlistedOn($enlisted_on)
    {
        $this->container['enlisted_on'] = $enlisted_on;

        return $this;
    }

    /**
     * Gets faction_id
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     * @param int $faction_id The faction the given character is enlisted to fight for. Will not be included if character is not enlisted in faction warfare
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets highest_rank
     * @return int
     */
    public function getHighestRank()
    {
        return $this->container['highest_rank'];
    }

    /**
     * Sets highest_rank
     * @param int $highest_rank The given character's highest faction rank achieved
     * @return $this
     */
    public function setHighestRank($highest_rank)
    {

        if ($highest_rank > 9.0) {
            throw new \InvalidArgumentException('invalid value for $highest_rank when calling GetCharactersCharacterIdFwStatsOk., must be smaller than or equal to 9.0.');
        }
        if ($highest_rank < 0.0) {
            throw new \InvalidArgumentException('invalid value for $highest_rank when calling GetCharactersCharacterIdFwStatsOk., must be bigger than or equal to 0.0.');
        }
        $this->container['highest_rank'] = $highest_rank;

        return $this;
    }

    /**
     * Gets kills
     * @return \Swagger\Client\Model\GetCharactersCharacterIdFwStatsOkKills
     */
    public function getKills()
    {
        return $this->container['kills'];
    }

    /**
     * Sets kills
     * @param \Swagger\Client\Model\GetCharactersCharacterIdFwStatsOkKills $kills
     * @return $this
     */
    public function setKills($kills)
    {
        $this->container['kills'] = $kills;

        return $this;
    }

    /**
     * Gets victory_points
     * @return \Swagger\Client\Model\GetCharactersCharacterIdFwStatsOkVictoryPoints
     */
    public function getVictoryPoints()
    {
        return $this->container['victory_points'];
    }

    /**
     * Sets victory_points
     * @param \Swagger\Client\Model\GetCharactersCharacterIdFwStatsOkVictoryPoints $victory_points
     * @return $this
     */
    public function setVictoryPoints($victory_points)
    {
        $this->container['victory_points'] = $victory_points;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

