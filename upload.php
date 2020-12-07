<?php
if(isset($_POST['submit']))
	
	{
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg','png','jpeg','docx','pdf','mp4');
		if(in_array($fileActualExt,$allowed))
		{
			if($fileError === 0)
			{
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'course/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
			}
			else
			{
				echo"There was an error uploading this file";
			}
		}
		
		else
		{
			echo"You cannot upload files of this type!";
		}
	}
?>