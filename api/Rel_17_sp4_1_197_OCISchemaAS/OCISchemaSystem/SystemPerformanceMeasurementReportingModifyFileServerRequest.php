<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemPerformanceMeasurementReportingModifyFileServerRequest';
    protected $ftpHostNetAddress = null;
    protected $passiveFTP        = null;

    public function __construct(
         $ftpHostNetAddress,
         $passiveFTP = null
    ) {
        $this->setFtpHostNetAddress($ftpHostNetAddress);
        $this->setPassiveFTP($passiveFTP);
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
    public function setFtpHostNetAddress($ftpHostNetAddress = null)
    {
        if (!$ftpHostNetAddress) return $this;
        $this->ftpHostNetAddress = ($ftpHostNetAddress InstanceOf NetAddress)
             ? $ftpHostNetAddress
             : new NetAddress($ftpHostNetAddress);
        $this->ftpHostNetAddress->setName('ftpHostNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getFtpHostNetAddress()
    {
        return $this->ftpHostNetAddress->getValue();
    }

    /**
     * 
     */
    public function setPassiveFTP($passiveFTP = null)
    {
        if (!$passiveFTP) return $this;
        $this->passiveFTP = new PrimitiveType($passiveFTP);
        $this->passiveFTP->setName('passiveFTP');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP->getValue();
    }
}