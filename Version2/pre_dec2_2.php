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
 ?> 
 <html>
    <head><title>MouselabWEB Survey</title>
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

chkFrm=true;
warningTxt="Some questions have not been answered. Please answer all questions before continuing!";
</SCRIPT>
<!--END set vars-->
<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">
 <INPUT type=hidden id='processData' name="procdata" value=""> 
   <!-- set all variables here -->
<input type=hidden id="expname" name="expname" value="pre_dec2">
<input type=hidden name="nextURL" id="nextURL" value="ML_boxes.php">
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;         </header>
        <div id="preHTML" class="w3-white w3-container">

<style>
p {
  padding-top: 30px;
  padding-right: 200px;
  padding-bottom: 10px;
  padding-left: 250px;
}
</style>
<p>       
<span style="font-size:19px;"><strong>Preliminary decision</span><br />
<br />
Please indicate how strongly you agree with the following statements:</strong><br />
<br />
<span style="font-size:16px;">Towards my preliminary decision I feel...</span><br />
<br />
<!-- Begin HTML Scale: name=SA_1-->
<TABLE width=80%><TR><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='1'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='2'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='3'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='4'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='5'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='6'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='7'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='8'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='9'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_1' VALUE='10'></td></TR><TR><td align=center>no conflict at all</td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center>maximum conflict</td></TR></TABLE>
<!-- End HTML Scale: name=SA_1--> <br />
<br />
<!-- Begin HTML Scale: name=SA_2-->
<TABLE width=80%><TR><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='1'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='2'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='3'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='4'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='5'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='6'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='7'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='8'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='9'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_2' VALUE='10'></td></TR><TR><td align=center>no indecision at all</td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center>maximum indecision</td></TR></TABLE>
<!-- End HTML Scale: name=SA_2--> <br />
<br />
<!-- Begin HTML Scale: name=SA_3-->
<TABLE width=80%><TR><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='1'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='2'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='3'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='4'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='5'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='6'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='7'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='8'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='9'></td><td width=10% align=center><INPUT TYPE=RADIO NAME='SA_3' VALUE='10'></td></TR><TR><td align=center>completely one-sided reactions</td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center></td><td align=center>completely mixed reactions</td></TR></TABLE>
<!-- End HTML Scale: name=SA_3--></p>
 <br />
<br />
</div>
  <div id="container"  class="w3-white w3-container w3-col" style="width:90%">
            </div>
<div id="postHTML" class="w3-white w3-container">
</div>
<div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-right w3-round-xlarge" name="submit" value="confirm">Next</button>
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
        </script>
        </FORM></body></html>
    </body>
</html>