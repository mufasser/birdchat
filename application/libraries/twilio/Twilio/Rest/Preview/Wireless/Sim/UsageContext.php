<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Wireless\Sim;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class UsageContext extends InstanceContext {
    /**
     * Initialize the UsageContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $simSid The sim_sid
     * @return \Twilio\Rest\Preview\Wireless\Sim\UsageContext 
     */
    public function __construct(Version $version, $simSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('simSid' => $simSid, );

        $this->uri = '/Sims/' . rawurlencode($simSid) . '/Usage';
    }

    /**
     * Fetch a UsageInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return UsageInstance Fetched UsageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch($options = array()) {
        $options = new Values($options);

        $params = Values::of(array('End' => $options['end'], 'Start' => $options['start'], ));

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new UsageInstance($this->version, $payload, $this->solution['simSid']);
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
        return '[Twilio.Preview.Wireless.UsageContext ' . implode(' ', $context) . ']';
    }
}