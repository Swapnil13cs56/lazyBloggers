<?php
require('connection.php');
$message='';
  if(isset($_POST['submit']))
  {
    
    $contentArea=$_POST['contentArea'];
      $emailId = $_POST['emailId'];

      $insert=mysqli_query($db_server,"insert into content (matter, emailid) values('".$contentArea."','".$emailId."')") ;
      if($insert)
      {
        $message='Values are registered successfully';
        header("Location:success.php");
       
                
          
      }
      else
      {
        $er='Values are not registered';
    
      }
    }

?>