<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an event of a service provider schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderScheduleModifyEventRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'ServiceProviderScheduleModifyEventRequest';
    protected $serviceProviderId = null;
    protected $scheduleKey       = null;
    protected $eventName         = null;
    protected $newEventName      = null;
    protected $startDate         = null;
    protected $endDate           = null;
    protected $recurrence        = null;

    public function __construct(
         $serviceProviderId,
         ScheduleKey $scheduleKey,
         $eventName,
         $newEventName = null,
         $startDate = null,
         $endDate = null,
         Recurrence $recurrence = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setNewEventName($newEventName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setRecurrence($recurrence);
    }

    /**
     * @return 
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

    /**
     * 
     */
    public function setEventName($eventName = null)
    {
        if (!$eventName) return $this;
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
        $this->eventName->setName('eventName');
        return $this;
    }

    /**
     * 
     * @return EventName
     */
    public function getEventName()
    {
        return $this->eventName->getValue();
    }

    /**
     * 
     */
    public function setNewEventName($newEventName = null)
    {
        if (!$newEventName) return $this;
        $this->newEventName = ($newEventName InstanceOf EventName)
             ? $newEventName
             : new EventName($newEventName);
        $this->newEventName->setName('newEventName');
        return $this;
    }

    /**
     * 
     * @return EventName
     */
    public function getNewEventName()
    {
        return $this->newEventName->getValue();
    }

    /**
     * 
     */
    public function setStartDate(xs:date $startDate = null)
    {
        if (!$startDate) return $this;
        $this->startDate->setName('startDate');
        return $this;
    }

    /**
     * 
     * @return xs:date
     */
    public function getStartDate()
    {
        return $this->startDate->getValue();
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        if (!$endDate) return $this;
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return xs:date
     */
    public function getEndDate()
    {
        return $this->endDate->getValue();
    }

    /**
     * 
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        if (!$recurrence) return $this;
        $this->recurrence = $recurrence;
        $this->recurrence->setName('recurrence');
        return $this;
    }

    /**
     * 
     * @return Recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }
}