<?php
/**
 * MediumPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  Exivo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * exivo api documentation
 *
 * The exivo API lets you manage an exivo site. To be allowed to use the API the Connection service needs to be activated. For every HTTP request the `siteId`, an `API_KEY` and the corresponding `API_SECRET` are required. All this information can be found in the [exivo app](https://customer.exivo.io/credentials). A new `API_KEY` can be generated in the app. Please note that `API_SECRET` is a confidential information and should be stored securely. After closing the dialogue or refreshing the page the secret can't be displayed anymore. If the secret is lost, a new key needs to be generated and the old must be deleted.
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Exivo\Model;

use \ArrayAccess;
use \Exivo\ObjectSerializer;

/**
 * MediumPayload Class Doc Comment
 *
 * @category Class
 * @package  Exivo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediumPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mediumPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cid' => 'string',
        'uid' => 'string',
        'form_factor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cid' => null,
        'uid' => null,
        'form_factor' => null
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
        'cid' => 'cid',
        'uid' => 'uid',
        'form_factor' => 'formFactor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cid' => 'setCid',
        'uid' => 'setUid',
        'form_factor' => 'setFormFactor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cid' => 'getCid',
        'uid' => 'getUid',
        'form_factor' => 'getFormFactor'
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

    const FORM_FACTOR_BADGE = 'badge';
    const FORM_FACTOR_KEYFOB = 'keyfob';
    const FORM_FACTOR_SMARTKEY = 'smartkey';
    const FORM_FACTOR_INSECURE = 'insecure';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormFactorAllowableValues()
    {
        return [
            self::FORM_FACTOR_BADGE,
            self::FORM_FACTOR_KEYFOB,
            self::FORM_FACTOR_SMARTKEY,
            self::FORM_FACTOR_INSECURE,
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
        $this->container['cid'] = isset($data['cid']) ? $data['cid'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['form_factor'] = isset($data['form_factor']) ? $data['form_factor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFormFactorAllowableValues();
        if (!is_null($this->container['form_factor']) && !in_array($this->container['form_factor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'form_factor', must be one of '%s'",
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
     * Gets cid
     *
     * @return string
     */
    public function getCid()
    {
        return $this->container['cid'];
    }

    /**
     * Sets cid
     *
     * @param string $cid cid
     *
     * @return $this
     */
    public function setCid($cid)
    {
        $this->container['cid'] = $cid;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets form_factor
     *
     * @return string
     */
    public function getFormFactor()
    {
        return $this->container['form_factor'];
    }

    /**
     * Sets form_factor
     *
     * @param string $form_factor form_factor
     *
     * @return $this
     */
    public function setFormFactor($form_factor)
    {
        $allowedValues = $this->getFormFactorAllowableValues();
        if (!is_null($form_factor) && !in_array($form_factor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'form_factor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['form_factor'] = $form_factor;

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


