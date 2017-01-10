<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Invitees - created for ABBVIE</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript">
  var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()

    </script>
</head>

<body>
<div class="content">
  <div class="IDB_logo">
  <img src="/web_images/IBD_logo_66.png" alt="IDB logo" width="131" height="240" />
  </div>

    <h1> August 2<sup>nd</sup>, 2019 | Sandman Signature Hotel | Vancouver,&nbsp;BC<br />
         List of Attendees </h1>
    <br /><br /><br />

    <p>Below, you will find the responses people have given to your invitation so far: attending or not attending. Once everyone has RSVP'd, you may download the final attendees list in Excel format and use it to lay out your meeting materials.</p>
    <p><i>Note: We can track how many people have opened and clicked through your invitation e-mail. </i></p>

<table class="exception" id="attendeesTable" width="60%" border="0" cellspacing="1" cellpadding="">
  <tr>
    <th width="50%"><p>ATTENDING</p></th>
    <th width="50%"><p>NOT ATTENDING</p></th>
  </tr>
  
  <tr>  
    <td>
    <p>
        @foreach ($attending as $invitee)
            
                {{ $invitee->name }} <br/>
                
        @endforeach
    
    </p>
    </td>
    <td>
    <p>
        @foreach ($notattending as $invitee)
            
                {{ $invitee->name }} <br/>
        @endforeach
    </p>
    </td>
  </tr>
</table>
</div>

<p><btn><input name="DOWNLOAD" type="button" onclick="tableToExcel('attendeesTable', 'Regional IBD Consult Attendees')" class="button" value="DOWNLOAD LIST (Excel) >>"/></btn></p>

    

    


   
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