<?php

    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_QueenAttackVertical()
        {
            // Arrange
            $test_QueenMove = new Queen;
            // Input format: array with Queen Position, other piece position
            $queen_position = array(3,4);
            $attack_position = array(3,5);

            //Act
            $result = $test_QueenMove->makeQueenAttack($queen_position, $attack_position);

            //assert
            $this->assertEquals(true,$result);
        }

        function test_QueenAttackHorizontal()
        {
            // Arrange
            $test_QueenMove = new Queen;
            // Input format: array with Queen Position, other piece position
            $queen_position = array(6,4);
            $attack_position = array(3,4);

            //Act
            $result = $test_QueenMove->makeQueenAttack($queen_position, $attack_position);

            //assert
            $this->assertEquals(true,$result);
        }

        function test_QueenAttackDiagonal()
        {
            // Arrange
            $test_QueenMove = new Queen;
            // Input format: array with Queen Position, other piece position
            $queen_position = array(4,4);
            $attack_position = array(5,5);

            //Act
            $result = $test_QueenMove->makeQueenAttack($queen_position, $attack_position);

            //assert
            $this->assertEquals(true,$result);
        }


    }



?>
