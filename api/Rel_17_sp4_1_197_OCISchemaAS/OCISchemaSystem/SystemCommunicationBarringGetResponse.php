<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCommunicationBarringGetRequest.
 */
class SystemCommunicationBarringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'SystemCommunicationBarringGetResponse';
    protected $directTransferScreening = null;

    /**
     * @return SystemCommunicationBarringGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDirectTransferScreening($directTransferScreening = null)
    {
        if (!$directTransferScreening) return $this;
        $this->directTransferScreening = new PrimitiveType($directTransferScreening);
        $this->directTransferScreening->setName('directTransferScreening');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening->getValue();
    }
}