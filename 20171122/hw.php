<form action="hw.php" method="post" enctype="multipart/form-data">
height: <input type="text" name="height"> m<br>
weight: <input type="text" name="weight"> kg<br>
<input type="file" name="file"><br>
<input type="submit" name="submit" value="提交">
</form>

<?php
if(empty($_POST["height"]) || empty($_POST["weight"]))
{
    echo "please type in all information"."<br>";
}
else
{
    echo "height = ".$_POST["height"]."<br>";
    echo "weight = ".$_POST["weight"]."<br>";
    $BMI = $_POST["weight"]/$_POST["height"]/$_POST["height"];
    echo "BMI : $BMI"."<br>";
}

if(empty($_FILES["file"]["name"]))
{
    echo "empty";
}
else if(strpos($_FILES["file"]["type"],"image") === false)
{
    echo "wrong file type";
}
else if($_FILES["file"]["error"]>0)
{
    echo "error : ".$_FILES["file"]["error"];
}
else
{
    $filename = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
}
?> 