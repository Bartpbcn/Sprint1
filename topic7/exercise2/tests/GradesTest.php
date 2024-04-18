<?php
/*Let's practice some TDD. Remember exercise 5 of the PHP Basics level and think of tests you could perform to test its correct operation. 
Program them and then carry out the program to be tested step by step as you validate the previously created tests.*/

namespace Bartpauwels\exercise2;

use PHPUnit\Framework\TestCase;
require_once "Grades.php";

class GradesTest extends TestCase
{
    public function testFirstDivision(): void
    {
        
    //arrange and object creation
    $gradeChecker = new Grades();

    //act
    $isFirstDivision = $gradeChecker->evaluateGrade(65);
    $isNotFirstDivision = $gradeChecker->evaluateGrade(55);
    


    //assertations
    $this->assertEquals("First Division", $isFirstDivision);
    $this->assertNotEquals("First Division", $isNotFirstDivision);
    }

    public function testSecondDivision():void
    {

     //arrange and object creation
     $gradeChecker = new Grades();

    //act

    $isSecondDivision= $gradeChecker-> evaluateGrade(50);
    $isNotSecondDivision= $gradeChecker-> evaluateGrade(35);


    //assertions:
    $this->assertEquals('Second Division', $isSecondDivision);
    $this->assertNotEquals('Second Division', $isNotSecondDivision);
    }

    public function testThirdDivision():void

    {
    //arrange
    $gradeChecker = new Grades();


     //act
    $isThirdDivision = $gradeChecker->evaluateGrade(34);
    $isNotThirdDivision = $gradeChecker->evaluateGrade(20);


    //assertations

     $this->assertEquals('Third Division', $isThirdDivision);
     $this->assertNotEquals('Third Division', $isNotThirdDivision);
    }

    public function testIsFailed() : void
    {
        //arrange
        $gradeChecker = new Grades();

        //act
        $isFailed = $gradeChecker->evaluateGrade(30);
        $isNotFailed = $gradeChecker->evaluateGrade(34);

        //assert
        $this->assertEquals("Failed", $isFailed);
        $this->assertNotEquals("Failed", $isNotFailed);
    }
}
?>
