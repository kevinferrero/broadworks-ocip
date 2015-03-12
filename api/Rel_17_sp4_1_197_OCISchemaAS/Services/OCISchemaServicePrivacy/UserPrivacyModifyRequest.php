<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'UserPrivacyModifyRequest';
    protected $userId                                     = null;
    protected $enableDirectoryPrivacy                     = null;
    protected $enableAutoAttendantExtensionDialingPrivacy = null;
    protected $enableAutoAttendantNameDialingPrivacy      = null;
    protected $enablePhoneStatusPrivacy                   = null;
    protected $permittedMonitorUserIdList                 = null;

    public function __construct(
         $userId,
         $enableDirectoryPrivacy = null,
         $enableAutoAttendantExtensionDialingPrivacy = null,
         $enableAutoAttendantNameDialingPrivacy = null,
         $enablePhoneStatusPrivacy = null,
         ReplacementUserIdList $permittedMonitorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setEnableDirectoryPrivacy($enableDirectoryPrivacy);
        $this->setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy);
        $this->setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy);
        $this->setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy);
        $this->setPermittedMonitorUserIdList($permittedMonitorUserIdList);
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
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
        if (!$enableDirectoryPrivacy) return $this;
        $this->enableDirectoryPrivacy = new PrimitiveType($enableDirectoryPrivacy);
        $this->enableDirectoryPrivacy->setName('enableDirectoryPrivacy');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        if (!$enableAutoAttendantExtensionDialingPrivacy) return $this;
        $this->enableAutoAttendantExtensionDialingPrivacy = new PrimitiveType($enableAutoAttendantExtensionDialingPrivacy);
        $this->enableAutoAttendantExtensionDialingPrivacy->setName('enableAutoAttendantExtensionDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return $this->enableAutoAttendantExtensionDialingPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
        if (!$enableAutoAttendantNameDialingPrivacy) return $this;
        $this->enableAutoAttendantNameDialingPrivacy = new PrimitiveType($enableAutoAttendantNameDialingPrivacy);
        $this->enableAutoAttendantNameDialingPrivacy->setName('enableAutoAttendantNameDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return $this->enableAutoAttendantNameDialingPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy = null)
    {
        if (!$enablePhoneStatusPrivacy) return $this;
        $this->enablePhoneStatusPrivacy = new PrimitiveType($enablePhoneStatusPrivacy);
        $this->enablePhoneStatusPrivacy->setName('enablePhoneStatusPrivacy');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return $this->enablePhoneStatusPrivacy->getValue();
    }

    /**
     * 
     */
    public function setPermittedMonitorUserIdList(ReplacementUserIdList $permittedMonitorUserIdList = null)
    {
        if (!$permittedMonitorUserIdList) return $this;
        $this->permittedMonitorUserIdList = $permittedMonitorUserIdList;
        $this->permittedMonitorUserIdList->setName('permittedMonitorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getPermittedMonitorUserIdList()
    {
        return $this->permittedMonitorUserIdList;
    }
}