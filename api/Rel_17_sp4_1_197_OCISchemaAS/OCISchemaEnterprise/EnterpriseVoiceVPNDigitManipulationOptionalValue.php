<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOptionalValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that optionally has a value.
 */
class EnterpriseVoiceVPNDigitManipulationOptionalValue extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOptionalValue';
    public    $name      = 'EnterpriseVoiceVPNDigitManipulationOptionalValue';
    protected $operation = null;
    protected $value     = null;

    public function __construct(
         $operation,
         $value = null
    ) {
        $this->setOperation($operation);
        $this->setValue($value);
    }

    /**
     * @return EnterpriseVoiceVPNDigitManipulationOptionalValue
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOperation($operation = null)
    {
        if (!$operation) return $this;
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationOptionalValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationOptionalValue($operation);
        $this->operation->setName('operation');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationOperationOptionalValue
     */
    public function getOperation()
    {
        return $this->operation->getValue();
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        if (!$value) return $this;
        $this->value = ($value InstanceOf EnterpriseVoiceVPNDigitManipulationValue)
             ? $value
             : new EnterpriseVoiceVPNDigitManipulationValue($value);
        $this->value->setName('value');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationValue
     */
    public function getValue()
    {
        return $this->value->getValue();
    }
}