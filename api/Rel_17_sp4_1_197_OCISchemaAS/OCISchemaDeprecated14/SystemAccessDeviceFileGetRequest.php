<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\DeviceManagementFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAccessDeviceFileGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a device profile file.
 *           The response is either SystemAccessDeviceFileGetResponse or ErrorResponse.
 *           Replaced By: SystemAccessDeviceFileGetRequest14sp8
 */
class SystemAccessDeviceFileGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAccessDeviceFileGetResponse';
    public    $name       = 'SystemAccessDeviceFileGetRequest';
    protected $deviceName = null;
    protected $fileType   = null;

    public function __construct(
         $deviceName,
         $fileType
    ) {
        $this->setDeviceName($deviceName);
        $this->setFileType($fileType);
    }

    /**
     * @return SystemAccessDeviceFileGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        if (!$deviceName) return $this;
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName->getValue();
    }

    /**
     * 
     */
    public function setFileType($fileType = null)
    {
        if (!$fileType) return $this;
        $this->fileType = ($fileType InstanceOf DeviceManagementFileType)
             ? $fileType
             : new DeviceManagementFileType($fileType);
        $this->fileType->setName('fileType');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileType
     */
    public function getFileType()
    {
        return $this->fileType->getValue();
    }
}