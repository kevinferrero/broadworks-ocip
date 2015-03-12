<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigGetFileServerListResponse14sp6;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the list of device CPE config file servers.
 *         The response is either SystemCPEConfigGetFileServerListResponse14sp6 or ErrorResponse.
 */
class SystemCPEConfigGetFileServerListRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigGetFileServerListResponse14sp6';
    public    $name = 'SystemCPEConfigGetFileServerListRequest14sp6';

    public function __construct(    ) {
    }

    /**
     * @return SystemCPEConfigGetFileServerListResponse14sp6
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}