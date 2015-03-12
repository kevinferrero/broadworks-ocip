<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Forward to Number Selection.
 */
class CallForwardingSelectiveNumberSelection16 extends SimpleType
{
    public $name = "CallForwardingSelectiveNumberSelection16";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Forward To Default Number',
            'Forward To Specified Number',
            'Do not forward'
        ]));
    }
}