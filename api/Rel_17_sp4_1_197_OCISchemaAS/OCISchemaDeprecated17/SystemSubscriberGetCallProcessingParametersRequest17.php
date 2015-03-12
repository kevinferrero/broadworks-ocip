<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSubscriberGetCallProcessingParametersResponse17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the system call processing configuration for all subscribers
 *         The response is either a SystemSubscriberGetCallProcessingParametersResponse17
 *         or an ErrorResponse.
 */
class SystemSubscriberGetCallProcessingParametersRequest17 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSubscriberGetCallProcessingParametersResponse17';
    public    $name = 'SystemSubscriberGetCallProcessingParametersRequest17';

    public function __construct(    ) {
    }

    /**
     * @return SystemSubscriberGetCallProcessingParametersResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}