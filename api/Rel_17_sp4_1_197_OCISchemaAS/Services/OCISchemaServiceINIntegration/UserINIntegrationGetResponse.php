<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceINIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserINIntegrationGetRequest
 */
class UserINIntegrationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'UserINIntegrationGetResponse';
    protected $originatingServiceKey = null;
    protected $terminatingServiceKey = null;

    /**
     * @return UserINIntegrationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOriginatingServiceKey($originatingServiceKey = null)
    {
        if (!$originatingServiceKey) return $this;
        $this->originatingServiceKey = ($originatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $originatingServiceKey
             : new MobilityManagerServiceKey($originatingServiceKey);
        $this->originatingServiceKey->setName('originatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey
     */
    public function getOriginatingServiceKey()
    {
        return $this->originatingServiceKey->getValue();
    }

    /**
     * 
     */
    public function setTerminatingServiceKey($terminatingServiceKey = null)
    {
        if (!$terminatingServiceKey) return $this;
        $this->terminatingServiceKey = ($terminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $terminatingServiceKey
             : new MobilityManagerServiceKey($terminatingServiceKey);
        $this->terminatingServiceKey->setName('terminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey
     */
    public function getTerminatingServiceKey()
    {
        return $this->terminatingServiceKey->getValue();
    }
}