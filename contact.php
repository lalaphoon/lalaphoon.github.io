
<?PHP
 $to = 'lalaphoon@gmail.com';
 $subject=$_POST['title'];
 $name = $_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['comment'];
 
if($_POST){
mail($to,$subject,$message,"From:".$email);
//$feedback ='Thanks for the email';
print "Your message has been sent"
}
?>

