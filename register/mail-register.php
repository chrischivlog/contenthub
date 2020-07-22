<?php
if(isset($_GET['mail'])){
    ///CHECK IF PIN IS 0

    $mail_get = $_GET['mail'];

    $result = mysqli_query($conn, "SELECT * FROM con_user WHERE mail = '$mail_get';");
    while ($row_get_mail = mysqli_fetch_array($result)) {
        if($row_get_mail['mail_id'] == '0'){
            echo "already confrimed";
        }else{
            $hand_id = $row_get_mail['mail_id'];

           include ('./mail/register.php');
           echo "<meta http-equiv=\"refresh\" content=\"20; url=./\">";
            ?>
            <div class="uk-container">
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Please check your email account inbox.</h3>
                        <p>You will find an activation pin in the inbox of your specified email, which is urgently required to activate your account. If you cannot find the mail in the normal inbox, please search in the advertising or spam folder.</p>
                    </div>
                </div>           
            </div>
            <?php

        }
        
    }
}
?>