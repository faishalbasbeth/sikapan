<?php  
	/**
	* 
	*/
	class Akun
	{
		public $id_user;
		public $nama;
		public $hak_akses;
		public $level;
		public $password;

		function __construct($id_user,$nama,$hak_akses,$level,$password)
		{
			# code...
			$this->id_user=$id_user;
			$this->nama=$nama;
			$this->hak_akses=$hak_akses;
			$this->level=$level;
			$this->password=$password;
		}

		public static function showAllAkun(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Akun($post['id_user'],$post['nama'],$post['hak_akses'],$post['level'],$post['password']
				);
		}


		return $list;
	}

	public static function deleteAkun($id_user){
		$db = DB::getInstance();

		$req = $db->query("DELETE from user where id_user=$id_user
			");

		return $req;
	}

	public static function addDataAkun($nama,$level,$password){
		$db = DB::getInstance();

		$hak_akses="";
		if ($level==1) {
			$hak_akses="AGENDARIS";
		}elseif ($level==2) {
			$hak_akses="SEKRETARIS";
		}elseif ($level==3){
			$hak_akses="KABID. PENCEGAHAN & KESIAPSIAGAAN";
		}elseif ($level==4){
			$hak_akses="KABID. KEDARURATAN & LOGISTIK";
		}else{
			$hak_akses="KABID. REHABILITASI & REKONSTRUKSI";
		}

		$req = $db->query("INSERT INTO user (id_user, nama, hak_akses, level, password)
			VALUES (NULL, '".$nama."', '".$hak_akses."', '".$level."', '".$password."');");
				
		return $req;
	}

	}
?>