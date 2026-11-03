<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sistema.css">
    <link href="navbar.css" rel="stylesheet">
</head>


<body>

    <?php 
    include "navbar.php";
    ?>
  
<h1 style= "color: #FFFFCC; margin-top: 120px">SISTEMA SOLARE</h1>
<div>
    <img src="img_vari/planet_chart.png" alt="" style="width: 550px; height: auto;">
    <p>Il sistema solare, chiamato anche "Outer Wilds", è composto al centro dal sole, una stella nana gialla, attorno al quale orbitano cinque pianeti e diversi altri corpi celesti. Tra questi si trovano satelliti naturali, una cometa e altri oggetti minori, ciascuno caratterizzato da dimensioni, orbite e composizioni differenti. Il sistema presenta una struttura relativamente compatta, con i pianeti distribuiti a diverse distanze dal Sole e soggetti alla sua attrazione gravitazionale.</p>
</div>

</br>
</br>

<?php include "carta_uno.php"; ?>
<?php include "carta_due.php"; ?>
<?php include "carta_tre.php"; ?>
<?php include "carta_quattro.php"; ?>
<?php include "carta_cinque.php"; ?>
<?php include "carta_sei.php"; ?>
<?php include "carta_sette.php"; ?>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
