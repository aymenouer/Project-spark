<?PHP
class Produit{
	private $id;
	private $lib_p;
	private $prix;
	private $image;
	private $description;
	private $quantite_p;
	private $etat;
	private $lib_c;
	function __construct($id,$lib_p,$prix,$image,$description,$quantite_p,$etat,$lib_c){
		$this->id=$id;
		$this->lib_p=$lib_p;
		$this->prix=$prix;
		$this->image=$image;
		$this->description=$description;
		$this->quantite_p=$quantite_p;
		$this->etat=$etat;
		$this->lib_c=$lib_c;
	}

	
	function getid(){
		return $this->id;
	}
	function getlib_c(){
		return $this->lib_c;
	}
	function getlib_p(){
		return $this->lib_p;
	}
	function getprix(){
		return $this->prix;
	}
	function getimage(){
		return $this->image;
	}
	function getdescription(){
		return $this->description;
	}
	function getquantite_p(){
		return $this->quantite_p;
	}
	function getetat(){
		return $this->etat;
	}

	function setid($id){
		$this->id=$id;
	}
	function setlib_p($lib_p){
		$this->lib_p;
	}
	function setlib_c($lib_c){
		$this->lib_c=$lib_c;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setquantite_p($quantite_p){
		$this->quantite_p=$quantite_p;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	
}

?>