<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\ListResource;
use Twilio\Version;

class WorkersCumulativeStatisticsList extends ListResource {
    /**
     * Construct the WorkersCumulativeStatisticsList
     * 
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The workspace_sid
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Worker\WorkersCumulativeStatisticsList 
     */
    public function __construct(Version $version, $workspaceSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('workspaceSid' => $workspaceSid, );
    }

    /**
     * Constructs a WorkersCumulativeStatisticsContext
     * 
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Worker\WorkersCumulativeStatisticsContext 
     */
    public function getContext() {
        return new WorkersCumulativeStatisticsContext($this->version, $this->solution['workspaceSid']);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Taskrouter.V1.WorkersCumulativeStatisticsList]';
    }
}