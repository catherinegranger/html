<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/


class SignUpUser {
  public $user_active = 0;
  public $user_id = 0;
  private $clean_email;
  public $status = false;
  private $clean_password;
  private $displayname;
  public $sql_failure = false;
  public $mail_failure = false;
  public $activation_token = 0;
  public $activation_msg = 0;
  public $success = NULL;
	
  function __construct($displayname,$password,$email) {
    $this->displayname = $displayname;
    $this->clean_email = sanitize($email);
    $this->clean_password = trim($password);
  }

  public function addUser() {
    global $mysqli,$emailActivation,$websiteUrl,$db_table_prefix;
		
    //Construct a secure hash for the plain text password
    $secure_pass = generateHash($this->clean_password);
    //Construct a unique activation token
    $this->activation_token = generateActivationToken();
    $this->user_active = 0; // user will need to activate the account
    $mail = new userCakeMail();
    //Build the activation message
    $activation_message = lang("ACCOUNT_ACTIVATION_MESSAGE",array("https://bluedanubewine.com",$this->activation_token));
    $this->activation_msg = $activation_message;
    $hooks = array(
		   "searchStrs" => array("#ACTIVATION-MESSAGE","#USERNAME#"),
		   "subjectStrs" => array($activation_message, $this->displayname)
		   );
    /* Build the template  */
    if (!$mail->newTemplateMsg("new-registration.txt",$hooks)) {
      $this->mail_failure = true;
    }
    else {
      if (!$mail->sendMail($this->clean_email,"New Account Activation")) {
	$this->mail_failure = true;
      }
    }
    if (!$this->mail_failure) {
      $this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
      //Insert the user into the database providing no errors have been found.
      $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."users (
					display_name,
					password,
					email,
					activation_token,
					last_activation_request,
					lost_password_request, 
					active,
					title,
					sign_up_stamp,
					last_sign_in_stamp
					)
					VALUES (
					?,
					?,
					?,
					?,
					'".time()."',
					'0',
					?,
					'New Member',
					'".time()."',
					'0'
					)");
      $stmt->bind_param("ssssi", $this->displayname, $secure_pass, $this->clean_email, $this->activation_token, $this->user_active);
      $stmt->execute();
      $insert_error = $mysqli->error;
      $inserted_id = $mysqli->insert_id;
      $stmt->close();
      $this->user_id = $inserted_id;
      //Insert default permission into matches table
      $stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."user_permission_matches  (
					user_id,
					permission_id
					)
					VALUES (
					?,
					'1'
					)");
      $stmt->bind_param("s", $inserted_id);
      $stmt->execute();
      $stmt->close();
      return($insert_error);
    }
  }
}


?>