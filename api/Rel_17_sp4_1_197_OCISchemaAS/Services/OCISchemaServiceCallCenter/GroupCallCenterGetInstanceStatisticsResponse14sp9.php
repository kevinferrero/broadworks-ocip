<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentStatistics14sp9;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueStatistics14sp9;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains Call Center statistics.
 */
class GroupCallCenterGetInstanceStatisticsResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupCallCenterGetInstanceStatisticsResponse14sp9';
    protected $statisticsRange = null;
    protected $queueStatistics = null;
    protected $agentStatistics = null;

    /**
     * @return GroupCallCenterGetInstanceStatisticsResponse14sp9
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
        if (!$statisticsRange) return $this;
        $this->statisticsRange = $statisticsRange;
        $this->statisticsRange->setName('statisticsRange');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsRange
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange;
    }

    /**
     * 
     */
    public function setQueueStatistics(CallCenterQueueStatistics14sp9 $queueStatistics = null)
    {
        if (!$queueStatistics) return $this;
        $this->queueStatistics = $queueStatistics;
        $this->queueStatistics->setName('queueStatistics');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueStatistics14sp9
     */
    public function getQueueStatistics()
    {
        return $this->queueStatistics;
    }

    /**
     * 
     */
    public function setAgentStatistics(CallCenterAgentStatistics14sp9 $agentStatistics = null)
    {
        if (!$agentStatistics) return $this;
        $this->agentStatistics = $agentStatistics;
        $this->agentStatistics->setName('agentStatistics');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentStatistics14sp9
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics;
    }
}