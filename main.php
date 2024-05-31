<?php
/**
 * This program uses recursion to apply a Tetranacci sequence.
 * By Venika Sem
 * @version 1.0
 * @since Feb-2024
 */

// Recursive function to generate Tetranacci sequence
function tetranacci($n, $sequence = array()) {
    if ($n <= 0) {
        return $sequence;
    }
    $length = count($sequence);
    if ($length === 0 || $length === 1 || $length === 2) {
        array_push($sequence, 0);
    } elseif ($length === 3) {
        array_push($sequence, 1);
    } else {
        array_push($sequence, $sequence[$length - 1] + $sequence[$length - 2] + $sequence[$length - 3] + $sequence[$length - 4]);
    }
    return tetranacci($n - 1, $sequence);
}

// Function to start the program
function start() {
    $input = readline('Enter the number of Tetranacci terms to generate: ');
    $numberOfTerms = intval($input);

    if (!is_numeric($numberOfTerms) || $numberOfTerms <= 0) {
        echo 'Please enter a valid positive number.';
        return;
    }

    $tetranacciSequence = tetranacci($numberOfTerms);
    echo 'Tetranacci sequence of ' . $numberOfTerms . ' terms: ' . implode(', ', $tetranacciSequence) . "\n";
}

// Start the program
start();
?>
