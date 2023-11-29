
<?php
require_once("kaloricounter.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div id="judul">
        <h1>Calory Counter</h1>
    </div>
<div id="all">
        <div id="button">
            <button><?php $ayamgoreng->getNama(); ?></button>
            <button><?php $ayamrebus->getNama(); ?></button>
            <button><?php $ayambakar->getNama(); ?></button>
            <button><?php $sateayam->getNama(); ?></button>
            <button><?php $sotoayam->getNama(); ?></button>
            <button><?php $sotosapi->getNama(); ?></button>
            <button><?php $baksosapi->getNama(); ?></button>
            <button><?php $baksoayam->getNama(); ?></button>
            <button><?php $steak->getNama(); ?></button>
            <button><?php $rendang->getNama(); ?></button>
            <button><?php $gulaisapi->getNama(); ?></button>
            <button><?php $nasiputih->getNama(); ?></button>
            <button><?php $nasigoreng->getNama(); ?></button>
            <button><?php $telurgoreng->getNama(); ?></button>
            <button><?php $telurrebus->getNama(); ?></button>
            <button><?php $tempegoreng->getNama(); ?></button>
            <button><?php $temperebus->getNama(); ?></button>
            <button><?php $tahugoreng->getNama(); ?></button>
            <button><?php $tahurebus->getNama(); ?></button>
            <button><?php $beefpizza->getNama(); ?></button>
            <button><?php $burger->getNama(); ?></button>
        </div>
        <div id="kaloriarea">
            <h2 id="kalorilabel">Kalori</h2>
            <div id="kalorivalue"></div>
        </div>
</div>

    

    <script>
        const button= document.querySelectorAll("button");
        const kaloriArea = document.getElementById("kalorivalue");
        button[0].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $ayamgoreng -> getKalori()?>;
        })
        button[1].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $ayamrebus -> getKalori()?>;
        })
        button[2].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $ayambakar -> getKalori()?>;
        })
        button[3].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $sateayam -> getKalori()?>;
        })
        button[4].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $sotoayam -> getKalori()?>;
        })
        button[5].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $sotosapi -> getKalori()?>;
        })
        button[6].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $baksosapi -> getKalori()?>;
        })
        button[7].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $baksoayam -> getKalori()?>;
        })
        button[8].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $steak -> getKalori()?>;
        })
        button[9].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $rendang -> getKalori()?>;
        })
        button[10].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $gulaisapi -> getKalori()?>;
        })
        button[11].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $nasiputih -> getKalori()?>;
        })
        button[12].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $nasigoreng -> getKalori()?>;
        })
        button[13].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $telurgoreng -> getKalori()?>;
        })
        button[14].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $telurrebus -> getKalori()?>;
        })
        button[15].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $tempegoreng -> getKalori()?>;
        })
        button[16].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $temperebus -> getKalori()?>;
        })
        button[17].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $tahugoreng -> getKalori()?>;
        })
        button[18].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $tahurebus -> getKalori()?>;
        })
        button[19].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $beefpizza -> getKalori()?>;
        })
        button[20].addEventListener("click",function() {
            kaloriArea.innerHTML = <?php $burger-> getKalori()?>;
        })
    </script>
</body>
</html>
