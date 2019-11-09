<?php 

function call($controller, $action){
	require_once('controllers/'.$controller.'_controller.php');

	switch ($controller) {
		case 'login':
		$controller=new LoginController();
		require_once('models/login_model.php');
		break;
		case 'beranda':
		$controller=new BerandaController();
		require_once('models/s_masuk_model.php');
		require_once('models/s_keluar_model.php');
		break;
		case 's_masuk':
		$controller=new SMasukController();
		require_once('models/s_masuk_model.php');
		require_once('models/instansi_model.php');
		break;
		case 'instansi':
		$controller=new InstansiController();
		require_once('models/instansi_model.php');
		break;
		case 's_keluar':
		$controller=new SKeluarController();
		require_once('models/s_keluar_model.php');
		require_once('models/instansi_model.php');
		break;
		case 'akun':
		$controller=new AkunController();
		require_once('models/akun_model.php');
		break;
	}
	$controller->{ $action }();
}



$controllers = array(
	'login' => ['login','error','authentication',],
	'beranda' => ['beranda','berandaS','berandaPK','berandaKL','berandaRR',],
	's_masuk' => ['grafik_sm_kl','grafik_sm_rr','grafik_sm_pk','grafik_sm_s','s_masukT','grafik_sm','s_masuk','s_masukS','s_masukPK','s_masukKL','s_masukRR','tampilAddS_masuk','addDataS_masuk','search','search_S','search_PK','search_KL','search_RR','deleteS_masuk','editStatus','editStatus_RR','editStatus_KL','editStatus_PK',],
	'instansi' => ['instansi','tampilAddInstansi','addDataInstansi','deleteInstansi','editInstansi','editDataInstansi'
					,'search',],
	's_keluar' => ['grafik_sk_kl','grafik_sk_rr','grafik_sk_pk','grafik_sk_s','grafik_sk','s_keluarT','s_keluar','s_keluarS','s_keluarPK','s_keluarKL','s_keluarRR','tampilAddS_keluar','addDataS_keluar','deleteS_keluar','search','search_RR','search_KL','search_PK','search_S','editStatus','editStatus_PK','editStatus_KL','editStatus_RR',],
	'akun' => ['akun','tampilAddAkun','addDataAkun','deleteAkun','editAkun','editDataAkun',],
	);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>