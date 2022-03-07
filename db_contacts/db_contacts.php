<!-- form maintain -->
<?php  
$msg_success = "";
if (isset($_POST['submit'])) {

  // echo $_POST['fname'] . '<br>';
  // echo $_POST['email'] . '<br>';
  // echo $_POST['message'] . '<br>';


  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error_arr = [];
  if ($fname == "") {
    array_push($error_arr, "Name Fields can not be empty" . '<br>');
  };
  if ($email == "") {
    array_push($error_arr, "Email Fields can not be empty" . '<br>');
  };
  if ($message == "") {
    array_push($error_arr, "Message Fields can not be empty");
  };

  if(count($error_arr)== 0){
  $sql = "INSERT INTO contacts (fname, email, message)
     VALUES ('$fname', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    $msg_success = "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  }



  //   if( $fname == ""){ echo " Name Fields can not be empty" .'<br>';   }
  //   if( $email == ""){ echo " Email Fields can not be empty" .'<br>'; }
  //   if( $message == ""){ echo "Message Fields can not be empty ".'<br>'; }
}
?>