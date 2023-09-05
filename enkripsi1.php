<?php
// enkripsi1.php

// Define the enkripsi function
function enkripsi() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the input data from the form
        $input = $_POST['input'];

        // Define the substitution key
        $key = array(
            'a' => '~', 'i' => '$', 'u' => '^', 'e' => '#', 'o' => '+', 
            'A' => '!', 'I' => '%', 'U' => '_', 'E' => '=', 'O' => '*',
            '~' => 'a', '$' => 'i', '^' => 'u', '#' => 'e', '+' => 'o', 
            '!' => 'A', '%' => 'I', '_' => 'U', '=' => 'E', '*' => 'O'
        );

        // Perform the substitution encryption
        $enkripsi = strtr($input, $key);

        // Display the result
        echo "Kata yang dienkripsi adalah: $input";
        echo "<br><br>";
        echo "Hasil enkripsi adalah: $enkripsi";
    }
}
?>
