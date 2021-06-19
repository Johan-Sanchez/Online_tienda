<?php require 'admin/config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php ROUTE ?>css2/error.css">
    <link rel="stylesheet" href="<?php ROUTE ?>css2/estilos.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <main class="error">

        <div>
            <h1>404</h1>
            <h2>UH OH! You're lost.</h2>
            <p>The page you are looking for does not exist.
                How you got here is a mystery. But you can click the button below
                to go back to the homepage.
            </p>
            <a href="<?php ROUTE ?>index.php" class="btn">HOME</a>
        </div>
        
    </main>
</body>

</html>