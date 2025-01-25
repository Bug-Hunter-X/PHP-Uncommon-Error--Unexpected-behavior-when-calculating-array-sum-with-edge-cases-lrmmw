<?php
function calculateSum(array $numbers): int|string {
  // Handle edge case: empty array
  if (empty($numbers)) {
    return "Error: The input array is empty.";
  }

  // Validate input: check if all elements are numeric
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      return "Error: The input array contains non-numeric values.";
    }
  }

  // Calculate the sum
  $sum = array_sum($numbers);
  return $sum;
}

// Example usage
$numbers1 = [1, 2, 3, 4, 5];
$sum1 = calculateSum($numbers1);
echo "Sum of ".implode(', ', $numbers1).": $sum1\n";

$numbers2 = [];
$sum2 = calculateSum($numbers2);
echo "Sum of ": $sum2.\n";

$numbers3 = [1, 2, 'a', 4, 5];
$sum3 = calculateSum($numbers3);
echo "Sum of ".implode(', ', $numbers3).": $sum3\n";
?> 