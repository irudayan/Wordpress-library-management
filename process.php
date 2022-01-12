<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
	    $email = $_POST['email'];
		$mobile_number = $_POST['mobile_number'];
		// $address = $_POST['address'];
	

		 $query=mysqli_query($conn, "insert into user_details(name,email,mobile_number) value ('$name','$email','$mobile_number')");
		//print_r($sql);exit;

		
		if ($query) {
    echo "<script>alert('You have successfully inserted the new recorde');</script>";
    echo "<script type='text/javascript'>document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>