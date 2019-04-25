<?PHP
class stage{
	private $id_stage;
	private $nom;
	private $lieu;
	private $dates;
	private $formateur;
	private $programme;
	function __construct($id_stage,$nom,$lieu,$dates,$formateur,$programme){
		$this->id_stage=$id_stage;
		$this->nom=$nom;
		$this->lieu=$lieu;
		$this->dates=$dates;
		$this->formateur=$formateur;
		$this->programme=$programme;
	}
	
	function getid_stage(){
		return $this->id_stage;
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
	function getformateur(){
		return $this->formateur;
	}
	function getprogramme(){
		return $this->programme;
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
	function setformateur($formateur){
		$this->formateur=$formateur;
	}
	function setprogramme($programme){
		$this->programme=$programme;
	}
	
}

?>