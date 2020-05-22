<?php
session_start();
include('./pages/index.php'); ///MAIN CLASS FOR STRUCTURE
include('./backend/class/core/index.php'); ///MAIN CLASS CORE FOR CONNECTIONS 
?>

<body>
    <?php
    if (isset($_GET['page'])) {
        if (isset($page_front[$_GET['page']])) {
            include($page_front['navbar']);
            include($page_front[$_GET['page']]);
        } else {
            include($page_front['navbar']);
            include($page_front['404']);
        }
    } else {
        include($page_front['navbar']);
        include($page_front['start']);
    }

    include($page_front['footer']);

    ?>
</body>