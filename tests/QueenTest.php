<?php

    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_QueenAttack()
        {
            // Arrange
            $test_QueenMove = new Queen;
            $input;



            //Act
            $result = $test_QueenMove->makeQueenAttack($input);


            //assert

            $this->assertEquals($result);
        }
    }



?>
