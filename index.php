<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = 0;
    
    if ($operator == '+') {
    $hasil = $angka1 + $angka2;
    } elseif ($operator == '-') {
        $hasil = $angka1 - $angka2;
    } elseif ($operator == '*') {
        $hasil = $angka1 * $angka2;
    } elseif ($operator == '/') {
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2;
    } else {
        echo "<div id='hasil'>Tidak bisa melakukan pembagian dengan nol.</div>";
            $hasil = null;
        }
    }
    
    if ($hasil !== null) {
    echo "<div id='hasil'>$angka1 $operator $angka2 = $hasil</div>";
    }
    }
            ?>