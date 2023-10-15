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
            width: 100%; /* Lebar maksimum */
            max-width: 400px; /* Batasi lebar agar tidak terlalu lebar */
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
            width: 100%;
        }
        button {
            padding: 8px 16px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
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
        
        <form>
            <label>Tanggal Lahir Anjeun:</label><br>
            <input type="date" id="tanggal_lahir">
            <br><br>
            <button type="button" onclick="cekUmur()">Cek</button>
        </form>
        
        <div id="result"></div>
    </div>

    <script>
        function cekUmur() {
            const tanggalLahir = document.getElementById("tanggal_lahir").value;
            const tanggalLahirMillis = new Date(tanggalLahir).getTime();
            const hariIniMillis = new Date().getTime();
            const umurMillis = hariIniMillis - tanggalLahirMillis;
            const umurTahun = Math.floor(umurMillis / (365 * 24 * 60 * 60 * 1000));

            const hariNames = ["Minggu", "Senen", "Salasa", "Rebo", "Kemis", "Jumat", "Sabtu"];
            const hariIni = new Date().getDay();
            const hariLahir = new Date(tanggalLahir).getDay();

            const result = document.getElementById("result");
            result.innerHTML = "Umur Silaing: " + umurTahun + " tahun<br>";
            result.innerHTML += "Tanggal : " + tanggalLahir + "<br>";
            result.innerHTML += "Lahir Poe : " + hariNames[hariLahir] + "<br>";
            result.innerHTML += "Catatan : Geura kawin geus kolot :D";
        }
    </script>
</body>
</html>
