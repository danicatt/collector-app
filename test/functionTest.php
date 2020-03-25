<?php
require('functions.php');
use PHPunit\Framework\TestCase;

class functionTest extends TestCase {

    public function testSuccessloopCartoons() {
        $expected = "<div class='eachCharacter'><h2 class='charName'>Test Name</h2><p class='cardContent'>From: Test Show</p><p class='cardContent'>Species: Test Species</p><p class='cardContent'>Catchphrase: Test Phrase</p><img src=Test Image></div>";
        $actual = loopCartoons([["name" => "Test Name", "species" => "Test Species", "tvshow" => "Test Show", "catchphase" => "Test Phrase", "image" => "Test Image"]]);

        $this->assertEquals($expected, $actual);
    }

    public function testErrorgivenwrongInput(){
        $this->expectException(TypeError::class);
        loopCartoons('test');
    }
}
