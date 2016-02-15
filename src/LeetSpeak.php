<?php

class LeetSpeak
{
    function makeLeetSpeak($input_string)
    {
      $trans = array("e" => "3", "E" => "3", "i" => "1", "I" => "1", "l" => "1", "L" => "1", "t" => "7", "T" => "7", "a" => "4", "s" => "z", "o" => "0", "O" => "0");
      return strtr($input_string, $trans);
    }
}
?>
