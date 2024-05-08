<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ServiceOptions {
    /**
     * @param integer $codeLength The length of the verification code to generate
     * @param boolean $lookupEnabled Whether to perform a lookup with each
     *                               verification
     * @param boolean $skipSmsToLandlines Whether to skip sending SMS verifications
     *                                    to landlines
     * @param boolean $dtmfInputRequired Whether to ask the user to press a number
     *                                   before delivering the verify code in a
     *                                   phone call
     * @param string $ttsName The name of an alternative text-to-speech service to
     *                        use in phone calls
     * @param boolean $psd2Enabled Whether to pass PSD2 transaction parameters when
     *                             starting a verification
     * @return CreateServiceOptions Options builder
     */
    public static function create($codeLength = Values::NONE, $lookupEnabled = Values::NONE, $skipSmsToLandlines = Values::NONE, $dtmfInputRequired = Values::NONE, $ttsName = Values::NONE, $psd2Enabled = Values::NONE) {
        return new CreateServiceOptions($codeLength, $lookupEnabled, $skipSmsToLandlines, $dtmfInputRequired, $ttsName, $psd2Enabled);
    }

    /**
     * @param string $friendlyName A string to describe the verification service
     * @param integer $codeLength The length of the verification code to generate
     * @param boolean $lookupEnabled Whether to perform a lookup with each
     *                               verification
     * @param boolean $skipSmsToLandlines Whether to skip sending SMS verifications
     *                                    to landlines
     * @param boolean $dtmfInputRequired Whether to ask the user to press a number
     *                                   before delivering the verify code in a
     *                                   phone call
     * @param string $ttsName The name of an alternative text-to-speech service to
     *                        use in phone calls
     * @param boolean $psd2Enabled Whether to pass PSD2 transaction parameters when
     *                             starting a verification
     * @return UpdateServiceOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $codeLength = Values::NONE, $lookupEnabled = Values::NONE, $skipSmsToLandlines = Values::NONE, $dtmfInputRequired = Values::NONE, $ttsName = Values::NONE, $psd2Enabled = Values::NONE) {
        return new UpdateServiceOptions($friendlyName, $codeLength, $lookupEnabled, $skipSmsToLandlines, $dtmfInputRequired, $ttsName, $psd2Enabled);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param integer $codeLength The length of the verification code to generate
     * @param boolean $lookupEnabled Whether to perform a lookup with each
     *                               verification
     * @param boolean $skipSmsToLandlines Whether to skip sending SMS verifications
     *                                    to landlines
     * @param boolean $dtmfInputRequired Whether to ask the user to press a number
     *                                   before delivering the verify code in a
     *                                   phone call
     * @param string $ttsName The name of an alternative text-to-speech service to
     *                        use in phone calls
     * @param boolean $psd2Enabled Whether to pass PSD2 transaction parameters when
     *                             starting a verification
     */
    public function __construct($codeLength = Values::NONE, $lookupEnabled = Values::NONE, $skipSmsToLandlines = Values::NONE, $dtmfInputRequired = Values::NONE, $ttsName = Values::NONE, $psd2Enabled = Values::NONE) {
        $this->options['codeLength'] = $codeLength;
        $this->options['lookupEnabled'] = $lookupEnabled;
        $this->options['skipSmsToLandlines'] = $skipSmsToLandlines;
        $this->options['dtmfInputRequired'] = $dtmfInputRequired;
        $this->options['ttsName'] = $ttsName;
        $this->options['psd2Enabled'] = $psd2Enabled;
    }

    /**
     * The length of the verification code to generate. Must be an integer value between 4 and 10, inclusive.
     * 
     * @param integer $codeLength The length of the verification code to generate
     * @return $this Fluent Builder
     */
    public function setCodeLength($codeLength) {
        $this->options['codeLength'] = $codeLength;
        return $this;
    }

    /**
     * Whether to perform a lookup with each verification started and return info about the phone number.
     * 
     * @param boolean $lookupEnabled Whether to perform a lookup with each
     *                               verification
     * @return $this Fluent Builder
     */
    public function setLookupEnabled($lookupEnabled) {
        $this->options['lookupEnabled'] = $lookupEnabled;
        return $this;
    }

    /**
     * Whether to skip sending SMS verifications to landlines. Requires `lookup_enabled`.
     * 
     * @param boolean $skipSmsToLandlines Whether to skip sending SMS verifications
     *                                    to landlines
     * @return $this Fluent Builder
     */
    public function setSkipSmsToLandlines($skipSmsToLandlines) {
        $this->options['skipSmsToLandlines'] = $skipSmsToLandlines;
        return $this;
    }

    /**
     * Whether to ask the user to press a number before delivering the verify code in a phone call.
     * 
     * @param boolean $dtmfInputRequired Whether to ask the user to press a number
     *                                   before delivering the verify code in a
     *                                   phone call
     * @return $this Fluent Builder
     */
    public function setDtmfInputRequired($dtmfInputRequired) {
        $this->options['dtmfInputRequired'] = $dtmfInputRequired;
        return $this;
    }

    /**
     * The name of an alternative text-to-speech service to use in phone calls. Applies only to TTS languages.
     * 
     * @param string $ttsName The name of an alternative text-to-speech service to
     *                        use in phone calls
     * @return $this Fluent Builder
     */
    public function setTtsName($ttsName) {
        $this->options['ttsName'] = $ttsName;
        return $this;
    }

    /**
     * Whether to pass PSD2 transaction parameters when starting a verification.
     * 
     * @param boolean $psd2Enabled Whether to pass PSD2 transaction parameters when
     *                             starting a verification
     * @return $this Fluent Builder
     */
    public function setPsd2Enabled($psd2Enabled) {
        $this->options['psd2Enabled'] = $psd2Enabled;
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
        return '[Twilio.Verify.V2.CreateServiceOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param string $friendlyName A string to describe the verification service
     * @param integer $codeLength The length of the verification code to generate
     * @param boolean $lookupEnabled Whether to perform a lookup with each
     *                               verification
     * @param boolean $skipSmsToLandlines Whether to skip sending SMS verifications
     *                                    to landlines
     * @param boolean $dtmfInputRequired Whether to ask the user to press a number
     *                                   before delivering the verify code in a
     *                                   phone call
     * @param string $ttsName The name of an alternative text-to-speech service to
     *                        use in phone calls
     * @param boolean $psd2Enabled Whether to pass PSD2 transaction parameters when
     *                             starting a verification
     */
    public function __construct($friendlyName = Values::NONE, $codeLength = Values::NONE, $lookupEnabled = Values::NONE, $skipSmsToLandlines = Values::NONE, $dtmfInputRequired = Values::NONE, $ttsName = Values::NONE, $psd2Enabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['codeLength'] = $codeLength;
        $this->options['lookupEnabled'] = $lookupEnabled;
        $this->options['skipSmsToLandlines'] = $skipSmsToLandlines;
        $this->options['dtmfInputRequired'] = $dtmfInputRequired;
        $this->options['ttsName'] = $ttsName;
        $this->options['psd2Enabled'] = $psd2Enabled;
    }

    /**
     * A descriptive string that you create to describe the verification service. It can be up to 64 characters long.
     * 
     * @param string $friendlyName A string to describe the verification service
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The length of the verification code to generate. Must be an integer value between 4 and 10, inclusive.
     * 
     * @param integer $codeLength The length of the verification code to generate
     * @return $this Fluent Builder
     */
    public function setCodeLength($codeLength) {
        $this->options['codeLength'] = $codeLength;
        return $this;
    }

    /**
     * Whether to perform a lookup with each verification started and return info about the phone number.
     * 
     * @param boolean $lookupEnabled Whether to perform a lookup with each
     *                               verification
     * @return $this Fluent Builder
     */
    public function setLookupEnabled($lookupEnabled) {
        $this->options['lookupEnabled'] = $lookupEnabled;
        return $this;
    }

    /**
     * Whether to skip sending SMS verifications to landlines. Requires `lookup_enabled`.
     * 
     * @param boolean $skipSmsToLandlines Whether to skip sending SMS verifications
     *                                    to landlines
     * @return $this Fluent Builder
     */
    public function setSkipSmsToLandlines($skipSmsToLandlines) {
        $this->options['skipSmsToLandlines'] = $skipSmsToLandlines;
        return $this;
    }

    /**
     * Whether to ask the user to press a number before delivering the verify code in a phone call.
     * 
     * @param boolean $dtmfInputRequired Whether to ask the user to press a number
     *                                   before delivering the verify code in a
     *                                   phone call
     * @return $this Fluent Builder
     */
    public function setDtmfInputRequired($dtmfInputRequired) {
        $this->options['dtmfInputRequired'] = $dtmfInputRequired;
        return $this;
    }

    /**
     * The name of an alternative text-to-speech service to use in phone calls. Applies only to TTS languages.
     * 
     * @param string $ttsName The name of an alternative text-to-speech service to
     *                        use in phone calls
     * @return $this Fluent Builder
     */
    public function setTtsName($ttsName) {
        $this->options['ttsName'] = $ttsName;
        return $this;
    }

    /**
     * Whether to pass PSD2 transaction parameters when starting a verification.
     * 
     * @param boolean $psd2Enabled Whether to pass PSD2 transaction parameters when
     *                             starting a verification
     * @return $this Fluent Builder
     */
    public function setPsd2Enabled($psd2Enabled) {
        $this->options['psd2Enabled'] = $psd2Enabled;
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
        return '[Twilio.Verify.V2.UpdateServiceOptions ' . implode(' ', $options) . ']';
    }
}