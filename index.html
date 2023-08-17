<!DOCTYPE html>
<html>
<head>
    <title>Cek Kelahiran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }
        input[type="date"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 16px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        button:hover {
            background-color: #0056b3;
        }
        #result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cek Umur</h1>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>Tanggal Lahir Anjeun:</label><br>
            <input type="date" name="tanggal_lahir">
            <br><br>
            <button type="submit">Cek</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tanggal = isset($_POST["tanggal_lahir"]) ? $_POST["tanggal_lahir"] : null;
            if ($tanggal) {
                $tanggal_lahir = strtotime($tanggal);
                $hari_ini = time();
                $umur_hari = floor(($hari_ini - $tanggal_lahir) / (60 * 60 * 24));
                $umur_tahun = floor($umur_hari / 365);
                
                $hariNames = ["Minggu", "Senen", "Salasa", "Rebo", "Kemis", "Jumat", "Sabtu"];
                $hari_ini_name = $hariNames[date("w", $hari_ini)];
                $hari_lahir_name = $hariNames[date("w", $tanggal_lahir)];
                
                echo "<div id='result'>";
                echo "Umur Silaing: " . $umur_tahun . " tahun<br>";
                echo "Tanggal : " . date("d F Y", $tanggal_lahir) . "<br>";
                echo "Lahir Poe : " . $hari_lahir_name . "<br>";
                echo "Catatan : Geura kawin geus kolot :D";
                echo "</div>";
            } else {
                echo "<div id='result'>Pilih heula ...!!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
