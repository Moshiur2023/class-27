
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
    <a href="" class="navbar-brand">Logo</a>
    <ul class="navbar-nav">
        <li><a href="action.php?page=home" class="nav-link">Home</a></li>
        <li><a href="action.php?page=product" class="nav-link">Product</a></li>
            <li class="dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
            <ul class="dropdown-menu">
                <?php foreach ($categories as $category){ ?>
                <li><a href="action.php?page=category&id=<?php echo $category['id']?> " class="dropdown-item"><?php echo $category['category_name']?></a></li>

                    <?php } ?>
            </ul>

        </li>
        <li><a href="" class="nav-link">Gallery</a></li>
        <li><a href="" class="nav-link">Contract</a></li>

        </ul>
    </div>
</nav>
