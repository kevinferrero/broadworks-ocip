<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an OCI entry to the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBCCTAddOCIInterfaceAddressRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemBCCTAddOCIInterfaceAddressRequest';
    protected $interfaceNetAddress = null;

    public function __construct(
         $interfaceNetAddress
    ) {
        $this->setInterfaceNetAddress($interfaceNetAddress);
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
    public function setInterfaceNetAddress($interfaceNetAddress = null)
    {
        if (!$interfaceNetAddress) return $this;
        $this->interfaceNetAddress = ($interfaceNetAddress InstanceOf NetAddress)
             ? $interfaceNetAddress
             : new NetAddress($interfaceNetAddress);
        $this->interfaceNetAddress->setName('interfaceNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getInterfaceNetAddress()
    {
        return $this->interfaceNetAddress->getValue();
    }
}