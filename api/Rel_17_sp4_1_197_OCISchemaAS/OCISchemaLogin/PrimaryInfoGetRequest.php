<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests information about the primary server for high-availability support.
 */
class PrimaryInfoGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse';
    public    $name                   = 'PrimaryInfoGetRequest';
    protected $isPrivate              = null;
    protected $isAddressInfoRequested = null;

    public function __construct(
         $isPrivate,
         $isAddressInfoRequested
    ) {
        $this->setIsPrivate($isPrivate);
        $this->setIsAddressInfoRequested($isAddressInfoRequested);
    }

    /**
     * @return PrimaryInfoGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Dual homed side is private?
     */
    public function setIsPrivate($isPrivate = null)
    {
        if (!$isPrivate) return $this;
        $this->isPrivate = new PrimitiveType($isPrivate);
        $this->isPrivate->setName('isPrivate');
        return $this;
    }

    /**
     * Dual homed side is private?
     * @return xs:boolean
     */
    public function getIsPrivate()
    {
        return $this->isPrivate->getValue();
    }

    /**
     * For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     */
    public function setIsAddressInfoRequested($isAddressInfoRequested = null)
    {
        if (!$isAddressInfoRequested) return $this;
        $this->isAddressInfoRequested = new PrimitiveType($isAddressInfoRequested);
        $this->isAddressInfoRequested->setName('isAddressInfoRequested');
        return $this;
    }

    /**
     * For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     * @return xs:boolean
     */
    public function getIsAddressInfoRequested()
    {
        return $this->isAddressInfoRequested->getValue();
    }
}