<?php
// denkripsi1.php

// Define the enkripsi function
function denkripsi() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the input data from the form
        $input = $_POST['input'];

        // Define the substitution key
        $key = array(
            '~' => 'a', '$' => 'i', '^' => 'u', '#' => 'e', '+' => 'o', 
            '!' => 'A', '%' => 'I', '_' => 'U', '=' => 'E', '*' => 'O'
        );

        // Perform the substitution encryption
        $denkripsi = strtr($input, $key);

        // Display the result
        echo "Kode denkripsi adalah: $input";
        echo "<br><br>";
        echo "Hasil denkripsi adalah: $denkripsi";
    }
}
?>
