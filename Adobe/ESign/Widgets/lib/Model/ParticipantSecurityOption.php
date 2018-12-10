<?php
/**
 * ParticipantSecurityOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign\Widgets
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Adobe\ESign\Widgets\Model;

use \ArrayAccess;
use \Adobe\ESign\Widgets\ObjectSerializer;

/**
 * ParticipantSecurityOption Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign\Widgets
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParticipantSecurityOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParticipantSecurityOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_method' => 'string',
        'password' => 'string',
        'phone_info' => '\Adobe\ESign\Widgets\Model\PhoneInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_method' => null,
        'password' => null,
        'phone_info' => null
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
        'authentication_method' => 'authenticationMethod',
        'password' => 'password',
        'phone_info' => 'phoneInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_method' => 'setAuthenticationMethod',
        'password' => 'setPassword',
        'phone_info' => 'setPhoneInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_method' => 'getAuthenticationMethod',
        'password' => 'getPassword',
        'phone_info' => 'getPhoneInfo'
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

    const AUTHENTICATION_METHOD_NONE = 'NONE';
    const AUTHENTICATION_METHOD_PASSWORD = 'PASSWORD';
    const AUTHENTICATION_METHOD_PHONE = 'PHONE';
    const AUTHENTICATION_METHOD_KBA = 'KBA';
    const AUTHENTICATION_METHOD_WEB_IDENTITY = 'WEB_IDENTITY';
    const AUTHENTICATION_METHOD_ADOBE_SIGN = 'ADOBE_SIGN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationMethodAllowableValues()
    {
        return [
            self::AUTHENTICATION_METHOD_NONE,
            self::AUTHENTICATION_METHOD_PASSWORD,
            self::AUTHENTICATION_METHOD_PHONE,
            self::AUTHENTICATION_METHOD_KBA,
            self::AUTHENTICATION_METHOD_WEB_IDENTITY,
            self::AUTHENTICATION_METHOD_ADOBE_SIGN,
        ];
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
        $this->container['authentication_method'] = isset($data['authentication_method']) ? $data['authentication_method'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['phone_info'] = isset($data['phone_info']) ? $data['phone_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!is_null($this->container['authentication_method']) && !in_array($this->container['authentication_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'authentication_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets authentication_method
     *
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->container['authentication_method'];
    }

    /**
     * Sets authentication_method
     *
     * @param string $authentication_method The authentication method for the participants to have access to view and sign the document
     *
     * @return $this
     */
    public function setAuthenticationMethod($authentication_method)
    {
        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!is_null($authentication_method) && !in_array($authentication_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'authentication_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authentication_method'] = $authentication_method;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The password required for the participant to view and sign the document. Note that AdobeSign will never show this password to anyone, so you will need to separately communicate it to any relevant parties. The password will not be returned in GET call. In case of PUT call, password associated with Agreement resource will remain unchanged if no password is specified but authentication method is provided as PASSWORD
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets phone_info
     *
     * @return \Adobe\ESign\Widgets\Model\PhoneInfo
     */
    public function getPhoneInfo()
    {
        return $this->container['phone_info'];
    }

    /**
     * Sets phone_info
     *
     * @param \Adobe\ESign\Widgets\Model\PhoneInfo $phone_info The phoneInfo required for the participant to view and sign the document
     *
     * @return $this
     */
    public function setPhoneInfo($phone_info)
    {
        $this->container['phone_info'] = $phone_info;

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


