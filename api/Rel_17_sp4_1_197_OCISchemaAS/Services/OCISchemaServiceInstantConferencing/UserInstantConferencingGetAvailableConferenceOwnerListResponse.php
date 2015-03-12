<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBridgeOwnerList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserInstantConferencingGetAvailableConferenceOwnerListRequest.
 */
class UserInstantConferencingGetAvailableConferenceOwnerListResponse extends ComplexType implements ComplexInterface
{
    public    $name   = 'UserInstantConferencingGetAvailableConferenceOwnerListResponse';
    protected $bridge = null;

    /**
     * @return UserInstantConferencingGetAvailableConferenceOwnerListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBridge(InstantConferencingBridgeOwnerList $bridge = null)
    {
        if (!$bridge) return $this;
        $this->bridge = $bridge;
        $this->bridge->setName('bridge');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBridgeOwnerList
     */
    public function getBridge()
    {
        return $this->bridge;
    }
}