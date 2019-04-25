<?PHP
class competition{
	private $id_comp;
	private $nom;
	private $nbre;
	private $lieu;
	private $datec;
	private $descri;
	function __construct($id_comp,$nom,$nbre,$lieu,$datec,$descri){
		$this->id_comp=$id_comp;
		$this->nom=$nom;
		$this->nbre=$nbre;
		$this->lieu=$lieu;
		$this->datec=$datec;
		$this->descri=$descri;
	}
	function getid_comp(){
		return $this->id_comp;
	}	
	function getnom(){
		return $this->nom;
	}
	function getnbre(){
		return $this->nbre;
	}
	function getlieu(){
		return $this->lieu;
	}
	function getdatec(){
		return $this->datec;
	}
	function getdescri(){
		return $this->descri;
	}



	function setnom($nom){
		$this->nom=$nom;
	}
	function setnbre($nbre){
		$this->nbre=$nbre;
	}
	function setlieu($lieu){
		$this->lieu;
	}
	function setdatec($datec){
		$this->datec=$datec;
	}
	function setdescri($descri){
		$this->descri=$descri;
	}
	
}

?>