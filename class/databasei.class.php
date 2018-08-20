<?php



class Database {
  protected $mysql;
  protected $sql;
  protected $query_count;    //number or rows affected by last transaction
  protected $error;          //last error   

  function __construct() {
    $configdb_file_dir = dirname(__FILE__).'/../../';
    if ($config = parse_ini_file($configdb_file_dir.'dbconfig.ini')) { //Get MySQL config values
      $host = $config["host"];
      $username = $config["username"];
      $password = $config["password"];
      $dbname = $config["dbname"];
      //Connection between a database and php
      $this->mysql = new mysqli($host, $username, $password, $dbname);
      if ($this->mysql->connect_errno)
	$this->ProcessError($this->mysql->connect_error);
    }
  }

 function __destruct() {
   if ($this->mysql)
     $this->mysql->close();
 }

  /*
   * Database::getConnection()
   * Public
   * returns mysql
   */
 function getConnection() {
    return($this->mysql);
 }
 
  /*
   * Database::insert()
   * Public
   * Inserts a record
   * @param $table
   * @param $values
   * @return 
   */
  function insert($table, $values) {
    //format values ready for insertion
    $values = $this->processInsertValues($values);
    $this->sql = "INSERT INTO $table $values";
    if (!$this->query($this->sql)) {
      return FALSE;
    }
    if ($id = $this->getID()){
      return $id;
    }
    else {
      return TRUE;
    }
  }

  /*
   * Database::update()
   * Public
   * Updates a record
   * @param $table
   * @param $values
   * @param $params
   * @return 
   */
  function update ($table, $values, $params = "") {
    $values = $this->processUpdateValues($values);
    $this->sql = "UPDATE $table SET $values $params";
    if (!$this->query($this->sql)) {
      return FALSE;
    }
    return TRUE; 
  }

 /*
   * Database::delete()
   * Public
   * delete records from a table.  MUST have parameters, otherwise deletes all records from a table.
   * @param $table
   * @param $params
   * @return 
   */
  function delete ($table,$params) {
    if (!$params) {
      $this->processError("You must select fields for deletion!");
      return FALSE;
    }
    else {
      $this->sql = "DELETE FROM $table WHERE $params";
    }
    if (!$this->query($this->sql)) {
      return FALSE;
    }
    return TRUE;
  }
  
  /*
   *  run standard sql statement.
   *  Public
   */
  function runSQL($sql) {
    $this->sql = $sql;
    if (!$result = $this->query($this->sql)) {
      return FALSE;
    }
    return $result;
  }
  
 /*
   * Database::getID()
   * Public
   * Returns ID of last Insert operation
   * @return 
   */
  function getID() {
    if ($this->mysql) {
      return $this->mysql->insert_id;
    }
    return(0);
  }
  
  /*
   * Database::getCount()
   * Public
   * Returns number of rows in last query
   * @return 
   */
  function getCount($result) {
    //return mysqli_num_rows($result);
    return $result->num_rows;
  }

  /*
   * Database::getRow()
   * Public
   * Returns result row as numeric array
   * @return 
   */
  function getRow($result){
    //return mysqli_fetch_row($result);
    return $result->fetch_row();
  }  
  
  /*
   * Database::getAssoc()
   * Public
   * Returns result row as associative array
   * @return 
   */
  function getAssoc($result) {
    //$assoc = mysqli_fetch_assoc($result);
    $assoc = $result->fetch_assoc();
    if ($assoc) {
      foreach($assoc as $key => $value) {
        $assoc[$key] = $this->to_html($value);
      }
    }
    return $assoc;
  }  
  
  /*
   * Database::getFields()
   * Public Unused
   * return field names
   * @return 
   */
  function getFields($result) {
    return mysqli_fetch_field($result);
  }
  
 /*
   * Database::getObject()
   * Public Unused
   * Returns result row as Object
   * @return 
   */
  function getObject($result) {
    if ($result) {
      if ($object = mysqli_fetch_object($result)) {
        foreach ($object as $key => $value) {
          $object->{$key} = $this->to_html($value);
        }      
        return $object;
      }
    }
    return FALSE;   
  }  
  
  /*
   * Database::getArray()
   * Public Unused
   * Returns result row as bot associative and numeric Array
   * @return 
   */
  function getArray($result) {
    return mysqli_fetch_array($result);
  }  
  

	
  /*
   * Database::processInsertValues()
   * Private
   * Formats values for insert SQL
   * @param $values
   * @return 
   */
  function processInsertValues($values) {
    foreach ($values as $field=>$value) {
      $field_arr[] = $field;
      $value_arr[] = $this->makeDbSafe($value);
    }
    //create field string
    $field_str = implode(",",$field_arr);
    //create values string
    $value_str = "'".trim(implode("','",$value_arr))."'";
    //put strings together
    $insert_string = "(".$field_str.") VALUES (".$value_str.")";
    return $insert_string;
  }
	
  /*
   * Database::processUpdateValues()
   * Private
   * Formats values for update SQL
   * @param $values
   * @return 
   */
  function processUpdateValues($values) {
    foreach ($values as $field=>$value) {
      $value_str[] = "$field = '" . $this->makeDbSafe($value) . "'";
    }
    return implode(",",$value_str);
  }

 
  /*
  * Database::addToCount()
  * Private
  * Increments number of queries performed.  For debugging use.
  * @return 
  */  
  function addToCount() {
    $this->query_count++;
  }  
  
 
  /*
   *  run the query!
   *  Private
   */
  function query($sql) {
    //$_SESSION['db_error'] = NULL;;
    if (($this->mysql) && ($result = $this->mysql->query($sql))) {
      //$this->addToCount();
      return $result;         
    }
    else {
      $this->processError($this->mysql->error);
      return FALSE;
    }
  }

  /*
   *  Convert strings back to html
   *  Private
   */
  function to_html($string) {
    $trans = get_html_translation_table(HTML_ENTITIES);
    $trans = array_flip($trans);
    $trans = strtr($string,$trans);
    return stripslashes($trans);
  }
  
   /*
   * Database :: processError()
   * Private
   * Error handling
   * @return 
   */
  function processError($dberror) {
    $error = $this->sql;
    $error .=  "<br />Error: ".$dberror;
    $this->error = $error;
    $_SESSION['db_error'] = $error;
    return $error;
  }

   /*
   * Database :: cleanupError()
   * Private
   * Error handling
   * @return 
   */
  function cleanupError() {
    $this->error = NULL;
    $_SESSION['db_error'] = NULL;
  }

    /*
   * Database :: processPrettyError()
   * Private
   * Error handling
   * @return 
   */
  function processPrettyError($dberror) {
    $error = "There has been a problem connecting to the database<br />";
    //format it to make it look pretty
    $sql = $this->sql;
    $sql = str_replace("FROM","<br />FROM", $sql);
    $sql = str_replace("WHERE","<br />WHERE", $sql);      
    $sql = str_replace("AND","<br />AND", $sql);      
    $sql = str_replace("ORDER","<br />ORDER", $sql);
    $sql = str_replace("LEFT","<br />&nbsp;&nbsp;LEFT", $sql);      
    $error .=  "<br /><b>SQL:<br /></b><span style=\"color: #0000ff;\">".$sql."</span><br />";
    $error .=  "<br /><b>MySQL Says: </b><span style=\"color: #ff0000;\">".$dberror."</span></span><br />";
    $this->error = $error;
    return $error;
  }
  
  /*
   * Database :: makeDbSafe()
   * Private
   * Convert html and add slashes to strings for entry to DB
   * @return 
   */
  function makeDbSafe($string) {
    //convert tabs to spaces
    $string = str_replace("\\t","  ",$string);
    //$string = htmlentities($string);
    return addslashes($string);
  }

  }


?>
