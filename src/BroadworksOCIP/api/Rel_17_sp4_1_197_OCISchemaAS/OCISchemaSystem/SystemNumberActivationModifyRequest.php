<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify system number activation setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemNumberActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNumberActivationModifyRequest';
    protected $useNumberActivation;

    public function __construct(
         $useNumberActivation = null
    ) {
        $this->setUseNumberActivation($useNumberActivation);
    }

    /**
     * @return mixed $response
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
        $this->useNumberActivation = new PrimitiveType($useNumberActivation);
        $this->useNumberActivation->setElementName('useNumberActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $useNumberActivation
     */
    public function getUseNumberActivation()
    {
        return ($this->useNumberActivation)
            ? $this->useNumberActivation->getElementValue()
            : null;
    }
}
