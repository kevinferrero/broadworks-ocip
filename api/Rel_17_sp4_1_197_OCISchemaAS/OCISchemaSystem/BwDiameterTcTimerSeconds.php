<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Delay afer which the Diameter stack attempts to reconnect to a peer after detecting a connection failure.
 */
class BwDiameterTcTimerSeconds extends SimpleType
{
    public $name = "BwDiameterTcTimerSeconds";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new MinInclusive("1"));
        $this->addRestriction(new MaxInclusive("3600"));
    }
}