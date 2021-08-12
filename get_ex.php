<?php
	if(!ISSET($_POST['get'])){
		$files = scandir('file/');
		foreach ($files as $value) {
			if ($value != '.' && $value != '..'){
		
?>
<tr>
	<td><?php echo $value?></td>
	<td></td>
</tr>
<?php
			}
		}   
	}else{
		$files = scandir('file/');
		foreach ($files as $value) {
			if ($value != '.' && $value != '..'){
				$file = explode('.', $value);
				$end = end($file);
?>
<tr>
	<td><?php echo $file[0]?></td>
	<td><?php echo $end?></td>
</tr>
<?php
			}
		}
	}
?>