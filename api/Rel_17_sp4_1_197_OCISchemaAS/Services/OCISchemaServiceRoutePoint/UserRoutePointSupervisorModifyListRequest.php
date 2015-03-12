<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the Route Point supervisor list for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserRoutePointSupervisorModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserRoutePointSupervisorModifyListRequest';
    protected $userId               = null;
    protected $supervisorUserIdList = null;

    public function __construct(
         $userId,
         ReplacementUserIdList $supervisorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setSupervisorUserIdList($supervisorUserIdList);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setSupervisorUserIdList(ReplacementUserIdList $supervisorUserIdList = null)
    {
        if (!$supervisorUserIdList) return $this;
        $this->supervisorUserIdList = $supervisorUserIdList;
        $this->supervisorUserIdList->setName('supervisorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList;
    }
}