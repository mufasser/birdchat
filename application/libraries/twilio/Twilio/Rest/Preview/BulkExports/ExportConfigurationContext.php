<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\BulkExports;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class ExportConfigurationContext extends InstanceContext {
    /**
     * Initialize the ExportConfigurationContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $resourceType The resource_type
     * @return \Twilio\Rest\Preview\BulkExports\ExportConfigurationContext 
     */
    public function __construct(Version $version, $resourceType) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('resourceType' => $resourceType, );

        $this->uri = '/Exports/' . rawurlencode($resourceType) . '/Configuration';
    }

    /**
     * Fetch a ExportConfigurationInstance
     * 
     * @return ExportConfigurationInstance Fetched ExportConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ExportConfigurationInstance($this->version, $payload, $this->solution['resourceType']);
    }

    /**
     * Update the ExportConfigurationInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return ExportConfigurationInstance Updated ExportConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'Enabled' => Serialize::booleanToString($options['enabled']),
            'WebhookUrl' => $options['webhookUrl'],
            'WebhookMethod' => $options['webhookMethod'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ExportConfigurationInstance($this->version, $payload, $this->solution['resourceType']);
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
        return '[Twilio.Preview.BulkExports.ExportConfigurationContext ' . implode(' ', $context) . ']';
    }
}