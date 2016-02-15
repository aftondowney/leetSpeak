<?php

class LeetSpeak
{
    function makeLeetSpeak($input_string)
    {
      $trans = array("e" => "3", "i" => "1", "I" => "1", "l" => "1", "L" => "1");
      return strtr($input_string, $trans);
    }
}
?>
