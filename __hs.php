<?php 
header('Content-Type: application/json');
	// $data = /** whatever you're serializing **/;
	// echo json_encode($data);
if(isset($_GET['hash']) && isset($_GET['type'])){
	echo password_hash($_GET['hash'], $_GET['type'])."\n";
	return password_hash($_GET['hash'], $_GET['type'])."\n";
	exit(0);
}