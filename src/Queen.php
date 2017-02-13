<?php

    class Queen
    {
        function makeQueenAttack($queen_position,$attack_position)
        {
            if ($queen_position[0]==$attack_position[0] || $queen_position[1]==$attack_position[1])
            {
                return true;
            } else
            {
                return false;
            }

        }
    }

?>
