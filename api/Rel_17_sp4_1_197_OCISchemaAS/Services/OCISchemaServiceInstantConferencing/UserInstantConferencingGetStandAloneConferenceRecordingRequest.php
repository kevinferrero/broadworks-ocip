<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceRecordingResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the information of a conference recording..
 *         The response is either UserInstantConferencingGetStandAloneConferenceRecordingResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneConferenceRecordingRequest extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceRecordingResponse';
    public    $name                  = 'UserInstantConferencingGetStandAloneConferenceRecordingRequest';
    protected $conferenceOwnerUserId = null;
    protected $recordingKey          = null;

    public function __construct(
         $conferenceOwnerUserId,
         InstantConferencingRecordingKey $recordingKey
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setRecordingKey($recordingKey);
    }

    /**
     * @return UserInstantConferencingGetStandAloneConferenceRecordingResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        if (!$conferenceOwnerUserId) return $this;
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getConferenceOwnerUserId()
    {
        return $this->conferenceOwnerUserId->getValue();
    }

    /**
     * 
     */
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        if (!$recordingKey) return $this;
        $this->recordingKey = $recordingKey;
        $this->recordingKey->setName('recordingKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingKey
     */
    public function getRecordingKey()
    {
        return $this->recordingKey;
    }
}