<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderScheduleGetListRequest.
 *         The response contains a list of service provider schedules.
 */
class ServiceProviderScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'ServiceProviderScheduleGetListResponse';
    protected $scheduleKey = null;

    /**
     * @return ServiceProviderScheduleGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        if (!$scheduleKey) return $this;
        $this->scheduleKey = $scheduleKey;
        $this->scheduleKey->setName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }
}