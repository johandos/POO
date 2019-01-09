<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TypesTest extends TestCase
{

    protected $stack;
    protected $juggling;

    protected function setUp()
    {
        $this->stack = [];
    }

    public function testArray(): void
    {
        $this->assertArrayHasKey('bar', ['bar' => 'baz']);
    }

    public function testEmpty()
    {
        $this->assertTrue(empty($this->stack));
    }

    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertSame('foo', $this->stack[count($this->stack)-1]);
        $this->assertFalse(empty($this->stack));
    }

    public function testPop()
    {
        array_push($this->stack, 'foo');
        $this->assertSame('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }

    public function testTypeCasting(){
        $casting = ['iscasting'];
        $this->assertContainsOnly('string', $casting);
        $casting = [1.3];
        $this->assertContainsOnly('float', $casting);
        $casting = [1];
        $this->assertContainsOnly('integer', $casting);
    }

    public function testCastingString()
    {
        $string = (string) 1;
        $this->assertEquals("1", $string);
    }

    public function testCastingInteger()
    {
        $integer = (integer) "120";
        $this->assertEquals(120, $integer);
    }

    public function testSumJuggling()
    {
        $this->juggling = 0;
        $this->assertEquals( 1, 1 + $this->juggling);
        $this->juggling = 5;
        $this->assertEquals( 2.5, 5 / 2);
        $this->juggling = 5;
        $this->assertEquals( 15, 5 + "10 Cerditos pequeñitos");
    }
}
