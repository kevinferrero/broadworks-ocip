<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRemoteOffice; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Remote Office.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserRemoteOfficeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'UserRemoteOfficeModifyRequest';
    protected $userId                  = null;
    protected $isActive                = null;
    protected $remoteOfficePhoneNumber = null;

    public function __construct(
         $userId,
         $isActive = null,
         $remoteOfficePhoneNumber = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setRemoteOfficePhoneNumber($remoteOfficePhoneNumber);
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
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber = null)
    {
        if (!$remoteOfficePhoneNumber) return $this;
        $this->remoteOfficePhoneNumber = ($remoteOfficePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $remoteOfficePhoneNumber
             : new OutgoingDNorSIPURI($remoteOfficePhoneNumber);
        $this->remoteOfficePhoneNumber->setName('remoteOfficePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getRemoteOfficePhoneNumber()
    {
        return $this->remoteOfficePhoneNumber->getValue();
    }
}