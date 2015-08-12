<?php
    //calling rock paper scissor generator class and methodsQ   SA
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
            $this->assertEquals("Tie!", $result);
        }



        //Test2 user 1 = scissors, user 2 = scissors, result tie
        function test_RPSGenerator_scissorsScissors() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 2; //value of player 1's scissors
            $input2 = 9; //value of player 2's scissors

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Tie!", $result);
        }



        //Test3 user 1 = paper, user 2 = paper, result tie
        function test_RPSGenerator_paperPaper() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 1; //value of player 1's paper
            $input2 = 6; //value of player 2's paper

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Tie!", $result);
        }



        //Test4 user 1 = scissors, user 2 = paper, result user 1 wins
        function test_RPSGenerator_scissorsPaper() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 2; //value of player 1's scissors
            $input2 = 6; //value of player 2's paper

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }



        //Test5 user 1 = rock, user 2 = scissor, result user 1 wins
        function test_RPSGenerator_rockScissors() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 0; //value of player 1's rock
            $input2 = 9; //value of player 2's scissors

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }



        //Test6 user 1 = paper, user 2 = rock, result user 1 wins
        function test_RPSGenerator_paperRock() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 1; //value of player 1's paper
            $input2 = 3; //value of player 2's rock

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }



        //Test7 user 1 = rock, user 2 = paper, result user 2 wins
        function test_RPSGenerator_rockPaper() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 0; //value of player 1's rock
            $input2 = 6; //value of player 2's paper

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2 Wins!", $result);
        }




        //Test8 user 1 = paper, user 2 = scissors, result user 2 wins
        function test_RPSGenerator_paperScissors() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 1; //value of player 1's paper
            $input2 = 9; //value of player 2's scissors

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2 Wins!", $result);
        }




        //Test9 user 1 = scissors, user 2 = rock, result user 2 wins
        function test_RPSGenerator_scissorsRock() {
            //Arrange
            $test_RPSGenerator = new RPSGenerator;
            $input1 = 2; //value of player 1's rock
            $input2 = 3; //value of player 2's paper

            //Act
            $result = $test_RPSGenerator->makeRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 2 Wins!", $result);
        }




    }
?>
