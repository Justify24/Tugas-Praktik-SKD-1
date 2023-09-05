<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi/Deskripsi Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body class="bg-gray-300 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">Website Enkripsi/Deskripsi</h1>
        </div>
    </header>



<div class="container mx-auto py-4 flex-grow">
    <form action="" method="POST" class="bg-white p-6 rounded shadow-md">
        <label for="input" class="text-black">Masukkan Data:</label>
        <div class="container mx-auto">
            <!-- Tambahkan style="background-color: white;" untuk menghindari transparansi -->
            <input type="text" name="input" id="input" class="border border-black rounded px-2 py-1 focus:text-black focus:bg-white" placeholder="Masukkan data Anda di sini">
        </div>

        <!-- Dropdown untuk memilih enkripsi atau dekripsi -->
        <div class="mt-4">
            <label for="action" class="text-black">Pilih Tindakan:</label>
            <select name="action" id="action" class="border border-black rounded px-2 py-1 focus:text-black focus:bg-white">
                <option value="" disabled selected>Pilih tindakan</option>
                <option value="enkripsi">Enkripsi</option>
                <option value="denkripsi">Dekripsi</option>
            </select>
        </div>

        <input type="submit" value="Proses" class="bg-black text-white px-4 py-2 rounded mt-4">

        <br><br><br><?php
        // Include enkripsi1.php and denkripsi1.php to access the enkripsi() and denkripsi() functions
        require('enkripsi1.php');
        require('denkripsi1.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];
            $action = $_POST['action'];

            if ($action == 'enkripsi') {
                $result = enkripsi($input); // Call the enkripsi function
            } elseif ($action == 'denkripsi') {
                $result = denkripsi($input); // Call the denkripsi function
            }
        }
        ?>

    </form>

    
</div>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>made by : Muhammad Farhan (V3922033)</p>
        </div>
    </footer>
</body>
</html>
