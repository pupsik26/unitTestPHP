<?php
use PHPUnit\Framework\TestCase;
require_once 'myClass.php';

class MyClassTest extends TestCase
{
    public function testRevertCharacters1()
    {
        $s = new MyClass();
        $this->assertEquals("321", $s->revertCharacters("123"));
    }

    public function testRevertCharacters2()
    {
        $s = new MyClass();
        $this->assertEquals("рим тевирП", $s->revertCharacters("Привет мир"));
    }
    // ошибочный тест!
    public function testRevertCharacters3()
    {
        $s = new MyClass();
        $this->assertEquals("алед каК", $s->revertCharacters("Как дела мир?"));
    }
}

?>