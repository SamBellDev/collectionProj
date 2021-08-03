<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {
    public function testSuccessCreateItems() {
        $testArray = [
            ['coinName' => 'Roman coin', 'yearMinted' => 'AD 76', 'material' => 'Gold', 'diameter' => '16.82mm'],
            ['coinName' => 'Modern coin', 'yearMinted' => 'AD 2021', 'material' => 'Nickel-brass and nickel plated brass alloy', 'diameter' => '23.43mm']
        ];
        $expectedOutput = '<p>Roman coin</p><ul><li>AD 76</li><li>Gold</li><li>16.82mm</li></ul><p>Modern coin</p><ul><li>AD 2021</li><li>Nickel-brass and nickel plated brass alloy</li><li>23.43mm</li></ul>';
        $input = $testArray;
        $actualOutput = createItems($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureCreateItems() {
        $badArray = [[0],[0]];
        $expectedOutput = 'Provide a valid array argument';
        $input = $badArray;
        $actualOutput = createItems($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedCreateItems() {
        $input = 'banana';
        $this->expectException(TypeError::class);
        $output = createItems($input);
    }
}