<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORGOT PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="send_reset_pwd_link.php" method="post">
    <h2>ENTER EMAIL TO RESET PASSWORD</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>Email</label>
    <input type="text" name="email" placeholder="Enter your email"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>