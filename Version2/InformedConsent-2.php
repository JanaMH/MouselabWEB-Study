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

 if (isset($_GET['subject_cond']))
{$subject_cond=$_GET['subject_cond'];}
 else {
   if (isset($_SESSION['subject_cond'])) {$subject_cond=$_SESSION['subject_cond'];$_SESSION['subject_cond']=$subject_cond;}
}

 ?> 
 <html>
    <head><title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script src="jquery.foggy.min.js"></script>
        <script language="javascript" src="mlweb20.js"></script>
        <link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		
	</head> 
    <body class="w3-light-grey w3-content" style="max-width:1600px" onLoad="timefunction('onload', 'body', 'body')">
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
<input type=hidden id="expname" name="expname" value="InformedConsent">
<input type=hidden name="nextURL" id="nextURL"  value=" ">

<script language="javascript">

var x = "<?php echo"$subject_cond"?>";
var s = document.getElementById("nextURL");
if (x == 1) {s.value = "ta_2.php";}
else {s.value = "intro_transition.php";}

</script>


<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>  &nbsp;       </header>
        <div id="preHTML" class="w3-white w3-container">
        <style>
p {
  padding-top: 10px;
  padding-right: 200px;
  padding-bottom: 10px;
  padding-left: 150px;
}
</style>

<p><span style="font-size:16px;"><strong><u>Basic information on data protection</u></strong></span><br>
<br>
<span style="font-size:14px;">Generally, we assess and process participants‘ personal data only after your consent. 
The aim of the assessment and processing of these data is the conduction of this research project. 
Anonymity and confidentiality of your data is ensured at all times in accordance with current data protection laws as well as psychological 
research ethics. We will not collect your IP-address. All data will be saved password-protected, will be protected against unauthorized access and shall not be kept longer 
than is necessary for that purpose.  We will store your data at least ten years.
Moreover, we will publish an anonymized data set on an online repository in order to ensure transparency in science. To participate in this study, you have to agree to the consent form provided at the end.</span><br>
<br>
<span style="font-size:14px;">In case you have questions on this declaration of data protection, please contact the project managers 
or the data protection officer. According to the EU General Data Protection Regulation (GDPR) and the respective national data protection 
laws and other regulations, responsible is the University of Cologne or the leading researcher: Jana Hohnsbehn, Tel.: +49 -221-470-6511, E-Mail: <a href="mailto:j.hohnsbehn@uni-koeln.de">j.hohnsbehn@uni-koeln.de</a>
Contact of the data protection officer of the University of Cologne: phone: 0221 / 470-3872; email: <a href="mailto:dsb@verw.uni-koeln.de">dsb@verw.uni-koeln.de</a><br>
Further information on data protection: <a href="https://portal.uni-koeln.de/en/privacy-protection-statement">https://portal.uni-koeln.de/en/privacy-protection-statement</a></span><br><br>

<span style="font-size:14px;">Your participation in this study is completely voluntary, and you may refuse to
participate or withdraw from the study at any time. If you stop working on the study
before the study is completed, please contact me via email (<a href="mailto:j.hohnsbehn@uni-koeln.de">j.hohnsbehn@uni-koeln.de</a>)
and let me know when you stopped working on the study (e.g. via a screenshot or an
estimate of the time you spent on the study). You will receive partial compensation via
an individual bonus payment.
<br><br>
<span style="font-size:16px;"><u><strong>Declaration of consent</strong></u></span><br>
<br>
<span style="font-size:14px;">I hereby confirm that I am participating in this study on a voluntary basis. 
I am aware that I can quit the study at any time without indicating any reasons [by closing my browser window]. 
I will thus lose any claims for the receipt of payment. After completion of the study, 
I have the right to be informed about the background, aims and results of the study. 
I am aware that I can assert this right by asking for the relevant information. 
The corresponding contact address will be indicated at the end of the study.</span><br>
<br>
<span style="font-size:14px;">My anonymity will remain assured at all times. Data will be used for scientific purposes only and will be saved only for data analysis. Conclusions regarding individual participants are not possible. My anonymized data will be made available for secondary use by third parties in order to ensure transparency in science. The aim, purpose and extent of this secondary use are not yet foreseeable.<br>
<br>
<strong>I have read and understood the above-mentioned points and consent to the terms of participation.</strong></span></p>




</div>
  <div id="container"  class="w3-white w3-container w3-col" style="width:90%">
            </div>
<div id="postHTML" class="w3-white w3-container">



</div>
<div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-center w3-round-xlarge" name="submit" value="confirm"><strong>Yes, I consent</strong></button>
		</div>
        <footer class="w3-container w3-blue">
		<h4>&nbsp;</h4>
        </footer>
</div>
         <script type="text/javascript">     		//function that starts the page
	$(document).ready(function () { 
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
      			});
		});
        </script>
        </FORM></body></html>
    </body>
</html>