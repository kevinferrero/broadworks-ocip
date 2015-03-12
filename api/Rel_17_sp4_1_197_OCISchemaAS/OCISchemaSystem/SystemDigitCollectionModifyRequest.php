<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDigitCollectionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemDigitCollectionModifyRequest';
    protected $accessCode      = null;
    protected $publicDigitMap  = null;
    protected $privateDigitMap = null;

    public function __construct(
         $accessCode = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setAccessCode($accessCode);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
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
    public function setAccessCode($accessCode = null)
    {
        if (!$accessCode) return $this;
        $this->accessCode = ($accessCode InstanceOf AccessCode)
             ? $accessCode
             : new AccessCode($accessCode);
        $this->accessCode->setName('accessCode');
        return $this;
    }

    /**
     * 
     * @return AccessCode
     */
    public function getAccessCode()
    {
        return $this->accessCode->getValue();
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        if (!$publicDigitMap) return $this;
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap->getValue();
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if (!$privateDigitMap) return $this;
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap->getValue();
    }
}