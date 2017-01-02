<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>KATAKA HUCR-043 Forms</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
</head>

<body>
 @if ($attending)
 	<div class="content">
  <div class="TDM_logo">
	<img src="/web_images/TDM_logo.png" width="53" height="141" />
  </div>
  
  <div class="TDM_lines">
	<img src="/web_images/top-right_lines.png" width="163" height="108" />
  </div>

<h1> THANK YOU! </h1>

<p>Dear Dr. {{ $name }},</p>
<p>On behalf of AbbVie Canada, I would like to thank you for accepting to participate in the interactive discussion on Inflammatory Bowel Disease led by chair, Dr. Jane Doe.</p>
<p>During this meeting, we will have the opportunity to discuss therapeutic drug monitoring and its role in Inflammatory Bowel Disease.</p>
<br />
<p>Below, you will find useful information for the meeting ahead.</p>
<h2>We recommend that you print this page for your convenience.</h2>

<table width="40%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th width="40%"><p>When is it?</p></th>
    <th width="60%"><p>Meeting objectives</p></th>
  </tr>
  <tr>
    <td vertical-align:top;>
    <p>Day, Month, YEAR</p>
    <p>0:00 a.m. to 0:00 p.m.</p>
    <br />
    <p>Venue Name</p>
    <p>Full Venue Address</p>
    <p>City, Province Postal Code</p>
    </td>
    <td vertical-align:top;><p>− Objective 1;</p>
    <p>− Objective 2;</p>
    <p>− Objective 3;</p>
    <p>− Objective 4;</p>
    <p>− Objective 5.</p>
    </td>
  </tr>
  <tr>
    <td colspan="2"><p>*Kindly note that grilled chicken and pilaf rice will be served during the meeting</p></td>
    </tr>
</table>

<p>In return for your participation, you will be provided with an honorarium in the amount of 1$.</p>
<p>If you have any questions we ask that you speak with Maria Tomova, by <a href="mailto:mariatoms@msn.com">email</a> or by phone at (514) 967-4914.</p>
<p>We look forward to seeing you for this important initiative.</p>
<p>Your participation is essential to the success of this meeting and your valuable input will help us address your needs in future events.</p>
<p>Sincerely, </p>
<p><b>Maria Tomova</b></p>
  
  
  <div class="abbvie_logo">
	<img src="/web_images/abbvie_logo.png" width="128" height="23" />  
  </div>
</div>
  
<footer class="footer">
</footer>
 @else
 	<div class="content">
  <div class="TDM_logo">
	<img src="/web_images/TDM_logo.png" width="53" height="141" />
  </div>
  
  <div class="TDM_lines">
	<img src="/web_images/top-right_lines.png" width="163" height="108" />
  </div>

<h1> SEE YOU NEXT TIME! </h1>

<p>Dear Dr. {{ $name }},</p> 
<p>We're sorry to hear that you'll be unable to attend the HUCR-043 Meeting.</p>

<h2>We hope to see you next time!</h2>

<p>If there is a change in your schedule and you become available or if you have any other questions, please contact Maria Tomova by <a href="mailto:mariatoms@msn.com">email</a> or by phone at (514) 967-4914.</p>

<p>Your valuable input will help us address your needs in future events.</p>
<p>Sincerely, </p>
<p><b>Maria Tomova</b></p>
  
  
  <div class="abbvie_logo">
	<img src="/web_images/abbvie_logo.png" width="128" height="23" />  
  </div>
</div>
  
<footer class="footer">
</footer>
 @endif
</body>
</html>