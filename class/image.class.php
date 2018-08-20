<?PHP

Class image {

	var $directory_name;
	var $max_filesize;
	var $error;

	var $user_tmp_name;
	var $user_file_name;
	var $user_file_size;
	var $user_file_type;
	var $user_full_name;
	var $thumb_name;

 	function set_directory($dir_name = ".")
	{
	 $this->directory_name = $dir_name;
	}

 	function set_max_size($max_file = 1000000)
	{
	 $this->max_filesize = $max_file;
	}

 	function error()
	{
	 return $this->error;
	}

 	function is_ok()
	{
	 if(isset($this->error))
	  return FALSE;
	 else
	  return TRUE;
	}

	function set_tmp_name($temp_name)
	{
	 $this->user_tmp_name = $temp_name;	 
	}

	function set_file_size($file_size)
	{
	 $this->user_file_size = $file_size;
	}

	function set_file_type($file_type)
	{
	 $this->user_file_type = $file_type;	 
	}

 	function set_file_name($file)
	{
		$this->user_file_name = $file;
		$this->user_full_name = $this->directory_name."/".$this->user_file_name;
	}

	function resize($max_width = 0, $max_height = 0 )
	{
	
		$img = ImageCreateFromJPEG ($this->user_full_name);
		

    	$FullImage_width = imagesx ($img);    
    	$FullImage_height = imagesy ($img);   
		
		if (isset($max_width) && $max_width < $FullImage_width) {
		
			if(isset($max_width) && isset($max_height) && $max_width != 0 && $max_height != 0) {
				
				$new_width = $max_width;
				$new_height = $max_height;
				
			} else if(isset($max_width) && $max_width != 0) {
			
				$new_width = $max_width;
				$new_height = ((int)($new_width * $FullImage_height) / $FullImage_width);
				
			} else if(isset($max_height) && $max_height != 0) {
			
				$new_height = $max_height;
				$new_width = ((int)($new_height * $FullImage_width) / $FullImage_height);
				
			} else {
			
				$new_height = $FullImage_height;
				$new_width = $FullImage_width;
				
			}
		
		} else {
		
			$new_width = $FullImage_width;
		 	$new_height = $FullImage_height;
			
		}

    	$full_id =  ImageCreateTrueColor ( $new_width , $new_height );
		ImageCopyResampled ( $full_id, $img, 0,0,0,0, $new_width, $new_height, $FullImage_width, $FullImage_height );
		

		$full = ImageJPEG( $full_id, $this->user_full_name,95);
		ImageDestroy( $full_id );
		unset($max_width);
		unset($max_height);
	}

	function start_copy()
	{
		if(!isset($this->user_file_name))
		 $this->error = "You must define filename!";

        if ($this->user_file_size <= 0)
		 $this->error = "File size error (0): $this->user_file_size KB<br>";

        if ($this->user_file_size > $this->max_filesize)
		 $this->error = "File size error (1): $this->user_file_size KB<br>";

        if (!isset($this->error))
        {
			$filename = basename($this->user_file_name);

            if (!empty($this->directory_name)) 
				$destination = $this->user_full_name;
			else 
				$destination = $filename;
		
			if(!is_uploaded_file($this->user_tmp_name))
			 $this->error = "File ".$this->user_tmp_name." is not uploaded correctly.";
	  
			if (!@move_uploaded_file ($this->user_tmp_name,$destination))
			 $this->error = "Impossible to copy ".$this->user_file_name." from $userfile to destination directory.";
		}
	}
	
	function set_thumbnail_name($thumbname) {
		$this->thumb_name = $this->directory_name."/".$thumbname.".jpg";
	}
	
	function create_thumbnail()
	{
	 if (!copy($this->user_full_name, $this->thumb_name))
	  {
	  echo "<br>".$this->user_full_name.", ".$this->thumb_name."<br>";
	   echo "failed to copy $file...<br />\n";
	  }
	}
	
	function set_thumbnail_size($max_width = 0, $max_height = 0 )
	{
		$img = ImageCreateFromJPEG ($this->thumb_name);


    	$FullImage_width = imagesx ($img);    
    	$FullImage_height = imagesy ($img); 
		
		if(isset($max_width) && isset($max_height) && $max_width != 0 && $max_height != 0)
		{
		 $new_width = $max_width;
		 $new_height = $max_height;
		}
		else if(isset($max_width) && $max_width != 0)
		{
		 $new_width = $max_width;
		 $new_height = ((int)($new_width * $FullImage_height) / $FullImage_width);
		}
		else if(isset($max_height) && $max_height != 0)
		{
		 $new_height = $max_height;
		 $new_width = ((int)($new_height * $FullImage_width) / $FullImage_height);
		}		
		else
		{
		 $new_height = $FullImage_height;
		 $new_width = $FullImage_width;
		}	
    	$full_id =  ImageCreateTrueColor ( $new_width , $new_height );
		ImageCopyResampled ( $full_id, $img, 0,0,0,0, $new_width, $new_height, $FullImage_width, $FullImage_height );
		

		$full = ImageJPEG( $full_id, $this->thumb_name,95);
		
		ImageDestroy( $full_id );
		unset($max_width);
		unset($max_height);
	}
	
	function delete_image($name) {
	
		unlink($this->directory_name."/".$name);
		
	}
	
}

?>
