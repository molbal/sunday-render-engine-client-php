<?php
/**
 * LoginResponse
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
 * LoginResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoginResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LoginResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'login_error_message' => 'string',
        'login_fail_reason' => 'string',
        'login_success' => 'bool',
        'user_type' => 'string'
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
        'id' => 'id',
        'login_error_message' => 'loginErrorMessage',
        'login_fail_reason' => 'loginFailReason',
        'login_success' => 'loginSuccess',
        'user_type' => 'userType'
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
        'id' => 'setId',
        'login_error_message' => 'setLoginErrorMessage',
        'login_fail_reason' => 'setLoginFailReason',
        'login_success' => 'setLoginSuccess',
        'user_type' => 'setUserType'
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
        'id' => 'getId',
        'login_error_message' => 'getLoginErrorMessage',
        'login_fail_reason' => 'getLoginFailReason',
        'login_success' => 'getLoginSuccess',
        'user_type' => 'getUserType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const LOGIN_FAIL_REASON_NOT_FOUND = 'NOT_FOUND';
    const LOGIN_FAIL_REASON_INVALID_PASSWORD = 'INVALID_PASSWORD';
    const LOGIN_FAIL_REASON_INVALID_STATUS = 'INVALID_STATUS';
    const LOGIN_FAIL_REASON_SERVER_ERROR = 'SERVER_ERROR';
    const USER_TYPE_NORMAL = 'NORMAL';
    const USER_TYPE_BANNED = 'BANNED';
    const USER_TYPE_DELETED = 'DELETED';
    const USER_TYPE_ADMIN = 'ADMIN';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLoginFailReasonAllowableValues()
    {
        return [
            self::LOGIN_FAIL_REASON_NOT_FOUND,
            self::LOGIN_FAIL_REASON_INVALID_PASSWORD,
            self::LOGIN_FAIL_REASON_INVALID_STATUS,
            self::LOGIN_FAIL_REASON_SERVER_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_NORMAL,
            self::USER_TYPE_BANNED,
            self::USER_TYPE_DELETED,
            self::USER_TYPE_ADMIN,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['login_error_message'] = isset($data['login_error_message']) ? $data['login_error_message'] : null;
        $this->container['login_fail_reason'] = isset($data['login_fail_reason']) ? $data['login_fail_reason'] : null;
        $this->container['login_success'] = isset($data['login_success']) ? $data['login_success'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("NOT_FOUND", "INVALID_PASSWORD", "INVALID_STATUS", "SERVER_ERROR");
        if (!in_array($this->container['login_fail_reason'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'login_fail_reason', must be one of #{allowed_values}.";
        }

        $allowed_values = array("NORMAL", "BANNED", "DELETED", "ADMIN");
        if (!in_array($this->container['user_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'user_type', must be one of #{allowed_values}.";
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
        $allowed_values = array("NOT_FOUND", "INVALID_PASSWORD", "INVALID_STATUS", "SERVER_ERROR");
        if (!in_array($this->container['login_fail_reason'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("NORMAL", "BANNED", "DELETED", "ADMIN");
        if (!in_array($this->container['user_type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * Gets login_error_message
     * @return string
     */
    public function getLoginErrorMessage()
    {
        return $this->container['login_error_message'];
    }

    /**
     * Sets login_error_message
     * @param string $login_error_message Sikertelen belépés esetén a hiba okát tartalmazza.
     * @return $this
     */
    public function setLoginErrorMessage($login_error_message)
    {
        $this->container['login_error_message'] = $login_error_message;

        return $this;
    }

    /**
     * Gets login_fail_reason
     * @return string
     */
    public function getLoginFailReason()
    {
        return $this->container['login_fail_reason'];
    }

    /**
     * Sets login_fail_reason
     * @param string $login_fail_reason A belépés sikertelenségének oka
     * @return $this
     */
    public function setLoginFailReason($login_fail_reason)
    {
        $allowed_values = array('NOT_FOUND', 'INVALID_PASSWORD', 'INVALID_STATUS', 'SERVER_ERROR');
        if (!in_array($login_fail_reason, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'login_fail_reason', must be one of 'NOT_FOUND', 'INVALID_PASSWORD', 'INVALID_STATUS', 'SERVER_ERROR'");
        }
        $this->container['login_fail_reason'] = $login_fail_reason;

        return $this;
    }

    /**
     * Gets login_success
     * @return bool
     */
    public function getLoginSuccess()
    {
        return $this->container['login_success'];
    }

    /**
     * Sets login_success
     * @param bool $login_success Igaz, ha sikeres volt a belépés, hamis, ha nem
     * @return $this
     */
    public function setLoginSuccess($login_success)
    {
        $this->container['login_success'] = $login_success;

        return $this;
    }

    /**
     * Gets user_type
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     * @param string $user_type Enum, a felhasználó típusa
     * @return $this
     */
    public function setUserType($user_type)
    {
        $allowed_values = array('NORMAL', 'BANNED', 'DELETED', 'ADMIN');
        if (!in_array($user_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'user_type', must be one of 'NORMAL', 'BANNED', 'DELETED', 'ADMIN'");
        }
        $this->container['user_type'] = $user_type;

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


