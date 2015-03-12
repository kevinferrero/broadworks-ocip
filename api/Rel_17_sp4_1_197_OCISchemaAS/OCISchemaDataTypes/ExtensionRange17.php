<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionRange17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Extension range. The minimum and maximum values are inclusive.
 */
class ExtensionRange17 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionRange17';
    public    $name         = 'ExtensionRange17';
    protected $minExtension = null;
    protected $maxExtension = null;

    public function __construct(
         $minExtension,
         $maxExtension
    ) {
        $this->setMinExtension($minExtension);
        $this->setMaxExtension($maxExtension);
    }

    /**
     * @return ExtensionRange17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMinExtension($minExtension = null)
    {
        if (!$minExtension) return $this;
        $this->minExtension = new SimpleContent($minExtension);
        $this->minExtension->setName('minExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMinExtension()
    {
        return $this->minExtension->getValue();
    }

    /**
     * 
     */
    public function setMaxExtension($maxExtension = null)
    {
        if (!$maxExtension) return $this;
        $this->maxExtension = new SimpleContent($maxExtension);
        $this->maxExtension->setName('maxExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMaxExtension()
    {
        return $this->maxExtension->getValue();
    }
}