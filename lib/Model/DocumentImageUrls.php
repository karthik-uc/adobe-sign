<?php
/**
 * DocumentImageUrls
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * DocumentImageUrls Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentImageUrls implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentImageUrls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image_ur_ls' => '\Swagger\Client\Model\PageImageUrl[]',
        'images_available' => 'bool',
        'image_size' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image_ur_ls' => null,
        'images_available' => null,
        'image_size' => null
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
        'image_ur_ls' => 'imageURLs',
        'images_available' => 'imagesAvailable',
        'image_size' => 'imageSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_ur_ls' => 'setImageUrLs',
        'images_available' => 'setImagesAvailable',
        'image_size' => 'setImageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_ur_ls' => 'getImageUrLs',
        'images_available' => 'getImagesAvailable',
        'image_size' => 'getImageSize'
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

    const IMAGE_SIZE_FIXED_WIDTH_50PX = 'FIXED_WIDTH_50px';
    const IMAGE_SIZE_FIXED_WIDTH_250PX = 'FIXED_WIDTH_250px';
    const IMAGE_SIZE_FIXED_WIDTH_675PX = 'FIXED_WIDTH_675px';
    const IMAGE_SIZE_ZOOM_50_PERCENT = 'ZOOM_50_PERCENT';
    const IMAGE_SIZE_ZOOM_75_PERCENT = 'ZOOM_75_PERCENT';
    const IMAGE_SIZE_ZOOM_100_PERCENT = 'ZOOM_100_PERCENT';
    const IMAGE_SIZE_ZOOM_125_PERCENT = 'ZOOM_125_PERCENT';
    const IMAGE_SIZE_ZOOM_150_PERCENT = 'ZOOM_150_PERCENT';
    const IMAGE_SIZE_ZOOM_200_PERCENT = 'ZOOM_200_PERCENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageSizeAllowableValues()
    {
        return [
            self::IMAGE_SIZE_FIXED_WIDTH_50PX,
            self::IMAGE_SIZE_FIXED_WIDTH_250PX,
            self::IMAGE_SIZE_FIXED_WIDTH_675PX,
            self::IMAGE_SIZE_ZOOM_50_PERCENT,
            self::IMAGE_SIZE_ZOOM_75_PERCENT,
            self::IMAGE_SIZE_ZOOM_100_PERCENT,
            self::IMAGE_SIZE_ZOOM_125_PERCENT,
            self::IMAGE_SIZE_ZOOM_150_PERCENT,
            self::IMAGE_SIZE_ZOOM_200_PERCENT,
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
        $this->container['image_ur_ls'] = isset($data['image_ur_ls']) ? $data['image_ur_ls'] : null;
        $this->container['images_available'] = isset($data['images_available']) ? $data['images_available'] : null;
        $this->container['image_size'] = isset($data['image_size']) ? $data['image_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getImageSizeAllowableValues();
        if (!is_null($this->container['image_size']) && !in_array($this->container['image_size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'image_size', must be one of '%s'",
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
     * Gets image_ur_ls
     *
     * @return \Swagger\Client\Model\PageImageUrl[]
     */
    public function getImageUrLs()
    {
        return $this->container['image_ur_ls'];
    }

    /**
     * Sets image_ur_ls
     *
     * @param \Swagger\Client\Model\PageImageUrl[] $image_ur_ls A list of image url (one per page).
     *
     * @return $this
     */
    public function setImageUrLs($image_ur_ls)
    {
        $this->container['image_ur_ls'] = $image_ur_ls;

        return $this;
    }

    /**
     * Gets images_available
     *
     * @return bool
     */
    public function getImagesAvailable()
    {
        return $this->container['images_available'];
    }

    /**
     * Sets images_available
     *
     * @param bool $images_available true if images for the associated image size is available, else false.
     *
     * @return $this
     */
    public function setImagesAvailable($images_available)
    {
        $this->container['images_available'] = $images_available;

        return $this;
    }

    /**
     * Gets image_size
     *
     * @return string
     */
    public function getImageSize()
    {
        return $this->container['image_size'];
    }

    /**
     * Sets image_size
     *
     * @param string $image_size ImageSize corresponding to the imageUrl returned
     *
     * @return $this
     */
    public function setImageSize($image_size)
    {
        $allowedValues = $this->getImageSizeAllowableValues();
        if (!is_null($image_size) && !in_array($image_size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'image_size', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['image_size'] = $image_size;

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


