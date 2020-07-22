<div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>

    <div>


        <form method="POST">
            <br>
            <div class="uk-margin">
                <div class="uk-inline">
                    <h5 class="uk-heading-bullet uk-text-lighter">Choose your name!</h5>
                    <input class="uk-input" name="username" value="<?php if (isset($_POST['username'])) {
                                                                        echo $_POST['username'];
                                                                    } else {
                                                                    } ?>" required>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <h5 class="uk-heading-bullet uk-text-lighter">Choose your Pasword!</h5>
                    <input class="uk-input" name="password" type="password" required>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <h5 class="uk-heading-bullet uk-text-lighter">Confirm your password</h5>
                    <input class="uk-input" name="password-confirm" type="password" required>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <h5 class="uk-heading-bullet uk-text-lighter">Mail adress</h5>
                    <input class="uk-input" name="mail" type="mail" value="<?php if (isset($_POST['mail'])) {
                                                                                echo $_POST['mail'];
                                                                            } else {
                                                                            } ?>" required>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                <h5 class="uk-heading-bullet uk-text-lighter">Confirm Mail adress</h5>
                    <input class="uk-input" name="mail-confirm" type="mail" value="<?php if (isset($_POST['mail-confirm'])) {
                                                                                        echo $_POST['mail-confirm'];
                                                                                    } else {
                                                                                    } ?>" required>
                </div>
            </div>

            <div>
                <div class="uk-margin">
                    <div class="uk-inline">
                        <input class="uk-checkbox" type="checkbox" id="1" name="check-law" <?php if (isset($_POST['check-law'])) {
                                                                                            echo "checked";
                                                                                        } else {
                                                                                        } ?> required>
                        <label for="1" class="uk-heading-bullet uk-text-lighter">I know that I can be blocked by my contenthub if I violate the law and violate the rules of this platform.</label>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-margin">
                    <div class="uk-inline">
                        <input class="uk-checkbox" type="checkbox" id="2" name="check-terms" <?php if (isset($_POST['check-terms'])) {
                                                                                                echo "checked";
                                                                                            } else {
                                                                                            } ?> required>
                        <label for="2"  class="uk-heading-bullet uk-text-lighter">I accept the privacy policy and would like to continue.</label>
                    </div>
                </div>
            </div>
            <br>
            <button class="uk-button uk-button-default" type="submit">Register</button>
            <br>
        </form>
    </div>
</div>
<?php
if (isset($_POST) !== 'submit') {
    ///check if empty
    if (empty($_POST['username'])) {
        echo " ";
    } elseif (empty($_POST['password'])) {
        echo " ";
    } elseif (empty($_POST['password-confirm'])) {
        echo " ";
    } elseif (empty($_POST['mail'])) {
        echo "make sure everything is correct";
    } elseif (empty($_POST['mail-confirm'])) {
        echo " ";
    } elseif (empty($_POST['check-law'])) {
        echo " ";
    } elseif (empty($_POST['check-terms'])) {
        echo " ";
    } else {
?>
        <?php
        ///IS SET TRUE MAIL
        if ($_POST['mail-confirm'] == $_POST['mail']) {
            ///IS SET TRUE PASSWORD
            if ($_POST['password-confirm'] == $_POST['password']) {
                ///check if injection
                $pswd_sql = mysqli_real_escape_string($conn, $_POST['password']);
                $user_sql = mysqli_real_escape_string($conn, $_POST['username']);
                $mail_sql = mysqli_real_escape_string($conn, $_POST['mail']);

                ///CHECK IF USER ALREADY INSIDE
                $sql = mysqli_query($conn, "SELECT * from con_user WHERE username='$user_sql' OR mail='$mail_sql';");
                if (mysqli_num_rows($sql) >= 1) {
                    echo "The username or email address already exists.";
                } else {

                    ///GENERATE PIN
                    function generatePIN($digits = 4)
                    {
                        $i = 0;
                        $pin = "";
                        while ($i < $digits) {
                            $pin .= mt_rand(0, 9);
                            $i++;
                        }
                        return $pin;
                    }
                    $pin = generatePIN(6);

                    ///insert data
                    $sql = "INSERT INTO con_user (ID, username, password, mail, mail_id ) VALUES ('NULL', '$user_sql', '$pswd_sql', '$mail_sql', '$pin')";

                    if ($conn->query($sql) === TRUE) {
                        ///SEND MAIL WITH PIN
                        ?> 
                        <meta http-equiv="refresh" content="2; url=?site=mail-register&mail=<?php echo $mail_sql;?>">   
                         <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            } else {
                echo "The passwords do not match.";
            }
        } else {
            echo "Check your email address, it does not match the first one given.<br>";
        }
    }
}
?>
