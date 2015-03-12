<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest.
 */
class GroupCallCenterGetAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'GroupCallCenterGetAnnouncementResponse';
    protected $entranceMessageSelection                   = null;
    protected $entranceMessageAudioFileDescription        = null;
    protected $entranceMessageVideoFileDescription        = null;
    protected $periodicComfortMessageSelection            = null;
    protected $periodicComfortMessageAudioFileDescription = null;
    protected $periodicComfortMessageVideoFileDescription = null;
    protected $onHoldMessageSelection                     = null;
    protected $onHoldMessageAudioFileDescription          = null;
    protected $onHoldMessageVideoFileDescription          = null;

    /**
     * @return GroupCallCenterGetAnnouncementResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        if (!$entranceMessageSelection) return $this;
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
        $this->entranceMessageSelection->setName('entranceMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection
     */
    public function getEntranceMessageSelection()
    {
        return $this->entranceMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        if (!$entranceMessageAudioFileDescription) return $this;
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceMessageAudioFileDescription->setName('entranceMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return $this->entranceMessageAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        if (!$entranceMessageVideoFileDescription) return $this;
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
        $this->entranceMessageVideoFileDescription->setName('entranceMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return $this->entranceMessageVideoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        if (!$periodicComfortMessageSelection) return $this;
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
        $this->periodicComfortMessageSelection->setName('periodicComfortMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return $this->periodicComfortMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        if (!$periodicComfortMessageAudioFileDescription) return $this;
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortMessageAudioFileDescription->setName('periodicComfortMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return $this->periodicComfortMessageAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        if (!$periodicComfortMessageVideoFileDescription) return $this;
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->periodicComfortMessageVideoFileDescription->setName('periodicComfortMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return $this->periodicComfortMessageVideoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setOnHoldMessageSelection($onHoldMessageSelection = null)
    {
        if (!$onHoldMessageSelection) return $this;
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
        $this->onHoldMessageSelection->setName('onHoldMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection
     */
    public function getOnHoldMessageSelection()
    {
        return $this->onHoldMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setOnHoldMessageAudioFileDescription($onHoldMessageAudioFileDescription = null)
    {
        if (!$onHoldMessageAudioFileDescription) return $this;
        $this->onHoldMessageAudioFileDescription = ($onHoldMessageAudioFileDescription InstanceOf FileDescription)
             ? $onHoldMessageAudioFileDescription
             : new FileDescription($onHoldMessageAudioFileDescription);
        $this->onHoldMessageAudioFileDescription->setName('onHoldMessageAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getOnHoldMessageAudioFileDescription()
    {
        return $this->onHoldMessageAudioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setOnHoldMessageVideoFileDescription($onHoldMessageVideoFileDescription = null)
    {
        if (!$onHoldMessageVideoFileDescription) return $this;
        $this->onHoldMessageVideoFileDescription = ($onHoldMessageVideoFileDescription InstanceOf FileDescription)
             ? $onHoldMessageVideoFileDescription
             : new FileDescription($onHoldMessageVideoFileDescription);
        $this->onHoldMessageVideoFileDescription->setName('onHoldMessageVideoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getOnHoldMessageVideoFileDescription()
    {
        return $this->onHoldMessageVideoFileDescription->getValue();
    }
}