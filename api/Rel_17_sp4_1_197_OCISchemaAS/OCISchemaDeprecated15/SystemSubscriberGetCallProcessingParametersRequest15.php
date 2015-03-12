<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemSubscriberGetCallProcessingParametersResponse15;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the system call processing configuration for all subscribers
 *             The response is either a SystemSubscriberGetCallProcessingParametersResponse15 or an ErrorResponse.
 *             Replaced By: SystemSubscriberGetCallProcessingParametersRequest15sp2
 */
class SystemSubscriberGetCallProcessingParametersRequest15 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemSubscriberGetCallProcessingParametersResponse15';
    public    $name = 'SystemSubscriberGetCallProcessingParametersRequest15';

    public function __construct(    ) {
    }

    /**
     * @return SystemSubscriberGetCallProcessingParametersResponse15
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}