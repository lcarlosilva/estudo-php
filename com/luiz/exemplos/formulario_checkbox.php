<html>
	<head>
		
	</head>
	<body>
		<form method="post">
			<input type="checkbox" name="pedrao[]" value="1"/>luiz 
			<br />
			<input type="checkbox" name="pedrao[]" value="2"/>cantarin
			<br />
			<input type="submit" />
		</form>
		<?php 
			var_dump($_POST);
		?>
	</body>
</html>