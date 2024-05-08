<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Trunking\V1\Trunk;

use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class TerminatingSipDomainContext extends InstanceContext {
    /**
     * Initialize the TerminatingSipDomainContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $trunkSid The SID of the Trunk with the resource to fetch
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Trunking\V1\Trunk\TerminatingSipDomainContext 
     */
    public function __construct(Version $version, $trunkSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('trunkSid' => $trunkSid, 'sid' => $sid, );

        $this->uri = '/Trunks/' . rawurlencode($trunkSid) . '/TerminatingSipDomains/' . rawurlencode($sid) . '';
    }

    /**
     * Fetch a TerminatingSipDomainInstance
     * 
     * @return TerminatingSipDomainInstance Fetched TerminatingSipDomainInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new TerminatingSipDomainInstance(
            $this->version,
            $payload,
            $this->solution['trunkSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the TerminatingSipDomainInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
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
        return '[Twilio.Trunking.V1.TerminatingSipDomainContext ' . implode(' ', $context) . ']';
    }
}