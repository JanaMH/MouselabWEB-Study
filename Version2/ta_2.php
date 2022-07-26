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
    <head><title>MouselabWEB survey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script src="jquery.foggy.min.js"></script>
        <script language="javascript" src="mlweb20.js"></script>
        <link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		
	</head> 
    <body class="w3-light-grey w3-content" style="max-width:1000px" onLoad="timefunction('onload', 'body', 'body')">
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
<input type=hidden id="expname" name="expname" value="ta">
<input type=hidden name="nextURL" id="nextURL" value="">


<script language="javascript">

var x = "<?php echo"$subject_cond"?>";
var s = document.getElementById("nextURL");
if (x == 1) {s.value = "intro_transition.php";}
else {s.value = "iu_2.php";}

</script>
<input type=hidden name="to_email" value="">            <!--these will be set by the script -->
			<input type=hidden name="subject" value="<?php echo($subject)?>">
			<input type=hidden id="condnum" name="condnum" value="<?php echo($condnum)?>">
            <input id="choice" type=hidden name="choice" value="">
         <header class="w3-container w3-blue">
    <h6>&nbsp;        </header>
        <div id="preHTML" class="w3-white w3-container">

	
	<br />
  <div id="preHTML" class="w3-white w3-container" >
<span style="font-size:14px;"><strong>Please indicate for each statement, how much it applies to you.</strong> </br>There are no right or wrong answers, we are interested in your personality.</span><br />
<br />
	<br />
	

<div class="w3-row stickybar">
  <div class="w3-container w3-col w3-white w3-left-align w3-small" style="width: 30%;height: 50px"></div>
  <div class="w3-container w3-col w3-white w3-center w3-small" style="width: 8%;height: 70px" ><b>Does not apply to me at all</b></b></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 7%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 7%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 7%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 7%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center" style="width: 5%;height: 50px" ></div>
  <div class="w3-container w3-col w3-white w3-center w3-small" style="width: 8%;height: 50px" ><b>Strongly applies to me</b></div>
</div>
  <div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px">My thoughts are often contradictory.</div>
  <label class="label" for="TA1.1"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="1" id="TA1.1">&nbsp;</div></label>
  <label class="label" for="TA1.2"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="2" id="TA1.2">&nbsp;</div></label>
  <label class="label" for="TA1.3"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="3" id="TA1.3">&nbsp;</div></label>
  <label class="label" for="TA1.4"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="4" id="TA1.4">&nbsp;</div></label>
  <label class="label" for="TA1.5"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="5" id="TA1.5">&nbsp;</div></label>
  <label class="label" for="TA1.6"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="6" id="TA1.6">&nbsp;</div></label>
  <label class="label" for="TA1.7"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA1" value="7" id="TA1.7">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >Many topics make me feel conflicted.</div>
  <label class="label" for="TA2.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="1" id="TA2.1">&nbsp;</div></label>
  <label class="label" for="TA2.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="2" id="TA2.2">&nbsp;</div></label>
  <label class="label" for="TA2.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="3" id="TA2.3">&nbsp;</div></label>
  <label class="label" for="TA2.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="4" id="TA2.4">&nbsp;</div></label>
  <label class="label" for="TA2.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="5" id="TA2.5">&nbsp;</div></label>
  <label class="label" for="TA2.6"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="6" id="TA2.6">&nbsp;</div></label>
  <label class="label" for="TA2.7"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA2" value="7" id="TA2.7">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I usually see both the positive as well as the negative side of things.</div>
  <label class="label" for="TA3.1"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="1" id="TA3.1">&nbsp;</div></label>
  <label class="label" for="TA3.2"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="2" id="TA3.2">&nbsp;</div></label>
  <label class="label" for="TA3.3"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="3" id="TA3.3">&nbsp;</div></label>
  <label class="label" for="TA3.4"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="4" id="TA3.4">&nbsp;</div></label>
  <label class="label" for="TA3.5"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="5" id="TA3.5">&nbsp;</div></label>
  <label class="label" for="TA3.6"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="6" id="TA3.6">&nbsp;</div></label>
  <label class="label" for="TA3.7"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA3" value="7" id="TA3.7">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I often experience both sides of an issue pulling on me.</div>
  <label class="label" for="TA4.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="1" id="TA4.1">&nbsp;</div></label>
  <label class="label" for="TA4.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="2" id="TA4.2">&nbsp;</div></label>
  <label class="label" for="TA4.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="3" id="TA4.3">&nbsp;</div></label>
  <label class="label" for="TA4.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="4" id="TA4.4">&nbsp;</div></label>
  <label class="label" for="TA4.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="5" id="TA4.5">&nbsp;</div></label>
  <label class="label" for="TA4.6"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="6" id="TA4.6">&nbsp;</div></label>
  <label class="label" for="TA4.7"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA4" value="7" id="TA4.7">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I often find that there are pros and cons to everything.</div>
  <label class="label" for="TA5.1"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="1" id="TA5.1">&nbsp;</div></label>
  <label class="label" for="TA5.2"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="2" id="TA5.2">&nbsp;</div></label>
  <label class="label" for="TA5.3"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="3" id="TA5.3">&nbsp;</div></label>
  <label class="label" for="TA5.4"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="4" id="TA5.4">&nbsp;</div></label>
  <label class="label" for="TA5.5"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="5" id="TA5.5">&nbsp;</div></label>
  <label class="label" for="TA5.6"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="6" id="TA5.6">&nbsp;</div></label>
  <label class="label" for="TA5.7"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA5" value="7" id="TA5.7">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I often feel torn between two sides of an issue.</div>
  <label class="label" for="TA6.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="1" id="TA6.1">&nbsp;</div></label>
  <label class="label" for="TA6.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="2" id="TA6.2">&nbsp;</div></label>
  <label class="label" for="TA6.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="3" id="TA6.3">&nbsp;</div></label>
  <label class="label" for="TA6.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="4" id="TA6.4">&nbsp;</div></label>
  <label class="label" for="TA6.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="5" id="TA6.5">&nbsp;</div></label>
  <label class="label" for="TA6.6"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="6" id="TA6.6">&nbsp;</div></label>
  <label class="label" for="TA6.7"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA6" value="7" id="TA6.7">&nbsp;</div></label>
</div>
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 60px" >Most of the time, my thoughts and feelings are not necessarily in accordance with each other.</div>
  <label class="label" for="TA7.1"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="1" id="TA7.1">&nbsp;</div></label>
  <label class="label" for="TA7.2"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="2" id="TA7.2">&nbsp;</div></label>
  <label class="label" for="TA7.3"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="3" id="TA7.3">&nbsp;</div></label>
  <label class="label" for="TA7.4"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="4" id="TA7.4">&nbsp;</div></label>
  <label class="label" for="TA7.5"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="5" id="TA7.5">&nbsp;</div></label>
  <label class="label" for="TA7.6"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="6" id="TA7.6">&nbsp;</div></label>
  <label class="label" for="TA7.7"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA7" value="7" id="TA7.7">&nbsp;</div></label>
 </div>
 <div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 60px" >Sometimes when I think about a topic, it almost feels like I am physically switching from side to side.</div>
  <label class="label" for="TA8.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="1" id="TA8.1">&nbsp;</div></label>
  <label class="label" for="TA8.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="2" id="TA8.2">&nbsp;</div></label>
  <label class="label" for="TA8.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="3" id="TA8.3">&nbsp;</div></label>
  <label class="label" for="TA8.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="4" id="TA8.4">&nbsp;</div></label>
  <label class="label" for="TA8.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="5" id="TA8.5">&nbsp;</div></label>
  <label class="label" for="TA8.6"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="6" id="TA8.6">&nbsp;</div></label>
  <label class="label" for="TA8.7"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 60px" ><input class="w3-radio" type="radio" name="TA8" value="7" id="TA8.7">&nbsp;</div></label>
</div>  
<div class="w3-row">
  <div class="w3-container w3-col w3-grey w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >My feelings are often simultaneously positive and negative.</div>
  <label class="label" for="TA9.1"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="1" id="TA9.1">&nbsp;</div></label>
  <label class="label" for="TA9.2"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="2" id="TA9.2">&nbsp;</div></label>
  <label class="label" for="TA9.3"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="3" id="TA9.3">&nbsp;</div></label>
  <label class="label" for="TA9.4"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="4" id="TA9.4">&nbsp;</div></label>
  <label class="label" for="TA9.5"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="5" id="TA9.5">&nbsp;</div></label>
  <label class="label" for="TA9.6"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="6" id="TA9.6">&nbsp;</div></label>
  <label class="label" for="TA9.7"><div class="w3-container w3-col w3-grey w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA9" value="7" id="TA9.7">&nbsp;</div></label>
 </div> 
<div class="w3-row">
  <div class="w3-container w3-col w3-white w3-left-align w3-hover-light-blue w3-small" style="width: 30%;height: 50px" >I often experience that my thoughts and feelings are in conflict
	  when I'm thinking about a topic.</div>
  <label class="label" for="TA10.1"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="1" id="TA10.1">&nbsp;</div></label>
  <label class="label" for="TA10.2"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="2" id="TA10.2">&nbsp;</div></label>
  <label class="label" for="TA10.3"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="3" id="TA10.3">&nbsp;</div></label>
  <label class="label" for="TA10.4"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="4" id="TA10.4">&nbsp;</div></label>
  <label class="label" for="TA10.5"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="5" id="TA10.5">&nbsp;</div></label>
  <label class="label" for="TA10.6"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="6" id="TA10.6">&nbsp;</div></label>
  <label class="label" for="TA10.7"><div class="w3-container w3-col w3-white w3-center w3-hover-light-blue" style="width: 7%;height: 50px" ><input class="w3-radio" type="radio" name="TA10" value="7" id="TA10.7">&nbsp;</div></label>
  </div>
  <br>

</div>


</div>
  <div id="container"  class="w3-white w3-container w3-col" style="width:100%">
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
