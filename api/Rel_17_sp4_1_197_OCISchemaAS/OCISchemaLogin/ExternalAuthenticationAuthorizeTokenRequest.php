<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginToken;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name       = 'ExternalAuthenticationAuthorizeTokenRequest';
    protected $userId     = null;
    protected $password   = null;
    protected $loginToken = null;

    public function __construct(
         $userId,
         $password = null,
         $loginToken
    ) {
        $this->setUserId($userId);
        $this->setPassword($password);
        $this->setLoginToken($loginToken);
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
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return Password
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setLoginToken($loginToken = null)
    {
        if (!$loginToken) return $this;
        $this->loginToken = ($loginToken InstanceOf LoginToken)
             ? $loginToken
             : new LoginToken($loginToken);
        $this->loginToken->setName('loginToken');
        return $this;
    }

    /**
     * 
     * @return LoginToken
     */
    public function getLoginToken()
    {
        return $this->loginToken->getValue();
    }
}