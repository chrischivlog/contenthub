<?php include('../config.php');?>

<form enctype="multipart/form-data"  action="?upload" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
Diese Datei hochladen: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<?php 

if(isset($_GET['upload'])){

    $date = date("F-j-Y-g-i-s");
    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . basename($date . "-" . $_FILES['userfile']['name']);
    $sql_filename = $_FILES['userfile']['name'];

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";

        $sql_uploadfile = mysqli_query($conn, "INSERT INTO test_fileupload (dir) VALUES ('uploads/$date-$sql_filename')");
        ?><a href="<?php echo"uploads/$date-$sql_filename";?>">hie</a><?php

    }else{
        echo "nothing happend";
    }
   
}
?>