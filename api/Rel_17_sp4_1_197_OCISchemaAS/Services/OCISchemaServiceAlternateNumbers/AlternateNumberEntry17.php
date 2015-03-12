<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Alternate Number Entry.
 */
class AlternateNumberEntry17 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17';
    public    $name        = 'AlternateNumberEntry17';
    protected $phoneNumber = null;
    protected $extension   = null;
    protected $ringPattern = null;

    public function __construct(
         $phoneNumber = null,
         $extension = null,
         $ringPattern = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setRingPattern($ringPattern);
    }

    /**
     * @return AlternateNumberEntry17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        if (!$extension) return $this;
        $this->extension = new SimpleContent($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExtension()
    {
        return $this->extension->getValue();
    }

    /**
     * 
     */
    public function setRingPattern($ringPattern = null)
    {
        if (!$ringPattern) return $this;
        $this->ringPattern = new SimpleContent($ringPattern);
        $this->ringPattern->setName('ringPattern');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRingPattern()
    {
        return $this->ringPattern->getValue();
    }
}