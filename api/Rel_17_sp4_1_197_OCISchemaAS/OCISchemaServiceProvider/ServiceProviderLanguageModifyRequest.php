<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a language properties for a service provider/enterprise.
 *         If the becomeDefaultLanguage element is present, the language in this request
 *         Becomes the default language for the service provider/enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderLanguageModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'ServiceProviderLanguageModifyRequest';
    protected $serviceProviderId     = null;
    protected $language              = null;
    protected $becomeDefaultLanguage = null;

    public function __construct(
         $serviceProviderId,
         $language,
         $becomeDefaultLanguage = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setLanguage($language);
        $this->setBecomeDefaultLanguage($becomeDefaultLanguage);
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
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultLanguage($becomeDefaultLanguage = null)
    {
        if (!$becomeDefaultLanguage) return $this;
        $this->becomeDefaultLanguage = new PrimitiveType($becomeDefaultLanguage);
        $this->becomeDefaultLanguage->setName('becomeDefaultLanguage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBecomeDefaultLanguage()
    {
        return $this->becomeDefaultLanguage->getValue();
    }
}