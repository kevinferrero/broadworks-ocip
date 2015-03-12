<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete a system-level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemDialPlanPolicyDeleteAccessCodeRequest extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemDialPlanPolicyDeleteAccessCodeRequest';
    protected $accessCode = null;

    public function __construct(
         $accessCode
    ) {
        $this->setAccessCode($accessCode);
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
        $this->accessCode = ($accessCode InstanceOf DialPlanAccessCode)
             ? $accessCode
             : new DialPlanAccessCode($accessCode);
        $this->accessCode->setName('accessCode');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCode
     */
    public function getAccessCode()
    {
        return $this->accessCode->getValue();
    }
}