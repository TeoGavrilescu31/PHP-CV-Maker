<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$con = mysqli_connect('localhost', 'root', '', 'db_proiect_pwebc');
$username = $_SESSION["username"];
$sql = "Select * from `tbl_cv_maker` WHERE Username = '{$_SESSION["username"]}'";
$rs = mysqli_query($con, $sql);
$variabila = 0;
print <<<_HTML_
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="continut">
<div>
<a href="logout.php"><p style="font-size:20px;">Iesire din cont</p></a>
<br/><br/>
</div>
<p style="font-size:37;"><b>Lista dvs. de CV-uri:</b></p>
<br/><br/>
<a href="write-cv.php"><p style="font-size:35;color:blue;">Adauga CV</p></a>
<br/ ><br/ >
_HTML_;
while ($row = mysqli_fetch_assoc($rs)) {
    $my_id = $row['id'];
    $variabila++;
    print <<<_HTML_
    <a href="cv.php?id=$my_id">
                    <div>
                     <p style="font-size:30;">$variabila. {$row['Nume']}</p>
                    </div>
                    <br/ ><br/ >
                    </a>
    _HTML_;
}
print <<<_HTML_
</div>
</body>
_HTML_;
?>