<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>RSVP - created for ABBVIE</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="content">
  <div class="IDB_logo">
	<img src="/web_images/IBD_logo_66.png" alt="IDB logo" width="131" height="240" />
  </div>

<h1> August 2<sup>nd</sup>, 2019 | Sandman Signature Hotel | Vancouver,&nbsp;BC<br />
RSVP </h1>
<br /><br /><br />
<p>Kindly confirm your participation in the Regional IBD Consult Meeting below or by contacting Melissa Di Re by <a href="mailto:melissa@katakamedical.com">email</a> or by phone at (514) 357-2181.</p>
<h2>Confirm Your Participation</h2>
<form method="POST" action="/events/{{ $event->id }}/invitees">
{{ csrf_field() }}
 <p class="radios"> <input name="attending" type="radio" value="1" checked />Yes, I will attend!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input name="attending" type="radio" value="0" />No, I won't be able to attend</p>
    

<h2>Please enter your full name as you would like it to appear on all meeting materials:</h2>
<p>
  <input class="textbox" name="name" type="text" placeholder="Please enter your full name here" size="60%" maxlength="60%" required />
</p>

<p><btn><input type="submit" value="SUBMIT >>" class="button"/></btn></p> 
</form>

<p>If you have any questions we ask that you speak with Melissa Di Re, by <a href="mailto:melissa@katakamedical.com">email</a> or by phone at (514) 357-2181.</p>
<p>We look forward to seeing you for this important initiative.</p>
<p>Your participation is essential to the success of this meeting and your valuable input will help us address your needs in future events.</p>
<p>Sincerely, </p>
<p><b>Melissa Di Re</b></p>
  
  
  
</div>
  
<footer class="footer">
</footer>
  
</body>

</html>
