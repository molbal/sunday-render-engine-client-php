<?php
/**
 * PaymentRecord
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
 * PaymentRecord Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Sunday\ArchiveClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentRecord implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'added_time' => '\DateTime',
        'backend_action_taken' => 'bool',
        'extra_info' => 'string',
        'id' => 'int',
        'initiator_application' => 'string',
        'last_updated_time' => '\DateTime',
        'payment_currency' => 'string',
        'payment_description' => 'string',
        'payment_gateway_transaction_id' => 'string',
        'payment_method' => 'string',
        'payment_status' => 'string',
        'payment_value' => 'double',
        'redirect_to' => 'string',
        'test_payment' => 'bool',
        'user_login_entity' => '\Swagger\Client\Model\UserLoginEntity'
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
        'added_time' => 'addedTime',
        'backend_action_taken' => 'backendActionTaken',
        'extra_info' => 'extraInfo',
        'id' => 'id',
        'initiator_application' => 'initiatorApplication',
        'last_updated_time' => 'lastUpdatedTime',
        'payment_currency' => 'paymentCurrency',
        'payment_description' => 'paymentDescription',
        'payment_gateway_transaction_id' => 'paymentGatewayTransactionID',
        'payment_method' => 'paymentMethod',
        'payment_status' => 'paymentStatus',
        'payment_value' => 'paymentValue',
        'redirect_to' => 'redirectTo',
        'test_payment' => 'testPayment',
        'user_login_entity' => 'userLoginEntity'
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
        'added_time' => 'setAddedTime',
        'backend_action_taken' => 'setBackendActionTaken',
        'extra_info' => 'setExtraInfo',
        'id' => 'setId',
        'initiator_application' => 'setInitiatorApplication',
        'last_updated_time' => 'setLastUpdatedTime',
        'payment_currency' => 'setPaymentCurrency',
        'payment_description' => 'setPaymentDescription',
        'payment_gateway_transaction_id' => 'setPaymentGatewayTransactionId',
        'payment_method' => 'setPaymentMethod',
        'payment_status' => 'setPaymentStatus',
        'payment_value' => 'setPaymentValue',
        'redirect_to' => 'setRedirectTo',
        'test_payment' => 'setTestPayment',
        'user_login_entity' => 'setUserLoginEntity'
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
        'added_time' => 'getAddedTime',
        'backend_action_taken' => 'getBackendActionTaken',
        'extra_info' => 'getExtraInfo',
        'id' => 'getId',
        'initiator_application' => 'getInitiatorApplication',
        'last_updated_time' => 'getLastUpdatedTime',
        'payment_currency' => 'getPaymentCurrency',
        'payment_description' => 'getPaymentDescription',
        'payment_gateway_transaction_id' => 'getPaymentGatewayTransactionId',
        'payment_method' => 'getPaymentMethod',
        'payment_status' => 'getPaymentStatus',
        'payment_value' => 'getPaymentValue',
        'redirect_to' => 'getRedirectTo',
        'test_payment' => 'getTestPayment',
        'user_login_entity' => 'getUserLoginEntity'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PAYMENT_STATUS_WAITING = 'WAITING';
    const PAYMENT_STATUS_INITIALIZED = 'INITIALIZED';
    const PAYMENT_STATUS_PENDING = 'PENDING';
    const PAYMENT_STATUS_SUCCESS = 'SUCCESS';
    const PAYMENT_STATUS_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_WAITING,
            self::PAYMENT_STATUS_INITIALIZED,
            self::PAYMENT_STATUS_PENDING,
            self::PAYMENT_STATUS_SUCCESS,
            self::PAYMENT_STATUS_FAILED,
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
        $this->container['added_time'] = isset($data['added_time']) ? $data['added_time'] : null;
        $this->container['backend_action_taken'] = isset($data['backend_action_taken']) ? $data['backend_action_taken'] : null;
        $this->container['extra_info'] = isset($data['extra_info']) ? $data['extra_info'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['initiator_application'] = isset($data['initiator_application']) ? $data['initiator_application'] : null;
        $this->container['last_updated_time'] = isset($data['last_updated_time']) ? $data['last_updated_time'] : null;
        $this->container['payment_currency'] = isset($data['payment_currency']) ? $data['payment_currency'] : null;
        $this->container['payment_description'] = isset($data['payment_description']) ? $data['payment_description'] : null;
        $this->container['payment_gateway_transaction_id'] = isset($data['payment_gateway_transaction_id']) ? $data['payment_gateway_transaction_id'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['payment_value'] = isset($data['payment_value']) ? $data['payment_value'] : null;
        $this->container['redirect_to'] = isset($data['redirect_to']) ? $data['redirect_to'] : null;
        $this->container['test_payment'] = isset($data['test_payment']) ? $data['test_payment'] : null;
        $this->container['user_login_entity'] = isset($data['user_login_entity']) ? $data['user_login_entity'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("WAITING", "INITIALIZED", "PENDING", "SUCCESS", "FAILED");
        if (!in_array($this->container['payment_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'payment_status', must be one of #{allowed_values}.";
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
        $allowed_values = array("WAITING", "INITIALIZED", "PENDING", "SUCCESS", "FAILED");
        if (!in_array($this->container['payment_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets added_time
     * @return \DateTime
     */
    public function getAddedTime()
    {
        return $this->container['added_time'];
    }

    /**
     * Sets added_time
     * @param \DateTime $added_time A fizetés rögzítésének időpontja
     * @return $this
     */
    public function setAddedTime($added_time)
    {
        $this->container['added_time'] = $added_time;

        return $this;
    }

    /**
     * Gets backend_action_taken
     * @return bool
     */
    public function getBackendActionTaken()
    {
        return $this->container['backend_action_taken'];
    }

    /**
     * Sets backend_action_taken
     * @param bool $backend_action_taken Backend akció megtörtént? Pl.: Webszerviz hívás
     * @return $this
     */
    public function setBackendActionTaken($backend_action_taken)
    {
        $this->container['backend_action_taken'] = $backend_action_taken;

        return $this;
    }

    /**
     * Gets extra_info
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->container['extra_info'];
    }

    /**
     * Sets extra_info
     * @param string $extra_info Extra információ. Ajánlott JSON stringben tartani. (max 512 char)
     * @return $this
     */
    public function setExtraInfo($extra_info)
    {
        $this->container['extra_info'] = $extra_info;

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
     * Gets initiator_application
     * @return string
     */
    public function getInitiatorApplication()
    {
        return $this->container['initiator_application'];
    }

    /**
     * Sets initiator_application
     * @param string $initiator_application Milyen alkalmazás kezdeményezte a fizetést? Pl.: OAP/Asszisztencia
     * @return $this
     */
    public function setInitiatorApplication($initiator_application)
    {
        $this->container['initiator_application'] = $initiator_application;

        return $this;
    }

    /**
     * Gets last_updated_time
     * @return \DateTime
     */
    public function getLastUpdatedTime()
    {
        return $this->container['last_updated_time'];
    }

    /**
     * Sets last_updated_time
     * @param \DateTime $last_updated_time A legutolsó módosítás időpontja
     * @return $this
     */
    public function setLastUpdatedTime($last_updated_time)
    {
        $this->container['last_updated_time'] = $last_updated_time;

        return $this;
    }

    /**
     * Gets payment_currency
     * @return string
     */
    public function getPaymentCurrency()
    {
        return $this->container['payment_currency'];
    }

    /**
     * Sets payment_currency
     * @param string $payment_currency Fizetési valuta
     * @return $this
     */
    public function setPaymentCurrency($payment_currency)
    {
        $this->container['payment_currency'] = $payment_currency;

        return $this;
    }

    /**
     * Gets payment_description
     * @return string
     */
    public function getPaymentDescription()
    {
        return $this->container['payment_description'];
    }

    /**
     * Sets payment_description
     * @param string $payment_description Mit fizet ki az ügyfél?  Max 512 karakter
     * @return $this
     */
    public function setPaymentDescription($payment_description)
    {
        $this->container['payment_description'] = $payment_description;

        return $this;
    }

    /**
     * Gets payment_gateway_transaction_id
     * @return string
     */
    public function getPaymentGatewayTransactionId()
    {
        return $this->container['payment_gateway_transaction_id'];
    }

    /**
     * Sets payment_gateway_transaction_id
     * @param string $payment_gateway_transaction_id Bigfish transaction ID
     * @return $this
     */
    public function setPaymentGatewayTransactionId($payment_gateway_transaction_id)
    {
        $this->container['payment_gateway_transaction_id'] = $payment_gateway_transaction_id;

        return $this;
    }

    /**
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     * @param string $payment_method A fizetési módszer
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_status
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     * @param string $payment_status Fizetés státusza
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowed_values = array('WAITING', 'INITIALIZED', 'PENDING', 'SUCCESS', 'FAILED');
        if (!in_array($payment_status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'payment_status', must be one of 'WAITING', 'INITIALIZED', 'PENDING', 'SUCCESS', 'FAILED'");
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets payment_value
     * @return double
     */
    public function getPaymentValue()
    {
        return $this->container['payment_value'];
    }

    /**
     * Sets payment_value
     * @param double $payment_value Fizetési összeg
     * @return $this
     */
    public function setPaymentValue($payment_value)
    {
        $this->container['payment_value'] = $payment_value;

        return $this;
    }

    /**
     * Gets redirect_to
     * @return string
     */
    public function getRedirectTo()
    {
        return $this->container['redirect_to'];
    }

    /**
     * Sets redirect_to
     * @param string $redirect_to A fizetés megörténte után hova irányítsa vissza a felhasználót? Max 512 karakter
     * @return $this
     */
    public function setRedirectTo($redirect_to)
    {
        $this->container['redirect_to'] = $redirect_to;

        return $this;
    }

    /**
     * Gets test_payment
     * @return bool
     */
    public function getTestPayment()
    {
        return $this->container['test_payment'];
    }

    /**
     * Sets test_payment
     * @param bool $test_payment Teszt fizetés esetén true-ra kell állítani, egyébként false.
     * @return $this
     */
    public function setTestPayment($test_payment)
    {
        $this->container['test_payment'] = $test_payment;

        return $this;
    }

    /**
     * Gets user_login_entity
     * @return \Swagger\Client\Model\UserLoginEntity
     */
    public function getUserLoginEntity()
    {
        return $this->container['user_login_entity'];
    }

    /**
     * Sets user_login_entity
     * @param \Swagger\Client\Model\UserLoginEntity $user_login_entity
     * @return $this
     */
    public function setUserLoginEntity($user_login_entity)
    {
        $this->container['user_login_entity'] = $user_login_entity;

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


