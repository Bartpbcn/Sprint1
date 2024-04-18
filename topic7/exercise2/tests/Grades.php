<?php
namespace Bartpauwels\exercise2;

class Grades {
    function evaluateGrade(int $mark): string {
        if ($mark >= 60) {
            return "First Division";
        } elseif ($mark >= 45) {
            return "Second Division";
        } elseif ($mark >= 33) {
            return "Third Division";
        } else {
            return "Failed"; 
        }
    }
}
?>
?>
