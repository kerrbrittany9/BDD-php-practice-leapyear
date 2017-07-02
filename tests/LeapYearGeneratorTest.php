<?php

    require_once "src/LeapYearGenerator.php";

    class LeapYearGeneratorTest extends PHP_Frameword_TestCase
    {
        function test_checkLeapYear_false()
        {
            $test_LeapYearGenerator = new LeapYearGenerator;
            $input = 1993;

            $result = $test_LeapYearGenerator->checkLeapYear($input);

            $this->assertEquals(false, $result);
        }
    }



 ?>
