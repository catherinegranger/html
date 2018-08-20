<?PHP

Class user {

	var $alias;
	var $email;
	var $logged_in;
	var $admin_level;

	function user(&$db,&$smarty,&$session) {
	
		$this->db = $db;
		$this->smarty = $smarty;
		$this->session = $session;
	
	}

	
	function churn() {
	
		foreach($this->session as $k => $v){
		
			$this->smarty->assign(${k},$v);
			
		}
		
	}
	

}

?>