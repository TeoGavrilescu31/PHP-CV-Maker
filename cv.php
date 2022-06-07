
<?php
$version = "0.1";
$secret = 'mysecret';

$con = mysqli_connect('localhost', 'root', '', 'db_proiect_pwebc');


$url = $_SERVER['REQUEST_URI'];

$url_components = parse_url($url);
parse_str($url_components['query'], $params);


$sql = "Select * from `tbl_cv_maker` where id = {$params['id']}";
$rs = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($rs)) {
	$my_nume = $row['Nume'];
	$my_title1 = $row['Titlu'];
	$my_dataNastere = $row['DataNastere'];
	$my_telefon = $row['Telefon'];
	$my_email = $row['Email'];
	$my_profil = $row['Profil'];
	$my_Aptitudine1 = $row['Aptitudine1'];
	$my_DescriereApt1 = $row['DescriereApt1'];
	$my_Aptitudine2 = $row['Aptitudine2'];
	$my_DescriereApt2 = $row['DescriereApt2'];
	$my_Aptitudine3 = $row['Aptitudine3'];
	$my_DescriereApt3 = $row['DescriereApt3'];
	$my_angajator = $row['Angajator'];
	$my_titluJob = $row['TitluJob'];
	$my_anJob = $row['AnJob'];
	$my_descriereJob = $row['DescriereJob'];
	$my_scoala = $row['Scoala'];
	$my_descriereEducatie = $row['DescriereEducatie'];
	$my_diploma = $row['Diploma'];
	$my_hobby1 = $row['Hobby1'];
	$my_hobby2 = $row['Hobby2'];
	$my_hobby3 = $row['Hobby3'];
	$my_hobby4 = $row['Hobby4'];


}
$my_birth_year = substr($my_dataNastere, 0, 4);

$title = "$my_nume | $my_title1 | $my_email";

$personnal_infos_full = array(
	birth_years_old($my_birth_year) . ' years old',
	'Tel :0' . $my_telefon);

// HTML Header
function cv_header($lang, $my_title1, $version, $my_nume)
{
	print <<<_HTML_
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>$my_title1</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Generated with phpCV v$version, made by Pierre Mavro -->

	<meta name="generator" content="phpCV v$version" />
	<meta name="keywords" content="CV, Curriculum Vitae, $my_nume" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>
<div class="signout">
<a href="logout.php" class="btn btn-danger ml-3"><p style="font-size:17px;">Iesire din cont</p></a>
</div>

_HTML_;
}

// Calcul varsta
function birth_years_old($my_birth_year)
{
	$today['year'] = date('Y');
	$my_age = $today['year'] - $my_birth_year;
	return $my_age;
}

function cv_name($my_nume, $my_title1, $personnal_infos_full)
{
	print <<<_HTML_
	<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>$my_nume</h1>
					<h2>$my_title1</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">

_HTML_;

	foreach ($personnal_infos_full as $line) {
		print "\n\t\t\t\t\t\t<h3 align=\"center\">" . $line . "</h3>";
	}


	print <<<_HTML_
					</div>
				</div>
			</div>
		</div>

_HTML_;
}

function main_start()
{
	print <<<_HTML_
		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

_HTML_;
}

function cv_profile($my_title1, $my_profil)
{
	print <<<_HTML_
					<div class="yui-gf">
					<div class="yui-u first" bis_skin_checked="1">
					<h2>Profil</h2>
				</div>
						<div class="yui-u">
							<p class="enlarge">
							$my_profil
							</p>
						</div>
					</div>

_HTML_;
}

function cv_skills($my_Aptitudine1, $my_DescriereApt1, $my_Aptitudine2, $my_DescriereApt2, $my_Aptitudine3, $my_DescriereApt3)
{
	print <<<_HTML_
						<div class="yui-gf">
						<div class="yui-u first">
							<h2>Aptitudini</h2>
						</div>
						<div class="yui-u">
								<div class="talent">
									<h2>$my_Aptitudine1</h2>
									<p>$my_DescriereApt1</p>
								</div>

								<div class="talent">
									<h2>$my_Aptitudine2</h2>
									<p>$my_DescriereApt2</p>
								</div>

								<div class="talent">
									<h2>$my_Aptitudine3</h2>
									<p>$my_DescriereApt3</p>
								</div>
						</div>
					</div>

_HTML_;
}




function cv_experience($my_titluJob, $my_descriereJob)
{
	print <<<_HTML_
					<div class="yui-gf">

					<div class="yui-u first" bis_skin_checked="1">
					<h2>Experienta de munca</h2>
				</div>
						<div class="yui-u">
							<h2>$my_titluJob</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
							$my_descriereJob
							</p>
						</div>
					</div>

_HTML_;
}

function cv_education($my_scoala, $my_descriereEducatie)
{
	print <<<_HTML_
					<div class="yui-gf">
					<div class="yui-u first" bis_skin_checked="1">
					<h2>Educatie</h2>
				</div>
						<div class="yui-u">
							<h2>$my_scoala</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
							$my_descriereEducatie
							</p>
						</div>
					</div>

_HTML_;
}

function cv_hobby($my_hobby1, $my_hobby2, $my_hobby3, $my_hobby4)
{
	print <<<_HTML_
					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Hobby-uri</h2>
						</div>
						<div class="yui-u">
							<h2>$my_hobby1</h2>
						</div>
						<div class="yui-u">
							<h2>$my_hobby2</h2>
						</div>
						<div class="yui-u">
							<h2>$my_hobby3</h2>
						</div>
						<div class="yui-u last">
							<h2>$my_hobby4</h2>
						</div>
						<div class="yui-u">

_HTML_;
}

function main_stop($my_nume)
{
	print <<<_HTML_
				</div>
			</div>
		</div>

_HTML_;


	print "\t\t<div id=\"ft\">\n";
	print "\t\t\t<p>" . "$my_nume" . " - <a href=\"http://" . $_SERVER["SERVER_NAME"] . "\">http://" . $_SERVER["SERVER_NAME"] . "</a></p><br />\n";
	print "\t\t</div>\n";

	print <<<_HTML_
	</div>
</div>

<div class="back">
<a href="index.php" class="btn btn-danger ml-3"><p style="font-size:27px; text-align:center;">Go back!</p></a>
</div>
</body>
</html>
_HTML_;
}


// Header
cv_header($lang, $title, $version, $my_nume);
// Name, Logo, Personnal informations
cv_name($my_nume, $my_title1, $personnal_infos_full);
// Do not remove main start
main_start();
// Profile
cv_profile($my_title1, $my_profil);

cv_skills($my_Aptitudine1, $my_DescriereApt1, $my_Aptitudine2, $my_DescriereApt2, $my_Aptitudine3, $my_DescriereApt3);

cv_experience($my_titluJob, $my_descriereJob);

cv_education($my_scoala, $my_descriereEducatie);

cv_hobby($my_hobby1, $my_hobby2, $my_hobby3, $my_hobby4);

main_stop($my_nume);
?>
