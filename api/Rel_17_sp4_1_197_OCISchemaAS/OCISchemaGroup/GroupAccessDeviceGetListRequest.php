<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the list of access devices in a group.
 *         The response is either GroupAccessDeviceGetListResponse or ErrorResponse.
 */
class GroupAccessDeviceGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetListResponse';
    public    $name                           = 'GroupAccessDeviceGetListRequest';
    protected $serviceProviderId              = null;
    protected $groupId                        = null;
    protected $responseSizeLimit              = null;
    protected $searchCriteriaDeviceName       = null;
    protected $searchCriteriaDeviceMACAddress = null;
    protected $searchCriteriaDeviceNetAddress = null;
    protected $searchCriteriaExactDeviceType  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $responseSizeLimit = null,
         SearchCriteriaDeviceName $searchCriteriaDeviceName = null,
         SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null,
         SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null,
         SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
    }

    /**
     * @return GroupAccessDeviceGetListResponse
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
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceName(SearchCriteriaDeviceName $searchCriteriaDeviceName = null)
    {
        if (!$searchCriteriaDeviceName) return $this;
        $this->searchCriteriaDeviceName = ($searchCriteriaDeviceName InstanceOf SearchCriteriaDeviceName)
             ? $searchCriteriaDeviceName
             : new SearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->searchCriteriaDeviceName->setName('searchCriteriaDeviceName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceName
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceMACAddress(SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null)
    {
        if (!$searchCriteriaDeviceMACAddress) return $this;
        $this->searchCriteriaDeviceMACAddress = ($searchCriteriaDeviceMACAddress InstanceOf SearchCriteriaDeviceMACAddress)
             ? $searchCriteriaDeviceMACAddress
             : new SearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->searchCriteriaDeviceMACAddress->setName('searchCriteriaDeviceMACAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceMACAddress
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceNetAddress(SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null)
    {
        if (!$searchCriteriaDeviceNetAddress) return $this;
        $this->searchCriteriaDeviceNetAddress = ($searchCriteriaDeviceNetAddress InstanceOf SearchCriteriaDeviceNetAddress)
             ? $searchCriteriaDeviceNetAddress
             : new SearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->searchCriteriaDeviceNetAddress->setName('searchCriteriaDeviceNetAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceNetAddress
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactDeviceType(SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null)
    {
        if (!$searchCriteriaExactDeviceType) return $this;
        $this->searchCriteriaExactDeviceType = ($searchCriteriaExactDeviceType InstanceOf SearchCriteriaExactDeviceType)
             ? $searchCriteriaExactDeviceType
             : new SearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
        $this->searchCriteriaExactDeviceType->setName('searchCriteriaExactDeviceType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactDeviceType
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType;
    }
}