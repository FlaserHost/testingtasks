<?php
	if($_FILES['csv']['error'] !== 4)
	{
		$source = $_FILES['csv']['name'];

		$dir = "../upload";

		if(!is_dir($dir))
		{
			mkdir($dir, 0700);
		}

		$creator = [];
		if(($file = fopen("../{$source}", 'r')) !== false)
		{
			while(($data = fgetcsv($file, 1000, ';')) !== false)
			{
				$creator[] = $data;
			}
		}

		fclose($file);

		for($i = 1; $i < count($creator); $i++)
		{
			$newFile = fopen("../upload/{$creator[$i][0]}", 'w');
			fwrite($newFile, $creator[$i][1]);
			fclose($newFile);
		}

		header("Location: ../upload.php");
	}
	else
	{
		echo "Файл не выбран";
	}
?>