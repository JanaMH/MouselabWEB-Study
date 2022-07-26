<?php
// 		save.php: saves MouselabWEB data in database
//
//       v 2.00 Nov 2017 
//
//     (c) 2003-2017 Martijn C. Willemsen and Eric J. Johnson 
//
//    This program is free software; you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation; either version 2 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program; if not, write to the Free Software
//    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
ob_start();
include('mlwebdb.inc.php');
session_start();

$expname = "";
$subject = "";
$condnum = "";
$choice = "";
$procdata = "";
$nextURL = "";
$addvar = "";
$adddata = "";
$subject_cond ="";
$mturkcode ="";

foreach ($_POST as $key => $value) { 
     switch ($key) {
			case "expname":
				$expname = $value;
				break;
			case "subject":
				$subject = $value;
				break;
			case "condnum":
				$condnum= $value;
				break;
			case "choice":
				$choice= $value;
				break;
			case "procdata":
				$procdata= mysqli_real_escape_string($link,$value);
				break;
			case "nextURL":
				$nextURL= $value;
				break;
			case "to_email":
				// ignore emailaddress 
				break;
			case "subject_cond":
				$subject_cond= $value;
				break;
			case "mturkcode":
				$mturkcode= $value;
				break;
			default:
			$addvar .= mysqli_real_escape_string($link,$key).";";
			$adddata .= "\"".mysqli_real_escape_string($link,$value)."\";" ; 
			}	
    }
	
$ipstr = "anonymous";//$_SERVER['REMOTE_ADDR']; //

$sqlquery = "select MAX(id) from $table";
$result = mysqli_query($link, $sqlquery);

$id = mysqli_fetch_array($result)[0];
if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
if (is_null($id)) $id=0; else $id++; 

$subject_cond = rand(0, 1);

//function buchstabe() { 
//   $buchstabe = chr( mt_rand( 65 , 90 ) ); 
//   return $buchstabe; 
//}
 
//$zufallszahl1 = rand(101,600);
//$buchstabe1 = buchstabe();
//$mturkcode = "ML" . $zufallszahl1 . $buchstabe1; 

$sqlquery = "INSERT INTO $table (id, expname, subject, ip, condnum, choice, submitted, procdata, addvar, adddata, subject_cond) VALUES ($id,'$expname','$subject','$ipstr', $condnum,'$choice',NOW(),'$procdata', '$addvar', '$adddata', '$subject_cond')";
$result = mysqli_query($link, $sqlquery);
mysqli_close($link);

//overrule session variable with form output
if ($_SESSION['subject']!=$subject) {$_SESSION['subject']=$subject;}
if ($_SESSION['condnum']!=$condnum) {$_SESSION['condnum']=$condnum;}
if (!isset($_SESSION['subject_cond'])) {$_SESSION['subject_cond']=$subject_cond;}

/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/$nextURL");
ob_end_flush();
exit; 
?>