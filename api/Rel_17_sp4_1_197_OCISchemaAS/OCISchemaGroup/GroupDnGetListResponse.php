<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupDnGetListRequest.
 *         The response contains the list of DNs assigned to the group.
 */
class GroupDnGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'GroupDnGetListResponse';
    protected $phoneNumber = null;

    /**
     * @return GroupDnGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }
}