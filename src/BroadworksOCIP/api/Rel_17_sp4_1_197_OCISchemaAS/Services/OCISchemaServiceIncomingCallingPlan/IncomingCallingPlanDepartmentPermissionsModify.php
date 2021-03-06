<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Allows or disallows various types of incoming calls for a specified department.
 *         For use when modifing settings.
 */
class IncomingCallingPlanDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'IncomingCallingPlanDepartmentPermissionsModify';
    protected $departmentKey;
    protected $allowFromWithinGroup;
    protected $allowFromOutsideGroup;
    protected $allowCollectCalls;
    protected $digitPatternPermission;

    public function __construct(
         $departmentKey = '',
         $allowFromWithinGroup = null,
         $allowFromOutsideGroup = null,
         $allowCollectCalls = null,
         $digitPatternPermission = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setAllowFromWithinGroup($allowFromWithinGroup);
        $this->setAllowFromOutsideGroup($allowFromOutsideGroup);
        $this->setAllowCollectCalls($allowCollectCalls);
        $this->setDigitPatternPermission($digitPatternPermission);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDepartmentKey($departmentKey = null)
    {
        $this->departmentKey = new SimpleContent($departmentKey);
        $this->departmentKey->setElementName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return ($this->departmentKey)
            ? $this->departmentKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowFromWithinGroup($allowFromWithinGroup = null)
    {
        $this->allowFromWithinGroup = new SimpleContent($allowFromWithinGroup);
        $this->allowFromWithinGroup->setElementName('allowFromWithinGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowFromWithinGroup
     */
    public function getAllowFromWithinGroup()
    {
        return ($this->allowFromWithinGroup)
            ? $this->allowFromWithinGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowFromOutsideGroup($allowFromOutsideGroup = null)
    {
        $this->allowFromOutsideGroup = new SimpleContent($allowFromOutsideGroup);
        $this->allowFromOutsideGroup->setElementName('allowFromOutsideGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowFromOutsideGroup
     */
    public function getAllowFromOutsideGroup()
    {
        return ($this->allowFromOutsideGroup)
            ? $this->allowFromOutsideGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCollectCalls($allowCollectCalls = null)
    {
        $this->allowCollectCalls = new SimpleContent($allowCollectCalls);
        $this->allowCollectCalls->setElementName('allowCollectCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowCollectCalls
     */
    public function getAllowCollectCalls()
    {
        return ($this->allowCollectCalls)
            ? $this->allowCollectCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigitPatternPermission($digitPatternPermission = null)
    {
        $this->digitPatternPermission = new SimpleContent($digitPatternPermission);
        $this->digitPatternPermission->setElementName('digitPatternPermission');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $digitPatternPermission
     */
    public function getDigitPatternPermission()
    {
        return ($this->digitPatternPermission)
            ? $this->digitPatternPermission->getElementValue()
            : null;
    }
}
