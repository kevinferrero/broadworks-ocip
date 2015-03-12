<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete a route from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingDeleteRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemRoutingDeleteRouteRequest';
    protected $routeName = null;

    public function __construct(
         $routeName
    ) {
        $this->setRouteName($routeName);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRouteName($routeName = null)
    {
        if (!$routeName) return $this;
        $this->routeName = ($routeName InstanceOf RouteName)
             ? $routeName
             : new RouteName($routeName);
        $this->routeName->setName('routeName');
        return $this;
    }

    /**
     * 
     * @return RouteName
     */
    public function getRouteName()
    {
        return $this->routeName->getValue();
    }
}