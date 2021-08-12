<?php
	if(ISSET($_POST['save'])){
		$filename = $_FILES['file']['name'];
		$filetype = $_FILES['file']['type'];
		$filetemp = $_FILES['file']['tmp_name'];
		$filesize = $_FILES['file']['size'];
		
		
		if($filesize > 500000000000){
			echo "<script>alert('Archivo muy largo para subirlo al sistema')</script>";
			echo "<script>window.location = 'index.php'</script>";
		}else{
			$location ="file/".$filename;
			if(move_uploaded_file($filetemp, $location)){
				echo "<script>alert('Archivo subido exitósamente')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}
		}
		
	}
?>