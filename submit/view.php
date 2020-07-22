<?php
///read out sql
if (isset($_GET['id'])) {
    $id_view = $_GET['id'];

    $result = mysqli_query($conn, "SELECT con_submit.ID, con_submit.title, con_submit.text, con_submit.user_id, con_submit.date, con_submit.select_submit, con_user.ID AS ConUSERID, con_user.username FROM con_user LEFT JOIN con_submit ON con_user.ID=con_submit.user_id WHERE con_submit.ID = '$id_view' ;");
    while ($row_view = mysqli_fetch_array($result)) {


?>


        <div class="uk-container">
            <article class="uk-comment">
                <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                    <br>
                    <!--   <div class="uk-width-auto">
                        <img class="uk-comment-avatar" src="https://cdn.discordapp.com/attachments/597066766903934997/681595092040941592/image3.jpg" width="80" height="80" alt="">
                    </div> -->
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                            <li><a href="?profile=<?php echo $row_view['ConUSERID']; ?>"><?php echo $row_view['username']; ?></a></li>
                            <li><a href="?site=categoty&genre=<?php echo $row_view['select_submit']; ?>">Category: <?php echo $row_view['select_submit']; ?></a></li>
                        </ul>
                    </div>
                </header>
            </article>

            <!--         <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="https://media.discordapp.net/attachments/597066766903934997/689399733533671438/was-wir-suchen.png" uk-img>
           </div>-->
            <article class="uk-article">
                <p class="uk-article-meta"> <?php echo $row_view['date']; ?>
                </p>
                <p class="uk-text-lead"></p>

                <p><?php echo $row_view['text']; ?></p>


        <?php
        $print_cat = $row_view['select_submit'];
    }
}
        ?>

        <hr>
            </article>
            <!--<br>Like this idea:
            <a uk-icon="heart"></a>-->
            <h3>Other topics:</h3>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM con_submit WHERE select_submit = '$print_cat'  ORDER BY RAND() LIMIT 1;");
            while ($row_view = mysqli_fetch_array($result)) {
            ?>
                <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true" uk-scrollspy-class="uk-animation-slide-top">
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <h3 class="uk-card-title"><?php echo $row_view['title']; ?></h3>
                            <p><?php echo substr($row_view['text'], 0, 90); ?></p>
                        </div>
                    </div>
                    <br>
                </div>
        </div>



                <?php
            }
                ?>