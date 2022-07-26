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
    <head><title>&nbsp; </title>
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
<input type=hidden id="expname" name="expname" value="check">
<input type=hidden name="nextURL" id="nextURL" value=" ">
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;        </header>
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
 <strong>Before continuing to the next page, please answer the following questions about the text you just read:</strong>

 <br /><br />

How long has Mr. Miller been working as department store manager?
<br /><br />
<!-- Begin HTML Choice: name=test_1-->
<TABLE><TR><td align=center><INPUT TYPE=RADIO NAME='test_1' VALUE='1'></td><TD align=left>6 months</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='test_1' VALUE='2'></td><TD align=left>1 year</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='test_1' VALUE='3'></td><TD align=left>3 years</TD></TR></TABLE>
<!-- End HTML Choice: name=test_1-->
<br /><br />
How many employees did the department store have when Mr.Miller became its manager?
<br /><br />
<!-- Begin HTML Choice: name=test_2-->
<TABLE><TR><td align=center><INPUT TYPE=RADIO NAME='test_2' VALUE='1'></td><TD align=left>38</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='test_2' VALUE='2'></td><TD align=left>72</TD></TR></TABLE>
<!-- End HTML Choice: name=test_2-->
</p>

</div>
  <div id="container"  class="w3-white w3-container w3-col" style="width:90%">
            </div>
<div id="postHTML" class="w3-white w3-container">

</div>
<div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-right w3-round-xlarge" name="submit" id="submit" value="confirm">Next</button>
		</div>

        <footer class="w3-container w3-blue">
		<h4>&nbsp; </h4>
        </footer>
</div>
</FORM></body></html>
         <script type="text/javascript">     		//function that starts the page
	$(document).ready(function () { 
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
      			});
		});

  const btn = document.getElementById("submit");
  btn.onclick = function () {
    const rbs1 = document.querySelectorAll('input[name=test_1]');
    const rbs2 = document.querySelectorAll('input[name=test_2]');
    let selectedValue1;
    let selectedValue2;
    for (const rb of rbs1){
      if (rb.checked){
        selectedValue1 = rb.value;
        break;
      }
    }
    for (const rb of rbs2){
      if (rb.checked){
        selectedValue2 = rb.value;
        break;
      }
    }
    var s = document.getElementById("nextURL");
    if (selectedValue1 == 2 && selectedValue2 == 1){
      s.value= "pre_dec1_2.php";
    }
    else {
      alert('Not all questions have been answered correctly. Closing this message will redirect you to the text about Mr.Miller`s contract extension to re-read and look up the correct answer.');
      s.value = "intro_se_2.php";

    }
  }
        </script>
        </FORM></body></html>
    </body>
</html>