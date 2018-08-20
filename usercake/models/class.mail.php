<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

class userCakeMail {
	//UserCake uses a text based system with hooks to replace various strs in txt email templates
	public $contents = NULL;
	
	//Function used for replacing hooks in our templates
	public function newTemplateMsg($template,$additionalHooks)
	{
		global $mail_templates_dir,$debug_mode;
		
		$this->contents = file_get_contents($mail_templates_dir.$template);
		
		//Check to see we can access the file / it has some contents
		if(!$this->contents || empty($this->contents))
		{
			return false;
		}
		else
		{
			//Replace default hooks
			$this->contents = replaceDefaultHook($this->contents);
			
			//Replace defined / custom hooks
			$this->contents = str_replace($additionalHooks["searchStrs"],$additionalHooks["subjectStrs"],$this->contents);
			
			return true;
		}
	}
	
	public function sendMail($email,$subject,$msg = NULL) {
		global $websiteName,$emailAddress;
		
        $header .= "From: ". $websiteName . " <" . $emailAddress . ">\r\n";
        $header .= "Reply-To: ". $websiteName . " <" . $emailAddress . ">\r\n";
        $header .= "Return-Path: ". $websiteName . " <" . $emailAddress . ">\r\n";
        $header .= "Organization: ". $websiteName . ">\r\n";
        $header .= "Bcc: catherine@bluedanubewine.com" . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $header .= "X-Priority: 3\r\n";
        $header .= "X-Mailer: PHP". phpversion() ."\r\n" ;
		
		//Check to see if we sending a template email.
		if($msg == NULL)
			$msg = $this->contents; 
		
		$message = $msg;
		
		$message = wordwrap($message, 70);
		
		return mail($email,$subject,$message,$header);
	}
}

?>