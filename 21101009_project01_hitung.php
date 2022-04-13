<?php
include_once("21101009_project01.php");
    if(isset($_POST['submit'])){
        $suhu=$_POST['suhu'];
        $konversi=$_POST['KONVERSI'];
    if($konversi=="celcius"){
        $hasil=($suhu * (9/5) + 32);
        echo "<br>Hasil Konversi: <br>
        &degF = (9/5) x &degC + 32 <br>
        &degF = (9/5) x $suhu&deg + 32 <br>
        &degF = $hasil&deg";
    }else if($konversi=="fahrenheit"){
        $hasil=($suhu - 32) * (5/9);
        echo "<br>Hasil Konversi: <br>
        &degC = (5/9) x (&degF - 32) <br>
        &degC = (5/9) x ($suhu&deg - 32) <br>
        &degC = $hasil&deg";
    }
}