<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise\SystemBroadWorksReceptionistEnterpriseGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of BroadWorks Receptionist - Enterprise parameters.
 *         The response is either SystemBroadWorksReceptionistEnterpriseGetResponse or ErrorResponse.
 */
class SystemBroadWorksReceptionistEnterpriseGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise\SystemBroadWorksReceptionistEnterpriseGetResponse';
    public    $name = 'SystemBroadWorksReceptionistEnterpriseGetRequest';

    public function __construct(    ) {
    }

    /**
     * @return SystemBroadWorksReceptionistEnterpriseGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}