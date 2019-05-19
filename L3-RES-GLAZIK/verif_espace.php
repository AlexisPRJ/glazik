<?php
				include("verification.php");
				if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] != "secretaire") 
					{
						header ("Location:form_edu.php");
					}
				elseif(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] = "secretaire")
					{
						header("Location:edit.php");
					}

?>