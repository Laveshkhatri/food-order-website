<?php


$quantity=$_POST['quantity'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];



$conn = new mysqli('localhost', 'root', '','foodorder');
if ($conn->connect_error){
die('Connect Error :'.$conn->connect_error);
}


 else {
		$stmt = $conn->prepare("insert into roll(quantity, name, phone, email, address ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param('isiss', $quantity, $name, $phone, $email, $address);
		$execval = $stmt->execute();

		
	    $stmt->close();
		$conn->close();
	}



 ?>







<?php


include'index.html'

?>

