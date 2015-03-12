<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ApplicationControllerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemRoutePointExternalSystemApplicationControllerGetRequest.
 */
class SystemRoutePointExternalSystemApplicationControllerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemRoutePointExternalSystemApplicationControllerGetResponse';
    protected $applicationController = null;

    /**
     * @return SystemRoutePointExternalSystemApplicationControllerGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationController($applicationController = null)
    {
        if (!$applicationController) return $this;
        $this->applicationController = ($applicationController InstanceOf ApplicationControllerName)
             ? $applicationController
             : new ApplicationControllerName($applicationController);
        $this->applicationController->setName('applicationController');
        return $this;
    }

    /**
     * 
     * @return ApplicationControllerName
     */
    public function getApplicationController()
    {
        return $this->applicationController->getValue();
    }
}