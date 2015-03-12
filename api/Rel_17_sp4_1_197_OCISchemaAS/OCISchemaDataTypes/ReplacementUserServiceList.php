<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of user services that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementUserServiceList extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList';
    public    $name        = 'ReplacementUserServiceList';
    protected $serviceName = null;

    public function __construct(
         $serviceName = null
    ) {
        $this->setServiceName($serviceName);
    }

    /**
     * @return ReplacementUserServiceList
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceName($serviceName = null)
    {
        if (!$serviceName) return $this;
        $this->serviceName = new SimpleContent($serviceName);
        $this->serviceName->setName('serviceName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceName()
    {
        return $this->serviceName->getValue();
    }
}