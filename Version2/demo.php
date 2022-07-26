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
<input type=hidden id="expname" name="expname" value="demo">
<input type=hidden name="nextURL" id="nextURL" value="thanks.php">
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h1>&nbsp;         </header>
        <div id="preHTML" class="w3-white w3-container">
        <style>
p {
  padding-top: 10px;
  padding-right: 150px;
  padding-bottom: 20px;
  padding-left: 200px;
}
</style>
<p>
<strong>This concluded the main part of the study. Now, we would like you to answer some final questions.</strong>
<br />
<br />
<strong>I am ...</strong>
<br />
<!-- Begin HTML Choice: name=gender-->
<TABLE><TR><td align=center><INPUT TYPE=RADIO NAME='gender' VALUE='1'></td><TD align=left>male</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='gender' VALUE='2'></td><TD align=left>female</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='gender' VALUE='3'></td><TD align=left>other</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='gender' VALUE='4'></td><TD align=left>rather not say</TD></TR></TABLE>
<!-- End HTML Choice: name=gender-->
<br />
<strong>Age (please use whole numbers):</strong>
<br />
<INPUT type=Text size=3 name='age' value=''>
<br />
<br />
<strong>Is English your native language (i.e. the first language you learned as a child)?</strong>
<br />
<!-- Begin HTML Choice: name=native language-->
<TABLE><TR><td align=center><INPUT TYPE=RADIO NAME='language' VALUE='1'></td>
<TD align=left>Yes</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='language' VALUE='2'></td><TD align=left>No</TD></TR></TABLE>
    <!-- End HTML Choice: name=native language-->

<br />
<strong>Were you able to read the whole text hidden behind each box (i.e. the text was not cut-off or extended beyond the borders of the box)?</strong>
<br />(Your answer will not affect your HIT acceptance.)<br /><br />
<!-- Begin HTML Choice: name=control-->
<TABLE><TR><td align=center><INPUT TYPE=RADIO NAME='control' VALUE='1'></td>
<TD align=left>Yes, I was able to read the text hidden behind each box.</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='control' VALUE='2'></td><TD align=left>No, some text was cut-off and/or extendend beyond the border of the box.</TD></TR></TABLE>
    <!-- End HTML Choice: name=control-->
<br />
<strong>What do you think this study was about?</strong>
<br />
<TEXTAREA cols=80 rows=3 name='about'></TEXTAREA>
<br />
<br />
<strong>Do you have any comments on this study?</strong>
<br />
<TEXTAREA cols=80 rows=3 name='comment'></TEXTAREA>
</p>
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
        </FORM></body></html>
</div>
         <script type="text/javascript">     		//function that starts the page
	$(document).ready(function () { 
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
      			});
		});
        </script>
    </body>
</html>