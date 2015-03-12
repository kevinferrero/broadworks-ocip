<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Gets the home zone for a user
 *         Response to a UserZoneCallingRestrictionsGetRequest
 */
class UserZoneCallingRestrictionsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name         = 'UserZoneCallingRestrictionsGetResponse';
    protected $homeZoneName = null;

    /**
     * @return UserZoneCallingRestrictionsGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHomeZoneName($homeZoneName = null)
    {
        if (!$homeZoneName) return $this;
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
        $this->homeZoneName->setName('homeZoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName->getValue();
    }
}