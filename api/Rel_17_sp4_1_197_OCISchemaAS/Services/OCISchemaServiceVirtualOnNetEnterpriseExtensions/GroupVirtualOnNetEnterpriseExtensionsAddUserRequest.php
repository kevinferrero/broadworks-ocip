<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUserRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUser;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Adds Virtual On-Net users to a Group. It is possible to add 
 *         either: a single user,  or a list of users, or a range of users, 
 *         or any combination thereof.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsAddUserRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupVirtualOnNetEnterpriseExtensionsAddUserRequest';
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $virtualOnNetUser      = null;
    protected $virtualOnNetUserRange = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         VirtualOnNetUser $virtualOnNetUser = null,
         VirtualOnNetUserRange $virtualOnNetUserRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setVirtualOnNetUser($virtualOnNetUser);
        $this->setVirtualOnNetUserRange($virtualOnNetUserRange);
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
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setVirtualOnNetUser(VirtualOnNetUser $virtualOnNetUser = null)
    {
        if (!$virtualOnNetUser) return $this;
        $this->virtualOnNetUser = $virtualOnNetUser;
        $this->virtualOnNetUser->setName('virtualOnNetUser');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetUser
     */
    public function getVirtualOnNetUser()
    {
        return $this->virtualOnNetUser;
    }

    /**
     * 
     */
    public function setVirtualOnNetUserRange(VirtualOnNetUserRange $virtualOnNetUserRange = null)
    {
        if (!$virtualOnNetUserRange) return $this;
        $this->virtualOnNetUserRange = $virtualOnNetUserRange;
        $this->virtualOnNetUserRange->setName('virtualOnNetUserRange');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetUserRange
     */
    public function getVirtualOnNetUserRange()
    {
        return $this->virtualOnNetUserRange;
    }
}