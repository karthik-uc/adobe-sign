<?php
/**
 * ReminderInfo
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
 * ReminderInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReminderInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReminderInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'note' => 'string',
        'last_sent_date' => '\DateTime',
        'next_sent_date' => '\DateTime',
        'reminder_id' => 'string',
        'first_reminder_delay' => 'int',
        'recipient_participant_ids' => 'string[]',
        'start_reminder_counter_from' => 'string',
        'frequency' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'note' => null,
        'last_sent_date' => 'date',
        'next_sent_date' => 'date',
        'reminder_id' => null,
        'first_reminder_delay' => null,
        'recipient_participant_ids' => null,
        'start_reminder_counter_from' => null,
        'frequency' => null,
        'status' => null
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
        'note' => 'note',
        'last_sent_date' => 'lastSentDate',
        'next_sent_date' => 'nextSentDate',
        'reminder_id' => 'reminderId',
        'first_reminder_delay' => 'firstReminderDelay',
        'recipient_participant_ids' => 'recipientParticipantIds',
        'start_reminder_counter_from' => 'startReminderCounterFrom',
        'frequency' => 'frequency',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'note' => 'setNote',
        'last_sent_date' => 'setLastSentDate',
        'next_sent_date' => 'setNextSentDate',
        'reminder_id' => 'setReminderId',
        'first_reminder_delay' => 'setFirstReminderDelay',
        'recipient_participant_ids' => 'setRecipientParticipantIds',
        'start_reminder_counter_from' => 'setStartReminderCounterFrom',
        'frequency' => 'setFrequency',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'note' => 'getNote',
        'last_sent_date' => 'getLastSentDate',
        'next_sent_date' => 'getNextSentDate',
        'reminder_id' => 'getReminderId',
        'first_reminder_delay' => 'getFirstReminderDelay',
        'recipient_participant_ids' => 'getRecipientParticipantIds',
        'start_reminder_counter_from' => 'getStartReminderCounterFrom',
        'frequency' => 'getFrequency',
        'status' => 'getStatus'
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

    const START_REMINDER_COUNTER_FROM_AGREEMENT_AVAILABILITY = 'AGREEMENT_AVAILABILITY';
    const START_REMINDER_COUNTER_FROM_REMINDER_CREATION = 'REMINDER_CREATION';
    const FREQUENCY_DAILY_UNTIL_SIGNED = 'DAILY_UNTIL_SIGNED';
    const FREQUENCY_WEEKDAILY_UNTIL_SIGNED = 'WEEKDAILY_UNTIL_SIGNED';
    const FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED = 'EVERY_OTHER_DAY_UNTIL_SIGNED';
    const FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED = 'EVERY_THIRD_DAY_UNTIL_SIGNED';
    const FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED = 'EVERY_FIFTH_DAY_UNTIL_SIGNED';
    const FREQUENCY_WEEKLY_UNTIL_SIGNED = 'WEEKLY_UNTIL_SIGNED';
    const FREQUENCY_ONCE = 'ONCE';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_COMPLETE = 'COMPLETE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStartReminderCounterFromAllowableValues()
    {
        return [
            self::START_REMINDER_COUNTER_FROM_AGREEMENT_AVAILABILITY,
            self::START_REMINDER_COUNTER_FROM_REMINDER_CREATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_DAILY_UNTIL_SIGNED,
            self::FREQUENCY_WEEKDAILY_UNTIL_SIGNED,
            self::FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED,
            self::FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED,
            self::FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED,
            self::FREQUENCY_WEEKLY_UNTIL_SIGNED,
            self::FREQUENCY_ONCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_CANCELED,
            self::STATUS_COMPLETE,
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
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['last_sent_date'] = isset($data['last_sent_date']) ? $data['last_sent_date'] : null;
        $this->container['next_sent_date'] = isset($data['next_sent_date']) ? $data['next_sent_date'] : null;
        $this->container['reminder_id'] = isset($data['reminder_id']) ? $data['reminder_id'] : null;
        $this->container['first_reminder_delay'] = isset($data['first_reminder_delay']) ? $data['first_reminder_delay'] : null;
        $this->container['recipient_participant_ids'] = isset($data['recipient_participant_ids']) ? $data['recipient_participant_ids'] : null;
        $this->container['start_reminder_counter_from'] = isset($data['start_reminder_counter_from']) ? $data['start_reminder_counter_from'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStartReminderCounterFromAllowableValues();
        if (!is_null($this->container['start_reminder_counter_from']) && !in_array($this->container['start_reminder_counter_from'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'start_reminder_counter_from', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note An optional message sent to the recipients, describing why their participation is required
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets last_sent_date
     *
     * @return \DateTime
     */
    public function getLastSentDate()
    {
        return $this->container['last_sent_date'];
    }

    /**
     * Sets last_sent_date
     *
     * @param \DateTime $last_sent_date The date when the reminder was last sent. Only provided in GET. Cannot be provided in POST request. If provided in POST, it will be ignored. Cannot be updated in a PUT. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setLastSentDate($last_sent_date)
    {
        $this->container['last_sent_date'] = $last_sent_date;

        return $this;
    }

    /**
     * Gets next_sent_date
     *
     * @return \DateTime
     */
    public function getNextSentDate()
    {
        return $this->container['next_sent_date'];
    }

    /**
     * Sets next_sent_date
     *
     * @param \DateTime $next_sent_date The date when the reminder is scheduled to be sent next. When provided in POST request, frequency needs to be ONCE (or not specified), startReminderCounterFrom needs to be REMINDER_CREATION (or not specified) and firstReminderDelay needs to be 0 (or not specified). Cannot be updated in a PUT. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setNextSentDate($next_sent_date)
    {
        $this->container['next_sent_date'] = $next_sent_date;

        return $this;
    }

    /**
     * Gets reminder_id
     *
     * @return string
     */
    public function getReminderId()
    {
        return $this->container['reminder_id'];
    }

    /**
     * Sets reminder_id
     *
     * @param string $reminder_id An identifier of the reminder resource created on the server. If provided in POST or PUT, it will be ignored
     *
     * @return $this
     */
    public function setReminderId($reminder_id)
    {
        $this->container['reminder_id'] = $reminder_id;

        return $this;
    }

    /**
     * Gets first_reminder_delay
     *
     * @return int
     */
    public function getFirstReminderDelay()
    {
        return $this->container['first_reminder_delay'];
    }

    /**
     * Sets first_reminder_delay
     *
     * @param int $first_reminder_delay Integer which specifies the delay in hours before sending the first reminder.<br>This is an optional field. The minimum value allowed is 1 hour and the maximum value can’t be more than the difference of agreement creation and expiry time of the agreement in hours.<br>If this is not specified but the reminder frequency is specified, then the first reminder will be sent based on frequency.<br>i.e. if the reminder is created with frequency specified as daily, the firstReminderDelay will be 24 hours. Cannot be updated in a PUT
     *
     * @return $this
     */
    public function setFirstReminderDelay($first_reminder_delay)
    {
        $this->container['first_reminder_delay'] = $first_reminder_delay;

        return $this;
    }

    /**
     * Gets recipient_participant_ids
     *
     * @return string[]
     */
    public function getRecipientParticipantIds()
    {
        return $this->container['recipient_participant_ids'];
    }

    /**
     * Sets recipient_participant_ids
     *
     * @param string[] $recipient_participant_ids A list of one or more participant IDs that the reminder should be sent to. These must be recipients of the agreement and not sharees or cc's.
     *
     * @return $this
     */
    public function setRecipientParticipantIds($recipient_participant_ids)
    {
        $this->container['recipient_participant_ids'] = $recipient_participant_ids;

        return $this;
    }

    /**
     * Gets start_reminder_counter_from
     *
     * @return string
     */
    public function getStartReminderCounterFrom()
    {
        return $this->container['start_reminder_counter_from'];
    }

    /**
     * Sets start_reminder_counter_from
     *
     * @param string $start_reminder_counter_from Reminder can be sent based on when the agreement becomes available or when the reminder is created<br>AGREEMENT_AVAILABILITY: If the agreement is not available to the participant at the time of reminder creation, the reminder will be sent for the first time, only when the agreement becomes available to the participant taking the firstReminderDelay into account. Subsequent reminders will be sent based on the frequency specified.  If the agreement is already available to the participant at the time of reminder creation, the first reminder will be sent after the delay specified by firstReminderDelay from the reminder creation time.<br>REMINDER_CREATION: The first reminder will be sent after the delay specified by firstReminderDelay from the reminder creation time only if the agreement is available at that time. Subsequent reminders will be triggered based on the frequency specified and will be sent only if the agreement is available at that time.  For agreements in authoring state, creating reminder with startReminderCounterFrom as REMINDER_CREATION is not allowed.<br>Note : If firstReminderDelay, frequency and startReminderCounterFrom fields are not specified in POST, reminder will be sent right now if the agreement is available. If agreement is not available, an error will be thrown.  Cannot be updated in a PUT
     *
     * @return $this
     */
    public function setStartReminderCounterFrom($start_reminder_counter_from)
    {
        $allowedValues = $this->getStartReminderCounterFromAllowableValues();
        if (!is_null($start_reminder_counter_from) && !in_array($start_reminder_counter_from, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'start_reminder_counter_from', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['start_reminder_counter_from'] = $start_reminder_counter_from;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency The frequency at which reminder will be sent until the agreement is completed.<br>If frequency is not provided, the reminder will be sent once (if the agreement is available at the specified time) with the delay based on the firstReminderDelay field and will never repeat again. If the agreement is not available at that time, reminder will not be sent. Cannot be updated in a PUT
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($frequency) && !in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current status of the reminder.  The only valid update in a PUT is from ACTIVE to CANCELED.  Must be provided as ACTIVE in a POST.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


