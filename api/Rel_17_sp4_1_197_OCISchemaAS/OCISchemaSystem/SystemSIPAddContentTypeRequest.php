<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPSupportedInterface;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPContentType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPAddContentTypeRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemSIPAddContentTypeRequest';
    protected $contentType = null;
    protected $interface   = null;

    public function __construct(
         $contentType,
         $interface
    ) {
        $this->setContentType($contentType);
        $this->setInterface($interface);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setContentType($contentType = null)
    {
        if (!$contentType) return $this;
        $this->contentType = ($contentType InstanceOf SystemSIPContentType)
             ? $contentType
             : new SystemSIPContentType($contentType);
        $this->contentType->setName('contentType');
        return $this;
    }

    /**
     * 
     * @return SystemSIPContentType
     */
    public function getContentType()
    {
        return $this->contentType->getValue();
    }

    /**
     * 
     */
    public function setInterface($interface = null)
    {
        if (!$interface) return $this;
        $this->interface = ($interface InstanceOf SystemSIPSupportedInterface)
             ? $interface
             : new SystemSIPSupportedInterface($interface);
        $this->interface->setName('interface');
        return $this;
    }

    /**
     * 
     * @return SystemSIPSupportedInterface
     */
    public function getInterface()
    {
        return $this->interface->getValue();
    }
}