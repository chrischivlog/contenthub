<?php if(!isset($_SESSION['mail'])){?><meta http-equiv="refresh" content="0; URL=index.php"><?php }else{?>


<div class="uk-container">
    <form method="POST">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">One small step!</legend>

            <div class="uk-margin">
            <label>Title</label>
                <input class="uk-input" name="title"  value="<?php if(isset($_POST['title'])){ echo $_POST['title'];}else{}?>">
            </div>

            <div class="uk-margin">
            <label>Select category</label>
                <select class="uk-select" name="select">
                    <option>Public (Everyone can see your idea)</option>
                    <option>Private (Only people with the link can see your idea)</option>
                </select>
            </div>

            <div class="uk-margin">
            <label>Text</label>
                <textarea class="uk-textarea" rows="5" placeholder="Textarea" name="text"><?php if(isset($_POST['text'])){ echo $_POST['text'];}else{}?></textarea>
            </div>
<!-- 

            <div class="js-upload uk-placeholder uk-text-center">
                <span uk-icon="icon: cloud-upload"></span>
                <span class="uk-text-middle">Attach binaries by dropping them here or</span>
                <div uk-form-custom>
                    <input type="file" multiple>
                    <span class="uk-link">selecting one</span>
                </div>
            </div>

            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

            <script>
                var bar = document.getElementById('js-progressbar');

                UIkit.upload('.js-upload', {

                    url: '',
                    multiple: true,

                    beforeSend: function() {
                        console.log('beforeSend', arguments);
                    },
                    beforeAll: function() {
                        console.log('beforeAll', arguments);
                    },
                    load: function() {
                        console.log('load', arguments);
                    },
                    error: function() {
                        console.log('error', arguments);
                    },
                    complete: function() {
                        console.log('complete', arguments);
                    },

                    loadStart: function(e) {
                        console.log('loadStart', arguments);

                        bar.removeAttribute('hidden');
                        bar.max = e.total;
                        bar.value = e.loaded;
                    },

                    progress: function(e) {
                        console.log('progress', arguments);

                        bar.max = e.total;
                        bar.value = e.loaded;
                    },

                    loadEnd: function(e) {
                        console.log('loadEnd', arguments);

                        bar.max = e.total;
                        bar.value = e.loaded;
                    },

                    completeAll: function() {
                        console.log('completeAll', arguments);

                        setTimeout(function() {
                            bar.setAttribute('hidden', 'hidden');
                        }, 1000);

                        alert('Upload Completed');
                    }

                });
            </script>
 -->
<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid"> 
                <label for="1"><input class="uk-checkbox" type="checkbox" id="1" name="check" <?php if(isset($_POST['check'])){ echo "checked";}else{}?>> I have read the terms and I accept them!</label>
            </div>            
            <button type="submit" class="uk-button uk-button-secondary">Submit your idea</button>
        </fieldset>
    </form>
</div>

 

<?php
if(isset($_POST) !== 'submit'){
    ///check if empty
    if(empty($_POST['title'])){
        echo "<center>Please insert the form correct.</center>";
    } elseif (empty($_POST['text'])){
        echo "<center>Please insert the form correct.</center>";
    } elseif (empty($_POST['check'])){
        echo "<center>Please insert the form correct.</center>";
    }else{

        ///check if injection
        $title_sql = mysqli_real_escape_string($conn, $_POST['title']);
        $text_sql = mysqli_real_escape_string($conn, $_POST['text']);
        $select_sql = mysqli_real_escape_string($conn, $_POST['select']);
        $id = $_SESSION['ID']; 

        ///insert data
        $sql = "INSERT INTO con_submit (user_id, title, text, select_submit) VALUES ('$id', '$title_sql', '$text_sql', '$select_sql')";

        if ($conn->query($sql) === TRUE) {
            $result = mysqli_query($conn, "SELECT * from con_submit ORDER by ID desc limit 1;");
            while ($row_get_latest_id = mysqli_fetch_array($result)) {
                 $submit_id = $row_get_latest_id['ID'];
            }
           echo "<center><span class='uk-margin-small-right' uk-spinner='ratio: 3'></span></center>";
            echo "<meta http-equiv=\"refresh\" content=\"2; url=?site=view&id=".$submit_id."\">";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
}
}
?>

