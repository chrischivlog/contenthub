



<br>
<div class="uk-container">
    <div uk-filter="target: .js-filter">

        <ul class="uk-subnav uk-subnav-pill">
            <li uk-filter-control=".tag-1"><a href="#">White</a></li>
            <li uk-filter-control=".tag-blue"><a href="#">Blue</a></li>
            <li uk-filter-control=".tag-black"><a href="#">Black</a></li>
        </ul>

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>

<?php 
$res = mysqli_query($conn, "SELECT con_submit.user_id, con_submit.title, con_submit.date, con_submit.text, con_submit.ID AS ConSUID, con_user.ID, con_user.username FROM con_user LEFT JOIN con_submit ON con_submit.user_id=con_user.ID ORDER BY con_submit.ID DESC LIMIT 10");
   if (mysqli_num_rows($res) == 0) {
   
        } else {
             while ($res_row = mysqli_fetch_array($res)) {           
?>            
         <a href="?site=view&id=<?php echo $res_row['ConSUID']; ?>">
            <li class="tag-1">
                <div class="uk-card uk-card-default uk-card-body"><?php echo $res_row['title']; ?></div>
            </li>
         </a>
<?php                
   }
}
?>
            <li class="tag-blue">
                <div class="uk-card uk-card-default uk-card-body"> </div>
            </li>
        </ul>

    </div>
</div>