<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCICallControlApplicationGetACLListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the OCI call control access control list.
 *         The response is either SystemOCICallControlApplicationGetACLListResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationGetACLListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCICallControlApplicationGetACLListResponse';
    public    $name          = 'SystemOCICallControlApplicationGetACLListRequest';
    protected $applicationId = null;

    public function __construct(
         $applicationId
    ) {
        $this->setApplicationId($applicationId);
    }

    /**
     * @return SystemOCICallControlApplicationGetACLListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        if (!$applicationId) return $this;
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId->getValue();
    }
}