<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the agent list for a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyAgentListRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupCallCenterModifyAgentListRequest';
    protected $serviceUserId   = null;
    protected $agentUserIdList = null;

    public function __construct(
         $serviceUserId,
         ReplacementUserIdList $agentUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAgentUserIdList($agentUserIdList);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        if (!$agentUserIdList) return $this;
        $this->agentUserIdList = $agentUserIdList;
        $this->agentUserIdList->setName('agentUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }
}