<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserPhoneDirectoryGetSearchedListRequest.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", "Department", "Hiragana Name", "Group Id", "Yahoo Id".
 */
class UserPhoneDirectoryGetSearchedListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'UserPhoneDirectoryGetSearchedListResponse';
    protected $directoryTable = null;

    /**
     * @return UserPhoneDirectoryGetSearchedListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDirectoryTable(TableType $directoryTable = null)
    {
        if (!$directoryTable) return $this;
        $this->directoryTable = $directoryTable;
        $this->directoryTable->setName('directoryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDirectoryTable()
    {
        return $this->directoryTable;
    }
}