<?php

require('../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    
    public function testExample() {
        $expected = 'hoge';
        $this->assertEquals($expected, 'hoge');
    }
}