<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNumberActivationGetRequest.
 *         Contains the system number activation setting.
 */
class SystemNumberActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemNumberActivationGetResponse';
    protected $useNumberActivation = null;

    /**
     * @return SystemNumberActivationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseNumberActivation($useNumberActivation = null)
    {
        if (!$useNumberActivation) return $this;
        $this->useNumberActivation = new PrimitiveType($useNumberActivation);
        $this->useNumberActivation->setName('useNumberActivation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseNumberActivation()
    {
        return $this->useNumberActivation->getValue();
    }
}