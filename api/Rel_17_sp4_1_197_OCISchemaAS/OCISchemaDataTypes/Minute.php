<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Minute.
 */
class Minute extends SimpleType
{
    public $name = "Minute";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new MinInclusive("0"));
        $this->addRestriction(new MaxInclusive("59"));
    }
}