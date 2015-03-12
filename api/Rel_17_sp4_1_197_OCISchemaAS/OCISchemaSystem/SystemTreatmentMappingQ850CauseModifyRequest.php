<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the fields for a Q850CauseValue mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name           = 'SystemTreatmentMappingQ850CauseModifyRequest';
    protected $q850CauseValue = null;
    protected $treatmentId    = null;

    public function __construct(
         $q850CauseValue,
         $treatmentId = null
    ) {
        $this->setQ850CauseValue($q850CauseValue);
        $this->setTreatmentId($treatmentId);
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
    public function setQ850CauseValue($q850CauseValue = null)
    {
        if (!$q850CauseValue) return $this;
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
        $this->q850CauseValue->setName('q850CauseValue');
        return $this;
    }

    /**
     * 
     * @return Q850CauseValue
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue->getValue();
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        if (!$treatmentId) return $this;
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId
     */
    public function getTreatmentId()
    {
        return $this->treatmentId->getValue();
    }
}