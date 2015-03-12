<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8\SpeedDial8Entry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSpeedDial8GetListRequest.
 */
class UserSpeedDial8GetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'UserSpeedDial8GetListResponse';
    protected $speedDialEntry = null;

    /**
     * @return UserSpeedDial8GetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSpeedDialEntry(SpeedDial8Entry $speedDialEntry = null)
    {
        if (!$speedDialEntry) return $this;
        $this->speedDialEntry = $speedDialEntry;
        $this->speedDialEntry->setName('speedDialEntry');
        return $this;
    }

    /**
     * 
     * @return SpeedDial8Entry
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry;
    }
}