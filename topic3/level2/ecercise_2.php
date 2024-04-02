<?php
/*$test_Mathematics = array(
    "Bart" => 8,
    "Monica" => 9,
    "Hubert" => 5,
);

$test_Informatics = array(
    "Bart" => 8,
    "Monica" => 9.5,
    "Hubert" => 4,
);

$test_Spanish = array(
    "Bart" => 7,
    "Monica" => 10,
    "Hubert" => 6,
);

$test_Dutch = array(
    "Bart" => 10,
    "Monica" => 2,
    "Hubert" => 4,
);

$test_Bio = array(
    "Bart" => 9,
    "Monica" => 6,
    "Hubert" => 5,
);*/

$studentGrades = [
    "Bart" => [8, 8, 7, 10, 9], // Math, Informatics, Spanish, Dutch, Biology
    "Monica" => [9, 9.5, 10, 2, 6],
    "Hubert" => [5, 4, 6, 4, 5],
];

function calculateAverages($studentGrades) {
    $classTotal = 0;
    $TotalCountOfGrades = 0;

    //we have to iterate each studentGrades so foreach loop in an array with student as the key with his values in the array:
    //sum of all grades / quantity of all tests = average student
    //which variables we need ? sum and count 
        foreach($studentGrades as $student => $grades) {
        $sum = array_sum($grades);
        $count = count($grades);
        $average = $sum/$count

        echo $student . "it average is:" . $average . "<br>";

    // class total?  sum of the classpoints / qunatity of the grades

    $classTotal= $classTotal + $sum;
    $TotalCountOfGrades = $TotalCountOfGrades + $count;

}

$classAverage = $classTotal / $TotalCountOfGrades;
echo "Class average: " . $classAverage . "<br>";
}

// oproepen fucntie /niet vergeten!!!
calculateAverages($studentGrades);

?>