<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete one or more entries from an enterprise's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCommonPhoneListDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCommonPhoneListDeleteListRequest';
    protected $serviceProviderId;
    protected $entryName;

    public function __construct(
         $serviceProviderId = '',
         $entryName = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEntryName($entryName);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntryName($entryName = null)
    {
        $this->entryName = ($entryName InstanceOf PhoneListEntryName)
             ? $entryName
             : new PhoneListEntryName($entryName);
        $this->entryName->setElementName('entryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName $entryName
     */
    public function getEntryName()
    {
        return ($this->entryName)
            ? $this->entryName->getElementValue()
            : null;
    }
}
