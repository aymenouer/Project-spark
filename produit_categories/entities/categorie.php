<?PHP
class Categorie{
	private $lib_c;
	private $description;
	function __construct($lib_c,$description){
		$this->lib_c=$lib_c;
		$this->description=$description;
	}

		function getdescription(){
		return $this->description;
	}
	function getlib_c(){
		return $this->lib_c;
	}

	function setdescription($description){
		$this->description=$description;
	}
	
	function setlib_c($lib_c){
		$this->lib_c;
	}

}

?>