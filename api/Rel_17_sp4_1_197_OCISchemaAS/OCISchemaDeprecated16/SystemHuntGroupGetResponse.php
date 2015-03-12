<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemHuntGroupGetRequest.
 *         Replaced by: SystemHuntGroupGetResponse17
 */
class SystemHuntGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = 'SystemHuntGroupGetResponse';
    protected $anonymousInsteadOfPrivateCLID = null;
    protected $removeHuntGroupNameFromCLID   = null;

    /**
     * @return SystemHuntGroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID = null)
    {
        if (!$anonymousInsteadOfPrivateCLID) return $this;
        $this->anonymousInsteadOfPrivateCLID = new PrimitiveType($anonymousInsteadOfPrivateCLID);
        $this->anonymousInsteadOfPrivateCLID->setName('anonymousInsteadOfPrivateCLID');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return $this->anonymousInsteadOfPrivateCLID->getValue();
    }

    /**
     * 
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID = null)
    {
        if (!$removeHuntGroupNameFromCLID) return $this;
        $this->removeHuntGroupNameFromCLID = new PrimitiveType($removeHuntGroupNameFromCLID);
        $this->removeHuntGroupNameFromCLID->setName('removeHuntGroupNameFromCLID');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return $this->removeHuntGroupNameFromCLID->getValue();
    }
}