<?php
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE feedback SET status_lh=0 where `feedback`.`id_feedback` = '".$code_cart."' ";
		$query = mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlyphanhoi&query=lietke');
	}
?>