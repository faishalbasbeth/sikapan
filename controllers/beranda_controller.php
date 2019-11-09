<?php 
Class BerandaController{

	public function beranda(){
		$posts=S_Masuk::showAllS_Masuk_T();
		$posts2=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/beranda.php");	
	}

	public function berandaS(){
		$posts2=S_Keluar::showAllS_Keluar_T();
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/beranda_s.php");	
	}

	public function berandaPK(){
		$posts2=S_Keluar::showAllS_Keluar_T();
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/beranda_pk.php");	
	}

	public function berandaKL(){
		$posts=S_Masuk::showAllS_Masuk_T();
		$posts2=S_Keluar::showAllS_Keluar_T();
		require_once("views/pages/beranda_kl.php");	
	}

	public function berandaRR(){
		$posts2=S_Keluar::showAllS_Keluar_T();
		$posts=S_Masuk::showAllS_Masuk_T();
		require_once("views/pages/beranda_rr.php");	
	}

}

?>
