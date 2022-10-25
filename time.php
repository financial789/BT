<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
session__start ();

if(isset($_POST['enter'])) {
    if($_POST['name'] !="") {
        $_SESSION['name'] = stripcslashes(htmlspecialchars($_POST['name']));
 }
 else {
    echo '<span class="error">please type in a name</span>';
 }
}

function loginForm() {
    echo'
    <div id="loginform">
    <p>please enter your name to continue!</p>
    <form action="time.php" method="post">
    <label for="name">Name &mdash;</label>
    <input type="text" name="name" id="name" />
    <input type="subnit" name="enter" id="enter" value="enter" />
    </form>
    </div>
    ';
}


?>
    </body>
</html>