<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 */
class SystemMediaServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemMediaServerGetListResponse';
    protected $mediaServerTable = null;

    /**
     * @return SystemMediaServerGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaServerTable(TableType $mediaServerTable = null)
    {
        if (!$mediaServerTable) return $this;
        $this->mediaServerTable = $mediaServerTable;
        $this->mediaServerTable->setName('mediaServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMediaServerTable()
    {
        return $this->mediaServerTable;
    }
}