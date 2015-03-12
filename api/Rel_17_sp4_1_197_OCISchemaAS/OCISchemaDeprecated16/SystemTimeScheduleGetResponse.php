<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\TimeInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemTimeScheduleGetRequest.
 *         The response contains the system time schedule's information.
 */
class SystemTimeScheduleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'SystemTimeScheduleGetResponse';
    protected $timeInterval01 = null;
    protected $timeInterval02 = null;
    protected $timeInterval03 = null;
    protected $timeInterval04 = null;
    protected $timeInterval05 = null;
    protected $timeInterval06 = null;
    protected $timeInterval07 = null;
    protected $timeInterval08 = null;
    protected $timeInterval09 = null;
    protected $timeInterval10 = null;
    protected $timeInterval11 = null;
    protected $timeInterval12 = null;
    protected $timeInterval13 = null;
    protected $timeInterval14 = null;
    protected $timeInterval15 = null;
    protected $timeInterval16 = null;
    protected $timeInterval17 = null;
    protected $timeInterval18 = null;
    protected $timeInterval19 = null;
    protected $timeInterval20 = null;

    /**
     * @return SystemTimeScheduleGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeInterval01(TimeInterval $timeInterval01 = null)
    {
        if (!$timeInterval01) return $this;
        $this->timeInterval01 = $timeInterval01;
        $this->timeInterval01->setName('timeInterval01');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval01()
    {
        return $this->timeInterval01;
    }

    /**
     * 
     */
    public function setTimeInterval02(TimeInterval $timeInterval02 = null)
    {
        if (!$timeInterval02) return $this;
        $this->timeInterval02 = $timeInterval02;
        $this->timeInterval02->setName('timeInterval02');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval02()
    {
        return $this->timeInterval02;
    }

    /**
     * 
     */
    public function setTimeInterval03(TimeInterval $timeInterval03 = null)
    {
        if (!$timeInterval03) return $this;
        $this->timeInterval03 = $timeInterval03;
        $this->timeInterval03->setName('timeInterval03');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval03()
    {
        return $this->timeInterval03;
    }

    /**
     * 
     */
    public function setTimeInterval04(TimeInterval $timeInterval04 = null)
    {
        if (!$timeInterval04) return $this;
        $this->timeInterval04 = $timeInterval04;
        $this->timeInterval04->setName('timeInterval04');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval04()
    {
        return $this->timeInterval04;
    }

    /**
     * 
     */
    public function setTimeInterval05(TimeInterval $timeInterval05 = null)
    {
        if (!$timeInterval05) return $this;
        $this->timeInterval05 = $timeInterval05;
        $this->timeInterval05->setName('timeInterval05');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval05()
    {
        return $this->timeInterval05;
    }

    /**
     * 
     */
    public function setTimeInterval06(TimeInterval $timeInterval06 = null)
    {
        if (!$timeInterval06) return $this;
        $this->timeInterval06 = $timeInterval06;
        $this->timeInterval06->setName('timeInterval06');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval06()
    {
        return $this->timeInterval06;
    }

    /**
     * 
     */
    public function setTimeInterval07(TimeInterval $timeInterval07 = null)
    {
        if (!$timeInterval07) return $this;
        $this->timeInterval07 = $timeInterval07;
        $this->timeInterval07->setName('timeInterval07');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval07()
    {
        return $this->timeInterval07;
    }

    /**
     * 
     */
    public function setTimeInterval08(TimeInterval $timeInterval08 = null)
    {
        if (!$timeInterval08) return $this;
        $this->timeInterval08 = $timeInterval08;
        $this->timeInterval08->setName('timeInterval08');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval08()
    {
        return $this->timeInterval08;
    }

    /**
     * 
     */
    public function setTimeInterval09(TimeInterval $timeInterval09 = null)
    {
        if (!$timeInterval09) return $this;
        $this->timeInterval09 = $timeInterval09;
        $this->timeInterval09->setName('timeInterval09');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval09()
    {
        return $this->timeInterval09;
    }

    /**
     * 
     */
    public function setTimeInterval10(TimeInterval $timeInterval10 = null)
    {
        if (!$timeInterval10) return $this;
        $this->timeInterval10 = $timeInterval10;
        $this->timeInterval10->setName('timeInterval10');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval10()
    {
        return $this->timeInterval10;
    }

    /**
     * 
     */
    public function setTimeInterval11(TimeInterval $timeInterval11 = null)
    {
        if (!$timeInterval11) return $this;
        $this->timeInterval11 = $timeInterval11;
        $this->timeInterval11->setName('timeInterval11');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval11()
    {
        return $this->timeInterval11;
    }

    /**
     * 
     */
    public function setTimeInterval12(TimeInterval $timeInterval12 = null)
    {
        if (!$timeInterval12) return $this;
        $this->timeInterval12 = $timeInterval12;
        $this->timeInterval12->setName('timeInterval12');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval12()
    {
        return $this->timeInterval12;
    }

    /**
     * 
     */
    public function setTimeInterval13(TimeInterval $timeInterval13 = null)
    {
        if (!$timeInterval13) return $this;
        $this->timeInterval13 = $timeInterval13;
        $this->timeInterval13->setName('timeInterval13');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval13()
    {
        return $this->timeInterval13;
    }

    /**
     * 
     */
    public function setTimeInterval14(TimeInterval $timeInterval14 = null)
    {
        if (!$timeInterval14) return $this;
        $this->timeInterval14 = $timeInterval14;
        $this->timeInterval14->setName('timeInterval14');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval14()
    {
        return $this->timeInterval14;
    }

    /**
     * 
     */
    public function setTimeInterval15(TimeInterval $timeInterval15 = null)
    {
        if (!$timeInterval15) return $this;
        $this->timeInterval15 = $timeInterval15;
        $this->timeInterval15->setName('timeInterval15');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval15()
    {
        return $this->timeInterval15;
    }

    /**
     * 
     */
    public function setTimeInterval16(TimeInterval $timeInterval16 = null)
    {
        if (!$timeInterval16) return $this;
        $this->timeInterval16 = $timeInterval16;
        $this->timeInterval16->setName('timeInterval16');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval16()
    {
        return $this->timeInterval16;
    }

    /**
     * 
     */
    public function setTimeInterval17(TimeInterval $timeInterval17 = null)
    {
        if (!$timeInterval17) return $this;
        $this->timeInterval17 = $timeInterval17;
        $this->timeInterval17->setName('timeInterval17');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval17()
    {
        return $this->timeInterval17;
    }

    /**
     * 
     */
    public function setTimeInterval18(TimeInterval $timeInterval18 = null)
    {
        if (!$timeInterval18) return $this;
        $this->timeInterval18 = $timeInterval18;
        $this->timeInterval18->setName('timeInterval18');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval18()
    {
        return $this->timeInterval18;
    }

    /**
     * 
     */
    public function setTimeInterval19(TimeInterval $timeInterval19 = null)
    {
        if (!$timeInterval19) return $this;
        $this->timeInterval19 = $timeInterval19;
        $this->timeInterval19->setName('timeInterval19');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval19()
    {
        return $this->timeInterval19;
    }

    /**
     * 
     */
    public function setTimeInterval20(TimeInterval $timeInterval20 = null)
    {
        if (!$timeInterval20) return $this;
        $this->timeInterval20 = $timeInterval20;
        $this->timeInterval20->setName('timeInterval20');
        return $this;
    }

    /**
     * 
     * @return TimeInterval
     */
    public function getTimeInterval20()
    {
        return $this->timeInterval20;
    }
}