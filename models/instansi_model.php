<?php  
	/**
	* 
	*/
	class Instansi
	{
		public $id_instansi;
		public $instansi;
		public $alamat;

		function __construct($id_instansi,$instansi,$alamat)
		{
			# code...
			$this->id_instansi=$id_instansi;
			$this->instansi=$instansi;
			$this->alamat=$alamat;
		}

		public static function showAllInstansi(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM instansi order by instansi");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Instansi($post['id_instansi'],$post['instansi'],$post['alamat']
				);
		}


		return $list;
	}

	public static function deleteInstansi($id_instansi){
		$db = DB::getInstance();

		$req = $db->query("DELETE from instansi where id_instansi=$id_instansi
			");

		return $req;
	}

	public static function addDataInstansi($instansi,$alamat){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO instansi (id_instansi, instansi, alamat) 
			VALUES (NULL, '".$instansi."', '".$alamat."');");

		return $req;
	}

	public static function editInstansi($id_instansi){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM instansi where id_instansi=$id_instansi");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Instansi($post['id_instansi'],$post['instansi'],$post['alamat']
				);
		}


		return $list;
	}

	public static function editDataInstansi($instansi,$alamat,$id_instansi){
		$db = DB::getInstance();

		$req = $db->query("UPDATE instansi set instansi='$instansi', alamat='$alamat'
			where id_instansi='$id_instansi'
			");

		return $req;
	}

	public static function search($instansi){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM instansi where instansi like '%$instansi%' order by id_instansi desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Instansi($post['id_instansi'],$post['instansi'],$post['alamat']);
		}
		return $list;
	}

	}
?>