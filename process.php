<?
include_once 'index.php';
if(isset($_POST['Register']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $address = $_POST['address'];
	 $sql = "INSERT INTO info (,Name,Email,Password,Address)
	 VALUES ('$name','$email','$password','$address')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
