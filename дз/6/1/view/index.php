<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php 
if($_SESSION['username']!==null){
    include "menu.php";

}
else { ?> <a href="/?controller=security">Авторизации</a> <?php }
?>

</body>