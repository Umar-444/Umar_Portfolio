<?php
$coo=mysqli_connect("localhost","root","","portfolio");
$shop1=$_GET['id'];

$result=mysqli_query($coo,"DELETE from comments_table where id=$shop1");
if ($result) {
	echo "<script>alert('Successfully Deleted');
    window.location.href='massge_table.php';
	</script>";

}





?>