<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceProviderAccessDeviceFileGetResponse14sp8;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a service provider device profile file.
 *         The response is either ServiceProviderAccessDeviceFileGetResponse14sp8 or ErrorResponse.
 *         Replaced by: ServiceProviderAccessDeviceFileGetRequest16sp1
 */
class ServiceProviderAccessDeviceFileGetRequest14sp8 extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceProviderAccessDeviceFileGetResponse14sp8';
    public    $name              = 'ServiceProviderAccessDeviceFileGetRequest14sp8';
    protected $serviceProviderId = null;
    protected $deviceName        = null;
    protected $fileFormat        = null;

    public function __construct(
         $serviceProviderId,
         $deviceName,
         $fileFormat
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDeviceName($deviceName);
        $this->setFileFormat($fileFormat);
    }

    /**
     * @return ServiceProviderAccessDeviceFileGetResponse14sp8
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
    public function setFileFormat($fileFormat = null)
    {
        if (!$fileFormat) return $this;
        $this->fileFormat = ($fileFormat InstanceOf DeviceManagementFileFormat)
             ? $fileFormat
             : new DeviceManagementFileFormat($fileFormat);
        $this->fileFormat->setName('fileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat
     */
    public function getFileFormat()
    {
        return $this->fileFormat->getValue();
    }
}