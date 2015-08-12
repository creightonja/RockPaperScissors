<?php
    class RPSGenerator {
        function makeRPS ($input1, $input2) {
            //Summing the user inputs into an array.
            //Player one: rock = 0, paper = 1, scissors = 2
            //Player two: rock = 3, paper = 6, scissors = 9
            $rps_sum = $input1 + $input2;
            $outcome_array = [3,3,3,0,1,2,2,0,1,1,2,0];  //Setting match winner index number into array
            $result_array = ["Tie!", "Player 1 Wins!", "Player 2 Wins!"];  //Setting
            return $result_array[$outcome_array[$rps_sum]];

        }

        function randomNumber() {
            return (3* (rand(1, 3)));
        }
    }

?>
