<?php
if(empty($_GET['key'])){
?>

<div class="uk-container"><br><br>
<h4>Link does not match!</h4>
The link does not have the desired format. It would be correct: <code>https://mycontenthub.one/?site=verify&key=YOUR KEY HERE</code>
</div>
<?php
}


if(isset($_GET['key'])){
    ///CHECK IF PIN IS CORRECT
    $key_get = $_GET['key'];

    ///CHECK IF EXISTS
    $result = mysqli_query($conn, "SELECT * FROM con_user WHERE mail_id = '$key_get';");
        if (mysqli_num_rows($result) >= 1) {
            echo "Link was used successfully.";
                    ////START SET 0
                    $sql = mysqli_query ($conn,"UPDATE con_user SET mail_id = '0' WHERE mail_id = '$key_get';");


        } else {
            echo "The key could not be found. If you have any problems, contact our support via Live Chat.";
        }
        
    }
?>