<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Serverless\V1\Service\Environment;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 * 
 * @property string sid
 * @property string accountSid
 * @property string serviceSid
 * @property string environmentSid
 * @property string buildSid
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string url
 */
class DeploymentInstance extends InstanceResource {
    /**
     * Initialize the DeploymentInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The service_sid
     * @param string $environmentSid The environment_sid
     * @param string $sid The sid
     * @return \Twilio\Rest\Serverless\V1\Service\Environment\DeploymentInstance 
     */
    public function __construct(Version $version, array $payload, $serviceSid, $environmentSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'environmentSid' => Values::array_get($payload, 'environment_sid'),
            'buildSid' => Values::array_get($payload, 'build_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array(
            'serviceSid' => $serviceSid,
            'environmentSid' => $environmentSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Serverless\V1\Service\Environment\DeploymentContext Context for this DeploymentInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new DeploymentContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['environmentSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a DeploymentInstance
     * 
     * @return DeploymentInstance Fetched DeploymentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
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
        return '[Twilio.Serverless.V1.DeploymentInstance ' . implode(' ', $context) . ']';
    }
}