<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementVirtualOnNetCallTypeNameList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of Virtual On-Net Call Types that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 */
class ReplacementVirtualOnNetCallTypeNameList extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementVirtualOnNetCallTypeNameList';
    public    $name                     = 'ReplacementVirtualOnNetCallTypeNameList';
    protected $virtualOnNetCallTypeName = null;

    public function __construct(
         $virtualOnNetCallTypeName = null
    ) {
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    /**
     * @return ReplacementVirtualOnNetCallTypeNameList
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        if (!$virtualOnNetCallTypeName) return $this;
        $this->virtualOnNetCallTypeName = new SimpleContent($virtualOnNetCallTypeName);
        $this->virtualOnNetCallTypeName->setName('virtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName->getValue();
    }
}