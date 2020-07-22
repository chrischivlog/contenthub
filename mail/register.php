<?php
$to = $mail_get;
$submit = "Verify your email address";
$from = "From: Noreply mycontenthub.one <noreply@mycontenthub.one>\r\n";
$from .= "Reply-To: noreply@mycontenthub.one\r\n";
$from .= "Content-Type: text/html\r\n";
$text = "
<center>
<a href='https://mycontenthub.one'>
<img src='https://cdn.discordapp.com/attachments/597066766903934997/720198537979101234/Ohne_Titel2.png' width='238' height='238' style='display: block;' border='0'>
</a>
<br>
<h1>Confirm email address</h1>
</center>
<br>

<table style='width:100%' >
    <tr>
        <th></th>
        <th></th> 
        <th></th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td align='middle'>Welcome to our platform. To be able to use the entire scope, please confirm your email address. 
            <br>Click on the link down below.
            <br>
            <a href='https://mycontenthub.one/?site=verify&key=".$hand_id."'>https://mycontenthub.one/mail/verify.php?key=xxx</a>
            <br><br>
            Your mycontenthub.one team 💗
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<br>
<br>
<center>
<a href='https://mycontenthub.one/discord'><img src='https://media.discordapp.net/attachments/597066766903934997/712612648524578837/discord_join_blurple.png' width='320' height='140' style='display: block;' border='0'></a>
</center>
</body>
</html>
";
 
mail($to, $submit, $text, $from); 
?>