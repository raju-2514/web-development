<?php
include_once("includes/functions.php");
?>
<?php
showandhide('advertisments','UserID',$_GET['UserID']);
header("Location: ".$_SERVER['HTTP_REFERER']); 
	?>