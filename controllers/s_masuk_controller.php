<?php 
Class SMasukController{

	public function grafik_sm_kl(){
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/grafik_sm_kl.php");	
	}

	public function grafik_sm_rr(){
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/grafik_sm_rr.php");	
	}

	public function grafik_sm_pk(){
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/grafik_sm_pk.php");	
	}

	public function grafik_sm_s(){
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/grafik_sm_s.php");	
	}

	public function grafik_sm(){
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/grafik_sm.php");	
	}

	public function s_masukT(){
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/s_tahun.php");	
	}

	public function s_masuk(){
		$posts=S_Masuk::showAllS_Masuk();
		require_once("views/pages/s_masuk.php");	
	}

	public function s_masukS(){
		$posts=S_Masuk::showAllS_Masuk_S();
		require_once("views/pages/s_masuk_s.php");	
	}

	public function s_masukPK(){
		$posts=S_Masuk::showAllS_Masuk_PK();
		require_once("views/pages/s_masuk_pk.php");	
	}

	public function s_masukKL(){
		$posts=S_Masuk::showAllS_Masuk_KL();
		require_once("views/pages/s_masuk_kl.php");	
	}

	public function s_masukRR(){
		$posts=S_Masuk::showAllS_Masuk_RR();
		require_once("views/pages/s_masuk_rr.php");	
	}

	public function tampilAddS_masuk(){
		$posts=Instansi::showAllInstansi();
		require_once("views/pages/tambah_s_masuk.php");	
	}

	public function addDataS_masuk(){
		$posts = S_Masuk::addDataS_masuk($_GET["surat_dari"],$_GET["tgl_terima"],$_GET["no_agenda"],$_GET["perihal"],$_GET["disposisi"],$_GET["ket"],$_GET["status"],$_GET["foto"]);
		header("location:index.php?controller=s_masuk&action=s_masuk");
	}

	public function search(){
		$posts = S_Masuk::search($_GET["id_s_masuk"]);
		require_once('views/pages/s_masuk.php');
	}

	public function search_S(){
		$posts = S_Masuk::search_S($_GET["id_s_masuk"]);
		require_once('views/pages/s_masuk_s.php');
	}

	public function search_PK(){
		$posts = S_Masuk::search_PK($_GET["id_s_masuk"]);
		require_once('views/pages/s_masuk_pk.php');
	}

	public function search_KL(){
		$posts = S_Masuk::search_KL($_GET["id_s_masuk"]);
		require_once('views/pages/s_masuk_kl.php');
	}

	public function search_RR(){
		$posts = S_Masuk::search_RR($_GET["id_s_masuk"]);
		require_once('views/pages/s_masuk_rr.php');
	}

	public function deleteS_masuk(){
		$posts=S_Masuk::deleteS_masuk($_GET["id_s_masuk"]);
		header("location:index.php?controller=s_masuk&action=s_masuk");
	}

	public function editStatus(){
		$posts = S_Masuk::editStatus($_GET["id_s_masuk"]);
		header("location:index.php?controller=s_masuk&action=s_masukS");
	}

	public function editStatus_RR(){
		$posts = S_Masuk::editStatus($_GET["id_s_masuk"]);
		header("location:index.php?controller=s_masuk&action=s_masukRR");
	}

	public function editStatus_KL(){
		$posts = S_Masuk::editStatus($_GET["id_s_masuk"]);
		header("location:index.php?controller=s_masuk&action=s_masukKL");
	}

	public function editStatus_PK(){
		$posts = S_Masuk::editStatus($_GET["id_s_masuk"]);
		header("location:index.php?controller=s_masuk&action=s_masukPK");
	}

}

?>
