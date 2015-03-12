<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingSystemBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemCallCenterEnhancedReportingBrandingGetRequest.
 */
class SystemCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = 'SystemCallCenterEnhancedReportingBrandingGetResponse';
    protected $brandingChoice                = null;
    protected $customBrandingFileDescription = null;

    /**
     * @return SystemCallCenterEnhancedReportingBrandingGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBrandingChoice($brandingChoice = null)
    {
        if (!$brandingChoice) return $this;
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingSystemBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
        $this->brandingChoice->setName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingSystemBrandingChoice
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice->getValue();
    }

    /**
     * 
     */
    public function setCustomBrandingFileDescription($customBrandingFileDescription = null)
    {
        if (!$customBrandingFileDescription) return $this;
        $this->customBrandingFileDescription = ($customBrandingFileDescription InstanceOf FileDescription)
             ? $customBrandingFileDescription
             : new FileDescription($customBrandingFileDescription);
        $this->customBrandingFileDescription->setName('customBrandingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getCustomBrandingFileDescription()
    {
        return $this->customBrandingFileDescription->getValue();
    }
}