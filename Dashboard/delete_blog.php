<?php
$coo=mysqli_connect("localhost","root","","portfolio");
$shop1=$_GET['id'];

$result=mysqli_query($coo,"DELETE from blog_post where id=$shop1");
if ($result) {
	echo "<script>alert('Successfully Deleted');
    window.location.href='blog_form.php';
	</script>";

}





?>