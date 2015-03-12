<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PortalMaxFailedLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPasscodeRulesLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeExpiresDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMinLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PasscodeMaxLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupPortalPasscodeRulesGetRequest.
 *         Contains the group's passcode rules setting.
 */
class GroupPortalPasscodeRulesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                    = 'GroupPortalPasscodeRulesGetResponse';
    protected $useRuleLevel                            = null;
    protected $disallowRepeatedDigits                  = null;
    protected $disallowUserNumber                      = null;
    protected $disallowReversedUserNumber              = null;
    protected $disallowOldPasscode                     = null;
    protected $disallowReversedOldPasscode             = null;
    protected $minCodeLength                           = null;
    protected $maxCodeLength                           = null;
    protected $disableLoginAfterMaxFailedLoginAttempts = null;
    protected $maxFailedLoginAttempts                  = null;
    protected $expirePassword                          = null;
    protected $passcodeExpiresDays                     = null;
    protected $sendLoginDisabledNotifyEmail            = null;
    protected $loginDisabledNotifyEmailAddress         = null;

    /**
     * @return GroupPortalPasscodeRulesGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseRuleLevel($useRuleLevel = null)
    {
        if (!$useRuleLevel) return $this;
        $this->useRuleLevel = ($useRuleLevel InstanceOf GroupPasscodeRulesLevel)
             ? $useRuleLevel
             : new GroupPasscodeRulesLevel($useRuleLevel);
        $this->useRuleLevel->setName('useRuleLevel');
        return $this;
    }

    /**
     * 
     * @return GroupPasscodeRulesLevel
     */
    public function getUseRuleLevel()
    {
        return $this->useRuleLevel->getValue();
    }

    /**
     * 
     */
    public function setDisallowRepeatedDigits($disallowRepeatedDigits = null)
    {
        if (!$disallowRepeatedDigits) return $this;
        $this->disallowRepeatedDigits = new PrimitiveType($disallowRepeatedDigits);
        $this->disallowRepeatedDigits->setName('disallowRepeatedDigits');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowRepeatedDigits()
    {
        return $this->disallowRepeatedDigits->getValue();
    }

    /**
     * 
     */
    public function setDisallowUserNumber($disallowUserNumber = null)
    {
        if (!$disallowUserNumber) return $this;
        $this->disallowUserNumber = new PrimitiveType($disallowUserNumber);
        $this->disallowUserNumber->setName('disallowUserNumber');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowUserNumber()
    {
        return $this->disallowUserNumber->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedUserNumber($disallowReversedUserNumber = null)
    {
        if (!$disallowReversedUserNumber) return $this;
        $this->disallowReversedUserNumber = new PrimitiveType($disallowReversedUserNumber);
        $this->disallowReversedUserNumber->setName('disallowReversedUserNumber');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowReversedUserNumber()
    {
        return $this->disallowReversedUserNumber->getValue();
    }

    /**
     * 
     */
    public function setDisallowOldPasscode($disallowOldPasscode = null)
    {
        if (!$disallowOldPasscode) return $this;
        $this->disallowOldPasscode = new PrimitiveType($disallowOldPasscode);
        $this->disallowOldPasscode->setName('disallowOldPasscode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowOldPasscode()
    {
        return $this->disallowOldPasscode->getValue();
    }

    /**
     * 
     */
    public function setDisallowReversedOldPasscode($disallowReversedOldPasscode = null)
    {
        if (!$disallowReversedOldPasscode) return $this;
        $this->disallowReversedOldPasscode = new PrimitiveType($disallowReversedOldPasscode);
        $this->disallowReversedOldPasscode->setName('disallowReversedOldPasscode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisallowReversedOldPasscode()
    {
        return $this->disallowReversedOldPasscode->getValue();
    }

    /**
     * 
     */
    public function setMinCodeLength($minCodeLength = null)
    {
        if (!$minCodeLength) return $this;
        $this->minCodeLength = ($minCodeLength InstanceOf PasscodeMinLength)
             ? $minCodeLength
             : new PasscodeMinLength($minCodeLength);
        $this->minCodeLength->setName('minCodeLength');
        return $this;
    }

    /**
     * 
     * @return PasscodeMinLength
     */
    public function getMinCodeLength()
    {
        return $this->minCodeLength->getValue();
    }

    /**
     * 
     */
    public function setMaxCodeLength($maxCodeLength = null)
    {
        if (!$maxCodeLength) return $this;
        $this->maxCodeLength = ($maxCodeLength InstanceOf PasscodeMaxLength)
             ? $maxCodeLength
             : new PasscodeMaxLength($maxCodeLength);
        $this->maxCodeLength->setName('maxCodeLength');
        return $this;
    }

    /**
     * 
     * @return PasscodeMaxLength
     */
    public function getMaxCodeLength()
    {
        return $this->maxCodeLength->getValue();
    }

    /**
     * 
     */
    public function setDisableLoginAfterMaxFailedLoginAttempts($disableLoginAfterMaxFailedLoginAttempts = null)
    {
        if (!$disableLoginAfterMaxFailedLoginAttempts) return $this;
        $this->disableLoginAfterMaxFailedLoginAttempts = new PrimitiveType($disableLoginAfterMaxFailedLoginAttempts);
        $this->disableLoginAfterMaxFailedLoginAttempts->setName('disableLoginAfterMaxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisableLoginAfterMaxFailedLoginAttempts()
    {
        return $this->disableLoginAfterMaxFailedLoginAttempts->getValue();
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        if (!$maxFailedLoginAttempts) return $this;
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf PortalMaxFailedLoginAttempts)
             ? $maxFailedLoginAttempts
             : new PortalMaxFailedLoginAttempts($maxFailedLoginAttempts);
        $this->maxFailedLoginAttempts->setName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return PortalMaxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts->getValue();
    }

    /**
     * 
     */
    public function setExpirePassword($expirePassword = null)
    {
        if (!$expirePassword) return $this;
        $this->expirePassword = new PrimitiveType($expirePassword);
        $this->expirePassword->setName('expirePassword');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getExpirePassword()
    {
        return $this->expirePassword->getValue();
    }

    /**
     * 
     */
    public function setPasscodeExpiresDays($passcodeExpiresDays = null)
    {
        if (!$passcodeExpiresDays) return $this;
        $this->passcodeExpiresDays = ($passcodeExpiresDays InstanceOf PasscodeExpiresDays)
             ? $passcodeExpiresDays
             : new PasscodeExpiresDays($passcodeExpiresDays);
        $this->passcodeExpiresDays->setName('passcodeExpiresDays');
        return $this;
    }

    /**
     * 
     * @return PasscodeExpiresDays
     */
    public function getPasscodeExpiresDays()
    {
        return $this->passcodeExpiresDays->getValue();
    }

    /**
     * 
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail = null)
    {
        if (!$sendLoginDisabledNotifyEmail) return $this;
        $this->sendLoginDisabledNotifyEmail = new PrimitiveType($sendLoginDisabledNotifyEmail);
        $this->sendLoginDisabledNotifyEmail->setName('sendLoginDisabledNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return $this->sendLoginDisabledNotifyEmail->getValue();
    }

    /**
     * 
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        if (!$loginDisabledNotifyEmailAddress) return $this;
        $this->loginDisabledNotifyEmailAddress = ($loginDisabledNotifyEmailAddress InstanceOf EmailAddress)
             ? $loginDisabledNotifyEmailAddress
             : new EmailAddress($loginDisabledNotifyEmailAddress);
        $this->loginDisabledNotifyEmailAddress->setName('loginDisabledNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress->getValue();
    }
}