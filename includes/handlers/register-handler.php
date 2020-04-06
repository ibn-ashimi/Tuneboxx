<?php
	function sanitizeFormPassword($inputText){
		$inputText = strip_tags($inputText);
		return $inputText;
	}
	
	function sanitizeFormUsername($inputText){
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		return $inputText;
	}
	function sanitizeFormString($inputText){
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		$inputText = ucfirst(strtolower($inputText));
		return $inputText;
	}
	
	
if(isset($_POST['registerButton'])){
	//echo"Register button was pressed";
	$username = sanitizeFormUsername($_post['username']);
	$firstName = sanitizeFormString($_post['firstName']);
	$lastName = sanitizeFormString($_post['lastName']);
	$email = sanitizeFormString($_post['email']);
	$email2 = sanitizeFormString($_post['email2']);
	$password = sanitizeFormPassword($_post['password']);
	$password = sanitizeFormPassword($_post['password']);
	

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true) {
		header("Location: index.php");
	}
}
?>