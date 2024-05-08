<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls\AuthCallsCredentialListMappingList;
use Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls\AuthCallsIpAccessControlListMappingList;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls\AuthCallsCredentialListMappingList credentialListMappings
 * @property \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls\AuthCallsIpAccessControlListMappingList ipAccessControlListMappings
 * @method \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls\AuthCallsCredentialListMappingContext credentialListMappings(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls\AuthCallsIpAccessControlListMappingContext ipAccessControlListMappings(string $sid)
 */
class AuthTypeCallsList extends ListResource {
    protected $_credentialListMappings = null;
    protected $_ipAccessControlListMappings = null;

    /**
     * Construct the AuthTypeCallsList
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $domainSid The unique string that identifies the resource
     * @return \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCallsList 
     */
    public function __construct(Version $version, $accountSid, $domainSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid, 'domainSid' => $domainSid, );
    }

    /**
     * Access the credentialListMappings
     */
    protected function getCredentialListMappings() {
        if (!$this->_credentialListMappings) {
            $this->_credentialListMappings = new AuthCallsCredentialListMappingList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['domainSid']
            );
        }

        return $this->_credentialListMappings;
    }

    /**
     * Access the ipAccessControlListMappings
     */
    protected function getIpAccessControlListMappings() {
        if (!$this->_ipAccessControlListMappings) {
            $this->_ipAccessControlListMappings = new AuthCallsIpAccessControlListMappingList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['domainSid']
            );
        }

        return $this->_ipAccessControlListMappings;
    }

    /**
     * Magic getter to lazy load subresources
     * 
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws \Twilio\Exceptions\TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     * 
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws \Twilio\Exceptions\TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.AuthTypeCallsList]';
    }
}