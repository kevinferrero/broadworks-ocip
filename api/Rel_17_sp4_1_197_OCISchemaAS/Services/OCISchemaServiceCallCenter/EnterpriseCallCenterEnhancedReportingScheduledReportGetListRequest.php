<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a list of enterprise level call center reporting scheduled reports.
 *         The response is either an EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                                                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse';
    public    $name                                                            = 'EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest';
    protected $serviceProviderId                                               = null;
    protected $responseSizeLimit                                               = null;
    protected $searchCriteriaCallCenterScheduledReportName                     = null;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;
    protected $searchCriteriaExactCallCenterReportTemplateKey                  = null;

    public function __construct(
         $serviceProviderId,
         $responseSizeLimit = null,
         SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null,
         SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey);
    }

    /**
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse
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
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        if (!$searchCriteriaCallCenterScheduledReportName) return $this;
        $this->searchCriteriaCallCenterScheduledReportName = ($searchCriteriaCallCenterScheduledReportName InstanceOf SearchCriteriaCallCenterScheduledReportName)
             ? $searchCriteriaCallCenterScheduledReportName
             : new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->searchCriteriaCallCenterScheduledReportName->setName('searchCriteriaCallCenterScheduledReportName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterScheduledReportName
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null)
    {
        if (!$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor) return $this;
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = ($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor InstanceOf SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
             ? $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
             : new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->setName('searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterReportTemplateKey(SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey = null)
    {
        if (!$searchCriteriaExactCallCenterReportTemplateKey) return $this;
        $this->searchCriteriaExactCallCenterReportTemplateKey = ($searchCriteriaExactCallCenterReportTemplateKey InstanceOf SearchCriteriaExactCallCenterReportTemplateKey)
             ? $searchCriteriaExactCallCenterReportTemplateKey
             : new SearchCriteriaExactCallCenterReportTemplateKey($searchCriteriaExactCallCenterReportTemplateKey);
        $this->searchCriteriaExactCallCenterReportTemplateKey->setName('searchCriteriaExactCallCenterReportTemplateKey');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterReportTemplateKey
     */
    public function getSearchCriteriaExactCallCenterReportTemplateKey()
    {
        return $this->searchCriteriaExactCallCenterReportTemplateKey;
    }
}