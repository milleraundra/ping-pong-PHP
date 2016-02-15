<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_createArray()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input_number = 2;

            $result = $test_PingPongGenerator->makePingPong($input_number);

            $this->assertEquals(array(1, 2), $result);


        }

    }
?>
