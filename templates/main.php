<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ucfirst(substr($route, 1)); ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css"/>
    <link rel="shortcut icon"
          href="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/code-512.png"
          type="image/png">
</head>
<body>
<div class="header">
    <div class="logo">
        Light Framework
    </div>
    <div class="menu">
        <a href="/" class="link">Home</a>
        <a href="/about" class="link">About</a>
    </div>
</div>
<br />
<div class="content">
    <?php
    include("{$dir}/view{$route}View.php"); //Loading View
    ?>
</div>
<br />
   <a href="https://github.com/ArtiDjeims" class="footerLink"> Created by Arti_Djeims</a>
<script src="../assets/js/test.js"></script>
</body>
</html>
