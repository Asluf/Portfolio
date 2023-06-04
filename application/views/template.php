<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .x {
            background-color:aquamarine;
            transition: transform .2s;
            width: 70%;
            margin: 0 auto;
        }

        .x:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container row m-5 p-5">
        <h2 class="text-center mb-5">Choose the Template</h2>
        <div class="col-md-6 col-sm-6">
            <figure class="figure">
                <a href="http://localhost/Portfolio/index.php/Welcome/downloadPdf1/<?php echo $id; ?>">
                    <img class="x" src="https://img.freepik.com/free-psd/clean-modern-resume-cv-template_237398-297.jpg" class="figure-img img-fluid rounded" alt="Template:01">
                </a>
            </figure>
        </div>
        <div class="col-md-6 col-sm-6">
            <figure class="figure">
                <a href="http://localhost/Portfolio/index.php/Welcome/downloadPdf1/<?php echo $id; ?>">
                    <img class="x" src="https://img.freepik.com/free-vector/modern-cv-template_23-2148773356.jpg?w=2000" class="figure-img img-fluid rounded" alt="Template:01">
                </a>
            </figure>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>