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
<!--END set vars-->
<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">
 <INPUT type=hidden id='processData' name="procdata" value=""> 
   <!-- set all variables here -->
<input type=hidden id="expname" name="expname" value="ML_boxes">
<input type=hidden name="nextURL" id="nextURL" value="ml_sega.php">
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;        </header>
        <div id="preHTML" class="w3-white w3-container">


<h2 style="padding-right: 50px !important; padding-left: 100px !important;">Additional Information: Practice with boxes</h2>
<p style="padding-right: 200px !important; padding-left: 100px !important;"> Before you make a final decision, you have the chance to browse additional information about the decision: On the next page, you will be presented with expert statements that are either in favor of or against the extension of Mr. Miller's contract.</p>    
<p style="padding-left: 100px !important; padding-right: 200px !important;">The expert statements will be hidden behind boxes. You can look at the statements by moving the mouse pointer into the box. The box will open and you can see the information, until you move the mouse out of the box again.</p>
<p style="padding-left: 100px !important; padding-right: 200px !important;">The following practice task is designed to help you become familiar with moving the mouse over and out of the boxes.

Practice: Behind the boxes are three courses, taught by different professors. Look at the information in the boxes and answer the question below.
</p>


</div>
  <div id="container"  class="w3-white w3-container w3-col" style="width:90%; padding-left: 100px !important;">
            </div>
<div id="postHTML" class="w3-white w3-container">

<p style="padding-left: 100px !important;">What class does Professor Smith teach?</br></br>
<!-- Begin HTML Choice: name=course-->
<TABLE><TR><td align=center><INPUT TYPE=RADIO NAME='course' VALUE='Spanish'></td><TD align=left>Spanish</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='course' VALUE='Marketing'></td><TD align=left>Marketing</TD></TR><TR><td align=center><INPUT TYPE=RADIO NAME='course' VALUE='Philosophy'></td><TD align=left>Philosophy</TD></TR></TABLE>
<!-- End HTML Choice: name=course-->
</p>
</div>
<div class="w3-white w3-container w3-center w3-padding">
			<button class="confirm w3-button w3-right w3-round-xlarge" name="submit" value="confirm">Next</button>
		</div>
        <footer class="w3-container w3-blue">
		<h4>&nbsp; </h4>
        </footer>
</div>
         <script type="text/javascript">// here the json file to generate the trial, for a particular set in the json file is generated. If the third attribute is set to random, it will select an order at random.
			// if you enter a number, it will choose one of the orders using modulo of that number
 			// now taking the number from the condnum variable to set the order of the options
            o=$("#condnum").val();
			if (o<0) {o="random"};
           		generateTrial("json_files/ML_boxes.json", "dynSet", o);
     		//function that starts the page
	$(document).ready(function () { 
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
      			});
		});
        </script>
        </FORM></body></html>
    </body>
</html>