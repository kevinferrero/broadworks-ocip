<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the country code preferred carriers for a service provider or enterprise. For each
 *         combination of service provider and country code, you can assign an intra-lata, inter-lata,
 *         and international carrier. Each of the 3 types of carriers is optional.
 *         If an optional carrier is not specified, the assignment will not change.
 *         To clear a preferred carrier, set the value to an empty string.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: At the system level, more than one carrier may be assigned to each country code.
 *         At the service provider level, you must choose from the carriers assigned at the system level.
 */
class ServiceProviderPreferredCarrierModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'ServiceProviderPreferredCarrierModifyRequest';
    protected $serviceProviderId    = null;
    protected $countryCode          = null;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    public function __construct(
         $serviceProviderId,
         $countryCode,
         $intraLataCarrier = null,
         $interLataCarrier = null,
         $internationalCarrier = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCountryCode($countryCode);
        $this->setIntraLataCarrier($intraLataCarrier);
        $this->setInterLataCarrier($interLataCarrier);
        $this->setInternationalCarrier($internationalCarrier);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setIntraLataCarrier($intraLataCarrier = null)
    {
        if (!$intraLataCarrier) return $this;
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf PreferredCarrierName)
             ? $intraLataCarrier
             : new PreferredCarrierName($intraLataCarrier);
        $this->intraLataCarrier->setName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier->getValue();
    }

    /**
     * 
     */
    public function setInterLataCarrier($interLataCarrier = null)
    {
        if (!$interLataCarrier) return $this;
        $this->interLataCarrier = ($interLataCarrier InstanceOf PreferredCarrierName)
             ? $interLataCarrier
             : new PreferredCarrierName($interLataCarrier);
        $this->interLataCarrier->setName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier->getValue();
    }

    /**
     * 
     */
    public function setInternationalCarrier($internationalCarrier = null)
    {
        if (!$internationalCarrier) return $this;
        $this->internationalCarrier = ($internationalCarrier InstanceOf PreferredCarrierName)
             ? $internationalCarrier
             : new PreferredCarrierName($internationalCarrier);
        $this->internationalCarrier->setName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier->getValue();
    }
}