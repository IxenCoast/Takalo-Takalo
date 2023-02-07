<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div id="page">
        <div id="content">
            <form action="<?php echo base_url('index.php/log/signup');?>" method="post">
                <input type="text" placeholder="name" name="name"><br>
                <input type="email" name="mail" placeholder="Email" ><br>
                <input type="password" name="pwd" placeholder="Password" >
                <input type="submit" value="Sign up">
            </form>
        </div>
        <a href="<?php echo base_url('index.php/log/index');?>">Retour</a>
    </div>
</body>
</html>