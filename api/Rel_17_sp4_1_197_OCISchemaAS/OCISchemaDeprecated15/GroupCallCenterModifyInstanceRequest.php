<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterQueueLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyInstanceRequest16
 */
class GroupCallCenterModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'GroupCallCenterModifyInstanceRequest';
    protected $serviceUserId                        = null;
    protected $serviceInstanceProfile               = null;
    protected $policy                               = null;
    protected $huntAfterNoAnswer                    = null;
    protected $noAnswerNumberOfRings                = null;
    protected $forwardAfterTimeout                  = null;
    protected $forwardTimeoutSeconds                = null;
    protected $forwardToPhoneNumber                 = null;
    protected $enableVideo                          = null;
    protected $queueLength                          = null;
    protected $allowAgentLogoff                     = null;
    protected $playMusicOnHold                      = null;
    protected $playComfortMessage                   = null;
    protected $timeBetweenComfortMessagesSeconds    = null;
    protected $enableGuardTimer                     = null;
    protected $guardTimerSeconds                    = null;
    protected $agentUserIdList                      = null;
    protected $allowCallWaitingForAgents            = null;
    protected $allowCallsToAgentsInWrapUp           = null;
    protected $enableCallQueueWhenNoAgentsAvailable = null;
    protected $statisticsSource                     = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $policy = null,
         $huntAfterNoAnswer = null,
         $noAnswerNumberOfRings = null,
         $forwardAfterTimeout = null,
         $forwardTimeoutSeconds = null,
         $forwardToPhoneNumber = null,
         $enableVideo = null,
         $queueLength = null,
         $allowAgentLogoff = null,
         $playMusicOnHold = null,
         $playComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $enableGuardTimer = null,
         $guardTimerSeconds = null,
         ReplacementUserIdList $agentUserIdList = null,
         $allowCallWaitingForAgents = null,
         $allowCallsToAgentsInWrapUp = null,
         $enableCallQueueWhenNoAgentsAvailable = null,
         $statisticsSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setPolicy($policy);
        $this->setHuntAfterNoAnswer($huntAfterNoAnswer);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
        $this->setForwardAfterTimeout($forwardAfterTimeout);
        $this->setForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setEnableVideo($enableVideo);
        $this->setQueueLength($queueLength);
        $this->setAllowAgentLogoff($allowAgentLogoff);
        $this->setPlayMusicOnHold($playMusicOnHold);
        $this->setPlayComfortMessage($playComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setEnableGuardTimer($enableGuardTimer);
        $this->setGuardTimerSeconds($guardTimerSeconds);
        $this->setAgentUserIdList($agentUserIdList);
        $this->setAllowCallWaitingForAgents($allowCallWaitingForAgents);
        $this->setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp);
        $this->setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable);
        $this->setStatisticsSource($statisticsSource);
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
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setPolicy($policy = null)
    {
        if (!$policy) return $this;
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
        $this->policy->setName('policy');
        return $this;
    }

    /**
     * 
     * @return HuntPolicy
     */
    public function getPolicy()
    {
        return $this->policy->getValue();
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        if (!$huntAfterNoAnswer) return $this;
        $this->huntAfterNoAnswer = new PrimitiveType($huntAfterNoAnswer);
        $this->huntAfterNoAnswer->setName('huntAfterNoAnswer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        if (!$noAnswerNumberOfRings) return $this;
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        if (!$forwardAfterTimeout) return $this;
        $this->forwardAfterTimeout = new PrimitiveType($forwardAfterTimeout);
        $this->forwardAfterTimeout->setName('forwardAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout->getValue();
    }

    /**
     * 
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        if (!$forwardTimeoutSeconds) return $this;
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardTimeoutSeconds->setName('forwardTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if (!$forwardToPhoneNumber) return $this;
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        if (!$enableVideo) return $this;
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableVideo()
    {
        return $this->enableVideo->getValue();
    }

    /**
     * 
     */
    public function setQueueLength($queueLength = null)
    {
        if (!$queueLength) return $this;
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength)
             ? $queueLength
             : new CallCenterQueueLength($queueLength);
        $this->queueLength->setName('queueLength');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueLength
     */
    public function getQueueLength()
    {
        return $this->queueLength->getValue();
    }

    /**
     * 
     */
    public function setAllowAgentLogoff($allowAgentLogoff = null)
    {
        if (!$allowAgentLogoff) return $this;
        $this->allowAgentLogoff = new PrimitiveType($allowAgentLogoff);
        $this->allowAgentLogoff->setName('allowAgentLogoff');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowAgentLogoff()
    {
        return $this->allowAgentLogoff->getValue();
    }

    /**
     * 
     */
    public function setPlayMusicOnHold($playMusicOnHold = null)
    {
        if (!$playMusicOnHold) return $this;
        $this->playMusicOnHold = new PrimitiveType($playMusicOnHold);
        $this->playMusicOnHold->setName('playMusicOnHold');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayMusicOnHold()
    {
        return $this->playMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setPlayComfortMessage($playComfortMessage = null)
    {
        if (!$playComfortMessage) return $this;
        $this->playComfortMessage = new PrimitiveType($playComfortMessage);
        $this->playComfortMessage->setName('playComfortMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayComfortMessage()
    {
        return $this->playComfortMessage->getValue();
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        if (!$timeBetweenComfortMessagesSeconds) return $this;
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        if (!$enableGuardTimer) return $this;
        $this->enableGuardTimer = new PrimitiveType($enableGuardTimer);
        $this->enableGuardTimer->setName('enableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableGuardTimer()
    {
        return $this->enableGuardTimer->getValue();
    }

    /**
     * 
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        if (!$guardTimerSeconds) return $this;
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
        $this->guardTimerSeconds->setName('guardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds
     */
    public function getGuardTimerSeconds()
    {
        return $this->guardTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        if (!$agentUserIdList) return $this;
        $this->agentUserIdList = $agentUserIdList;
        $this->agentUserIdList->setName('agentUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        if (!$allowCallWaitingForAgents) return $this;
        $this->allowCallWaitingForAgents = new PrimitiveType($allowCallWaitingForAgents);
        $this->allowCallWaitingForAgents->setName('allowCallWaitingForAgents');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents->getValue();
    }

    /**
     * 
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        if (!$allowCallsToAgentsInWrapUp) return $this;
        $this->allowCallsToAgentsInWrapUp = new PrimitiveType($allowCallsToAgentsInWrapUp);
        $this->allowCallsToAgentsInWrapUp->setName('allowCallsToAgentsInWrapUp');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return $this->allowCallsToAgentsInWrapUp->getValue();
    }

    /**
     * 
     */
    public function setEnableCallQueueWhenNoAgentsAvailable($enableCallQueueWhenNoAgentsAvailable = null)
    {
        if (!$enableCallQueueWhenNoAgentsAvailable) return $this;
        $this->enableCallQueueWhenNoAgentsAvailable = new PrimitiveType($enableCallQueueWhenNoAgentsAvailable);
        $this->enableCallQueueWhenNoAgentsAvailable->setName('enableCallQueueWhenNoAgentsAvailable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableCallQueueWhenNoAgentsAvailable()
    {
        return $this->enableCallQueueWhenNoAgentsAvailable->getValue();
    }

    /**
     * 
     */
    public function setStatisticsSource($statisticsSource = null)
    {
        if (!$statisticsSource) return $this;
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource)
             ? $statisticsSource
             : new CallCenterStatisticsSource($statisticsSource);
        $this->statisticsSource->setName('statisticsSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSource
     */
    public function getStatisticsSource()
    {
        return $this->statisticsSource->getValue();
    }
}