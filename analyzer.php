<?php


while (true) {
    echo "Enter a list of numbers separated by spaces (or type 'exit' to quit): ";

    $input = trim(fgets(STDIN));


    if (strtolower($input) === 'exit') {
        echo "Exiting program. Goodbye!\n";
        break;
    }


    $numbers = explode(" ", $input);
    $valid = true;


    foreach ($numbers as $num) {
        if (!is_numeric($num)) {
            $valid = false;
            break;
        }
    }

    if (!$valid) {
        echo "Invalid input. Please enter valid numbers only.\n\n";
        continue;
    }

    // Convert all to float for safety
    $numbers = array_map('floatval', $numbers);

    // Perform calculations
    $max = max($numbers);
    $min = min($numbers);
    $sum = array_sum($numbers);
    $avg = $sum / count($numbers);

    // Display results
    echo "=== Results ===\n";
    echo "Maximum: $max\n";
    echo "Minimum: $min\n";
    echo "Sum: $sum\n";
    echo "Average: " . number_format($avg, 2) . "\n\n";
}
