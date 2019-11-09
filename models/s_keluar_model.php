<?php  
	/**
	* 
	*/
	class S_Keluar
	{
		public $tahun_k;
		public $jumlah_tahunan_k;
		public $id_s_keluar;
		public $tgl_s;
		public $tujuan_s;
		public $no_s;
		public $perihal;
		public $staf;
		public $penerima_s;
		public $status;
		public $foto;

		function __construct($tahun_k,$jumlah_tahunan_k,$id_s_keluar,$tgl_s,$tujuan_s,$no_s,$perihal,$staf,$penerima_s,$status,$foto)
		{
			# code...
			$this->tahun_k=$tahun_k;
			$this->jumlah_tahunan_k=$jumlah_tahunan_k;
			$this->id_s_keluar=$id_s_keluar;
			$this->tgl_s=$tgl_s;
			$this->tujuan_s=$tujuan_s;
			$this->no_s=$no_s;
			$this->perihal=$perihal;
			$this->staf=$staf;
			$this->penerima_s=$penerima_s;
			$this->status=$status;
			$this->foto=$foto;
		}

		public static function showAllS_Keluar_T(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT YEAR(tgl_s) AS tahun_k, COUNT(*) AS jumlah_tahunan_k FROM s_keluar 
			GROUP BY YEAR(tgl_s)");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar($post['tahun_k'],$post['jumlah_tahunan_k'],['id_s_keluar'],['tgl_s'],['tujuan_s'],['no_s'],['perihal'],['staf'],['penerima_s'],['status'],['foto']
				);
		}


		return $list;
	}

		public static function showAllS_Keluar(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM s_keluar order by tgl_s desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Keluar_S(){
		$list=[];

		$db = DB::getInstance();
		$staf = "SEKRETARIS";

		$req = $db->query("SELECT * FROM s_keluar where staf='$staf' order by tgl_s desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Keluar_PK(){
		$list=[];

		$db = DB::getInstance();
		$staf = "KABID. PENCEGAHAN & KESIAPSIAGAAN";

		$req = $db->query("SELECT * FROM s_keluar where staf='$staf' order by tgl_s desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Keluar_KL(){
		$list=[];

		$db = DB::getInstance();
		$staf = "KABID. KEDARURATAN & LOGISTIK";

		$req = $db->query("SELECT * FROM s_keluar where staf='$staf' order by tgl_s desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

	public static function showAllS_Keluar_RR(){
		$list=[];

		$db = DB::getInstance();
		$staf = "KABID. REHABILITASI & REKONSTRUKSI";

		$req = $db->query("SELECT * FROM s_keluar where staf='$staf' order by tgl_s desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']
				);
		}


		return $list;
	}

		public static function addDataS_keluar($kode_s,$tgl_s,$tujuan_s,$no_s,$perihal,$staf,$penerima_s,$status,$foto){
		$db = DB::getInstance();

		$status="Belum Diarsipkan";

		$req = $db->query("INSERT INTO s_keluar (id_s_keluar, tgl_s, tujuan_s, no_s, perihal, staf, penerima_s, status, foto) 

			VALUES (NULL, '".$tgl_s."', '".$tujuan_s."', '".$no_s."', '".$perihal."', '".$staf."', '".$penerima_s."', '".$status."', '".$foto."');");

		return $req;

	}

		public static function deleteS_Keluar($id_s_keluar){
		$db = DB::getInstance();

		$req = $db->query("DELETE from s_keluar where id_s_keluar=$id_s_keluar
			");

		return $req;
	}

		public static function search($tgl_s){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_keluar where tgl_s like '%$tgl_s%' OR no_s like '%$tgl_s%' OR tujuan_s like '%$tgl_s%' OR perihal like '%$tgl_s%' order by tgl_s desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_RR($tgl_s){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_keluar where tgl_s like '%$tgl_s%' AND staf='KABID. REHABILITASI & REKONSTRUKSI' OR no_s like '%$tgl_s%' AND staf='KABID. REHABILITASI & REKONSTRUKSI' OR tujuan_s like '%$tgl_s%' AND staf='KABID. REHABILITASI & REKONSTRUKSI' OR perihal like '%$tgl_s%' AND staf='KABID. REHABILITASI & REKONSTRUKSI' order by tgl_s desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_KL($tgl_s){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_keluar where tgl_s like '%$tgl_s%' AND staf='KABID. KEDARURATAN & LOGISTIK' OR no_s like '%$tgl_s%' AND staf='KABID. KEDARURATAN & LOGISTIK' OR tujuan_s like '%$tgl_s%' AND staf='KABID. KEDARURATAN & LOGISTIK' OR perihal like '%$tgl_s%' AND staf='KABID. KEDARURATAN & LOGISTIK' order by tgl_s desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_PK($tgl_s){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_keluar where tgl_s like '%$tgl_s%' AND staf='KABID. PENCEGAHAN & KESIAPSIAGAAN' OR no_s like '%$tgl_s%' AND staf='KABID. PENCEGAHAN & KESIAPSIAGAAN' OR tujuan_s like '%$tgl_s%' AND staf='KABID. PENCEGAHAN & KESIAPSIAGAAN' OR perihal like '%$tgl_s%' AND staf='KABID. PENCEGAHAN & KESIAPSIAGAAN' order by tgl_s desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function search_S($tgl_s){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_keluar where tgl_s like '%$tgl_s%' AND staf='SEKRETARIS' OR no_s like '%$tgl_s%' AND staf='SEKRETARIS' OR tujuan_s like '%$tgl_s%' AND staf='SEKRETARIS' OR perihal like '%$tgl_s%' AND staf='SEKRETARIS' order by tgl_s desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new S_Keluar(['tahun_k'],['jumlah_tahunan_k'],$post['id_s_keluar'],$post['tgl_s'],$post['tujuan_s'],$post['no_s'],$post['perihal'],$post['staf'],$post['penerima_s'],$post['status'],$post['foto']);
		}
		return $list;
	}

	public static function editStatus($id_s_keluar){
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM s_keluar where id_s_keluar='$id_s_keluar' order by id_s_keluar desc");
		$status = "Belum Diarsipkan";
		foreach ($req->fetchAll() as $oke) {
			$status = $oke['status'];
		}

		if($status=="Belum Diarsipkan"){
			$status="Telah Diarsipkan";
		}
		$req = $db->query("UPDATE s_keluar set status='$status' where id_s_keluar='$id_s_keluar'");
		return $req;

	}

}

	?>