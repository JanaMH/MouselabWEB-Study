<?php
session_start();

if (isset($_GET['subject'])) 
{$subject=$_GET['subject'];$_SESSION['subject']=$subject;} 
else {
 if (isset($_SESSION['subject'])) {$subject=$_SESSION['subject'];}
 else {$subject='anonymous';};}
 if (isset($_GET['condnum']))
{$condnum=$_GET['condnum'];}
 else {
	 if (isset($_SESSION['condnum'])) {$condnum=$_SESSION['condnum'];$_SESSION['condnum']=$condnum;}
	else {$condnum=-1;};
	}


    if (!isset($_SESSION['subjectcode'])) {
        function buchstabe() { 
            $buchstabe = chr( mt_rand( 65 , 90 ) ); 
            return $buchstabe; 
         }
          
         $zufallszahl1 = rand(101,600);
         $buchstabe1 = buchstabe();
         $val = "ML" . $zufallszahl1 . $buchstabe1; 
         
        $_SESSION['subjectcode']=$val; 

    } 
 ?> 
 <html>
    <head><title>University of Cologne</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script src="jquery.foggy.min.js"></script>
        <script language="javascript" src="mlweb20.js"></script>
        <link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	</head> 
    <body class="w3-light-grey w3-content" style="max-width:1400px" onLoad="timefunction('onload', 'body', 'body')">
<!--BEGIN set vars--><script language="javascript">
//override defaults
mlweb_outtype="CSV";
mlweb_fname="mlwebform";

chkFrm=false;
warningTxt="Some questions have not been answered. Please answer all questions before continuing!";
</SCRIPT>
<!--END set vars-->
<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">

 <INPUT type=hidden id='processData' name="procdata" value=""> 
   <!-- set all variables here -->
<input type=hidden id="expname" name="expname" value="welcome">
<input type=hidden name="nextURL" id="nextURL" value="InformedConsent-2.php"> 
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($_SESSION['subjectcode'])?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
      <input type=hidden id="screenres" name="screenres" value="">

            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;       </header> <!-- changed the header to still have same size but no text -->
<div id="preHTML" class="w3-white w3-container">
<style>
p {
  padding-top: 20px;
  padding-right: 200px;
  padding-bottom: 20px;
  padding-left: 200px;
}
</style>
<p style="text-align: left; font-size: 19px; margin-top: 0px !important; margin-bottom: 0px !important; padding-top: 20px !important;"><strong>Dear participant,</strong><br>
<br>
Thank you for your interest in our study. It takes <strong>approximately 10&nbsp;minutes</strong>  and you will be paid <strong> $2.00&nbsp;on MTurk</strong>  for completing it. At the end of the study, 
you will be given a unique completion code. Please enter your unique completion code in the form on MTurk and submit it.<br><br>

In this study, we would like you to work on a decision scenario as well as to answer some questions about yourself.

Your data will be anonymously evaluated and are only used for scientific purposes. If you have any questions or suggestions, feel free to contact us via <a href="mailto:j.hohnsbehns@uni-koeln.de" target="_blank">j.hohnsbehn@uni-koeln.de</a>.
<br><br>
To make sure that the website is correctly displayed, <strong>please put your browser window in full-screen mode!</strong>
<br><br>
Please only participate if <strong>English is your native language</strong> (i.e., the first language you learned as a child)
<br><br>
Please click "Next" to start the study.
<br><br>
Social and Economic Cognition III Team<br>
University of Cologne&nbsp;





</div>
  <div id="container"  class="w3-white w3-container w3-col" style="width:90%">
            </div>
<div id="postHTML" class="w3-white w3-container">
</div>
<div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-right w3-round-xlarge" name="submit" value="confirm"><span style="font-size:19px;">Next</span></button>
		</div>
        <footer class="w3-container w3-blue">
		<h4>&nbsp; </h4>
        </footer>
</div>
         <script type="text/javascript">     		//function that starts the page
	$(document).ready(function () { 
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
      			});
		});

//get screen resolution, save it in a hidden input
document.getElementById("screenres").value = window.screen.width + "x" + window.screen.height;


        </script>
        </FORM></body></html>
    </body>
</html>



