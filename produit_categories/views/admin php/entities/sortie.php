<?PHP
class sortie{
	private $id_sortie;
	private $nom;
	private $lieu;
	private $dates;
	private $prix;

	function __construct($id_sortie,$nom,$lieu,$dates,$prix){
		$this->id_sortie=$id_sortie;
		$this->nom=$nom;
		$this->lieu=$lieu;
		$this->dates=$dates;
		$this->prix=$prix;
	}
	
	function getid_sortie(){
		return $this->id_sortie;
	}
	function getnom(){
		return $this->nom;
	}
	function getlieu(){
		return $this->lieu;
	}
	function getdates(){
		return $this->dates;
	}
	function getprix(){
		return $this->prix;
	}




	function setnom($nom){
		$this->nom=$nom;
	}
	function setlieu($lieu){
		$this->lieu=$lieu;
	}
	function setdates($dates){
		$this->dates;
	}
	function setprix($prix){
		$this->prix=$prix;
	}

	
}

?>