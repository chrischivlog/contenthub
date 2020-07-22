<nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-right">
        <a class="uk-navbar-item uk-logo" href="?"><img src="https://media.discordapp.net/attachments/597066766903934997/720198537979101234/Ohne_Titel2.png" width="80" height="80"></a>
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="?">Home</a></li>
            <li>
                <a href="?site=categorys">Categorys</a>

            </li>
            <li><a href="?site=support">Support</a></li>
            <!-- <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div> -->
        </ul>

    </div>

    <?php
    if (!isset($_SESSION['mail'])) {
        ///user menu
    ?>
        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Get started</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="?site=login">Login <span uk-icon="sign-in"></span></a></li>
                            <li><a href=""></a></li>
                            <li><a href="?site=register">Register <span uk-icon="unlock"></a></li>
                        </ul>
                    </div>
                </li>
            </ul>

    </nav>
</div>
<?php
    } else {
        ///normal menu
?>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">User Menu</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="?site=login">Profile <span uk-icon="user"></span></a></li>
                        <li><a href=""></a></li>
                        <li ><a href="?site=create">Create <span uk-icon="pencil"></span></a></li>
                        <li><a href=""></a></li>
                        <li><a href="?site=login&kill">Sgin out <span uk-icon="sign-out"></a></li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>

    </nav>
<?php
    }
?>