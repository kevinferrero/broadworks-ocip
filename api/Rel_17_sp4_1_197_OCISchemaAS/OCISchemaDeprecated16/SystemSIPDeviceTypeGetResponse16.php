<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CPEDeviceOptionsRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeGetRequest16.
 *           Replaced by: SystemSIPDeviceTypeGetResponse16sp1
 */
class SystemSIPDeviceTypeGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                              = 'SystemSIPDeviceTypeGetResponse16';
    protected $isObsolete                        = null;
    protected $numberOfPorts                     = null;
    protected $profile                           = null;
    protected $registrationCapable               = null;
    protected $isConferenceDevice                = null;
    protected $isMobilityManagerDevice           = null;
    protected $isMusicOnHoldDevice               = null;
    protected $RFC3264Hold                       = null;
    protected $isTrusted                         = null;
    protected $E164Capable                       = null;
    protected $routeAdvance                      = null;
    protected $forwardingOverride                = null;
    protected $wirelessIntegration               = null;
    protected $webBasedConfigURL                 = null;
    protected $isVideoCapable                    = null;
    protected $PBXIntegration                    = null;
    protected $useBusinessTrunkingContact        = null;
    protected $staticRegistrationCapable         = null;
    protected $cpeDeviceOptions                  = null;
    protected $protocolChoice                    = null;
    protected $earlyMediaSupport                 = null;
    protected $authenticateRefer                 = null;
    protected $autoConfigSoftClient              = null;
    protected $authenticationMode                = null;
    protected $requiresBroadWorksDigitCollection = null;
    protected $requiresBroadWorksCallWaitingTone = null;
    protected $requiresMWISubscription           = null;
    protected $useHistoryInfoHeaderOnAccessSide  = null;
    protected $adviceOfChargeCapable             = null;

    /**
     * @return SystemSIPDeviceTypeGetResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        if (!$isObsolete) return $this;
        $this->isObsolete = new PrimitiveType($isObsolete);
        $this->isObsolete->setName('isObsolete');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsObsolete()
    {
        return $this->isObsolete->getValue();
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        if (!$numberOfPorts) return $this;
        $this->numberOfPorts = $numberOfPorts;
        $this->numberOfPorts->setName('numberOfPorts');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        if (!$profile) return $this;
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
        $this->profile->setName('profile');
        return $this;
    }

    /**
     * 
     * @return SignalingAddressType
     */
    public function getProfile()
    {
        return $this->profile->getValue();
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
        if (!$registrationCapable) return $this;
        $this->registrationCapable = new PrimitiveType($registrationCapable);
        $this->registrationCapable->setName('registrationCapable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable->getValue();
    }

    /**
     * 
     */
    public function setIsConferenceDevice($isConferenceDevice = null)
    {
        if (!$isConferenceDevice) return $this;
        $this->isConferenceDevice = new PrimitiveType($isConferenceDevice);
        $this->isConferenceDevice->setName('isConferenceDevice');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsConferenceDevice()
    {
        return $this->isConferenceDevice->getValue();
    }

    /**
     * 
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice = null)
    {
        if (!$isMobilityManagerDevice) return $this;
        $this->isMobilityManagerDevice = new PrimitiveType($isMobilityManagerDevice);
        $this->isMobilityManagerDevice->setName('isMobilityManagerDevice');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice->getValue();
    }

    /**
     * 
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice = null)
    {
        if (!$isMusicOnHoldDevice) return $this;
        $this->isMusicOnHoldDevice = new PrimitiveType($isMusicOnHoldDevice);
        $this->isMusicOnHoldDevice->setName('isMusicOnHoldDevice');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsMusicOnHoldDevice()
    {
        return $this->isMusicOnHoldDevice->getValue();
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
        if (!$RFC3264Hold) return $this;
        $this->RFC3264Hold = new PrimitiveType($RFC3264Hold);
        $this->RFC3264Hold->setName('RFC3264Hold');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRFC3264Hold()
    {
        return $this->RFC3264Hold->getValue();
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
        if (!$isTrusted) return $this;
        $this->isTrusted = new PrimitiveType($isTrusted);
        $this->isTrusted->setName('isTrusted');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsTrusted()
    {
        return $this->isTrusted->getValue();
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
        if (!$E164Capable) return $this;
        $this->E164Capable = new PrimitiveType($E164Capable);
        $this->E164Capable->setName('E164Capable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getE164Capable()
    {
        return $this->E164Capable->getValue();
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        if (!$routeAdvance) return $this;
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance->getValue();
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
        if (!$forwardingOverride) return $this;
        $this->forwardingOverride = new PrimitiveType($forwardingOverride);
        $this->forwardingOverride->setName('forwardingOverride');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride->getValue();
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
        if (!$wirelessIntegration) return $this;
        $this->wirelessIntegration = new PrimitiveType($wirelessIntegration);
        $this->wirelessIntegration->setName('wirelessIntegration');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration->getValue();
    }

    /**
     * 
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        if (!$webBasedConfigURL) return $this;
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
        $this->webBasedConfigURL->setName('webBasedConfigURL');
        return $this;
    }

    /**
     * 
     * @return WebBasedConfigURL
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL->getValue();
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
        if (!$isVideoCapable) return $this;
        $this->isVideoCapable = new PrimitiveType($isVideoCapable);
        $this->isVideoCapable->setName('isVideoCapable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable->getValue();
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
        if (!$PBXIntegration) return $this;
        $this->PBXIntegration = new PrimitiveType($PBXIntegration);
        $this->PBXIntegration->setName('PBXIntegration');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration->getValue();
    }

    /**
     * 
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact = null)
    {
        if (!$useBusinessTrunkingContact) return $this;
        $this->useBusinessTrunkingContact = new PrimitiveType($useBusinessTrunkingContact);
        $this->useBusinessTrunkingContact->setName('useBusinessTrunkingContact');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseBusinessTrunkingContact()
    {
        return $this->useBusinessTrunkingContact->getValue();
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        if (!$staticRegistrationCapable) return $this;
        $this->staticRegistrationCapable = new PrimitiveType($staticRegistrationCapable);
        $this->staticRegistrationCapable->setName('staticRegistrationCapable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable->getValue();
    }

    /**
     * 
     */
    public function setCpeDeviceOptions(CPEDeviceOptionsRead16 $cpeDeviceOptions = null)
    {
        if (!$cpeDeviceOptions) return $this;
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        $this->cpeDeviceOptions->setName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceOptionsRead16
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * 
     */
    public function setProtocolChoice($protocolChoice = null)
    {
        if (!$protocolChoice) return $this;
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
        $this->protocolChoice->setName('protocolChoice');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice->getValue();
    }

    /**
     * 
     */
    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        if (!$earlyMediaSupport) return $this;
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
        $this->earlyMediaSupport->setName('earlyMediaSupport');
        return $this;
    }

    /**
     * 
     * @return EarlyMediaSupportType
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport->getValue();
    }

    /**
     * 
     */
    public function setAuthenticateRefer($authenticateRefer = null)
    {
        if (!$authenticateRefer) return $this;
        $this->authenticateRefer = new PrimitiveType($authenticateRefer);
        $this->authenticateRefer->setName('authenticateRefer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAuthenticateRefer()
    {
        return $this->authenticateRefer->getValue();
    }

    /**
     * 
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient = null)
    {
        if (!$autoConfigSoftClient) return $this;
        $this->autoConfigSoftClient = new PrimitiveType($autoConfigSoftClient);
        $this->autoConfigSoftClient->setName('autoConfigSoftClient');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAutoConfigSoftClient()
    {
        return $this->autoConfigSoftClient->getValue();
    }

    /**
     * 
     */
    public function setAuthenticationMode($authenticationMode = null)
    {
        if (!$authenticationMode) return $this;
        $this->authenticationMode = ($authenticationMode InstanceOf AuthenticationMode)
             ? $authenticationMode
             : new AuthenticationMode($authenticationMode);
        $this->authenticationMode->setName('authenticationMode');
        return $this;
    }

    /**
     * 
     * @return AuthenticationMode
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode->getValue();
    }

    /**
     * 
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection = null)
    {
        if (!$requiresBroadWorksDigitCollection) return $this;
        $this->requiresBroadWorksDigitCollection = new PrimitiveType($requiresBroadWorksDigitCollection);
        $this->requiresBroadWorksDigitCollection->setName('requiresBroadWorksDigitCollection');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return $this->requiresBroadWorksDigitCollection->getValue();
    }

    /**
     * 
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone = null)
    {
        if (!$requiresBroadWorksCallWaitingTone) return $this;
        $this->requiresBroadWorksCallWaitingTone = new PrimitiveType($requiresBroadWorksCallWaitingTone);
        $this->requiresBroadWorksCallWaitingTone->setName('requiresBroadWorksCallWaitingTone');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return $this->requiresBroadWorksCallWaitingTone->getValue();
    }

    /**
     * 
     */
    public function setRequiresMWISubscription($requiresMWISubscription = null)
    {
        if (!$requiresMWISubscription) return $this;
        $this->requiresMWISubscription = new PrimitiveType($requiresMWISubscription);
        $this->requiresMWISubscription->setName('requiresMWISubscription');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRequiresMWISubscription()
    {
        return $this->requiresMWISubscription->getValue();
    }

    /**
     * 
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide = null)
    {
        if (!$useHistoryInfoHeaderOnAccessSide) return $this;
        $this->useHistoryInfoHeaderOnAccessSide = new PrimitiveType($useHistoryInfoHeaderOnAccessSide);
        $this->useHistoryInfoHeaderOnAccessSide->setName('useHistoryInfoHeaderOnAccessSide');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return $this->useHistoryInfoHeaderOnAccessSide->getValue();
    }

    /**
     * 
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable = null)
    {
        if (!$adviceOfChargeCapable) return $this;
        $this->adviceOfChargeCapable = new PrimitiveType($adviceOfChargeCapable);
        $this->adviceOfChargeCapable->setName('adviceOfChargeCapable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAdviceOfChargeCapable()
    {
        return $this->adviceOfChargeCapable->getValue();
    }
}