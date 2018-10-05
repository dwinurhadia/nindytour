<?php
session_start();
include('connect.php');
include('constant.php');
include('helper.php');
if(!empty($_POST)){
	switch ($_POST['action']) {
		case 'login':
			$query_cek = 'select * from user where (username="'.$_POST['username'].'" OR email="'.$_POST['username'].'") and password="'.$_POST['password'].'"';
			$data_cek = get_data($query_cek);
			// debug($data_cek);
			if(count($data_cek) == 1){
				// echo "data benar ada single";
				$row = $data_cek[0];
				$_SESSION["id"] = $row["id_user"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["level"] = $row["level"];
				$_SESSION["login"] = true;
				// debug($_SESSION);
				header ("Location: index.php");
				exit();
			}else {
				// echo "data tidak ada atau dobel";
				header('Location: index.php');
				exit();
			}
		break;
		case 'forget-password':
			$query_cek = 'select * from user where email="'.$_POST['email'].'"';
			$result = get_data($query_cek);
			if(count($result) > 0){
				$new_pwd = rand_alphanum();
				$query_update = 'update user set password = "'.$new_pwd.'" where id_user="'.$result['id_user'].'"';
				$update_pwd = $conn->query($query_update);
				$email_to = $_POST['email'];
				$subject = 'Password reset';
				$message = "You are request to reset your password\n";
				$message .= "Here is your new password : ".$new_pwd;
				$headers = get_email_header();

				// Send
				if(mail($email_to, $subject, $message, $headers)){
					header ("Location: index.php?dest=login");
				}else{
				    var_dump(error_get_last()['message']);
				}

			}else {
				header ("Location: index.php?dest=forget-password");
				exit();
			}
		break;
		case 'register':
			$username = trim($_POST['username']);
			$username = strtolower($username);
			$check_data = check_data($username,$_POST['email']);
			if($check_data){
				$sql = "INSERT INTO user (username, password, email, level)	VALUES ('".$username."', '".$_POST['password']."', '".$_POST['email']."', 'pemesan')";

				if ($conn->query($sql) === TRUE) {
					// $email_to = $_POST['email'];
					// $subject = "Welcome message";
					// $message = "Congratulation, your register is successfull\n";
					// $message .= "Here is your credential :\n";
					// $message .= "username : ".$username;
					// $message .= "\npassword : ".$_POST['password'];
					// $headers = get_email_header();

					// Send
					// if(mail($email_to, $subject, $message, $headers)){
						// header ("Location: index.php?dest=login");
					// }else{
					    var_dump(error_get_last()['message']);
					// }
				} else {
					header ("Location: index.php");
				}
			}else{
				header ("Location: index.php?dest=register");
				exit();
			}
		break;
		default:
			header ("Location: index.php");
			exit();
		break;
	}
}

?>