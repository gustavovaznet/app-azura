<?php
	session_start();
	require_once '../../azura/connection.php';
	require_once '../../azura/login.model.php';
	require_once '../../azura/login.service.php';
	//ACTION CHECK
	$action = isset($_GET['action']) ? $_GET['action'] : $action;
		//LOGIN
		if($action == 'login'){
			if(empty($_POST['email']) || empty($_POST['password'])){
				header('location: index.php?status=invalid');
				exit;
			}
			$connection = new Connection();
			$login = new Login();
			$login->__set('email',$_POST['email']);
			$login->__set('password',$_POST['password']);
			$loginService = new LoginService($connection, $login);
			$loginService->login();
			if($login->__get('id') != '' && $login->__get('name') != ''){
				$_SESSION['user'] = $login->__get('name');
				header('location: painel.php');	
			}else{
				header('location: index.php?status=invalido');	
			}
		//REGISTER
		}else if($action == 'register'){		
			if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])){
				header('location: index.php?status=empty');
				exit;
			}
			if($_POST['confirm_password'] != $_POST['password']){
				header('location: index.php?status=different');
				exit;
			}
			$connection = new Connection();
			$login = new Login();
			$login->__set('name',$_POST['name']);			
			$login->__set('email',$_POST['email']);
			$login->__set('password',$_POST['password']);
			$login->__set('confirm_password',$_POST['confirm_password']);
			$loginService = new LoginService($connection, $login);
			$loginService->register();
			header('location: index.php?status=registered');
		//RECOVER
		}else if($action == 'recover'){
			$connection = new Connection();
			$login = new Login();
			$loginService = new LoginService($connection, $login);
			$users = $loginService->recover();
		}
?>
