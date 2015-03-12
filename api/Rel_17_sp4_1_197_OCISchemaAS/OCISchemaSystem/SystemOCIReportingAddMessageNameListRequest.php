<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCIReportingMessageName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a list of reported messages for a host in the OCI Reporting
 *         Access Control List. The response is either a SuccessResponse or an
 *         ErrorResponse.
 */
class SystemOCIReportingAddMessageNameListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemOCIReportingAddMessageNameListRequest';
    protected $netAddress            = null;
    protected $messageNameStartsWith = null;

    public function __construct(
         $netAddress,
         $messageNameStartsWith
    ) {
        $this->setNetAddress($netAddress);
        $this->setMessageNameStartsWith($messageNameStartsWith);
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
    public function setNetAddress($netAddress = null)
    {
        if (!$netAddress) return $this;
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setMessageNameStartsWith($messageNameStartsWith = null)
    {
        if (!$messageNameStartsWith) return $this;
        $this->messageNameStartsWith = ($messageNameStartsWith InstanceOf OCIReportingMessageName)
             ? $messageNameStartsWith
             : new OCIReportingMessageName($messageNameStartsWith);
        $this->messageNameStartsWith->setName('messageNameStartsWith');
        return $this;
    }

    /**
     * 
     * @return OCIReportingMessageName
     */
    public function getMessageNameStartsWith()
    {
        return $this->messageNameStartsWith->getValue();
    }
}