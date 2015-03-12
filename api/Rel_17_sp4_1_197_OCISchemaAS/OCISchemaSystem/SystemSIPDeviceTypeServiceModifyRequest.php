<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to set the level of integration that a device type has in relation to BroadWorks services.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'SystemSIPDeviceTypeServiceModifyRequest';
    protected $deviceType                   = null;
    protected $supportsPolycomPhoneServices = null;

    public function __construct(
         $deviceType,
         $supportsPolycomPhoneServices = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setSupportsPolycomPhoneServices($supportsPolycomPhoneServices);
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
    public function setDeviceType($deviceType = null)
    {
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices = null)
    {
        if (!$supportsPolycomPhoneServices) return $this;
        $this->supportsPolycomPhoneServices = new PrimitiveType($supportsPolycomPhoneServices);
        $this->supportsPolycomPhoneServices->setName('supportsPolycomPhoneServices');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSupportsPolycomPhoneServices()
    {
        return $this->supportsPolycomPhoneServices->getValue();
    }
}