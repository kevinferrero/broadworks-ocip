<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetGreetingRequest16.
 *         Contains the greeting configuration for a user's voice messaging.
 */
class UserVoiceMessagingUserGetGreetingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'UserVoiceMessagingUserGetGreetingResponse16';
    protected $busyAnnouncementSelection      = null;
    protected $busyPersonalAudioFile          = null;
    protected $busyPersonalAudioMediaType     = null;
    protected $busyPersonalVideoFile          = null;
    protected $busyPersonalVideoMediaType     = null;
    protected $noAnswerAnnouncementSelection  = null;
    protected $noAnswerPersonalAudioFile      = null;
    protected $noAnswerPersonalAudioMediaType = null;
    protected $noAnswerPersonalVideoFile      = null;
    protected $noAnswerPersonalVideoMediaType = null;
    protected $noAnswerAlternateGreeting01    = null;
    protected $noAnswerAlternateGreeting02    = null;
    protected $noAnswerAlternateGreeting03    = null;
    protected $noAnswerNumberOfRings          = null;

    /**
     * @return UserVoiceMessagingUserGetGreetingResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBusyAnnouncementSelection($busyAnnouncementSelection = null)
    {
        if (!$busyAnnouncementSelection) return $this;
        $this->busyAnnouncementSelection = ($busyAnnouncementSelection InstanceOf AnnouncementSelection)
             ? $busyAnnouncementSelection
             : new AnnouncementSelection($busyAnnouncementSelection);
        $this->busyAnnouncementSelection->setName('busyAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection->getValue();
    }

    /**
     * 
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile = null)
    {
        if (!$busyPersonalAudioFile) return $this;
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf FileDescription)
             ? $busyPersonalAudioFile
             : new FileDescription($busyPersonalAudioFile);
        $this->busyPersonalAudioFile->setName('busyPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile->getValue();
    }

    /**
     * 
     */
    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType = null)
    {
        if (!$busyPersonalAudioMediaType) return $this;
        $this->busyPersonalAudioMediaType = ($busyPersonalAudioMediaType InstanceOf MediaFileType)
             ? $busyPersonalAudioMediaType
             : new MediaFileType($busyPersonalAudioMediaType);
        $this->busyPersonalAudioMediaType->setName('busyPersonalAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getBusyPersonalAudioMediaType()
    {
        return $this->busyPersonalAudioMediaType->getValue();
    }

    /**
     * 
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile = null)
    {
        if (!$busyPersonalVideoFile) return $this;
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf FileDescription)
             ? $busyPersonalVideoFile
             : new FileDescription($busyPersonalVideoFile);
        $this->busyPersonalVideoFile->setName('busyPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile->getValue();
    }

    /**
     * 
     */
    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType = null)
    {
        if (!$busyPersonalVideoMediaType) return $this;
        $this->busyPersonalVideoMediaType = ($busyPersonalVideoMediaType InstanceOf MediaFileType)
             ? $busyPersonalVideoMediaType
             : new MediaFileType($busyPersonalVideoMediaType);
        $this->busyPersonalVideoMediaType->setName('busyPersonalVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getBusyPersonalVideoMediaType()
    {
        return $this->busyPersonalVideoMediaType->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection = null)
    {
        if (!$noAnswerAnnouncementSelection) return $this;
        $this->noAnswerAnnouncementSelection = ($noAnswerAnnouncementSelection InstanceOf VoiceMessagingNoAnswerGreetingSelection)
             ? $noAnswerAnnouncementSelection
             : new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
        $this->noAnswerAnnouncementSelection->setName('noAnswerAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNoAnswerGreetingSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile = null)
    {
        if (!$noAnswerPersonalAudioFile) return $this;
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf FileDescription)
             ? $noAnswerPersonalAudioFile
             : new FileDescription($noAnswerPersonalAudioFile);
        $this->noAnswerPersonalAudioFile->setName('noAnswerPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType = null)
    {
        if (!$noAnswerPersonalAudioMediaType) return $this;
        $this->noAnswerPersonalAudioMediaType = ($noAnswerPersonalAudioMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalAudioMediaType
             : new MediaFileType($noAnswerPersonalAudioMediaType);
        $this->noAnswerPersonalAudioMediaType->setName('noAnswerPersonalAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return $this->noAnswerPersonalAudioMediaType->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile = null)
    {
        if (!$noAnswerPersonalVideoFile) return $this;
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf FileDescription)
             ? $noAnswerPersonalVideoFile
             : new FileDescription($noAnswerPersonalVideoFile);
        $this->noAnswerPersonalVideoFile->setName('noAnswerPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType = null)
    {
        if (!$noAnswerPersonalVideoMediaType) return $this;
        $this->noAnswerPersonalVideoMediaType = ($noAnswerPersonalVideoMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalVideoMediaType
             : new MediaFileType($noAnswerPersonalVideoMediaType);
        $this->noAnswerPersonalVideoMediaType->setName('noAnswerPersonalVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return $this->noAnswerPersonalVideoMediaType->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01 = null)
    {
        if (!$noAnswerAlternateGreeting01) return $this;
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        $this->noAnswerAlternateGreeting01->setName('noAnswerAlternateGreeting01');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02 = null)
    {
        if (!$noAnswerAlternateGreeting02) return $this;
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        $this->noAnswerAlternateGreeting02->setName('noAnswerAlternateGreeting02');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03 = null)
    {
        if (!$noAnswerAlternateGreeting03) return $this;
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        $this->noAnswerAlternateGreeting03->setName('noAnswerAlternateGreeting03');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        if (!$noAnswerNumberOfRings) return $this;
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf VoiceMessagingNumberOfRings)
             ? $noAnswerNumberOfRings
             : new VoiceMessagingNumberOfRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings->getValue();
    }
}