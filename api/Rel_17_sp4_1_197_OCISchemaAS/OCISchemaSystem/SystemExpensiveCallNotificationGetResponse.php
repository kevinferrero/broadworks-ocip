<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExpensiveCallNotificationPostAnnouncementDelaySeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemExpensiveCallNotificationGetRequest.
 */
class SystemExpensiveCallNotificationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = 'SystemExpensiveCallNotificationGetResponse';
    protected $enablePostAnnouncementDelayTimer = null;
    protected $postAnnouncementDelaySeconds     = null;

    /**
     * @return SystemExpensiveCallNotificationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer = null)
    {
        if (!$enablePostAnnouncementDelayTimer) return $this;
        $this->enablePostAnnouncementDelayTimer = new PrimitiveType($enablePostAnnouncementDelayTimer);
        $this->enablePostAnnouncementDelayTimer->setName('enablePostAnnouncementDelayTimer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnablePostAnnouncementDelayTimer()
    {
        return $this->enablePostAnnouncementDelayTimer->getValue();
    }

    /**
     * 
     */
    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds = null)
    {
        if (!$postAnnouncementDelaySeconds) return $this;
        $this->postAnnouncementDelaySeconds = ($postAnnouncementDelaySeconds InstanceOf ExpensiveCallNotificationPostAnnouncementDelaySeconds)
             ? $postAnnouncementDelaySeconds
             : new ExpensiveCallNotificationPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
        $this->postAnnouncementDelaySeconds->setName('postAnnouncementDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return ExpensiveCallNotificationPostAnnouncementDelaySeconds
     */
    public function getPostAnnouncementDelaySeconds()
    {
        return $this->postAnnouncementDelaySeconds->getValue();
    }
}