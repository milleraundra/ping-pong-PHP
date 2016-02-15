<?php

    class PingPongGenerator
    {
        function makePingPong($input_number)
        {
            $ping_pong_array = array();
            for ($i=1; $i <= $input_number; $i++) {
                if ($i % 3 == 0 && $i % 5 ==0) {
                    array_push($ping_pong_array, 'ping-pong');
                }
                elseif ($i % 5 == 0) {
                    array_push($ping_pong_array, 'pong');
                }
                elseif ($i % 3 == 0) {
                    array_push($ping_pong_array, 'ping');
                }
                else {
                    array_push($ping_pong_array, $i);
                }
            }
            return $ping_pong_array;
        }
    }

 ?>
