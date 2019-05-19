<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un USER</title>
</head>
<body>
	<form  action="controlajoute.php?val=1" autocomplete="on" name="formajout" method="POST"> 
        <h1>Ajouter un éléve</h1> 
		<p>
		Pseudo :
			<input type="text" name="pseudo" size="25">
		</p>
		<p>
		Password :
			<input type="password" name="pwd" size="25">
		</p>
		<p>
		Email :
			<input type="text" name="email" size="12">
		</p>
		<button type="submit" name="ajou"><em>Ajouter</em></button>
	</form>
</body>
</html>