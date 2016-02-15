<?php

    require_once "src/LeetSpeak.php";

    class LeetSpeakTest extends PHPUnit_Framework_TestCase
    {

        function test_makeLeetSpeak_e()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "fee";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("f33", $result);
        }

        function test_makeLeetSpeak_liI()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "Iliad";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("111ad", $result);
        }
    }

?>
