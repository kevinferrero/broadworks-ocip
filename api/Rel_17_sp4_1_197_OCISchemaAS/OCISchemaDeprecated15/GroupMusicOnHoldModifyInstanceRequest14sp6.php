<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldSourceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify data for a group or department Music On Hold Instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupMusicOnHoldModifyInstanceRequest16
 */
class GroupMusicOnHoldModifyInstanceRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $name                               = 'GroupMusicOnHoldModifyInstanceRequest14sp6';
    protected $serviceProviderId                  = null;
    protected $groupId                            = null;
    protected $department                         = null;
    protected $isActiveDuringCallHold             = null;
    protected $isActiveDuringCallPark             = null;
    protected $isActiveDuringBusyCampOn           = null;
    protected $source                             = null;
    protected $useAlternateSourceForInternalCalls = null;
    protected $internalSource                     = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         DepartmentKey $department = null,
         $isActiveDuringCallHold = null,
         $isActiveDuringCallPark = null,
         $isActiveDuringBusyCampOn = null,
         MusicOnHoldSourceModify $source = null,
         $useAlternateSourceForInternalCalls = null,
         MusicOnHoldSourceModify $internalSource = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartment($department);
        $this->setIsActiveDuringCallHold($isActiveDuringCallHold);
        $this->setIsActiveDuringCallPark($isActiveDuringCallPark);
        $this->setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn);
        $this->setSource($source);
        $this->setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls);
        $this->setInternalSource($internalSource);
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
    public function setDepartment(DepartmentKey $department = null)
    {
        if (!$department) return $this;
        $this->department = $department;
        $this->department->setName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold = null)
    {
        if (!$isActiveDuringCallHold) return $this;
        $this->isActiveDuringCallHold = new PrimitiveType($isActiveDuringCallHold);
        $this->isActiveDuringCallHold->setName('isActiveDuringCallHold');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActiveDuringCallHold()
    {
        return $this->isActiveDuringCallHold->getValue();
    }

    /**
     * 
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark = null)
    {
        if (!$isActiveDuringCallPark) return $this;
        $this->isActiveDuringCallPark = new PrimitiveType($isActiveDuringCallPark);
        $this->isActiveDuringCallPark->setName('isActiveDuringCallPark');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActiveDuringCallPark()
    {
        return $this->isActiveDuringCallPark->getValue();
    }

    /**
     * 
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn = null)
    {
        if (!$isActiveDuringBusyCampOn) return $this;
        $this->isActiveDuringBusyCampOn = new PrimitiveType($isActiveDuringBusyCampOn);
        $this->isActiveDuringBusyCampOn->setName('isActiveDuringBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return $this->isActiveDuringBusyCampOn->getValue();
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldSourceModify $source = null)
    {
        if (!$source) return $this;
        $this->source = $source;
        $this->source->setName('source');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldSourceModify
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls = null)
    {
        if (!$useAlternateSourceForInternalCalls) return $this;
        $this->useAlternateSourceForInternalCalls = new PrimitiveType($useAlternateSourceForInternalCalls);
        $this->useAlternateSourceForInternalCalls->setName('useAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls->getValue();
    }

    /**
     * 
     */
    public function setInternalSource(MusicOnHoldSourceModify $internalSource = null)
    {
        if (!$internalSource) return $this;
        $this->internalSource = $internalSource;
        $this->internalSource->setName('internalSource');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldSourceModify
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }
}