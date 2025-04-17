<?php
$name ='Dmytro';
$age = 17;
$is_student = true;

echo 'Name: '.$name. ' , age: ' .$age. ' , Student: ' .($is_student ?  ' yes ' : ' no ').'<br>';

$numbers = [1,2,3,4,5];
$num = array_sum($numbers);
echo 'Sum of numbers: ' .($num) . '<br>';

$person = [
    'name' => 'Dmytro',
    'email' => 'dmytro@gmail.com',
    'phone' => '099999999'
];

echo '<ul>';
foreach ($person as $key => $value) {
    echo '<li>'.htmlspecialchars($key).': ' .htmlspecialchars($value).'</li>';
}
echo '</ul>';

if ($age > 18) {
    echo 'You older that 18 years old! <br>';
} else{
    echo 'You younger that 18 years old! <br>';
}

$grade = 85;
if ($grade >= 90 && $grade <= 100) {
    echo 'Mark: Great!<br>';
} elseif ($grade >= 70 && $grade <= 89) {
    echo 'Mark: Good!<br>';
} elseif ($grade >= 50 && $grade <= 69) {
    echo 'Mark: Average!<br>';
} else {
    echo 'Mark: Lower that Average!<br>';
}
?>
