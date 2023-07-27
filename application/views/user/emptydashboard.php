<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
    <style>
        ul {
            display: flex;
        }

        ul li {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
        }


        .head {
            font-family: Bebas-Neue;
        }
        nav{
            background: rgba(40,57,101,.9);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg text-left row" style="max-height: 60px;">
        <div class="h2 float-left text-light mx-3 col-md-9">CVFolio</div>
        <ul class="float-right col-md-3 mt-2">
            <li><a href="http://localhost/Portfolio/index.php/User/createNew" class=" btn btn-warning text-dark btn-outline-light btn-md">CREATE NEW</a></li>
            <li><a href="http://localhost/Portfolio/index.php/User/logout" class=" btn btn-warning text-dark btn-outline-light btn-md">LOGOUT</a></li>
        </ul>
    </nav>

    <h1>Home page</h1>
    <p>Creating a resume or CV can be a daunting task, but our platform makes it easy and hassle-free. Our user-friendly interface allows you to input your details and generate a professional-looking CV within minutes.</p>

    <code>Our platform offers a wide range of customizable templates, so you can choose the design that best suits your needs and showcases your skills and experience in the best possible way. You can also tailor your CV to specific job applications, ensuring you stand out from the crowd and increase your chances of getting hired.</code>
    <p>Our team is dedicated to ensuring our platform remains up-to-date with the latest industry trends and requirements, so you can rest assured that your CV will meet the expectations of potential employers.</p>


</body>

</html>