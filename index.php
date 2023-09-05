<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi Form</title>

    <!-- Add Tailwind CSS CDN (you can also install it locally) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-black text-white">

<?php
// Include enkripsi1.php to access the enkripsi() function
require('enkripsi1.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
}
?>

<div class="container mx-auto py-8">
    <form action="" method="POST" class="bg-white p-6 rounded shadow-md">
        <label for="input" class="text-black">Masukkan Data:</label>
        <input type="text" name="input" id="input" class="border border-black rounded px-2 py-1">
        <input type="submit" value="Enkripsi" class="bg-black text-white px-4 py-2 rounded mt-4">
    </form>

    <?php
    enkripsi(); // Call the enkripsi function to process the form data
    ?>
</div>
</body>
</html>
