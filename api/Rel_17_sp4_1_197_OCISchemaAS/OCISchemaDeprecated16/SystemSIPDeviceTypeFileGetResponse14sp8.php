<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeFileGetRequest.
 */
class SystemSIPDeviceTypeFileGetResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $name                               = 'SystemSIPDeviceTypeFileGetResponse14sp8';
    protected $remoteFileFormat                   = null;
    protected $fileCategory                       = null;
    protected $allowFileCustomization             = null;
    protected $fileSource                         = null;
    protected $configurationFileName              = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;

    /**
     * @return SystemSIPDeviceTypeFileGetResponse14sp8
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        if (!$remoteFileFormat) return $this;
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
        $this->remoteFileFormat->setName('remoteFileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat->getValue();
    }

    /**
     * 
     */
    public function setFileCategory($fileCategory = null)
    {
        if (!$fileCategory) return $this;
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
        $this->fileCategory->setName('fileCategory');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileCategory
     */
    public function getFileCategory()
    {
        return $this->fileCategory->getValue();
    }

    /**
     * 
     */
    public function setAllowFileCustomization($allowFileCustomization = null)
    {
        if (!$allowFileCustomization) return $this;
        $this->allowFileCustomization = new PrimitiveType($allowFileCustomization);
        $this->allowFileCustomization->setName('allowFileCustomization');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowFileCustomization()
    {
        return $this->allowFileCustomization->getValue();
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
        if (!$fileSource) return $this;
        $this->fileSource = ($fileSource InstanceOf DeviceTypeFileEnhancedConfigurationMode)
             ? $fileSource
             : new DeviceTypeFileEnhancedConfigurationMode($fileSource);
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return DeviceTypeFileEnhancedConfigurationMode
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

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        if (!$useHttpDigestAuthentication) return $this;
        $this->useHttpDigestAuthentication = new PrimitiveType($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        if (!$macBasedFileAuthentication) return $this;
        $this->macBasedFileAuthentication = new PrimitiveType($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        if (!$userNamePasswordFileAuthentication) return $this;
        $this->userNamePasswordFileAuthentication = new PrimitiveType($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        if (!$macInNonRequestURI) return $this;
        $this->macInNonRequestURI = new PrimitiveType($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if (!$macFormatInNonRequestURI) return $this;
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI->getValue();
    }
}