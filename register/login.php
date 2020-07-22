<div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <form method="POST">
<br>
        <h3 class="uk-heading-bullet uk-text-lighter">Login your user account!</h3>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input" name="mail" type="mail" type="text" placeholder="Email adress">
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input class="uk-input" name="password" type="password" placeholder="Password">
                </div>
            </div>



<?php
if (isset($_POST) !== 'submit') {
    ///check if empty
    if (empty($_POST['mail'])) {
        echo "";
    } elseif (empty($_POST['password'])) {
        echo "";
    } else {
?>
        <?php
                ///check if injection
                $pswd_sql = mysqli_real_escape_string($conn, $_POST['password']);
                $mail_sql = mysqli_real_escape_string($conn, $_POST['mail']);

                ///CHECK IF USER ALREADY INSIDE
                $sql = mysqli_query($conn, "SELECT * from con_user WHERE mail='$mail_sql' AND password='$pswd_sql';");
                if (mysqli_num_rows($sql) == 1) {
                    while ($row = mysqli_fetch_array($sql)) {
                        $_SESSION['mail'] = $mail_sql;
                        $_SESSION['ID'] = $row['ID'];
                        echo "<div uk-spinner></div><br>";
                        echo "<meta http-equiv=\"refresh\" content=\"2; url=./\">";
                    }
                } else{
                    echo "<center>Check your email address or password.<br><center>";
                }   
            }
        }
 

		


?>
            <br>
            <button class="uk-button uk-button-default" type="submit">Login</button>
            <br>
        </form>
    </div>
</div>

<?php
if (isset($_GET['kill'])){
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./\">";

}

?>