<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Allows or disallows various types of incoming calls for a user or group -- not any particular department.
 */
class IncomingCallingPlanPermissions extends ComplexType implements ComplexInterface
{
    public    $responseType           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissions';
    public    $name                   = 'IncomingCallingPlanPermissions';
    protected $allowFromWithinGroup   = null;
    protected $allowFromOutsideGroup  = null;
    protected $allowCollectCalls      = null;
    protected $digitPatternPermission = null;

    public function __construct(
         $allowFromWithinGroup,
         $allowFromOutsideGroup,
         $allowCollectCalls,
         $digitPatternPermission = null
    ) {
        $this->setAllowFromWithinGroup($allowFromWithinGroup);
        $this->setAllowFromOutsideGroup($allowFromOutsideGroup);
        $this->setAllowCollectCalls($allowCollectCalls);
        $this->setDigitPatternPermission($digitPatternPermission);
    }

    /**
     * @return IncomingCallingPlanPermissions
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAllowFromWithinGroup($allowFromWithinGroup = null)
    {
        if (!$allowFromWithinGroup) return $this;
        $this->allowFromWithinGroup = new SimpleContent($allowFromWithinGroup);
        $this->allowFromWithinGroup->setName('allowFromWithinGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAllowFromWithinGroup()
    {
        return $this->allowFromWithinGroup->getValue();
    }

    /**
     * 
     */
    public function setAllowFromOutsideGroup($allowFromOutsideGroup = null)
    {
        if (!$allowFromOutsideGroup) return $this;
        $this->allowFromOutsideGroup = new SimpleContent($allowFromOutsideGroup);
        $this->allowFromOutsideGroup->setName('allowFromOutsideGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAllowFromOutsideGroup()
    {
        return $this->allowFromOutsideGroup->getValue();
    }

    /**
     * 
     */
    public function setAllowCollectCalls($allowCollectCalls = null)
    {
        if (!$allowCollectCalls) return $this;
        $this->allowCollectCalls = new SimpleContent($allowCollectCalls);
        $this->allowCollectCalls->setName('allowCollectCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAllowCollectCalls()
    {
        return $this->allowCollectCalls->getValue();
    }

    /**
     * 
     */
    public function setDigitPatternPermission($digitPatternPermission = null)
    {
        if (!$digitPatternPermission) return $this;
        $this->digitPatternPermission = new SimpleContent($digitPatternPermission);
        $this->digitPatternPermission->setName('digitPatternPermission');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDigitPatternPermission()
    {
        return $this->digitPatternPermission->getValue();
    }
}