<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <title>Login - GLAZIK</title>
    </head>
    <body>
        <div>
            <!-- Codrops top bar -->
            <!-- <div class="codrops-top"> -->
            </div><!--/ Codrops top bar -->
                <header>
                    <h1><span><center>Login - Auto Ecole GLAZIK</center></span></h1>
                </header>
                            <form  action="controller.php" autocomplete="on" method="POST" class="form_login">
                                    <h2><center>Espace Privilégié</center></h2> 
                                    
                                    <p> 
                                        <label for="username" class="text"> Login : </label>
                                        <input name="username" required="required" type="text"/>
                                    </p>
                                    <p> 
                                        <label for="password" class="text"> Password : </label>
                                        <input name="password" required="required" type="password"/> 
                                    </p>
                                
                                    <p> 
                                        <input type="submit" value="Login" /> 
								    </p>
								    <?php
									   if (isset($_GET["msg"])&& $_GET["msg"] == "error") {
										  echo "Mauvais Login ou mot de passe";
									   }
                                       if (isset($_GET["msg"])&& $_GET["msg"] == "error2") {
                                            echo "Vous devez être connecté pour accéder à cette page";
                                        }
								    ?>
                            </form>
            </div>  
        </div>
    </body>
</html>