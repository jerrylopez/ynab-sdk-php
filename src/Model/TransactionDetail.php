<?php
/**
 * TransactionDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ynab
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ynab\Model;

use \ArrayAccess;
use \Ynab\ObjectSerializer;

/**
 * TransactionDetail Class Doc Comment
 *
 * @category Class
 * @package  Ynab
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'date' => '\DateTime',
        'amount' => 'float',
        'cleared' => 'string',
        'approved' => 'bool',
        'account_id' => 'string',
        'subtransactions' => '\Ynab\Model\SubTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'date' => 'date',
        'amount' => '1234000',
        'cleared' => null,
        'approved' => null,
        'account_id' => 'uuid',
        'subtransactions' => null
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
        'id' => 'id',
        'date' => 'date',
        'amount' => 'amount',
        'cleared' => 'cleared',
        'approved' => 'approved',
        'account_id' => 'account_id',
        'subtransactions' => 'subtransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'cleared' => 'setCleared',
        'approved' => 'setApproved',
        'account_id' => 'setAccountId',
        'subtransactions' => 'setSubtransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'cleared' => 'getCleared',
        'approved' => 'getApproved',
        'account_id' => 'getAccountId',
        'subtransactions' => 'getSubtransactions'
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

    const CLEARED_CLEARED = 'cleared';
    const CLEARED_UNCLEARED = 'uncleared';
    const CLEARED_RECONCILED = 'reconciled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClearedAllowableValues()
    {
        return [
            self::CLEARED_CLEARED,
            self::CLEARED_UNCLEARED,
            self::CLEARED_RECONCILED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['cleared'] = isset($data['cleared']) ? $data['cleared'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['subtransactions'] = isset($data['subtransactions']) ? $data['subtransactions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['cleared'] === null) {
            $invalidProperties[] = "'cleared' can't be null";
        }
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($this->container['cleared'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cleared', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['approved'] === null) {
            $invalidProperties[] = "'approved' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['subtransactions'] === null) {
            $invalidProperties[] = "'subtransactions' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['cleared'] === null) {
            return false;
        }
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($this->container['cleared'], $allowedValues)) {
            return false;
        }
        if ($this->container['approved'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['subtransactions'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The transaction amount in milliunits format
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return string
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param string $cleared The cleared status of the transaction
     *
     * @return $this
     */
    public function setCleared($cleared)
    {
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($cleared, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cleared', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved Whether or not the transaction is approved
     *
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets subtransactions
     *
     * @return \Ynab\Model\SubTransaction[]
     */
    public function getSubtransactions()
    {
        return $this->container['subtransactions'];
    }

    /**
     * Sets subtransactions
     *
     * @param \Ynab\Model\SubTransaction[] $subtransactions If a split transaction, the sub-transactions.
     *
     * @return $this
     */
    public function setSubtransactions($subtransactions)
    {
        $this->container['subtransactions'] = $subtransactions;

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


