<?php
if(empty($_POST['name']) && empty($_FILES['image']) && empty($_POST['email']) && empty($_POST['password'])){
	
header("Location: http://img3.wikia.nocookie.net/__cb20120912061448/oldschool/ru/images/thumb/9/94/Yoba.png/500px-Yoba.png");
} else {
	echo "You are logged in";
	echo "<br />";
	move_uploaded_file($_FILES['image']['tmp_name'],  "C:\OpenServer\domains\mysite\\" .$_FILES['image']['name']);
	echo "<br />";
    print_r($_FILES);
}
$file = date('d-m-y,H-i-s') . '.txt';
$myfile = fopen($file, "w") or die("Unable to open file!");
$post = $_POST['name']. "\n".$_POST['email'];
fwrite($myfile, $post);
fclose($myfile);
?>
<img src ="<?php echo $_FILES['image']['name'];?> "     width =200 />

