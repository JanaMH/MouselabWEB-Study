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

chkFrm=true;
warningTxt="Some questions have not been answered. Please answer all questions before continuing!";
</SCRIPT>
<!--END set vars-->
<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">
 <INPUT type=hidden id='processData' name="procdata" value=""> 
   <!-- set all variables here -->
<input type=hidden id="expname" name="expname" value="test1">
<input type=hidden name="nextURL" value="check-2.php">
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;         </header>
        <div id="preHTML" class="w3-white w3-container">
 <style>
p {
  padding-top: 5px;
  padding-right: 250px;
  padding-bottom: 0px;
  padding-left: 250px;
}
</style>
<p span style="font-size:18px;"><strong>Decision-making scenario<br /><br /> Mr. Miller's contract extension - Part 2</strong></span><br />
<br />
<span style="font-size:18px;">In his first year of employment at the department store, Mr. Miller has succeeded in attracting a number of new customers through unconventional advertising campaigns. Whether the expansion of the product range to include "young fashion" will be successful remains to be seen in view of the strong competition. In any case, the range of men's and women's clothing put together by Mr. Miller has not been accepted by large parts of the regular clientele. The large stocks still available at the end of the season could therefore only be sold off by granting substantial price reductions.<br />
<br />
The remodeling of the department store carried out by Mr. Miller has met with a divided response from customers. Some praise the more contemporary design of the floor space, while others criticize the greater clutter.
Overall, Mr. Miller's decisions have not significantly changed the business situation, i.e., there have been no major gains, but no losses either.
<br />
<br />
However, his management style was perceived by many longstanding employees as too brash and disrespectful. In some cases, this led to considerable conflicts. As a result, very costly termination agreements had to be concluded with some department heads.<br />
<br />

<strong>If you feel you have a good idea of the situation, please click "Next".</strong></p>
 
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
    </FORM></body></html>
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