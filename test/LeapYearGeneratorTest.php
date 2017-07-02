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

        function test_checkLeapYear_true()
        {
            $test_LeapYearGenerator = new LeapYearGenerator;
            $input = 2004;

            $result = $test_LeapYearGenerator->checkLeapYear($input);

            $this->assertEquals(true, $result);
        }
    }



 ?>
