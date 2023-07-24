<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
</head>
<body> 
    <button><a href="http://localhost/Portfolio/index.php/User/createNew">create new</a></button>
    <button><a href="http://localhost/Portfolio/index.php/User/logout">Logout</a></button>
    <h1>Home page</h1>
    <h2>
    <?php echo $this->session->userdata('Nic'); ?>
    </h2>
    Small introduction
    Empty Dashboard
    
</body>
</html>