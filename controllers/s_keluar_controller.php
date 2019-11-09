<?php 
Class SKeluarController{

	public function grafik_sk_kl(){
		$posts=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/grafik_sk_kl.php");	
	}

	public function grafik_sk_rr(){
		$posts=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/grafik_sk_rr.php");	
	}

	public function grafik_sk(){
		$posts=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/grafik_sk.php");	
	}

	public function grafik_sk_s(){
		$posts=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/grafik_sk_s.php");	
	}

	public function grafik_sk_pk(){
		$posts=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/grafik_sk_pk.php");	
	}

	public function s_keluarT(){
		$posts=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/s_tahun_k.php");	
	}

	public function s_keluar(){
		$posts=S_Keluar::showAllS_Keluar();
		require_once("views/pages/s_keluar.php");	
	}

	public function s_keluarS(){
		$posts=S_Keluar::showAllS_Keluar_S();
		require_once("views/pages/s_keluar_s.php");	
	}

	public function s_keluarPK(){
		$posts=S_Keluar::showAllS_Keluar_PK();
		require_once("views/pages/s_keluar_pk.php");	
	}

	public function s_keluarKL(){
		$posts=S_Keluar::showAllS_Keluar_KL();
		require_once("views/pages/s_keluar_kl.php");	
	}

	public function s_keluarRR(){
		$posts=S_Keluar::showAllS_Keluar_RR();
		require_once("views/pages/s_keluar_rr.php");	
	}

	public function tampilAddS_keluar(){
		$posts=Instansi::showAllInstansi();
		require_once("views/pages/tambah_s_keluar.php");	
	}

	public function addDataS_keluar(){
		$posts = S_Keluar::addDataS_keluar($_GET["kode_s"],$_GET["tgl_s"],$_GET["tujuan_s"],$_GET["no_s"],$_GET["perihal"],$_GET["staf"],$_GET["penerima_s"],$_GET["status"],$_GET["foto"]);
		header("location:index.php?controller=s_keluar&action=s_keluar");
		
	}

	public function deleteS_keluar(){
		$posts=S_Keluar::deleteS_keluar($_GET["id_s_keluar"]);
		header("location:index.php?controller=s_keluar&action=s_keluar");
	}

	public function search(){
		$posts = S_Keluar::search($_GET["id_s_keluar"]);
		require_once('views/pages/s_keluar.php');
	}

	public function search_RR(){
		$posts = S_Keluar::search_RR($_GET["id_s_keluar"]);
		require_once('views/pages/s_keluar_rr.php');
	}

	public function search_KL(){
		$posts = S_Keluar::search_KL($_GET["id_s_keluar"]);
		require_once('views/pages/s_keluar_kl.php');
	}

	public function search_PK(){
		$posts = S_Keluar::search_PK($_GET["id_s_keluar"]);
		require_once('views/pages/s_keluar_pk.php');
	}

	public function search_S(){
		$posts = S_Keluar::search_S($_GET["id_s_keluar"]);
		require_once('views/pages/s_keluar_s.php');
	}

	public function editStatus(){
		$posts = S_Keluar::editStatus($_GET["id_s_keluar"]);
		header("location:index.php?controller=s_keluar&action=s_keluarS");
	}

	public function editStatus_PK(){
		$posts = S_Keluar::editStatus($_GET["id_s_keluar"]);
		header("location:index.php?controller=s_keluar&action=s_keluarPK");
	}

	public function editStatus_KL(){
		$posts = S_Keluar::editStatus($_GET["id_s_keluar"]);
		header("location:index.php?controller=s_keluar&action=s_keluarKL");
	}

	public function editStatus_RR(){
		$posts = S_Keluar::editStatus($_GET["id_s_keluar"]);
		header("location:index.php?controller=s_keluar&action=s_keluarRR");
	}

}

?>