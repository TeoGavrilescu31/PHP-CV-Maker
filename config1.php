<?php

session_start();
$con = mysqli_connect('localhost', 'root', '','db_proiect_pwebc');

// get the post records
$nume = $_POST['Nume'];
$title1 = $_POST['Titlu'];
$dataNastere = $_POST['DataNastere'];
$telefon = $_POST['Telefon'];
$email = $_POST['Email'];
$profil = $_POST['Profil'];
$Aptitudine1 = $_POST['Aptitudine1'];
$DescriereApt1 = $_POST['DescriereApt1'];
$Aptitudine2 = $_POST['Aptitudine2'];
$DescriereApt2 = $_POST['DescriereApt2'];
$Aptitudine3 = $_POST['Aptitudine3'];
$DescriereApt3 = $_POST['DescriereApt3'];
$angajator = $_POST['Angajator'];
$titluJob = $_POST['TitluJob'];
$anJob = $_POST['AnJob'];
$descriereJob = $_POST['DescriereJob'];
$scoala = $_POST['Scoala'];
$descriereEducatie = $_POST['DescriereEducatie'];
$diploma = $_POST['Diploma'];
$hobby1 = $_POST['Hobby1'];
$hobby2 = $_POST['Hobby2'];
$hobby3 = $_POST['Hobby3'];
$hobby4 = $_POST['Hobby4'];
$username = $_SESSION["username"];

// database insert SQL code
$sql = "INSERT INTO `tbl_cv_maker` (`Id`, `Nume`, `Titlu`, `DataNastere`, `Telefon`, `Email`, `Profil`, `Aptitudine1`, `DescriereApt1`, `Aptitudine2`, `DescriereApt2`, `Aptitudine3`, `DescriereApt3`, `Angajator`, `TitluJob`, `AnJob`,  `DescriereJob`,  `Scoala`, 
 `DescriereEducatie`,  `Diploma`, `Hobby1`, `Hobby2`, `Hobby3`, `Hobby4`, `Username`) 
 VALUES ('0', '$nume', '$title1', '$dataNastere', '$telefon', '$email', '$profil', '$Aptitudine1', '$DescriereApt1', '$Aptitudine2', '$DescriereApt2', '$Aptitudine3', '$DescriereApt3', '$angajator', '$titluJob', '$anJob', '$descriereJob', '$scoala',
  '$descriereEducatie', '$diploma', '$hobby1', '$hobby2', '$hobby3', '$hobby4', '$username')";
  
  
 $rs = mysqli_query($con, $sql);
 include "cv.php";

  ?>