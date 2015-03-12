<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a particular call center enhanced reporting report template.
 */
class SearchCriteriaExactCallCenterReportTemplateKey extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey';
    public    $name           = 'SearchCriteriaExactCallCenterReportTemplateKey';
    protected $reportTemplate = null;

    public function __construct(
         CallCenterReportTemplateKey $reportTemplate
    ) {
        $this->setReportTemplate($reportTemplate);
    }

    /**
     * @return SearchCriteriaExactCallCenterReportTemplateKey
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        if (!$reportTemplate) return $this;
        $this->reportTemplate = $reportTemplate;
        $this->reportTemplate->setName('reportTemplate');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateKey
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }
}