<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>KATAKA HUCR-043 Forms</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">


</head>

<body>
<div class="content">
    <div class="TDM_logo">
        <img src="/web_images/TDM_logo.png" width="53" height="141" />
    </div>

    <div class="TDM_lines">
        <img src="/web_images/top-right_lines.png" width="163" height="108" />
    </div>

    <h1> RSVP </h1>

    <p>Kindly confirm your participation in the HUCR-043 Meeting below or by contacting Maria Tomova by <a href="mailto:mariatoms@msn.com">email</a> or by phone at (514) 967-4914.</p>
    <h2>Confirm Your Participation</h2>

    <ul>
        @foreach ($attending as $invitee)
            <li>
                Name: {{ $invitee->name }} <br/>
                Attending: {{ $invitee->attending ? 'Yes' : 'No' }}
            </li>
        @endforeach
    </ul>

    <ul>
        @foreach ($notattending as $invitee)
            <li>
                Name: {{ $invitee->name }} <br/>
                Attending: {{ $invitee->attending ? 'Yes' : 'No' }}
            </li>
        @endforeach
    </ul>


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

</body>

</html>