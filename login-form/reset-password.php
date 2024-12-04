<!DOCTYPE html>
<html lang="en">
<head>
    <title>RESET PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="db_change_pwd.php" method="post">
    <h2>RESET YOUR PASSWORD</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>
    <label>Confirm Password</label>
    <input type="password" name="password" placeholder="Confirm Password"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>