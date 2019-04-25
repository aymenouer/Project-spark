<?PHP
class users{
	private $id; 
	private $username; 
	private $password;
	private $created_at;
	private $email;
	private $num;
	private $nom;
	private $prenom;
	private $photo;
	
	function __construct($id,$username,$password,$created_at,$email,$num,$nom,$prenom,$photo){
		$this->id=$id;
		$this->username=$username;
		$this->password=$password;
		$this->created_at=$created_at;
		$this->email=$email;
		$this->num=$num;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->photo=$photo;

	}
	
	function getid(){
		return $this->id;
	}
	function getusername(){
		return $this->username;
	}
	function getpassword(){
		return $this->password;
	}

	function getcreatedat(){
		return $this->created_at;
	}

	function getemail(){
		return $this->email;
	}

	function getnum(){
		return $this->num;
	}

	function getnom(){
		return $this->nom;
	}

	function getprenom(){
		return $this->prenom;
	}

	function getphoto(){
		return $this->photo;
	}




	function setid($id){
		$this->id=$id;
	}
	function setusername($username){
		$this->username=$username;
	}
	function setpassword($password){
		$this->password=$password;
	}
	function setcreatedat($created_at){
		$this->created_at=$created_at;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setnum($num){
		$this->num=$num;
	}

	function setnom($nom){
		$this->nom=$nom;
	}

	function setprenom($prenom){
		$this->prenom=$prenom;
	}

	function setphoto($photo){
		$this->photo=$photo;
	}

}

?>