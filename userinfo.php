  <?php
 $conn = mysqli_connect('localhost','root',"",'bootstap') or die("Connection unsuccessful");
 
 /*if($con){
  echo "connection sucessful";
 }else{
   echo "not connected";
 }*/
  
 // mysqli_select_db($con,'bootstap');

  $user = $_POST["user"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $comment = $_POST["comment"];


// $sql = "insert into userdetail(user,email,mobile,comment) values('$user','$email',$mobile',$comment')";
$sql = " INSERT INTO userdetail (user,email,mobile,comment) VALUES ('$user','$email','$mobile','$comment')";
mysqli_query($conn,$sql);
 


 ?>