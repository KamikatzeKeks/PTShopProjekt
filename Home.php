<html>
    <?php
    session_start();
    ?>
    <head>
        <meta charset="UTF-8">
        <title>EBay für Arme - Login</title>
<script type="text/javascript" src="Login.js"></script>
<link rel="stylesheet" type="text/css" href="Style.css" />
    </head>
    <body>
       <?php 
      echo "Login erfolgreich als " . $_SESSION['username'];
       ?>
    Herzlich Willkommen bei Ebay für arme.
    
    
    
    
    </body>
</html>
