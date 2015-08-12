<?php
    require_once "src/RPSGenerator.php";

    class RPSGeneratorTest extends PHPUnit_Framework_TestCase {


        //Test1 user 1 = rock, user 2 = rock, result tie
        function test_RPSGenerator_rockRock() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 0; //value of player 1's rock
            $input2 = 3; //value of player 2's rock

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("tie", $result);
        }



        //Test2 user 1 = scissors, user 2 = scissors, result tie




        //Test3 user 1 = paper, user 2 = paper, result tie




        //Test4 user 1 = scissors, user 2 = paper, result user 1 wins




        //Test5 user 1 = rock, user 2 = scissor, result user 1 wins




        //Test6 user 1 = paper, user 2 = rock, result user 1 wins




        //Test7 user 1 = rock, user 2 = paper, result user 2 wins



        //Test8 user 1 = paper, user 2 = scissors, result user 2 wins




        //Test9 user 1 = scissors, user 2 = rock, result user 2 wins




    }
?>
