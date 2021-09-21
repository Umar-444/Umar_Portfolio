<?php
$coo=mysqli_connect("localhost","root","","portfolio");
$shop1=$_GET['id'];

$result=mysqli_query($coo,"DELETE from portfolio_post where id=$shop1");
if ($result) {
	echo "<script>alert('Successfully Deleted');
    window.location.href='project_form.php';
	</script>";

}





?>