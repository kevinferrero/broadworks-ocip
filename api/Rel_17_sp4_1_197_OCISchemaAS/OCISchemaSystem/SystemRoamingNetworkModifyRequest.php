<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkTranslationIndex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoamingNetworkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'SystemRoamingNetworkModifyRequest';
    protected $mscAddress              = null;
    protected $networkTranslationIndex = null;

    public function __construct(
         $mscAddress,
         $networkTranslationIndex = null
    ) {
        $this->setMscAddress($mscAddress);
        $this->setNetworkTranslationIndex($networkTranslationIndex);
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
    public function setMscAddress($mscAddress = null)
    {
        if (!$mscAddress) return $this;
        $this->mscAddress = ($mscAddress InstanceOf DN)
             ? $mscAddress
             : new DN($mscAddress);
        $this->mscAddress->setName('mscAddress');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getMscAddress()
    {
        return $this->mscAddress->getValue();
    }

    /**
     * 
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        if (!$networkTranslationIndex) return $this;
        $this->networkTranslationIndex = ($networkTranslationIndex InstanceOf NetworkTranslationIndex)
             ? $networkTranslationIndex
             : new NetworkTranslationIndex($networkTranslationIndex);
        $this->networkTranslationIndex->setName('networkTranslationIndex');
        return $this;
    }

    /**
     * 
     * @return NetworkTranslationIndex
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex->getValue();
    }
}