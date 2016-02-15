<?php

    class PingPongGenerator
    {
        function makePingPong($input_number)
        {
            $ping_pong_array = array();
            for ($i=1; $i <= $input_number; $i++) {
                array_push($ping_pong_array, $i);
            }
            return $ping_pong_array;
        }
    }


 ?>
