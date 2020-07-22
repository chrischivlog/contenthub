
<?php if(!isset($_SESSION['mail'])){?><meta http-equiv="refresh" content="0; URL=index.php"><?php }else{?>
<?php
///check if permited
  $result = mysqli_query($conn, "SELECT * from con_user WHERE ID ='$ID';");
  if (mysqli_num_rows($result) == 0) {
} else {
    while ($row = mysqli_fetch_array($result)) {
        echo "hi chris";

  }
}



///read out id
if(isset($_GET['id'])){
   $id_edit = $_GET['id'];
   
///read out sql 
$result = mysqli_query($conn, "SELECT * from con_submit WHERE ID = '$id_edit' ;");
        while ($row_view = mysqli_fetch_array($result)) {
            $title = $row_view['title'];

            $text = $row_view['text'];
            
            $select_submit = $row_view['select_submit'];
        }
}
?>

<form method="POST">
<label>Title</label>
<br>
<input name="title" value="<?php echo $title; ?>">
<br>

<label>Text</label>
<br>
<textarea name="text"><?php echo $text; ?></textarea>
<br>

<label>Select category</label>
<br>
<select name="select">
    <optgroup label="Current Label">
        <option value="<?php echo $select_submit; ?>"><?php echo $select_submit; ?></option>
    </optgroup>
    <optgroup label="Earth">
        <option value="Climate change">Climate change</option>
        <option value="environmental Protection">environmental Protection</option>
    </optgroup>
</select>
<br>

<button type="submit">Create </button>
<br>
</form>


<?php
if(isset($_POST) !== 'submit'){
    ///check if empty
    if(empty($_POST['title'])){
        echo "make sure everything is correct";
    } elseif (empty($_POST['text'])){
        echo "make sure everything is correct";
    } elseif (empty($_POST['select'])){
        echo "make sure everything is correct";
    }else{

        ///check if injection
        $title_sql = mysqli_real_escape_string($conn, $_POST['title']);
        $text_sql = mysqli_real_escape_string($conn, $_POST['text']);
        $select_sql = mysqli_real_escape_string($conn, $_POST['select']);


        ///insert data
        $sql = "UPDATE con_submit  SET title = '$title_sql', text = '$text_sql', select_submit = '$select_sql' WHERE ID = '$id_edit'";

        if ($conn->query($sql) === TRUE) {
            header("Refresh:0; url=view.php?id=".$id_edit."");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
}
}
?>
