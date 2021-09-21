<?php
$coo=mysqli_connect("localhost","root","","portfolio");
$shop1=$_GET['id'];

$result=mysqli_query($coo,"DELETE from category where id=$shop1");
if ($result) {
	echo "<script>alert('Successfully Deleted');
    window.location.href='category_form.php';
	</script>";

}





?>