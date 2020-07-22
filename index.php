<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5e984ceb69e9320caac431c0/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<?php
session_start();
include('core/importer.php');
include('sql.php');

?>
<!doctype html>

<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/uikit.min.css" />
        <script src="./assets/js/uikit.min.js"></script>
        <script src="./assets/js/uikit-icons.min.js"></script>

</head>

<body>
    <?php
    if (isset($_SESSION['mail'])) {
echo $_SESSION['mail'];
echo $_SESSION['ID'];
    }

    if (isset($_GET['site'])) {
        if (isset($page[$_GET['site']])) {
            include($page['navbar']);
            include($page[$_GET['site']]);
            include($page['footer']);

        } else {
            include($page['navbar']);
            include($page['overview']);
            include($page['searchbar']);
            include($page['latest-posts']);
            include($page['footer']);
        }
    } else {
        include($page['navbar']);
        include($page['overview']);
        include($page['searchbar']);
        include($page['latest-posts']);
        include($page['footer']);

    }
    //FOOTER
    ?>

</body>

</html>