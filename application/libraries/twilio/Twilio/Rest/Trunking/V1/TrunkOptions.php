<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Trunking\V1;

use Twilio\Options;
use Twilio\Values;

abstract class TrunkOptions {
    /**
     * @param string $friendlyName A string to describe the resource
     * @param string $domainName The unique address you reserve on Twilio to which
     *                           you route your SIP traffic
     * @param string $disasterRecoveryUrl The HTTP URL that we should call if an
     *                                    error occurs while sending SIP traffic
     *                                    towards your configured Origination URL
     * @param string $disasterRecoveryMethod The HTTP method we should use to call
     *                                       the disaster_recovery_url
     * @param string $recording The recording settings for the trunk
     * @param boolean $secure Whether Secure Trunking is enabled for the trunk
     * @param boolean $cnamLookupEnabled Whether Caller ID Name (CNAM) lookup
     *                                   should be enabled for the trunk
     * @return CreateTrunkOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE, $cnamLookupEnabled = Values::NONE) {
        return new CreateTrunkOptions($friendlyName, $domainName, $disasterRecoveryUrl, $disasterRecoveryMethod, $recording, $secure, $cnamLookupEnabled);
    }

    /**
     * @param string $friendlyName A string to describe the resource
     * @param string $domainName The unique address you reserve on Twilio to which
     *                           you route your SIP traffic
     * @param string $disasterRecoveryUrl The HTTP URL that we should call if an
     *                                    error occurs while sending SIP traffic
     *                                    towards your configured Origination URL
     * @param string $disasterRecoveryMethod The HTTP method we should use to call
     *                                       the disaster_recovery_url
     * @param string $recording The recording settings for the trunk
     * @param boolean $secure Whether Secure Trunking is enabled for the trunk
     * @param boolean $cnamLookupEnabled Whether Caller ID Name (CNAM) lookup
     *                                   should be enabled for the trunk
     * @return UpdateTrunkOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE, $cnamLookupEnabled = Values::NONE) {
        return new UpdateTrunkOptions($friendlyName, $domainName, $disasterRecoveryUrl, $disasterRecoveryMethod, $recording, $secure, $cnamLookupEnabled);
    }
}

class CreateTrunkOptions extends Options {
    /**
     * @param string $friendlyName A string to describe the resource
     * @param string $domainName The unique address you reserve on Twilio to which
     *                           you route your SIP traffic
     * @param string $disasterRecoveryUrl The HTTP URL that we should call if an
     *                                    error occurs while sending SIP traffic
     *                                    towards your configured Origination URL
     * @param string $disasterRecoveryMethod The HTTP method we should use to call
     *                                       the disaster_recovery_url
     * @param string $recording The recording settings for the trunk
     * @param boolean $secure Whether Secure Trunking is enabled for the trunk
     * @param boolean $cnamLookupEnabled Whether Caller ID Name (CNAM) lookup
     *                                   should be enabled for the trunk
     */
    public function __construct($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE, $cnamLookupEnabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['domainName'] = $domainName;
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        $this->options['recording'] = $recording;
        $this->options['secure'] = $secure;
        $this->options['cnamLookupEnabled'] = $cnamLookupEnabled;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * 
     * @param string $friendlyName A string to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and `-` and must end with `pstn.twilio.com`. See [Termination Settings](https://www.twilio.com/docs/sip-trunking/getting-started#termination) for more information.
     * 
     * @param string $domainName The unique address you reserve on Twilio to which
     *                           you route your SIP traffic
     * @return $this Fluent Builder
     */
    public function setDomainName($domainName) {
        $this->options['domainName'] = $domainName;
        return $this;
    }

    /**
     * The URL we should call using the `disaster_recovery_method` if an error occurs while sending SIP traffic towards the configured Origination URL. We retrieve TwiML from the URL and execute the instructions like any other normal TwiML call. See [Disaster Recovery](https://www.twilio.com/docs/sip-trunking/getting-started#disaster-recovery) for more information.
     * 
     * @param string $disasterRecoveryUrl The HTTP URL that we should call if an
     *                                    error occurs while sending SIP traffic
     *                                    towards your configured Origination URL
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryUrl($disasterRecoveryUrl) {
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call the `disaster_recovery_url`. Can be: `GET` or `POST`.
     * 
     * @param string $disasterRecoveryMethod The HTTP method we should use to call
     *                                       the disaster_recovery_url
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryMethod($disasterRecoveryMethod) {
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        return $this;
    }

    /**
     * The recording settings for the trunk. Can be: `do-not-record`, `record-from-ringing`, `record-from-answer`. If set to `record-from-ringing` or `record-from-answer`, all calls going through the trunk will be recorded. See [Recording](https://www.twilio.com/docs/sip-trunking/getting-started#recording) for more information.
     * 
     * @param string $recording The recording settings for the trunk
     * @return $this Fluent Builder
     */
    public function setRecording($recording) {
        $this->options['recording'] = $recording;
        return $this;
    }

    /**
     * Whether Secure Trunking is enabled for the trunk. If enabled, all calls going through the trunk will be secure using SRTP for media and TLS for signaling. If disabled, then RTP will be used for media. See [Secure Trunking](https://www.twilio.com/docs/sip-trunking/getting-started#securetrunking) for more information.
     * 
     * @param boolean $secure Whether Secure Trunking is enabled for the trunk
     * @return $this Fluent Builder
     */
    public function setSecure($secure) {
        $this->options['secure'] = $secure;
        return $this;
    }

    /**
     * Whether Caller ID Name (CNAM) lookup should be enabled for the trunk. If enabled, all inbound calls to the SIP Trunk from the United States and Canada automatically perform a CNAM Lookup and display Caller ID data on your phone. See [CNAM Lookups](https://www.twilio.com/docs/sip-trunking#CNAM) for more information.
     * 
     * @param boolean $cnamLookupEnabled Whether Caller ID Name (CNAM) lookup
     *                                   should be enabled for the trunk
     * @return $this Fluent Builder
     */
    public function setCnamLookupEnabled($cnamLookupEnabled) {
        $this->options['cnamLookupEnabled'] = $cnamLookupEnabled;
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
        return '[Twilio.Trunking.V1.CreateTrunkOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateTrunkOptions extends Options {
    /**
     * @param string $friendlyName A string to describe the resource
     * @param string $domainName The unique address you reserve on Twilio to which
     *                           you route your SIP traffic
     * @param string $disasterRecoveryUrl The HTTP URL that we should call if an
     *                                    error occurs while sending SIP traffic
     *                                    towards your configured Origination URL
     * @param string $disasterRecoveryMethod The HTTP method we should use to call
     *                                       the disaster_recovery_url
     * @param string $recording The recording settings for the trunk
     * @param boolean $secure Whether Secure Trunking is enabled for the trunk
     * @param boolean $cnamLookupEnabled Whether Caller ID Name (CNAM) lookup
     *                                   should be enabled for the trunk
     */
    public function __construct($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE, $cnamLookupEnabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['domainName'] = $domainName;
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        $this->options['recording'] = $recording;
        $this->options['secure'] = $secure;
        $this->options['cnamLookupEnabled'] = $cnamLookupEnabled;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * 
     * @param string $friendlyName A string to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and `-` and must end with `pstn.twilio.com`. See [Termination Settings](https://www.twilio.com/docs/sip-trunking/getting-started#termination) for more information.
     * 
     * @param string $domainName The unique address you reserve on Twilio to which
     *                           you route your SIP traffic
     * @return $this Fluent Builder
     */
    public function setDomainName($domainName) {
        $this->options['domainName'] = $domainName;
        return $this;
    }

    /**
     * The URL we should call using the `disaster_recovery_method` if an error occurs while sending SIP traffic towards the configured Origination URL. We retrieve TwiML from the URL and execute the instructions like any other normal TwiML call. See [Disaster Recovery](https://www.twilio.com/docs/sip-trunking/getting-started#disaster-recovery) for more information.
     * 
     * @param string $disasterRecoveryUrl The HTTP URL that we should call if an
     *                                    error occurs while sending SIP traffic
     *                                    towards your configured Origination URL
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryUrl($disasterRecoveryUrl) {
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call the `disaster_recovery_url`. Can be: `GET` or `POST`.
     * 
     * @param string $disasterRecoveryMethod The HTTP method we should use to call
     *                                       the disaster_recovery_url
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryMethod($disasterRecoveryMethod) {
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        return $this;
    }

    /**
     * The recording settings for the trunk. Can be: `do-not-record`, `record-from-ringing`, `record-from-answer`. If set to `record-from-ringing` or `record-from-answer`, all calls going through the trunk will be recorded. See [Recording](https://www.twilio.com/docs/sip-trunking/getting-started#recording) for more information.
     * 
     * @param string $recording The recording settings for the trunk
     * @return $this Fluent Builder
     */
    public function setRecording($recording) {
        $this->options['recording'] = $recording;
        return $this;
    }

    /**
     * Whether Secure Trunking is enabled for the trunk. If enabled, all calls going through the trunk will be secure using SRTP for media and TLS for signaling. If disabled, then RTP will be used for media. See [Secure Trunking](https://www.twilio.com/docs/sip-trunking/getting-started#securetrunking) for more information.
     * 
     * @param boolean $secure Whether Secure Trunking is enabled for the trunk
     * @return $this Fluent Builder
     */
    public function setSecure($secure) {
        $this->options['secure'] = $secure;
        return $this;
    }

    /**
     * Whether Caller ID Name (CNAM) lookup should be enabled for the trunk. If enabled, all inbound calls to the SIP Trunk from the United States and Canada automatically perform a CNAM Lookup and display Caller ID data on your phone. See [CNAM Lookups](https://www.twilio.com/docs/sip-trunking#CNAM) for more information.
     * 
     * @param boolean $cnamLookupEnabled Whether Caller ID Name (CNAM) lookup
     *                                   should be enabled for the trunk
     * @return $this Fluent Builder
     */
    public function setCnamLookupEnabled($cnamLookupEnabled) {
        $this->options['cnamLookupEnabled'] = $cnamLookupEnabled;
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
        return '[Twilio.Trunking.V1.UpdateTrunkOptions ' . implode(' ', $options) . ']';
    }
}