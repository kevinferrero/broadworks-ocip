<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 */
class GroupMusicOnHoldGetDepartmentListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'GroupMusicOnHoldGetDepartmentListResponse';
    protected $hasDepartment      = null;
    protected $department         = null;
    protected $departmentFullPath = null;

    /**
     * @return GroupMusicOnHoldGetDepartmentListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHasDepartment($hasDepartment = null)
    {
        if (!$hasDepartment) return $this;
        $this->hasDepartment = new PrimitiveType($hasDepartment);
        $this->hasDepartment->setName('hasDepartment');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getHasDepartment()
    {
        return $this->hasDepartment->getValue();
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
    public function setDepartmentFullPath($departmentFullPath = null)
    {
        if (!$departmentFullPath) return $this;
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
        $this->departmentFullPath->setName('departmentFullPath');
        return $this;
    }

    /**
     * 
     * @return DepartmentFullPathName
     */
    public function getDepartmentFullPath()
    {
        return $this->departmentFullPath->getValue();
    }
}