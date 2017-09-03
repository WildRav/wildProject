<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Blog MVC - Annise Mayoute">
    <meta name="author" content="Annise Mayoute">


    <title><?= App::getInstance()->title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" href="index.php">HomePage</a>
            <a class="navbar-brand" href="index.php?p=users.login">Login</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template" style="padding-top: 100px">

       <?= $content; ?>

    </div>
</div>
<!-- /.container -->
</body>
</html>
