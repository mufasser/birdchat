<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 * 
 * @property string accountSid
 * @property string assistantSid
 * @property string url
 * @property array data
 */
class AssistantInitiationActionsInstance extends InstanceResource {
    /**
     * Initialize the AssistantInitiationActionsInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $assistantSid The assistant_sid
     * @return \Twilio\Rest\Preview\Understand\Assistant\AssistantInitiationActionsInstance 
     */
    public function __construct(Version $version, array $payload, $assistantSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'assistantSid' => Values::array_get($payload, 'assistant_sid'),
            'url' => Values::array_get($payload, 'url'),
            'data' => Values::array_get($payload, 'data'),
        );

        $this->solution = array('assistantSid' => $assistantSid, );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Preview\Understand\Assistant\AssistantInitiationActionsContext Context for this
     *                                                                                     AssistantInitiationActionsInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new AssistantInitiationActionsContext(
                $this->version,
                $this->solution['assistantSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a AssistantInitiationActionsInstance
     * 
     * @return AssistantInitiationActionsInstance Fetched
     *                                            AssistantInitiationActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AssistantInitiationActionsInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return AssistantInitiationActionsInstance Updated
     *                                            AssistantInitiationActionsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Understand.AssistantInitiationActionsInstance ' . implode(' ', $context) . ']';
    }
}