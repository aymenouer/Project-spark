<?PHP
class abonnement{
	private $reference;
	private $duree;
	private $prix;
	private $descr;

	function __construct($reference,$duree,$prix,$descr){
		$this->reference=$reference;
		$this->duree=$duree;
		$this->prix=$prix;
		$this->descr=$descr;

	}
	function getdescr(){
		return $this->descr;
	}	
	function getreference(){
		return $this->reference;
	}
	function getduree(){
		return $this->duree;
	}
	function getprix(){
		return $this->prix;
	}



	function setreference($reference){
		$this->reference=$reference;
	}
	function setduree($duree){
		$this->duree=$duree;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setdescr($descr){
		$this->descr=$descr;
	}
}

?>