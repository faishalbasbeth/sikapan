<?php  
	/**
	* 
	*/
	class S_Masuk
	{
		public $tahun_m;
		public $jumlah_tahunan_m;
		public $id_s_masuk;
		public $surat_dari;
		public $tgl_terima;
		public $no_agenda;
		public $perihal;
		public $disposisi;
		public $ket;
		public $status;
		public $foto;
		

		function __construct($tahun_m,$jumlah_tahunan_m,$id_s_masuk,$surat_dari,$tgl_terima,$no_agenda,$perihal,$disposisi,$ket,$status,$foto)
		{
			# code...
			$this->tahun_m=$tahun_m;
			$this->jumlah_tahunan_m=$jumlah_tahunan_m;
			$this->id_s_masuk=$id_s_masuk;
			$this->surat_dari=$surat_dari;
			$this->tgl_terima=$tgl_terima;
			$this->no_agenda=$no_agenda;
			$this->perihal=$perihal;
			$this->disposisi=$disposisi;
			$this->ket=$ket;
			$this->status=$status;
			$this->foto=$foto;
			
		}

		public static function showAllS_Masuk_T(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT YEAR(tgl_terima) AS tahun_m, COUNT(*) AS jumlah_tahunan_m FROM s_masuk 
			GROUP BY YEAR(tgl_terima)");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk($post['tahun_m'],$post['jumlah_tahunan_m'],['id_s_masuk'],['surat_dari'],['tgl_terima'],['no_agenda'],['perihal'],['disposisi'],['ket']
				,['status'],['foto']
				);
		}


		return $list;
	}

		public static function showAllS_Masuk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM s_masuk order by tgl_terima desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

		public static function showAllS_Masuk_S(){
		$list=[];

		$db = DB::getInstance();
		$disposisi = "SEKRETARIS";

		$req = $db->query("SELECT * FROM s_masuk where disposisi ='$disposisi' order by tgl_terima desc" );

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Masuk_PK(){
		$list=[];

		$db = DB::getInstance();
		$disposisi = "KABID. PENCEGAHAN & KESIAPSIAGAAN";

		$req = $db->query("SELECT * FROM s_masuk where disposisi ='$disposisi' order by tgl_terima desc" );

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Masuk_KL(){
		$list=[];

		$db = DB::getInstance();
		$disposisi = "KABID. KEDARURATAN & LOGISTIK";

		$req = $db->query("SELECT * FROM s_masuk where disposisi ='$disposisi' order by tgl_terima desc" );

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Masuk_RR(){
		$list=[];

		$db = DB::getInstance();
		$disposisi = "KABID. REHABILITASI & REKONSTRUKSI";

		$req = $db->query("SELECT * FROM s_masuk where disposisi ='$disposisi' order by tgl_terima desc" );

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function addDataS_Masuk($surat_dari,$tgl_terima,$no_agenda,$perihal,$disposisi,$ket,$status,$foto){
		$db = DB::getInstance();

		$status="Belum Diarsipkan";

		$req = $db->query("INSERT INTO s_masuk (id_s_masuk, surat_dari, tgl_terima, no_agenda, perihal, disposisi, ket, status, foto) 

			VALUES (NULL, '".$surat_dari."', '".$tgl_terima."', '".$no_agenda."', '".$perihal."', '".$disposisi."', '".$ket."', '".$status."', '".$foto."');");

		return $req;

	}

	public static function search($tgl_terima){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_masuk where tgl_terima like '%$tgl_terima%' OR no_agenda like '%$tgl_terima%' OR surat_dari like '%$tgl_terima%' OR perihal like '%$tgl_terima%' order by tgl_terima desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_S($tgl_terima){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_masuk where tgl_terima like '%$tgl_terima%' AND disposisi='SEKRETARIS' OR no_agenda like '%$tgl_terima%' AND disposisi='SEKRETARIS' OR surat_dari like '%$tgl_terima%' AND disposisi='SEKRETARIS' OR perihal like '%$tgl_terima%' AND disposisi='SEKRETARIS' order by tgl_terima desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_PK($tgl_terima){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_masuk where tgl_terima like '%$tgl_terima%' AND disposisi=
			'KABID. PENCEGAHAN & KESIAPSIAGAAN' OR no_agenda like '%$tgl_terima%' AND disposisi=
			'KABID. PENCEGAHAN & KESIAPSIAGAAN' OR surat_dari like '%$tgl_terima%' AND disposisi=
			'KABID. PENCEGAHAN & KESIAPSIAGAAN' OR perihal like '%$tgl_terima%' AND disposisi=
			'KABID. PENCEGAHAN & KESIAPSIAGAAN' order by tgl_terima desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_KL($tgl_terima){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_masuk where tgl_terima like '%$tgl_terima%' AND disposisi=
			'KABID. KEDARURATAN & LOGISTIK' OR no_agenda like '%$tgl_terima%' AND disposisi=
			'KABID. KEDARURATAN & LOGISTIK' OR surat_dari like '%$tgl_terima%' AND disposisi=
			'KABID. KEDARURATAN & LOGISTIK' OR perihal like '%$tgl_terima%' AND disposisi=
			'KABID. KEDARURATAN & LOGISTIK' order by tgl_terima desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_RR($tgl_terima){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_masuk where tgl_terima like '%$tgl_terima%' AND disposisi=
			'KABID. REHABILITASI & REKONSTRUKSI' OR no_agenda like '%$tgl_terima%' AND disposisi=
			'KABID. REHABILITASI & REKONSTRUKSI' OR surat_dari like '%$tgl_terima%' AND disposisi=
			'KABID. REHABILITASI & REKONSTRUKSI' OR perihal like '%$tgl_terima%' AND disposisi=
			'KABID. REHABILITASI & REKONSTRUKSI' order by tgl_terima desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Masuk(['tahun_m'],['jumlah_tahunan_m'],$post['id_s_masuk'],$post['surat_dari'],$post['tgl_terima'],$post['no_agenda'],$post['perihal'],$post['disposisi'],$post['ket'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function deleteS_Masuk($id_s_masuk){
		$db = DB::getInstance();

		$req = $db->query("DELETE from s_masuk where id_s_masuk=$id_s_masuk
			");

		return $req;
	}

	public static function editStatus($id_s_masuk){
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_masuk where id_s_masuk='$id_s_masuk' order by id_s_masuk desc");
		$status = "Belum Diarsipkan";
		foreach ($req->fetchAll() as $oke) {
			$status = $oke['status'];
		}

		if($status=="Belum Diarsipkan"){
			$status="Telah Diarsipkan";
		}
		$req = $db->query("UPDATE s_masuk set status='$status' where id_s_masuk='$id_s_masuk'");
		return $req;

	}

	}
?>