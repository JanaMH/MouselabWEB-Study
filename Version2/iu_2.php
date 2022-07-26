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

chkFrm=true;
warningTxt="Some questions have not been answered. Please answer all questions before continuing!";
</SCRIPT>
<!--END set vars-->
<FORM id="mlwebform" name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php">
 <INPUT type=hidden id='processData' name="procdata" value=""> 
   <!-- set all variables here -->
<input type=hidden id="expname" name="expname" value="">
<input type=hidden name="nextURL" id="nextURL" value="demo.php">
            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;         </header>
        <div id="preHTML" class="w3-white w3-container">

<br>
<div id="preHTML" class="w3-white w3-container" style="padding-left: 200px !important;">
<span style="font-size:14px;"><strong>Below, you will find a series of statements which describe how people may react to the uncertainties of life.</strong> <br>Please use the scale below to describe to what extent each item is characteristic of you.</span><br />
<br>
<br>
<div class="w3-row stickybar">
  <div class="w3-container w3-col w3-white w3-left-align w3-small" style="width: 25%;height: 50px">&nbsp;</div>
  <div class="w3-container w3-col w3-white w3-center w3-small" style="width: 20%;height: 70px" ><b>(1)<br> Not at all characteristic of me</b></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 5%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center w3-small" style="width: 10%;height: 60px" ></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 5%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center w3-small" style="width: 18%;height: 75px" ><b>(5)<br> Entirely character-<br>istic of me</b></div>
</div>
  <div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px">Unforeseen events upset me greatly.</div>
  <label class="label" for="IU1.1"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px"><input class="w3-radio" type="radio" name="IU1" value="1" id="IU1.1"></div> </label>
  <label class="label" for="IU1.2"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU1" value="2" id="IU1.2"></div></label>
  <label class="label" for="IU1.3"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU1" value="3" id="IU1.3">&nbsp;</div></label>
  <label class="label" for="IU1.4"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU1" value="4" id="IU1.4">&nbsp;</div></label>
  <label class="label" for="IU1.5"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU1" value="5" id="IU1.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >It frustrates me not having all the information I need.</div>
  <label class="label" for="IU2.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU2" value="1" id="IU2.1">&nbsp;</div></label>
  <label class="label" for="IU2.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU2" value="2" id="IU2.2">&nbsp;</div></label>
 <label class="label" for="IU2.3"> <div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU2" value="3" id="IU2.3">&nbsp;</div></label>
 <label class="label" for="IU2.4"> <div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU2" value="4" id="IU2.4">&nbsp;</div></label>
  <label class="label" for="IU2.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU2" value="5" id="IU2.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >Uncertainty keeps me from living a full life.</div>
  <label class="label" for="IU3.1"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU3" value="1" id="IU3.1">&nbsp;</div></label>
  <label class="label" for="IU3.2"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU3" value="2" id="IU3.2">&nbsp;</div></label>
 <label class="label" for="IU3.3"> <div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU3" value="3" id="IU3.3">&nbsp;</div></label>
  <label class="label" for="IU3.4"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU3" value="4" id="IU3.4">&nbsp;</div></label>
 <label class="label" for="IU3.5"> <div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU3" value="5" id="IU3.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >One should always look ahead so as to avoid surprises.</div>
  <label class="label" for="IU4.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU4" value="1" id="IU4.1">&nbsp;</div></label>
  <label class="label" for="IU4.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU4" value="2" id="IU4.2">&nbsp;</div></label>
  <label class="label" for="IU4.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU4" value="3" id="IU4.3">&nbsp;</div></label>
  <label class="label" for="IU4.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU4" value="4" id="IU4.4">&nbsp;</div></label>
  <label class="label" for="IU4.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU4" value="5" id="IU4.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >A small unforeseen event can spoil everything, even with the best planning.</div>
  <label class="label" for="IU5.1"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU5" value="1" id="IU5.1">&nbsp;</div></label>
  <label class="label" for="IU5.2"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU5" value="2" id="IU5.2">&nbsp;</div></label>
  <label class="label" for="IU5.3"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU5" value="3" id="IU5.3">&nbsp;</div></label>
  <label class="label" for="IU5.4"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU5" value="4" id="IU5.4">&nbsp;</div></label>
  <label class="label" for="IU5.5"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU5" value="5" id="IU5.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-blue w3-small" style="width: 30%;height: 50px" >When it’s time to act, uncertainty paralyses me.</div>
  <label class="label" for="IU6.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU6" value="1" id="IU6.1">&nbsp;</div></label>
  <label class="label" for="IU6.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU6" value="2" id="IU6.2">&nbsp;</div></label>
  <label class="label" for="IU6.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU6" value="3" id="IU6.3">&nbsp;</div></label>
  <label class="label" for="IU6.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU6" value="4" id="IU6.4">&nbsp;</div></label>
  <label class="label" for="IU6.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU6" value="5" id="IU6.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >When I am uncertain, I can’t function very well.</div>
  <label class="label" for="IU7.1"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU7" value="1" id="IU7.1">&nbsp;</div></label>
  <label class="label" for="IU7.2"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU7" value="2" id="IU7.2">&nbsp;</div></label>
  <label class="label" for="IU7.3"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU7" value="3" id="IU7.3">&nbsp;</div></label>
  <label class="label" for="IU7.4"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU7" value="4" id="IU7.4">&nbsp;</div></label>
  <label class="label" for="IU7.5"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU7" value="5" id="IU7.5">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" > I always want to know what the future has in store for me.</div>
  <label class="label" for="IU8.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU8" value="1" id="IU8.1">&nbsp;</div></label>
  <label class="label" for="IU8.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU8" value="2" id="IU8.2">&nbsp;</div></label>
  <label class="label" for="IU8.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU8" value="3" id="IU8.3">&nbsp;</div></label>
  <label class="label" for="IU8.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU8" value="4" id="IU8.4">&nbsp;</div></label>
  <label class="label" for="IU8.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU8" value="5" id="IU8.5">&nbsp;</div></label>
 </div>
 <div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I can’t stand being taken by surprise.</div>
  <label class="label" for="IU9.1"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU9" value="1" id="IU9.1">&nbsp;</div></label>
  <label class="label" for="IU9.2"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU9" value="2" id="IU9.2">&nbsp;</div></label>
  <label class="label" for="IU9.3"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU9" value="3" id="IU9.3">&nbsp;</div></label>
  <label class="label" for="IU9.4"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU9" value="4" id="IU9.4">&nbsp;</div></label>
  <label class="label" for="IU9.5"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU9" value="5" id="IU9.5">&nbsp;</div></label>
</div>  
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >The smallest doubt can stop me from acting.</div>
  <label class="label" for="IU10.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU10" value="1" id="IU10.1">&nbsp;</div></label>
  <label class="label" for="IU10.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU10" value="2" id="IU10.2">&nbsp;</div></label>
  <label class="label" for="IU10.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU10" value="3" id="IU10.3">&nbsp;</div></label>
  <label class="label" for="IU10.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU10" value="4" id="IU10.4">&nbsp;</div></label>
  <label class="label" for="IU10.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU10" value="5" id="IU10.5">&nbsp;</div></label>
 </div> 
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I should be able to organize everything in advance.</div>
  <label class="label" for="IU11.1"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU11" value="1" id="IU11.1">&nbsp;</div></label>
  <label class="label" for="IU11.2"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU11" value="2" id="IU11.2">&nbsp;</div></label>
  <label class="label" for="IU11.3"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU11" value="3" id="IU11.3">&nbsp;</div></label>
  <label class="label" for="IU11.4"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU11" value="4" id="IU11.4">&nbsp;</div></label>
  <label class="label" for="IU11.5"><div class="w3-container w3-col w3-gray w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU11" value="5" id="IU11.5">&nbsp;</div></label>
  </div>
  <div class="w3-row ">
 <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I must get away from all uncertain situations.</div>
  <label class="label" for="IU12.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU12" value="1" id="IU12.1">&nbsp;</div></label>
  <label class="label" for="IU12.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU12" value="2" id="IU12.2">&nbsp;</div></label>
  <label class="label" for="IU12.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU12" value="3" id="IU12.3">&nbsp;</div></label>
  <label class="label" for="IU12.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU12" value="4" id="IU12.4">&nbsp;</div></label>
  <label class="label" for="IU12.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 10%;height: 50px" ><input class="w3-radio" type="radio" name="IU12" value="5" id="IU12.5">&nbsp;</div></label>
  </div>


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
  </FORM></body></html>
         <script type="text/javascript">     		//function that starts the page
	$(document).ready(function () { 
		$(".confirm").click(function (event) {
			if (choice=="" && $(".choiceButton").length>0) {event.preventDefault();return false;}
      			});
		});
        </script>

    </body>
</html>