<div class="uk-container">

    <br>
    <h3>Latest submitions:</h3>

    <?php
    $res = mysqli_query($conn, "SELECT con_submit.user_id, con_submit.title, con_submit.date, con_submit.text, con_submit.select_submit, con_submit.ID AS ConSUID, con_user.ID, con_user.username FROM con_user LEFT JOIN con_submit ON con_submit.user_id=con_user.ID ORDER BY con_submit.ID DESC LIMIT 3");
    if (mysqli_num_rows($res) == 0) {
    } else {
        while ($res_row = mysqli_fetch_array($res)) {

            ////VARS
            $temp_selector = $res_row['select_submit'];

    ?>
            <a href="?site=view&id=<?php echo $res_row['ConSUID']; ?>">
                <div class="uk-margin uk-card uk-card-default uk-card-body"><?php include('label.php') ?>
                    <br>
                    <?php echo  substr($res_row['title'], 0, 50); ?> <b>by <?php echo $res_row['username']; ?></b> - <cite><?php echo $res_row['date']; ?></cite><br>
                </div>
            </a>
        <?php
        }
    }
        ?>
        <br>
</div>