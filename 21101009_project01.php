<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <style>
        .nilaisuhu{
            width: calc(30% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid black;
        }
        p{
            font-weight: bold;
        }
        button{
            width: 10%;
            padding: 5px 0;
            border: none;
            background-color:green;
            font-size: 18px;
            color: #fafafa;
        }
    </style>
</head>
<body>
    <form action="21101009_project01_hitung.php" method="post">
        <h1>Konversi Suhu</h1>
        <p>Konversi:</p>
        <input type="radio" name="KONVERSI" value="celcius">Celcius ke Fahrenheit
        <input type="radio" name="KONVERSI" value="fahrenheit">Fahrenheit ke Celcius<br><br>
        <input type="text" class="nilaisuhu" name="suhu" placeholder="Nilai Suhu"><br>
        <button type="submit" name="submit" value="KONVERSI"><b>KONVERSI</b></button>
    </form>
</body>
</html>