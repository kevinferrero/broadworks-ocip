<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the originating permissions for Pinhole digit patterns for a group default and its departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest';
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $groupPermissions      = null;
    protected $departmentPermissions = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions = null,
         OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify $departmentPermissions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupPermissions($groupPermissions);
        $this->setDepartmentPermissions($departmentPermissions);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setGroupPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $groupPermissions = null)
    {
        if (!$groupPermissions) return $this;
        $this->groupPermissions = $groupPermissions;
        $this->groupPermissions->setName('groupPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * 
     */
    public function setDepartmentPermissions(OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify $departmentPermissions = null)
    {
        if (!$departmentPermissions) return $this;
        $this->departmentPermissions = $departmentPermissions;
        $this->departmentPermissions->setName('departmentPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingPinholeDigitPlanDigitPatternOriginatingDepartmentPermissionsModify
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }
}