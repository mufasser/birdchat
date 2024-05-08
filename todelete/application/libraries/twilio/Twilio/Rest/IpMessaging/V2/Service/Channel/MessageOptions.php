<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MessageOptions {
    /**
     * @param string $from The identity of the new message's author
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $lastUpdatedBy The Identity of the User who last updated the
     *                              Message
     * @param string $body The message to send to the channel
     * @param string $mediaSid The Media Sid to be attached to the new Message
     * @return CreateMessageOptions Options builder
     */
    public static function create($from = Values::NONE, $attributes = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $lastUpdatedBy = Values::NONE, $body = Values::NONE, $mediaSid = Values::NONE) {
        return new CreateMessageOptions($from, $attributes, $dateCreated, $dateUpdated, $lastUpdatedBy, $body, $mediaSid);
    }

    /**
     * @param string $order The sort order of the returned messages
     * @return ReadMessageOptions Options builder
     */
    public static function read($order = Values::NONE) {
        return new ReadMessageOptions($order);
    }

    /**
     * @param string $body The message to send to the channel
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $lastUpdatedBy The Identity of the User who last updated the
     *                              Message, if applicable
     * @param string $from The identity of the message's author
     * @return UpdateMessageOptions Options builder
     */
    public static function update($body = Values::NONE, $attributes = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $lastUpdatedBy = Values::NONE, $from = Values::NONE) {
        return new UpdateMessageOptions($body, $attributes, $dateCreated, $dateUpdated, $lastUpdatedBy, $from);
    }
}

class CreateMessageOptions extends Options {
    /**
     * @param string $from The identity of the new message's author
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $lastUpdatedBy The Identity of the User who last updated the
     *                              Message
     * @param string $body The message to send to the channel
     * @param string $mediaSid The Media Sid to be attached to the new Message
     */
    public function __construct($from = Values::NONE, $attributes = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $lastUpdatedBy = Values::NONE, $body = Values::NONE, $mediaSid = Values::NONE) {
        $this->options['from'] = $from;
        $this->options['attributes'] = $attributes;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        $this->options['body'] = $body;
        $this->options['mediaSid'] = $mediaSid;
    }

    /**
     * The [identity](https://www.twilio.com/docs/chat/identity) of the new message's author. The default value is `system`.
     * 
     * @param string $from The identity of the new message's author
     * @return $this Fluent Builder
     */
    public function setFrom($from) {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     * 
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * 
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. The default value is `null`. Note that this parameter should only be used when a Chat's history is being recreated from a backup/separate source  and where a Message was previously updated.
     * 
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated) {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * The [identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * 
     * @param string $lastUpdatedBy The Identity of the User who last updated the
     *                              Message
     * @return $this Fluent Builder
     */
    public function setLastUpdatedBy($lastUpdatedBy) {
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
     * The message to send to the channel. Can also be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * 
     * @param string $body The message to send to the channel
     * @return $this Fluent Builder
     */
    public function setBody($body) {
        $this->options['body'] = $body;
        return $this;
    }

    /**
     * The SID of the [Media](https://www.twilio.com/docs/chat/rest/media) to attach to the new Message.
     * 
     * @param string $mediaSid The Media Sid to be attached to the new Message
     * @return $this Fluent Builder
     */
    public function setMediaSid($mediaSid) {
        $this->options['mediaSid'] = $mediaSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.CreateMessageOptions ' . implode(' ', $options) . ']';
    }
}

class ReadMessageOptions extends Options {
    /**
     * @param string $order The sort order of the returned messages
     */
    public function __construct($order = Values::NONE) {
        $this->options['order'] = $order;
    }

    /**
     * The sort order of the returned messages. Can be: `asc` (ascending) or `desc` (descending) with `asc` as the default.
     * 
     * @param string $order The sort order of the returned messages
     * @return $this Fluent Builder
     */
    public function setOrder($order) {
        $this->options['order'] = $order;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.ReadMessageOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateMessageOptions extends Options {
    /**
     * @param string $body The message to send to the channel
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @param string $lastUpdatedBy The Identity of the User who last updated the
     *                              Message, if applicable
     * @param string $from The identity of the message's author
     */
    public function __construct($body = Values::NONE, $attributes = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $lastUpdatedBy = Values::NONE, $from = Values::NONE) {
        $this->options['body'] = $body;
        $this->options['attributes'] = $attributes;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        $this->options['from'] = $from;
    }

    /**
     * The message to send to the channel. Can also be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * 
     * @param string $body The message to send to the channel
     * @return $this Fluent Builder
     */
    public function setBody($body) {
        $this->options['body'] = $body;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     * 
     * @param string $attributes A valid JSON string that contains
     *                           application-specific data
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created.
     * 
     * @param \DateTime $dateCreated The ISO 8601 date and time in GMT when the
     *                               resource was created
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * 
     * @param \DateTime $dateUpdated The ISO 8601 date and time in GMT when the
     *                               resource was updated
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated) {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * 
     * @param string $lastUpdatedBy The Identity of the User who last updated the
     *                              Message, if applicable
     * @return $this Fluent Builder
     */
    public function setLastUpdatedBy($lastUpdatedBy) {
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
     * The [Identity](https://www.twilio.com/docs/chat/identity) of the message's author.
     * 
     * @param string $from The identity of the message's author
     * @return $this Fluent Builder
     */
    public function setFrom($from) {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.UpdateMessageOptions ' . implode(' ', $options) . ']';
    }
}