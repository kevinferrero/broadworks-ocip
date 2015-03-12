<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\FileRepositoryProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemFileRepositoryDeviceModifyRequest';
    protected $name                  = null;
    protected $rootDirectory         = null;
    protected $secure                = null;
    protected $netAddress            = null;
    protected $ftpPassive            = null;
    protected $protocol              = null;
    protected $port                  = null;
    protected $ftpRemoteVerification = null;

    public function __construct(
         $name,
         $rootDirectory = null,
         $secure = null,
         $netAddress = null,
         $ftpPassive = null,
         $protocol = null,
         $port = null,
         $ftpRemoteVerification = null
    ) {
        $this->setName($name);
        $this->setRootDirectory($rootDirectory);
        $this->setSecure($secure);
        $this->setNetAddress($netAddress);
        $this->setFtpPassive($ftpPassive);
        $this->setProtocol($protocol);
        $this->setPort($port);
        $this->setFtpRemoteVerification($ftpRemoteVerification);
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
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf FileRepositoryName)
             ? $name
             : new FileRepositoryName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        if (!$rootDirectory) return $this;
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory->getValue();
    }

    /**
     * 
     */
    public function setSecure($secure = null)
    {
        if (!$secure) return $this;
        $this->secure = new PrimitiveType($secure);
        $this->secure->setName('secure');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSecure()
    {
        return $this->secure->getValue();
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
    public function setFtpPassive($ftpPassive = null)
    {
        if (!$ftpPassive) return $this;
        $this->ftpPassive = new PrimitiveType($ftpPassive);
        $this->ftpPassive->setName('ftpPassive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getFtpPassive()
    {
        return $this->ftpPassive->getValue();
    }

    /**
     * 
     */
    public function setProtocol($protocol = null)
    {
        if (!$protocol) return $this;
        $this->protocol = ($protocol InstanceOf FileRepositoryProtocol)
             ? $protocol
             : new FileRepositoryProtocol($protocol);
        $this->protocol->setName('protocol');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryProtocol
     */
    public function getProtocol()
    {
        return $this->protocol->getValue();
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        if (!$port) return $this;
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port
     */
    public function getPort()
    {
        return $this->port->getValue();
    }

    /**
     * 
     */
    public function setFtpRemoteVerification($ftpRemoteVerification = null)
    {
        if (!$ftpRemoteVerification) return $this;
        $this->ftpRemoteVerification = new PrimitiveType($ftpRemoteVerification);
        $this->ftpRemoteVerification->setName('ftpRemoteVerification');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getFtpRemoteVerification()
    {
        return $this->ftpRemoteVerification->getValue();
    }
}