<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDepartmentAuthorizationCodes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanGroupAuthorizationCodes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'GroupOutgoingCallingPlanAuthorizationCodeGetListResponse';
    protected $groupCodeList      = null;
    protected $departmentCodeList = null;

    /**
     * @return GroupOutgoingCallingPlanAuthorizationCodeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupCodeList(OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList = null)
    {
        if (!$groupCodeList) return $this;
        $this->groupCodeList = $groupCodeList;
        $this->groupCodeList->setName('groupCodeList');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanGroupAuthorizationCodes
     */
    public function getGroupCodeList()
    {
        return $this->groupCodeList;
    }

    /**
     * 
     */
    public function setDepartmentCodeList(OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList = null)
    {
        if (!$departmentCodeList) return $this;
        $this->departmentCodeList = $departmentCodeList;
        $this->departmentCodeList->setName('departmentCodeList');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDepartmentAuthorizationCodes
     */
    public function getDepartmentCodeList()
    {
        return $this->departmentCodeList;
    }
}