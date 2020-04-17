<?php include('../backend/core/page_manager.php');?>
<?php include('../backend/core/include_all_functions.php');?>


<html>
    <head></head>

    <body>

    <?php


    if(isset($_GET['page'])) {
        if(isset($page[$_GET['page']])) {
            include($page['navbar']);
            include($page[$_GET['page']]);
        }else{
            include($page['navbar']);
            include($page['error404']);
        }
    }else{
        include($page['navbar']);
        include($page['home']);
    }

    include($page['footer']);

    ?>

    </body>

</html>