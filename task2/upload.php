<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload CSV</title>
</head>
<body>
	<div class="container">
		<div class="platform">
			<form action="action/file.php" method="POST" enctype="multipart/form-data">
				<label>Форма загрузки CSV файла</label>
				<input type="file" name="csv">
				<input type="submit">
			</form>
		</div>
	</div>
</body>
</html>