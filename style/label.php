<?php 
$res2 = mysqli_query($conn, "SELECT con_select.ID, con_select.name AS ConNAME, con_select.opt, con_select_submit_opt.ID, con_select_submit_opt.name, con_select_submit_opt.opt_ID FROM con_select LEFT JOIN con_select_submit_opt ON con_select.opt=con_select_submit_opt.opt_id");

if (mysqli_num_rows($res2) == 0) {
   
        } else {
             while ($res2_row = mysqli_fetch_array($res2)) {           
?>  
<span class="uk-label uk-label-success"><?php
     if($temp_selector == $res2_row['opt']) {

        echo $res2_row['ConNAME'];
     }
     


     ?></span>
    <?php                
   }
}
?>    
