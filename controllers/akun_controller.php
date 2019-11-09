<?php 
Class AkunController{

	public function akun(){
		$posts=Akun::showAllAkun();
		require_once("views/pages/akun.php");	
	}

	public function tampilAddAkun(){
		$posts=Akun::showAllAkun();
		require_once("views/pages/tambah_akun.php");	
	}

	public function addDataAkun(){
		$posts = Akun::addDataAkun($_GET["nama"],$_GET["level"],$_GET["password"]);
		header("location:index.php?controller=akun&action=akun");
		
	}

	public function deleteAkun(){
		$posts=Akun::deleteAkun($_GET["id_user"]);
		header("location:index.php?controller=akun&action=akun");
	}

}

?>
