<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallForwardingSelectiveGetRequest. The criteria table's column headings are:        
 *          "Is Active", "Criteria Name", "Time Schedule", "Calls From" and "Forward To".
 */
class UserCallForwardingSelectiveGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = 'UserCallForwardingSelectiveGetResponse';
    protected $defaultForwardToPhoneNumber = null;
    protected $playRingReminder            = null;
    protected $criteriaTable               = null;

    /**
     * @return UserCallForwardingSelectiveGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber = null)
    {
        if (!$defaultForwardToPhoneNumber) return $this;
        $this->defaultForwardToPhoneNumber = ($defaultForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $defaultForwardToPhoneNumber
             : new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
        $this->defaultForwardToPhoneNumber->setName('defaultForwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return $this->defaultForwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setPlayRingReminder($playRingReminder = null)
    {
        if (!$playRingReminder) return $this;
        $this->playRingReminder = new PrimitiveType($playRingReminder);
        $this->playRingReminder->setName('playRingReminder');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayRingReminder()
    {
        return $this->playRingReminder->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }
}