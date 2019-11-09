<?php 
Class InstansiController{

	public function instansi(){
		$posts=Instansi::showAllInstansi();
		require_once("views/pages/instansi.php");	
	}

	public function tampilAddInstansi(){
		$posts=Instansi::showAllInstansi();
		require_once("views/pages/tambah_instansi.php");	
	}

	public function addDataInstansi(){
		$posts = Instansi::addDataInstansi($_GET["instansi"],$_GET["alamat"]);
		header("location:index.php?controller=instansi&action=instansi");
		
	}

	public function deleteInstansi(){
		$posts=Instansi::deleteInstansi($_GET["id_instansi"]);
		header("location:index.php?controller=instansi&action=instansi");
	}

	public function editInstansi(){
		$posts=Instansi::editInstansi($_GET["id_instansi"]);
		require_once("views/pages/edit_instansi.php");
	}

	public function editDataInstansi(){
		$posts=Instansi::editDataInstansi($_GET["instansi"],$_GET["alamat"],$_GET["id_instansi"]);
		header("location:index.php?controller=instansi&action=instansi");
	}

	public function search(){
		$posts = Instansi::search($_GET["id_instansi"]);
		require_once('views/pages/instansi.php');
	}

}

?>
