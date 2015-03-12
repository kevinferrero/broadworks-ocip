<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Information about the primary server in the high-availablity cluster.
 *         For optimization, we only get the hostname and addresses for primary if they are
 *         explicitly requested or if the current server is not the primary.
 */
class PrimaryInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'PrimaryInfoGetResponse';
    protected $isPrimary                = null;
    protected $hostnameForPrimary       = null;
    protected $addressForPrimary        = null;
    protected $privateAddressForPrimary = null;

    /**
     * @return PrimaryInfoGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Is the server that processed this request the primary in the cluster?
     */
    public function setIsPrimary($isPrimary = null)
    {
        if (!$isPrimary) return $this;
        $this->isPrimary = new PrimitiveType($isPrimary);
        $this->isPrimary->setName('isPrimary');
        return $this;
    }

    /**
     * Is the server that processed this request the primary in the cluster?
     * @return xs:boolean
     */
    public function getIsPrimary()
    {
        return $this->isPrimary->getValue();
    }

    /**
     * Primary server's hostname.
     */
    public function setHostnameForPrimary($hostnameForPrimary = null)
    {
        if (!$hostnameForPrimary) return $this;
        $this->hostnameForPrimary = ($hostnameForPrimary InstanceOf NetAddress)
             ? $hostnameForPrimary
             : new NetAddress($hostnameForPrimary);
        $this->hostnameForPrimary->setName('hostnameForPrimary');
        return $this;
    }

    /**
     * Primary server's hostname.
     * @return NetAddress
     */
    public function getHostnameForPrimary()
    {
        return $this->hostnameForPrimary->getValue();
    }

    /**
     * List of addresses for primary server in cluster.
     */
    public function setAddressForPrimary($addressForPrimary = null)
    {
        if (!$addressForPrimary) return $this;
        $this->addressForPrimary = ($addressForPrimary InstanceOf NetAddress)
             ? $addressForPrimary
             : new NetAddress($addressForPrimary);
        $this->addressForPrimary->setName('addressForPrimary');
        return $this;
    }

    /**
     * List of addresses for primary server in cluster.
     * @return NetAddress
     */
    public function getAddressForPrimary()
    {
        return $this->addressForPrimary->getValue();
    }

    /**
     * List of private addresses for primary server in cluster.
     */
    public function setPrivateAddressForPrimary($privateAddressForPrimary = null)
    {
        if (!$privateAddressForPrimary) return $this;
        $this->privateAddressForPrimary = ($privateAddressForPrimary InstanceOf NetAddress)
             ? $privateAddressForPrimary
             : new NetAddress($privateAddressForPrimary);
        $this->privateAddressForPrimary->setName('privateAddressForPrimary');
        return $this;
    }

    /**
     * List of private addresses for primary server in cluster.
     * @return NetAddress
     */
    public function getPrivateAddressForPrimary()
    {
        return $this->privateAddressForPrimary->getValue();
    }
}