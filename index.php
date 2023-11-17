<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="img/A tech logo,circuit logo.png">

    <title>TechWare Warehouse</title>
</head>
<body class="tswire">
    <form action="login.php" method="post">
        <h2>login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <label>Email</label>
        <input type="text" name="password" placeholder="email"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="password"><br>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>