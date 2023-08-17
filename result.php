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
