<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceOptions16sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CPE device's options.
 */
class CPEDeviceOptions16sp1 extends ComplexType implements ComplexInterface
{
    public    $responseType                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceOptions16sp1';
    public    $name                              = 'CPEDeviceOptions16sp1';
    protected $enableMonitoring                  = null;
    protected $configType                        = null;
    protected $systemFileName                    = null;
    protected $deviceFileFormat                  = null;
    protected $deviceManagementDeviceTypeOptions = null;

    public function __construct(
         $enableMonitoring,
         $configType,
         $systemFileName = null,
         $deviceFileFormat = null,
         $deviceManagementDeviceTypeOptions = null
    ) {
        $this->setEnableMonitoring($enableMonitoring);
        $this->setConfigType($configType);
        $this->setSystemFileName($systemFileName);
        $this->setDeviceFileFormat($deviceFileFormat);
        $this->setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions);
    }

    /**
     * @return CPEDeviceOptions16sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableMonitoring($enableMonitoring = null)
    {
        if (!$enableMonitoring) return $this;
        $this->enableMonitoring = new SimpleContent($enableMonitoring);
        $this->enableMonitoring->setName('enableMonitoring');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEnableMonitoring()
    {
        return $this->enableMonitoring->getValue();
    }

    /**
     * 
     */
    public function setConfigType($configType = null)
    {
        if (!$configType) return $this;
        $this->configType = new SimpleContent($configType);
        $this->configType->setName('configType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConfigType()
    {
        return $this->configType->getValue();
    }

    /**
     * 
     */
    public function setSystemFileName($systemFileName = null)
    {
        if (!$systemFileName) return $this;
        $this->systemFileName = new SimpleContent($systemFileName);
        $this->systemFileName->setName('systemFileName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getSystemFileName()
    {
        return $this->systemFileName->getValue();
    }

    /**
     * 
     */
    public function setDeviceFileFormat($deviceFileFormat = null)
    {
        if (!$deviceFileFormat) return $this;
        $this->deviceFileFormat = new SimpleContent($deviceFileFormat);
        $this->deviceFileFormat->setName('deviceFileFormat');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDeviceFileFormat()
    {
        return $this->deviceFileFormat->getValue();
    }

    /**
     * 
     */
    public function setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions = null)
    {
        if (!$deviceManagementDeviceTypeOptions) return $this;
        $this->deviceManagementDeviceTypeOptions = new SimpleContent($deviceManagementDeviceTypeOptions);
        $this->deviceManagementDeviceTypeOptions->setName('deviceManagementDeviceTypeOptions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions->getValue();
    }
}