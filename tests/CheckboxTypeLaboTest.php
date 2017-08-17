<?php
namespace Quartet\CheckboxTypeLabo;

use PHPUnit\Framework\TestCase;

class CheckboxTypeLaboTest extends TestCase
{
    /**
     * @var CheckboxTypeLabo
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new CheckboxTypeLabo;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Quartet\CheckboxTypeLabo\CheckboxTypeLabo', $actual);
    }
}
