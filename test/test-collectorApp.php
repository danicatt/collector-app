<?php

require('functions.php');

use PHPunit\Framework\TestCase;

class collectorTest extends TestCase{

    public function testSuccessloopCartoons() {
        $expected = "Character Name";
        $fakeData = getCharacterName([
            "Character" => "Character Name"
        ]);
        $actual = loopCartoons($fakeData);

        $this->assertsEquals($expected, $actual);
    }
}

//use testError as well.    