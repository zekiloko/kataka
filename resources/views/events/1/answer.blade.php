<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Thank You - created for ABBVIE</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
 @if ($attending)
<div class="content">
  <div class="IDB_logo">
  <img src="/web_images/IBD_logo_66.png" alt="IDB logo" width="131" height="240" />
  </div>

<h1> August 2<sup>nd</sup>, 2019 | Sandman Signature Hotel | Vancouver,&nbsp;BC<br />
     Thank You for Responding! </h1>
<br /><br /><br />
<p>Dear Dr. {{ $name }},</p>
<p>On behalf of co-chairs, Dr. Chadwick Williams and Dr. Steven Gruchy, I am pleased to welcome you to the <b>Regional IBD Consult Meeting.</b></p>
<p>During this meeting, we will have the opportunity to discuss current trends and the
 latest data in the treatment of Crohn’s Disease and Ulcerative Colitis, and how these
 can be leveraged to drive quality of care in IBD.</p>
<h2>Below, you can find useful information for the meeting ahead.</h2>

<table width="60%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th width="40%"><p>When is it?</p></th>
    <th width="60%"><p>Meeting objectives</p></th>
  </tr>
  <tr>
    <td vertical-align:top;>
    <p>August 2<sup>nd</sup> 2019 from 9:00 a.m. to 5:00 p.m.</p>
    <br />
    <p>Sandman Signature Hotel, Vancouver, BC</p>
    </td>
    <td vertical-align:top;>
    <p>− Discuss how early treatment and monitoring of objective markers of in ammation can serve to optimize patient outcomes in IBD;</p>
    <p>− Outline recent developments regarding the use of Subsequent Entry Biologics in the treatment of IBD;</p>
    <p>− Outline AbbVie’s ongoing commitment to immunology and gastroenterology through their innovative pipeline and clinical trials.</p>
    </td>
  </tr>
  <tr>
    <td colspan="2"><p>*Kindly note that grilled chicken and pilaf rice will be served during the meeting</p></td>
    </tr>
</table>

<p>If you have any questions we ask that you speak with Melissa Di Re, by <a href="mailto:melissa@katakamedical.com">email</a> or by phone at (514) 357-2181.</p>
<p>We look forward to seeing you for this important initiative.</p>
<p>Your participation is essential to the success of this meeting and your valuable input will help us address your needs in future events.</p>
<p>Sincerely, </p>
<p><b>Melissa Di Re</b></p>
  
</div>
  
<footer class="footer">
</footer>
 @else
 	<div class="content">
  <div class="IDB_logo">
  <img src="/web_images/IBD_logo_66.png" alt="IDB logo" width="131" height="240" />
  </div>

<h1> August 2<sup>nd</sup>, 2019 | Sandman Signature Hotel | Vancouver,&nbsp;BC<br />
     Thank You for Responding! </h1>
<br /><br /><br />
<p>Dear Dr. {{ $name }},</p> 
<p>We're sorry to hear that you'll be unable to attend the Regional IBD Consult Meeting.</p>

<h2>We hope to see you next time!</h2>

<p>If there is a change in your schedule and you become available or if you have any other questions, please contact Melissa Di Re by <a href="mailto:melissa@katakamedical.com">email</a> or by phone at (514) 357-2181.</p>

<p>Your valuable input will help us address your needs in future events.</p>
<p>Sincerely, </p>
<p><b>Melissa Di Re</b></p>
  
  
  
</div>
  
<footer class="footer">
</footer>
 @endif
</body>
</html>