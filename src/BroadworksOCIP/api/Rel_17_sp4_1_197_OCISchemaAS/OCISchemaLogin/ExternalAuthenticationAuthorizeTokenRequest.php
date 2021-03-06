<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginToken;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * This command is part of the Portal API.
 *         Sent when a Web or CLI user logs in using external authentication.
 *         The password must be hashed. The password hashing algorithm is:
 *         1) The message digest of the user's plain password is calculated using the SHA algorithm.
 *         2) For every four bits in the 160-bit digest, starting from the first bit, it is
 *            converted into a character in ASCII Hex format (0 through 9, a through f).
 *            The result is a 40-character string, for example, f7a9e24777ec23212c54d7a350bc5bea5477fdbb.
 *         3) The above string then is used to populate the password field in the request.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ExternalAuthenticationAuthorizeTokenRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ExternalAuthenticationAuthorizeTokenRequest';
    protected $userId;
    protected $password;
    protected $loginToken;

    public function __construct(
         $userId = '',
         $password = null,
         $loginToken = ''
    ) {
        $this->setUserId($userId);
        $this->setPassword($password);
        $this->setLoginToken($loginToken);
    }

    /**
     * @return mixed $response
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
        $this->password->setElementName('password');
        return $this;
    }

    /**
     * 
     * @return Password $password
     */
    public function getPassword()
    {
        return ($this->password)
            ? $this->password->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLoginToken($loginToken = null)
    {
        $this->loginToken = ($loginToken InstanceOf LoginToken)
             ? $loginToken
             : new LoginToken($loginToken);
        $this->loginToken->setElementName('loginToken');
        return $this;
    }

    /**
     * 
     * @return LoginToken $loginToken
     */
    public function getLoginToken()
    {
        return ($this->loginToken)
            ? $this->loginToken->getElementValue()
            : null;
    }
}
