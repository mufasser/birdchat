<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Options;
use Twilio\Values;

abstract class FlexFlowOptions {
    /**
     * @param string $friendlyName Human readable description of this FlexFlow
     * @return ReadFlexFlowOptions Options builder
     */
    public static function read($friendlyName = Values::NONE) {
        return new ReadFlexFlowOptions($friendlyName);
    }

    /**
     * @param string $contactIdentity Channel contact Identity
     * @param boolean $enabled Boolean flag for enabling or disabling the FlexFlow
     * @param string $integrationType Integration type
     * @param string $integrationFlowSid Flow Sid.
     * @param string $integrationUrl External Webhook Url
     * @param string $integrationWorkspaceSid Workspace Sid for a new task
     * @param string $integrationWorkflowSid Workflow Sid for a new task
     * @param string $integrationChannel Task Channel for a new task
     * @param integer $integrationTimeout Task timeout in seconds for a new task
     * @param integer $integrationPriority Task priority for a new task
     * @param boolean $integrationCreationOnMessage Flag for task creation
     * @param boolean $longLived Long Lived flag for new Channel
     * @return CreateFlexFlowOptions Options builder
     */
    public static function create($contactIdentity = Values::NONE, $enabled = Values::NONE, $integrationType = Values::NONE, $integrationFlowSid = Values::NONE, $integrationUrl = Values::NONE, $integrationWorkspaceSid = Values::NONE, $integrationWorkflowSid = Values::NONE, $integrationChannel = Values::NONE, $integrationTimeout = Values::NONE, $integrationPriority = Values::NONE, $integrationCreationOnMessage = Values::NONE, $longLived = Values::NONE) {
        return new CreateFlexFlowOptions($contactIdentity, $enabled, $integrationType, $integrationFlowSid, $integrationUrl, $integrationWorkspaceSid, $integrationWorkflowSid, $integrationChannel, $integrationTimeout, $integrationPriority, $integrationCreationOnMessage, $longLived);
    }

    /**
     * @param string $friendlyName Human readable description of this FlexFlow
     * @param string $chatServiceSid Service Sid.
     * @param string $channelType Channel type
     * @param string $contactIdentity Channel contact Identity
     * @param boolean $enabled Boolean flag for enabling or disabling the FlexFlow
     * @param string $integrationType Integration type
     * @param string $integrationFlowSid Flow Sid.
     * @param string $integrationUrl External Webhook Url
     * @param string $integrationWorkspaceSid Workspace Sid for a new task
     * @param string $integrationWorkflowSid Workflow Sid for a new task
     * @param string $integrationChannel Task Channel for a new task
     * @param integer $integrationTimeout Task timeout in seconds for a new task
     * @param integer $integrationPriority Task priority for a new task
     * @param boolean $integrationCreationOnMessage Flag for task creation
     * @param boolean $longLived Long Lived flag for new Channel
     * @return UpdateFlexFlowOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $chatServiceSid = Values::NONE, $channelType = Values::NONE, $contactIdentity = Values::NONE, $enabled = Values::NONE, $integrationType = Values::NONE, $integrationFlowSid = Values::NONE, $integrationUrl = Values::NONE, $integrationWorkspaceSid = Values::NONE, $integrationWorkflowSid = Values::NONE, $integrationChannel = Values::NONE, $integrationTimeout = Values::NONE, $integrationPriority = Values::NONE, $integrationCreationOnMessage = Values::NONE, $longLived = Values::NONE) {
        return new UpdateFlexFlowOptions($friendlyName, $chatServiceSid, $channelType, $contactIdentity, $enabled, $integrationType, $integrationFlowSid, $integrationUrl, $integrationWorkspaceSid, $integrationWorkflowSid, $integrationChannel, $integrationTimeout, $integrationPriority, $integrationCreationOnMessage, $longLived);
    }
}

class ReadFlexFlowOptions extends Options {
    /**
     * @param string $friendlyName Human readable description of this FlexFlow
     */
    public function __construct($friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * Human readable description of this FlexFlow
     * 
     * @param string $friendlyName Human readable description of this FlexFlow
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
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
        return '[Twilio.FlexApi.V1.ReadFlexFlowOptions ' . implode(' ', $options) . ']';
    }
}

class CreateFlexFlowOptions extends Options {
    /**
     * @param string $contactIdentity Channel contact Identity
     * @param boolean $enabled Boolean flag for enabling or disabling the FlexFlow
     * @param string $integrationType Integration type
     * @param string $integrationFlowSid Flow Sid.
     * @param string $integrationUrl External Webhook Url
     * @param string $integrationWorkspaceSid Workspace Sid for a new task
     * @param string $integrationWorkflowSid Workflow Sid for a new task
     * @param string $integrationChannel Task Channel for a new task
     * @param integer $integrationTimeout Task timeout in seconds for a new task
     * @param integer $integrationPriority Task priority for a new task
     * @param boolean $integrationCreationOnMessage Flag for task creation
     * @param boolean $longLived Long Lived flag for new Channel
     */
    public function __construct($contactIdentity = Values::NONE, $enabled = Values::NONE, $integrationType = Values::NONE, $integrationFlowSid = Values::NONE, $integrationUrl = Values::NONE, $integrationWorkspaceSid = Values::NONE, $integrationWorkflowSid = Values::NONE, $integrationChannel = Values::NONE, $integrationTimeout = Values::NONE, $integrationPriority = Values::NONE, $integrationCreationOnMessage = Values::NONE, $longLived = Values::NONE) {
        $this->options['contactIdentity'] = $contactIdentity;
        $this->options['enabled'] = $enabled;
        $this->options['integrationType'] = $integrationType;
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        $this->options['integrationUrl'] = $integrationUrl;
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        $this->options['integrationChannel'] = $integrationChannel;
        $this->options['integrationTimeout'] = $integrationTimeout;
        $this->options['integrationPriority'] = $integrationPriority;
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        $this->options['longLived'] = $longLived;
    }

    /**
     * Channel contact Identity (number / contact)
     * 
     * @param string $contactIdentity Channel contact Identity
     * @return $this Fluent Builder
     */
    public function setContactIdentity($contactIdentity) {
        $this->options['contactIdentity'] = $contactIdentity;
        return $this;
    }

    /**
     * Boolean flag for enabling or disabling the FlexFlow
     * 
     * @param boolean $enabled Boolean flag for enabling or disabling the FlexFlow
     * @return $this Fluent Builder
     */
    public function setEnabled($enabled) {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * Integration type (studio | external | task)
     * 
     * @param string $integrationType Integration type
     * @return $this Fluent Builder
     */
    public function setIntegrationType($integrationType) {
        $this->options['integrationType'] = $integrationType;
        return $this;
    }

    /**
     * The unique SID identifier of the Flow for Studio integration type
     * 
     * @param string $integrationFlowSid Flow Sid.
     * @return $this Fluent Builder
     */
    public function setIntegrationFlowSid($integrationFlowSid) {
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        return $this;
    }

    /**
     * External Webhook Url for External integration type
     * 
     * @param string $integrationUrl External Webhook Url
     * @return $this Fluent Builder
     */
    public function setIntegrationUrl($integrationUrl) {
        $this->options['integrationUrl'] = $integrationUrl;
        return $this;
    }

    /**
     * Workspace Sid for a new task for Task integration type
     * 
     * @param string $integrationWorkspaceSid Workspace Sid for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkspaceSid($integrationWorkspaceSid) {
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        return $this;
    }

    /**
     * Workflow Sid for a new task for Task integration type
     * 
     * @param string $integrationWorkflowSid Workflow Sid for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkflowSid($integrationWorkflowSid) {
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        return $this;
    }

    /**
     * Task Channel for a new task for Task integration type (default is 'default')
     * 
     * @param string $integrationChannel Task Channel for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationChannel($integrationChannel) {
        $this->options['integrationChannel'] = $integrationChannel;
        return $this;
    }

    /**
     * Task timeout in seconds for a new task for Task integration type (default 86400)
     * 
     * @param integer $integrationTimeout Task timeout in seconds for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationTimeout($integrationTimeout) {
        $this->options['integrationTimeout'] = $integrationTimeout;
        return $this;
    }

    /**
     * Task priority for a new task for Task integration type (default 0)
     * 
     * @param integer $integrationPriority Task priority for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationPriority($integrationPriority) {
        $this->options['integrationPriority'] = $integrationPriority;
        return $this;
    }

    /**
     * Flag for task creation, either creating task with the channel, or if true create task whwn first message arrives (for Task integration type)
     * 
     * @param boolean $integrationCreationOnMessage Flag for task creation
     * @return $this Fluent Builder
     */
    public function setIntegrationCreationOnMessage($integrationCreationOnMessage) {
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        return $this;
    }

    /**
     * Default Flag defining whether the new channels created are long lived or not
     * 
     * @param boolean $longLived Long Lived flag for new Channel
     * @return $this Fluent Builder
     */
    public function setLongLived($longLived) {
        $this->options['longLived'] = $longLived;
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
        return '[Twilio.FlexApi.V1.CreateFlexFlowOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateFlexFlowOptions extends Options {
    /**
     * @param string $friendlyName Human readable description of this FlexFlow
     * @param string $chatServiceSid Service Sid.
     * @param string $channelType Channel type
     * @param string $contactIdentity Channel contact Identity
     * @param boolean $enabled Boolean flag for enabling or disabling the FlexFlow
     * @param string $integrationType Integration type
     * @param string $integrationFlowSid Flow Sid.
     * @param string $integrationUrl External Webhook Url
     * @param string $integrationWorkspaceSid Workspace Sid for a new task
     * @param string $integrationWorkflowSid Workflow Sid for a new task
     * @param string $integrationChannel Task Channel for a new task
     * @param integer $integrationTimeout Task timeout in seconds for a new task
     * @param integer $integrationPriority Task priority for a new task
     * @param boolean $integrationCreationOnMessage Flag for task creation
     * @param boolean $longLived Long Lived flag for new Channel
     */
    public function __construct($friendlyName = Values::NONE, $chatServiceSid = Values::NONE, $channelType = Values::NONE, $contactIdentity = Values::NONE, $enabled = Values::NONE, $integrationType = Values::NONE, $integrationFlowSid = Values::NONE, $integrationUrl = Values::NONE, $integrationWorkspaceSid = Values::NONE, $integrationWorkflowSid = Values::NONE, $integrationChannel = Values::NONE, $integrationTimeout = Values::NONE, $integrationPriority = Values::NONE, $integrationCreationOnMessage = Values::NONE, $longLived = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['chatServiceSid'] = $chatServiceSid;
        $this->options['channelType'] = $channelType;
        $this->options['contactIdentity'] = $contactIdentity;
        $this->options['enabled'] = $enabled;
        $this->options['integrationType'] = $integrationType;
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        $this->options['integrationUrl'] = $integrationUrl;
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        $this->options['integrationChannel'] = $integrationChannel;
        $this->options['integrationTimeout'] = $integrationTimeout;
        $this->options['integrationPriority'] = $integrationPriority;
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        $this->options['longLived'] = $longLived;
    }

    /**
     * Human readable description of this FlexFlow
     * 
     * @param string $friendlyName Human readable description of this FlexFlow
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The unique SID identifier of the chat service
     * 
     * @param string $chatServiceSid Service Sid.
     * @return $this Fluent Builder
     */
    public function setChatServiceSid($chatServiceSid) {
        $this->options['chatServiceSid'] = $chatServiceSid;
        return $this;
    }

    /**
     * Channel type (web | facebook | sms)
     * 
     * @param string $channelType Channel type
     * @return $this Fluent Builder
     */
    public function setChannelType($channelType) {
        $this->options['channelType'] = $channelType;
        return $this;
    }

    /**
     * Channel contact Identity (number / contact)
     * 
     * @param string $contactIdentity Channel contact Identity
     * @return $this Fluent Builder
     */
    public function setContactIdentity($contactIdentity) {
        $this->options['contactIdentity'] = $contactIdentity;
        return $this;
    }

    /**
     * Boolean flag for enabling or disabling the FlexFlow
     * 
     * @param boolean $enabled Boolean flag for enabling or disabling the FlexFlow
     * @return $this Fluent Builder
     */
    public function setEnabled($enabled) {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * Integration type (studio | external | task)
     * 
     * @param string $integrationType Integration type
     * @return $this Fluent Builder
     */
    public function setIntegrationType($integrationType) {
        $this->options['integrationType'] = $integrationType;
        return $this;
    }

    /**
     * The unique SID identifier of the Flow for Studio integration type
     * 
     * @param string $integrationFlowSid Flow Sid.
     * @return $this Fluent Builder
     */
    public function setIntegrationFlowSid($integrationFlowSid) {
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        return $this;
    }

    /**
     * External Webhook Url for External integration type
     * 
     * @param string $integrationUrl External Webhook Url
     * @return $this Fluent Builder
     */
    public function setIntegrationUrl($integrationUrl) {
        $this->options['integrationUrl'] = $integrationUrl;
        return $this;
    }

    /**
     * Workspace Sid for a new task for Task integration type
     * 
     * @param string $integrationWorkspaceSid Workspace Sid for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkspaceSid($integrationWorkspaceSid) {
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        return $this;
    }

    /**
     * Workflow Sid for a new task for Task integration type
     * 
     * @param string $integrationWorkflowSid Workflow Sid for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkflowSid($integrationWorkflowSid) {
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        return $this;
    }

    /**
     * Task Channel for a new task for Task integration type (default is 'default')
     * 
     * @param string $integrationChannel Task Channel for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationChannel($integrationChannel) {
        $this->options['integrationChannel'] = $integrationChannel;
        return $this;
    }

    /**
     * Task timeout in seconds for a new task for Task integration type (default 86400)
     * 
     * @param integer $integrationTimeout Task timeout in seconds for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationTimeout($integrationTimeout) {
        $this->options['integrationTimeout'] = $integrationTimeout;
        return $this;
    }

    /**
     * Task priority for a new task for Task integration type (default 0)
     * 
     * @param integer $integrationPriority Task priority for a new task
     * @return $this Fluent Builder
     */
    public function setIntegrationPriority($integrationPriority) {
        $this->options['integrationPriority'] = $integrationPriority;
        return $this;
    }

    /**
     * Flag for task creation, either creating task with the channel, or if true create task whwn first message arrives (for Task integration type)
     * 
     * @param boolean $integrationCreationOnMessage Flag for task creation
     * @return $this Fluent Builder
     */
    public function setIntegrationCreationOnMessage($integrationCreationOnMessage) {
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        return $this;
    }

    /**
     * Default Flag defining whether the new channels created are long lived or not
     * 
     * @param boolean $longLived Long Lived flag for new Channel
     * @return $this Fluent Builder
     */
    public function setLongLived($longLived) {
        $this->options['longLived'] = $longLived;
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
        return '[Twilio.FlexApi.V1.UpdateFlexFlowOptions ' . implode(' ', $options) . ']';
    }
}