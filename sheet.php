<?php
echo " Sum of Numbers in an Array<br>";
$array = [1, 2, 3, 4];
$result = 0;
for ($i = 0; $i < count($array); $i++) {
    $result += $array[$i];
}
echo $result;
echo "<hr>";
echo "Find the Maximum Number in an Array<br>";
$array = [1, 5, 3, 9, 2];
$max = $array[0];
for ($i = 1; $i < count($array); $i++) {
    if ($max < $array[$i]) {
        $max = $array[$i];
    }
}
echo $max;
echo "<hr>";
echo "Linear Search<br>";
$array = [1, 3, 4, 5, 6];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == 4) {
        echo $i;
    }
}
echo "<hr>";
echo "Counting Even and Odd Numbers<br>";
$array = [1, 2, 3, 4, 5];
$evenCount = 0;
$oddCount = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        $evenCount++;
    } else {
        $oddCount++;
    }
}
echo "Count of even numbers: $evenCount<br>";
echo "Count of odd numbers: $oddCount<br>";
echo "<hr>";
echo "Reverse an Array<br>";
$array = [1, 2, 3, 4, 5];
$newArray = [];
for ($i = count($array) - 1; $i >= 0; $i--) {
    array_push($newArray, $array[$i]);
}
print_r($newArray);
echo "<hr>";
echo "Check if an Array is Palindrome<br>";
$array = [1, 2, 3, 2, 1];
$isPalindrome = true;
$length = count($array);
for ($i = 0; $i < $length / 2; $i++) {
    if ($array[$i] != $array[$length - $i - 1]) {
        $isPalindrome = false;
        break;
    }
}

if ($isPalindrome) {
    echo "The array is a palindrome";
} else {
    echo "The array is not a palindrome";
}
echo "<hr>";
echo "Find the Second Largest Number<br>";
$array = [1, 5, 3, 9, 7];
$max = $array[0];
$secondMax = $array[0];
for ($i = 1; $i < count($array); $i++) {
    if ($max < $array[$i]) {
        $secondMax = $max;
        $max = $array[$i];
    } elseif ($array[$i] > $secondMax && $array[$i] != $max) {
        $secondMax = $array[$i];
    }
}
echo $secondMax;
echo "<hr>";
echo "Merge Two Sorted Arrays<br>";
$first_array = [1, 3, 5];
$second_array = [2, 4, 6];
$merged_array = [];
$first_index = 0;
$second_index = 0;
while ($first_index < count($first_array) && $second_index < count($second_array)) {
    if ($first_array[$first_index] < $second_array[$second_index]) {
        $merged_array[] = $first_array[$first_index];
        $first_index++;
    } else {
        $merged_array[] = $second_array[$second_index];
        $second_index++;
    }
}
while ($first_index < count($first_array)) {
    $merged_array[] = $first_array[$first_index];
    $first_index++;
}
while ($second_index < count($second_array)) {
    $merged_array[] = $second_array[$second_index];
    $second_index++;
}

print_r($merged_array);
echo "<hr>";
echo "Find All Prime Numbers in an Array<br>";
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;
    if ($num % 2 == 0 || $num % 3 == 0) return false;
    for ($i = 5; $i * $i <= $num; $i = $i + 6)
        if ($num % $i == 0 || $num % ($i + 2) == 0)
            return false;

    return true;
}
$array =  [2, 3, 4, 5, 6, 7, 8];
foreach ($array as $num) {
    if (isPrime($num)) {
        echo $num . " ";
    }
}
echo "<hr>";
echo "<hr>";
echo "Rotate an Array<br>";
function rotateArray(&$arr, $steps) {
    $length = count($arr);
    $steps = $steps % $length;
    if ($steps == 0) return; 
    $temp = [];
    for ($i = $length - $steps; $i < $length; $i++) {
        $temp[] = $arr[$i];
    }
    for ($i = $length - 1; $i >= $steps; $i--) {
        $arr[$i] = $arr[$i - $steps];
    }
    for ($i = 0; $i < $steps; $i++) {
        $arr[$i] = $temp[$i];
    }
}
$arr = [1, 2, 3, 4, 5];
$steps = 2;
rotateArray($arr, $steps);
echo "Original array: [1, 2, 3, 4, 5]<br>";
echo "Rotating by $steps steps: ";
print_r($arr);
echo "<hr>";