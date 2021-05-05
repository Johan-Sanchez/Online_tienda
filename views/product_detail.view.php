<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
</head>
<body>
<ul>
    <li>Id: <?php echo $resultado->id?></li>
    <li>Title: <?php echo $resultado->title?></li>
    <li>Price: <?php echo $resultado->price?></li>
    <li>Quantity: <?php echo $resultado->quantity?></li>
    <li>Contacto: <?php echo $resultado->user_email?></li>
</ul>
</body>
</html>