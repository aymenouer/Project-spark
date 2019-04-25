<?PHP
class rating{
	private $id_rating;
	private $mail;
	private $categorie;
	private $rate;
	private $message;

	function __construct($id_rating,$mail,$categorie,$rate,$message){
		$this->id_rating=$id_rating;
		$this->mail=$mail;
		$this->categorie=$categorie;
		$this->rate=$rate;
		$this->message=$message;


	}
	function getrate(){
		return $this->rate;
	}	
	function getid_rating(){
		return $this->id_rating;
	}
	function getmail(){
		return $this->mail;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getmessage(){
		return $this->message;
	}

	function setid_rating($id_rating){
		$this->id_rating=$id_rating;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setrate($rate){
		$this->rate=$rate;
	}
		function setmessage($message){
		$this->message=$message;
	}
}

?>