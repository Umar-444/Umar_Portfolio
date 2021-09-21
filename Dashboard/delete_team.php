<?php
$coo=mysqli_connect("localhost","root","","portfolio");
$shop1=$_GET['id'];

$result=mysqli_query($coo,"DELETE from team_members where id=$shop1");
if ($result) {
	echo "<script>alert('Successfully Deleted');
    window.location.href='team_form.php';
	</script>";

}





?>