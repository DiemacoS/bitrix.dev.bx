<?php
/**
 * @var CMain $APPLICATION
 */
?><!doctype html>
<html lang="<?= LANGUAGE_ID; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php $APPLICATION->ShowTitle(); ?></title>

	<?php
	$APPLICATION->ShowHead();
	?>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-light" href="#">Task Manager</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Вход</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section mt-4">
    <div class="container">