<?php
    class RPSGenerator {
        function makeRPS ($input1, $input2) {
            $rps_sum = $input1 + $input2;
            $outcome_array = [3,3,3,0,1,2,2,0,1,1,2,0];
            $result_array = ["tie", "player 1 wins", "player 2 wins"];
            return $result_array[$outcome_array[$rps_sum]];
            }
        }
    }

?>
