<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupInstantConferencingGetInstanceRequest.
 *             Contains the service profile information and a table of assigned users.
 *             The table has column headings: "User Id", "Last Name", "First Name",
 *             "Hiragana Last Name", "Hiragana First Name".
 */
class GroupInstantConferencingGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'GroupInstantConferencingGetInstanceResponse14';
    protected $serviceInstanceProfile         = null;
    protected $conferenceBridgeLinePort       = null;
    protected $allocatedPorts                 = null;
    protected $serviceProfileAppliedOnOutcall = null;
    protected $allowOutdialInInvitation       = null;
    protected $allowDocumentDownload          = null;
    protected $bridgeAdministratorUserTable   = null;

    /**
     * @return GroupInstantConferencingGetInstanceResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setConferenceBridgeLinePort($conferenceBridgeLinePort = null)
    {
        if (!$conferenceBridgeLinePort) return $this;
        $this->conferenceBridgeLinePort = ($conferenceBridgeLinePort InstanceOf AccessDeviceEndpointLinePort)
             ? $conferenceBridgeLinePort
             : new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
        $this->conferenceBridgeLinePort->setName('conferenceBridgeLinePort');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort
     */
    public function getConferenceBridgeLinePort()
    {
        return $this->conferenceBridgeLinePort->getValue();
    }

    /**
     * 
     */
    public function setAllocatedPorts(InstantConferencingAllocatedPorts $allocatedPorts = null)
    {
        if (!$allocatedPorts) return $this;
        $this->allocatedPorts = $allocatedPorts;
        $this->allocatedPorts->setName('allocatedPorts');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAllocatedPorts
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts;
    }

    /**
     * 
     */
    public function setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall = null)
    {
        if (!$serviceProfileAppliedOnOutcall) return $this;
        $this->serviceProfileAppliedOnOutcall = ($serviceProfileAppliedOnOutcall InstanceOf InstantConferencingOutcallProfile)
             ? $serviceProfileAppliedOnOutcall
             : new InstantConferencingOutcallProfile($serviceProfileAppliedOnOutcall);
        $this->serviceProfileAppliedOnOutcall->setName('serviceProfileAppliedOnOutcall');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingOutcallProfile
     */
    public function getServiceProfileAppliedOnOutcall()
    {
        return $this->serviceProfileAppliedOnOutcall->getValue();
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        if (!$allowOutdialInInvitation) return $this;
        $this->allowOutdialInInvitation = new PrimitiveType($allowOutdialInInvitation);
        $this->allowOutdialInInvitation->setName('allowOutdialInInvitation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowOutdialInInvitation()
    {
        return $this->allowOutdialInInvitation->getValue();
    }

    /**
     * 
     */
    public function setAllowDocumentDownload($allowDocumentDownload = null)
    {
        if (!$allowDocumentDownload) return $this;
        $this->allowDocumentDownload = new PrimitiveType($allowDocumentDownload);
        $this->allowDocumentDownload->setName('allowDocumentDownload');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowDocumentDownload()
    {
        return $this->allowDocumentDownload->getValue();
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserTable(TableType $bridgeAdministratorUserTable = null)
    {
        if (!$bridgeAdministratorUserTable) return $this;
        $this->bridgeAdministratorUserTable = $bridgeAdministratorUserTable;
        $this->bridgeAdministratorUserTable->setName('bridgeAdministratorUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getBridgeAdministratorUserTable()
    {
        return $this->bridgeAdministratorUserTable;
    }
}