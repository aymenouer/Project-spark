<?PHP
class bib{
	private $image_f;
		private $image_s;
			private $image_t;
	private $id_p;
	function __construct($image_f,$image_s,$image_t,$id_p){
		$this->image_f=$image_f;
		$this->image_s=$image_s;
		$this->image_t=$image_t;
		$this->id_p=$id_p;
	}

		function getimage_f(){
		return $this->image_f;
	}
		function getimage_s(){
		return $this->image_s;
	}
		function getimage_t(){
		return $this->image_t;
	}
	function getid_p(){
		return $this->id_p;
	}

	

}

?>