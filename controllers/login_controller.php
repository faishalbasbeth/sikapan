<?php 
	/**
	* 
	*/
	class LoginController
	{

		public function login(){
			$error='';
			require_once('views/pages/login.php');
		}

		public function authentication(){
			$error='';
			if (!isset($_GET['username'])) {
			}
			if(Login::find($_GET['username'],$_GET['password'])==0){
				$error="username atau password  tidak valid";
				require_once('views/pages/login.php');
			}
			else if(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=beranda&action=beranda");
			}
			else if(Login::find($_GET['username'],$_GET['password'])==2){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=beranda&action=berandaS");
			}
			else if(Login::find($_GET['username'],$_GET['password'])==3){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=beranda&action=berandaPK");
			}
			else if(Login::find($_GET['username'],$_GET['password'])==4){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=beranda&action=berandaKL");
			}
			else{
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=beranda&action=berandaRR");
			}
		}
		
}
?>