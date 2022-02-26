<?php
/**
 * AddressEntity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sunday\ArchiveClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sunday Archive Service
 *
 * Sunday Archive Service
 *
 * OpenAPI spec version: 0.0.1-SNAPSHOT
 * Contact: molnar.balint@mdy.hu
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
 * AddressEntity Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Sunday\ArchiveClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressEntity implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'door' => 'string',
        'floor' => 'string',
        'id' => 'int',
        'post_code' => 'string',
        'settlement' => 'string',
        'staircase' => 'string',
        'state' => 'string',
        'street' => 'string',
        'street_nr' => 'string',
        'street_suffix' => 'string'
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
        'door' => 'door',
        'floor' => 'floor',
        'id' => 'id',
        'post_code' => 'postCode',
        'settlement' => 'settlement',
        'staircase' => 'staircase',
        'state' => 'state',
        'street' => 'street',
        'street_nr' => 'streetNr',
        'street_suffix' => 'streetSuffix'
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
        'door' => 'setDoor',
        'floor' => 'setFloor',
        'id' => 'setId',
        'post_code' => 'setPostCode',
        'settlement' => 'setSettlement',
        'staircase' => 'setStaircase',
        'state' => 'setState',
        'street' => 'setStreet',
        'street_nr' => 'setStreetNr',
        'street_suffix' => 'setStreetSuffix'
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
        'door' => 'getDoor',
        'floor' => 'getFloor',
        'id' => 'getId',
        'post_code' => 'getPostCode',
        'settlement' => 'getSettlement',
        'staircase' => 'getStaircase',
        'state' => 'getState',
        'street' => 'getStreet',
        'street_nr' => 'getStreetNr',
        'street_suffix' => 'getStreetSuffix'
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
        $this->container['door'] = isset($data['door']) ? $data['door'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['settlement'] = isset($data['settlement']) ? $data['settlement'] : null;
        $this->container['staircase'] = isset($data['staircase']) ? $data['staircase'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['street_nr'] = isset($data['street_nr']) ? $data['street_nr'] : null;
        $this->container['street_suffix'] = isset($data['street_suffix']) ? $data['street_suffix'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets door
     * @return string
     */
    public function getDoor()
    {
        return $this->container['door'];
    }

    /**
     * Sets door
     * @param string $door Ajtó. Nem null, max 4 hosszú
     * @return $this
     */
    public function setDoor($door)
    {
        $this->container['door'] = $door;

        return $this;
    }

    /**
     * Gets floor
     * @return string
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     * @param string $floor Emelet. Nem null, max 16 hosszú
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets post_code
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     * @param string $post_code Irányítószám. Nem null, max 6 hosszú
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets settlement
     * @return string
     */
    public function getSettlement()
    {
        return $this->container['settlement'];
    }

    /**
     * Sets settlement
     * @param string $settlement Település. Nem null, max 48 hosszú
     * @return $this
     */
    public function setSettlement($settlement)
    {
        $this->container['settlement'] = $settlement;

        return $this;
    }

    /**
     * Gets staircase
     * @return string
     */
    public function getStaircase()
    {
        return $this->container['staircase'];
    }

    /**
     * Sets staircase
     * @param string $staircase Lépcsőház. Nem null, max 4 hosszú
     * @return $this
     */
    public function setStaircase($staircase)
    {
        $this->container['staircase'] = $staircase;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Megye. Nem null, max 24 hosszú
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street Közterület neve. Nem null, max 48 hosszú
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street_nr
     * @return string
     */
    public function getStreetNr()
    {
        return $this->container['street_nr'];
    }

    /**
     * Sets street_nr
     * @param string $street_nr Házszám vagy helyrajzi szám. Nem null, max 16 hosszú
     * @return $this
     */
    public function setStreetNr($street_nr)
    {
        $this->container['street_nr'] = $street_nr;

        return $this;
    }

    /**
     * Gets street_suffix
     * @return string
     */
    public function getStreetSuffix()
    {
        return $this->container['street_suffix'];
    }

    /**
     * Sets street_suffix
     * @param string $street_suffix Közterület jellege. Nem null, max 16 hosszú
     * @return $this
     */
    public function setStreetSuffix($street_suffix)
    {
        $this->container['street_suffix'] = $street_suffix;

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
            return json_encode(\Sunday\ArchiveClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Sunday\ArchiveClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


