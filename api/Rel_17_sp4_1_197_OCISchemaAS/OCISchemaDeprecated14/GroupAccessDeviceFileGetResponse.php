<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAccessDeviceFileGetRequest.
 *           Replaced By: GroupAccessDeviceFileGetResponse14sp8
 */
class GroupAccessDeviceFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupAccessDeviceFileGetResponse';
    protected $fileSource            = null;
    protected $configurationFileName = null;

    /**
     * @return GroupAccessDeviceFileGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
        if (!$fileSource) return $this;
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode
     */
    public function getFileSource()
    {
        return $this->fileSource->getValue();
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        if (!$configurationFileName) return $this;
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName->getValue();
    }
}