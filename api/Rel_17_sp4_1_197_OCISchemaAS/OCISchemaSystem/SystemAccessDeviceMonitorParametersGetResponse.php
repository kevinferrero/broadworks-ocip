<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\AccessDeviceMonitorPollingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAccessDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Access Device Monitor parameters.
 */
class SystemAccessDeviceMonitorParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemAccessDeviceMonitorParametersGetResponse';
    protected $pollingIntervalMinutes = null;

    /**
     * @return SystemAccessDeviceMonitorParametersGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        if (!$pollingIntervalMinutes) return $this;
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf AccessDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new AccessDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
        $this->pollingIntervalMinutes->setName('pollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMonitorPollingIntervalMinutes
     */
    public function getPollingIntervalMinutes()
    {
        return $this->pollingIntervalMinutes->getValue();
    }
}