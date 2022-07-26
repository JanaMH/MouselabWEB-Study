<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE>MouselabWEB survey</TITLE>
<link rel="stylesheet" href="mlweb.css" type="text/css">
</head>
<body>
<style>
p {
  padding-top: 10px;
  padding-right: 250px;
  padding-bottom: 20px;
  padding-left: 250px;
}
</style> 
 <br>   
<H1 align="center">Thank you for taking the time to complete this survey!</H1>
<br>   <br>  
<H2 align="center">

<span style = "font-size: 14pt;">Your completion code is:  <u><?php
echo $_SESSION['subjectcode'];
?>  </u>

 </H2>
<br/><br/>
<p>
<span style = "font-size: 14pt;">To receive payment, you must return to the MTurk HIT listing and enter your unique completion code from above. In order to do this, <strong>please make a note of your 
    unique completion code.To then end the study, please close the browser window/tab. </strong> <br> <br/>
    After this, you may navigate to MTurk.com. When the HIT comes up, click 'continue work 
    on this HIT'. This will bring up the first page of the HIT, where you will see a place to enter the unique identification code and a 'submit' button which will allow you to complete the HIT. 
    If you have any trouble receiving payment or have any other questions, concerns, or comments about the survey, please email the researchers 
    at <a href="mailto:j.hohnsbehn@uni-koeln.de" target="_blank">j.hohnsbehn@uni-koeln.de</a></span><br/><br/>

    <span style = "font-size: 14pt;"><strong><u>Debriefing:</u> </strong><br/>

When people make decisions, they often tend to do this in a confirmatory way. In this particular study that means that people tend to use or rely more information that confirms an already made decision 
rather than information that is not in line with a preliminary decision. Research in our lab has shown that people who report being generally more ambivalent show less confirmatory information search 
- i.e. a smaller preference for information that confirms a preliminary decision. In this study, we test if this relationship still holds true when people acquire information for decision. That is, we 
measure in this study how long people look at the different information (PRO or CON) hidden in the boxes and test the idea that more ambivalent people spend roughly the same amount of time to look at both 
kinds information (in favor of and against).

The decision scenarios were all hypothetical. This enabled us to standardize the materials across conditions and allows us to draw causal conclusions about the results.

Thank you for helping with this experiment. Your participation is greatly appreciated.  Please do not tell anyone about this experiment for the next six months,
since knowing about a study ahead of time can actually change the way people respond. If you have any further questions about this study, please feel free to contact the investigator, 
Jana Hohnsbehn, at <a href="mailto:j.hohnsbehn@uni-koeln.de" target="_blank">j.hohnsbehn@uni-koeln.de</a></span></p>

</body>
</HTML>


