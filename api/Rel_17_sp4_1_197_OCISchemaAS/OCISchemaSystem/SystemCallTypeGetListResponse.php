<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallTypeGetListRequest.
 */
class SystemCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = 'SystemCallTypeGetListResponse';
    protected $callType = null;

    /**
     * @return SystemCallTypeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallType($callType = null)
    {
        if (!$callType) return $this;
        $this->callType = ($callType InstanceOf SystemCallType)
             ? $callType
             : new SystemCallType($callType);
        $this->callType->setName('callType');
        return $this;
    }

    /**
     * 
     * @return SystemCallType
     */
    public function getCallType()
    {
        return $this->callType->getValue();
    }
}