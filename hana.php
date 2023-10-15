<?php

function PrintPattern($p) {
    for ($w = $p; $w >= 1; $w--) {
        for ($m = 1; $m <= $w; $m++) {
            echo "* ";
        }
        echo "\n";
    }
}

function RotateArray($arr, $k) {
    $n = count($arr);
    $k = $k % $n;
    $RotatedArray = array_merge(array_slice($arr, $n - $k), array_slice($arr, 0, $n - $k));
    return $RotatedArray;
}

function ShowHelp() {
    echo "--- Help ---\n";
    echo "Option 1: Print a pattern with 'p' rows of decreasing asterisks.\n";
    echo "Option 2: Rotate an array of 'n' elements to the right by 'k' steps.\n";
    echo "Option 3: Show this help message.\n";
    echo "Option 4: Exit the program.\n";
}

while (true) {
    echo " Please select an option:\n";
    echo "1. Print Pattern\n";
    echo "2. Rotate Array\n";
    echo "3. Help\n";
    echo "4. Exit\n";
    echo "Option: ";
    $choice = readline();

    switch ($choice) {
        case 1:
            echo "Option 1: Enter the number of rows for the pattern: ";
            $p = intval(readline());
            PrintPattern($p);
            break;
        case 2:
            echo "Option 2: Enter the number of elements (n): ";
            $n = intval(readline());
            echo "Enter the number of steps (k): ";
            $k = intval(readline());
            echo "Enter the array elements separated by spaces: ";
            $input = readline();
            $arr = explode(" ", $input);
            $RotatedArray = RotateArray($arr, $k);
            echo "Output: [" . implode(", ", $RotatedArray) . "]\n";
            break;
        case 3:
            ShowHelp();
            break;
        case 4:
            echo "Exiting the program. Goodbye!\n";
            exit();
        default:
            echo "Invalid choice!!!! Please enter a valid option.\n";
    }
}
?>
