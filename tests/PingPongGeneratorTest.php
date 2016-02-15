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

        function test_createArray_withPing()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input_number = 3;

            $result = $test_PingPongGenerator->makePingPong($input_number);

            $this->assertEquals(array(1, 2, 'ping'), $result);
        }

        function test_createArray_withPong()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input_number = 5;

            $result = $test_PingPongGenerator->makePingPong($input_number);

            $this->assertEquals(array(1, 2, 'ping', 4, 'pong'), $result);
        }

        function test_createArray_withPingPong()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input_number = 15;

            $result = $test_PingPongGenerator->makePingPong($input_number);

            $this->assertEquals(array(1, 2, 'ping', 4, 'pong', 'ping', 7, 8, 'ping', 'pong', 11, 'ping', 13, 14, 'ping-pong'), $result);
        }
    }
?>
