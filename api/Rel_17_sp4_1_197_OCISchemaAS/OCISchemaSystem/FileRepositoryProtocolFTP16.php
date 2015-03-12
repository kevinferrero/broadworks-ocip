<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\FileRepositoryProtocolFTP16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP16 extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\FileRepositoryProtocolFTP16';
    public    $name                  = 'FileRepositoryProtocolFTP16';
    protected $ftpPassive            = null;
    protected $netAddress            = null;
    protected $ftpRemoteVerification = null;

    public function __construct(
         $ftpPassive,
         $netAddress,
         $ftpRemoteVerification
    ) {
        $this->setFtpPassive($ftpPassive);
        $this->setNetAddress($netAddress);
        $this->setFtpRemoteVerification($ftpRemoteVerification);
    }

    /**
     * @return FileRepositoryProtocolFTP16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFtpPassive($ftpPassive = null)
    {
        if (!$ftpPassive) return $this;
        $this->ftpPassive = new SimpleContent($ftpPassive);
        $this->ftpPassive->setName('ftpPassive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getFtpPassive()
    {
        return $this->ftpPassive->getValue();
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        if (!$netAddress) return $this;
        $this->netAddress = new SimpleContent($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setFtpRemoteVerification($ftpRemoteVerification = null)
    {
        if (!$ftpRemoteVerification) return $this;
        $this->ftpRemoteVerification = new SimpleContent($ftpRemoteVerification);
        $this->ftpRemoteVerification->setName('ftpRemoteVerification');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getFtpRemoteVerification()
    {
        return $this->ftpRemoteVerification->getValue();
    }
}