<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manguiat_Mishalaine_Activity11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="loginform.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class = "error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder = "Enter Username">

        <label>Password</label>
        <input type="password" name="password" placeholder = "Enter password"><br>

        <button type = "Submit">Login</button>
    </form>
    
</body>
</html>
<script>alert("Invalid Input!!!")</script>

