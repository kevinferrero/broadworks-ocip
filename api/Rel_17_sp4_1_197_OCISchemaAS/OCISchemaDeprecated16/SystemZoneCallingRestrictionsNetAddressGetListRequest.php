<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaZoneIPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsNetAddressGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Gets a list of IP Addresses and/or Ranges assigned to a zone
 * 	Response is SystemZoneCallingRestrictionsNetAddressGetListResponse.
 *         Replaced by: SystemZoneNetAddressGetListRequest
 */
class SystemZoneCallingRestrictionsNetAddressGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsNetAddressGetListResponse';
    public    $name                        = 'SystemZoneCallingRestrictionsNetAddressGetListRequest';
    protected $zoneName                    = null;
    protected $responseSizeLimit           = null;
    protected $searchCriteriaZoneIPAddress = null;

    public function __construct(
         $zoneName,
         $responseSizeLimit = null,
         SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress = null
    ) {
        $this->setZoneName($zoneName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress);
    }

    /**
     * @return SystemZoneCallingRestrictionsNetAddressGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setZoneName($zoneName = null)
    {
        if (!$zoneName) return $this;
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName
     */
    public function getZoneName()
    {
        return $this->zoneName->getValue();
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
    public function setSearchCriteriaZoneIPAddress(SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress = null)
    {
        if (!$searchCriteriaZoneIPAddress) return $this;
        $this->searchCriteriaZoneIPAddress = ($searchCriteriaZoneIPAddress InstanceOf SearchCriteriaZoneIPAddress)
             ? $searchCriteriaZoneIPAddress
             : new SearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress);
        $this->searchCriteriaZoneIPAddress->setName('searchCriteriaZoneIPAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaZoneIPAddress
     */
    public function getSearchCriteriaZoneIPAddress()
    {
        return $this->searchCriteriaZoneIPAddress;
    }
}