<?php

namespace Localheinz\Zf2NonModule\Test;

use Localheinz\Zf2NonModule;
use PHPUnit_Framework_TestCase;

class ModuleTest extends PHPUnit_Framework_TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(class_exists(Zf2NonModule\Module::class));
    }
}
