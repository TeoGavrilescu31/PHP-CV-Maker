<?php

    

session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$con = mysqli_connect('localhost', 'root', '','db_proiect_pwebc');
$sql = "Select * from `tbl_cv_maker`";
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($rs);
while ($row = mysqli_fetch_assoc($rs)) {
$id = $row['id'];
}
$id++;
print <<< _HTML_
<head>
    <title>CV Maker</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <link rel="stylesheet" type="text/css" href="reset-fonts-grids.css">
    <link rel="stylesheet" type="text/css" href="resume.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="signout">
    <a href="logout.php" class="btn btn-danger ml-3"><p style="font-size:17px;">Iesire din cont</p></a>
    </div>
    <form action="config1.php?id={$id}" method="post" id="form1">
        <div id="doc2" class="yui-t7" bis_skin_checked="1">
            <div id="inner" bis_skin_checked="1">
            <h2><b>CV Maker</b></h2><br />
            <h2>Va rog sa introduceti datele!</h2>
                <div id="hd" bis_skin_checked="1">
                    <div class="yui-gc" bis_skin_checked="1">
                        <div class="yui-u first" bis_skin_checked="1">
                            <label for="Nume">Nume complet:</label><br>
                            <input type="text" id="Nume" name="Nume" value=""><br>
                            <label for="Titlu">Titlu:</label><br>
                            <input type="text" id="Titlu" name="Titlu" value=""><br>
                        </div>

                        <div class="yui-u" bis_skin_checked="1">
                            <div class="contact-info" bis_skin_checked="1">

                                <label for="DataNastere">Data de nastere:</label><br>
                                <input type="date" id="DataNastere" name="DataNastere" value="2000-01-01"><br>
                                <label for="Telefon">Nr. de telefon:</label><br>
                                <input type="tel" id="Telefon" name="Telefon" value="" maxlength="10"><br>
                                <label for="Email">Email:</label><br>
                                <input type="text" id="Email" name="Email" value=""><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bd" bis_skin_checked="1">
                    <div id="yui-main" bis_skin_checked="1">
                        <div class="yui-b" bis_skin_checked="1">
                            <div class="yui-gf" bis_skin_checked="1">

                                <div class="yui-u first" bis_skin_checked="1">
                                    <h2>Profil</h2>
                                </div>
                                <div class="yui-u" bis_skin_checked="1">
                                    <textarea name="Profil" form="form1" rows="16" cols="60"></textarea><br>
                                </div>
                            </div>
                            <div class="yui-gf" bis_skin_checked="1">
                                <div class="yui-u first" bis_skin_checked="1">
                                    <h2>Aptitudini</h2>
                                </div>
                                <div class="yui-u" bis_skin_checked="1">
                                    <div class="talent" bis_skin_checked="1">
                                    <label for="Aptitudine1">#1:</label><br>
                                    <input type="text" id="Aptitudine1" name="Aptitudine1" value=""><br>
                                    <textarea name="DescriereApt1" form="form1" rows="16" cols="60"></textarea><br>
                                    </div>

                                    <div class="talent" bis_skin_checked="1">
                                    <label for="Aptitudine2">#2:</label><br>
                                    <input type="text" id="Aptitudine2" name="Aptitudine2" value=" "><br>
                                    <textarea name="DescriereApt2" form="form1" rows="16" cols="60"></textarea><br>
                                    </div>

                                    <div class="talent" bis_skin_checked="1">
                                    <label for="Aptitudine3">#3:</label><br>
                                    <input type="text" id="Aptitudine3" name="Aptitudine3" value=""><br>
                                    <textarea name="DescriereApt3" form="form1" rows="16" cols="60"></textarea><br>
                                    </div>
                                </div>
                            </div>
                            <div class="yui-gf" bis_skin_checked="1">

                                <div class="yui-u first" bis_skin_checked="1">
                                    <h2>Experienta de munca</h2>
                                </div>

                                <div class="yui-u" bis_skin_checked="1">
                                    <div class="job" bis_skin_checked="1">
                                        <label for="Angajator">Angajator:</label><br>
                                        <input type="text" id="Angajator" name="Angajator" value=""><br>
                                        <label for="TitluJob">Titlu job:</label><br>
                                        <input type="text" id="TitluJob" name="TitluJob" value=""><br>
                                        <label for="AnJob-year">Anul:</label><br>
                                        <select name="AnJob" id=" AnJob-year">
                                            <option value="2030">2030</option>
                                            <option value="2029">2029</option>
                                            <option value="2028">2028</option>
                                            <option value="2027">2027</option>
                                            <option value="2026">2026</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                        </select><br>
                                        <label for="DescriereJob">Descriere:</label><br><br>
                                        <textarea name="DescriereJob" form="form1" rows="16" cols="60"></textarea><br>
                                    </div>
                                </div>
                            </div>
                            <div class="yui-gf" bis_skin_checked="1">
                                <div class="yui-u first" bis_skin_checked="1">
                                    <h2>Educatie</h2>
                                </div>
                                <div class="yui-u" bis_skin_checked="1">
                                    <label for="Scoala">Scoala:</label><br>
                                    <input type="text" id="Scoala" name="Scoala" value=""><br>
                                </div>
                                <div class="yui-u" bis_skin_checked="1">
                                    <label for="DescriereEducatie">Descriere:</label><br><br>
                                    <textarea name="DescriereEducatie" form="form1" rows="16" cols="60"></textarea><br>
                                </div>
                                <div class="yui-u last" bis_skin_checked="1">
                                    <label for="Diploma">Diploma:</label><br>
                                    <input type="text" id="Diploma" name="Diploma" value=""><br>
                                </div>
                            </div>
                            <div class="yui-gf last" bis_skin_checked="1">
                                <div class="yui-u first" bis_skin_checked="1">
                                    <h2>Hobby-uri</h2>
                                </div>
                                <div class="yui-u" bis_skin_checked="1">
                                    <label for="Hobby1">#1:</label><br>
                                    <input type="text" id="Hobby1" name="Hobby1" value=""><br>
                                    <label for="Hobby2">#2:</label><br>
                                    <input type="text" id="Hobby2" name="Hobby2" value=""><br>
                                    <label for="Hobby3">#3:</label><br>
                                    <input type="text" id="Hobby3" name="Hobby3" value=""><br>
                                    <label for="Hobby4">#4:</label><br>
                                    <input type="text" id="Hobby4" name="Hobby4" value=""><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br> <a class="red" href="config1.php?id={$id}"><input type="submit" value="Submit" id="submit" onlick="first();"></a>
    </form>

</body>
_HTML_;
?>