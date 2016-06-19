

<html>
<body>

<?php 
 $to = 'lalaphoon@gmail.com';
 $subject=$_POST['title'];
 $name = $_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['comment'];
 
 $header='$email';
if($_POST){
mail($to,$subject,$message,$header);
$feedback ='Thanks for the email';
}
?>

</body>
</html>