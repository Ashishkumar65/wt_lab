<?php
function findLargestNumber($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}
$num1 = $argv[1];
$num2 = $argv[2];
$num3 = $argv[3];
$largestNumber = findLargestNumber($num1, $num2, $num3);
echo "Largest Number: " . $largestNumber;
?>
