<?php
// tests/AdditionTest.php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testAdd()
    {
        require 'index.php';
        $this->assertEquals(3, add(1, 2));
        $this->assertEquals(5, add(2, 3));
        $this->assertEquals(0, add(-1, 1));
    }
}
?>
