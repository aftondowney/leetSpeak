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
            $input = "Ill";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("111", $result);
        }

        function test_makeLeetSpeak_t()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "put";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("pu7", $result);
        }

        function test_makeLeetSpeak_a()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "pack";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("p4ck", $result);
        }

        function test_makeLeetSpeak_s()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "Salts";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("S417z", $result);
        }

        function test_makeLeetSpeak_o()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "Woop";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("W00p", $result);
        }
    }

?>
