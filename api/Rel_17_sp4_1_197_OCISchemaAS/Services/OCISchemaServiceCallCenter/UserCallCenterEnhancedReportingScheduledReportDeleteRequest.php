<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete a call center reporting scheduled report created by a supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingScheduledReportDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'UserCallCenterEnhancedReportingScheduledReportDeleteRequest';
    protected $supervisorUserId = null;
    protected $name             = null;

    public function __construct(
         $supervisorUserId,
         $name
    ) {
        $this->setSupervisorUserId($supervisorUserId);
        $this->setName($name);
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
    public function setSupervisorUserId($supervisorUserId = null)
    {
        if (!$supervisorUserId) return $this;
        $this->supervisorUserId = ($supervisorUserId InstanceOf UserId)
             ? $supervisorUserId
             : new UserId($supervisorUserId);
        $this->supervisorUserId->setName('supervisorUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CallCenterScheduledReportName)
             ? $name
             : new CallCenterScheduledReportName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportName
     */
    public function getName()
    {
        return $this->name->getValue();
    }
}