<?PHP
class User{
	private $username;
	private $emamil;
	private $password;
	function __construct($username,$email,$password){
		$this->username=$username;
		$this->username=$username;
		$this->password=$password;
	}
	
	function getUserName(){
		return $this->username;
	}
	function getEmail(){
		return $this->email;
	}
	function getPassword(){
		return $this->password;
	}
	
	

	
	
}

?>