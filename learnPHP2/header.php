<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>
        <?php if(isset($title)) {echo $title;} else {echo 'Mon site';} ?>
    </title>
</head>
<body>
    <nav>
        <h1 class="m-3">MON SITE WEB</h1>
        <ul class="nav bg-dark">
            <li class="nav-link"><a href="index.php">ACEUIL</a></li>         
            <li class="nav-link"><a href="contact.php">CONTACT</a></li>
            <li class="nav-link"><a href="glaces.php">GLACES</a></li>
            <li class="nav-link"><a href="deviner.php">DEVINER</a></li>
        </ul>
    </nav>