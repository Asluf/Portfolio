<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <!-- Thewidu -->
    <style>
        body {
            background: rgb(85, 117, 94);
            background: linear-gradient(90deg, rgba(85, 117, 94, 1) 0%, rgba(72, 99, 105, 1) 100%);
        }

        .x {
            z-index: 100;
            transition: transform .2s;
            /* width: 400px; */
            height: 50vh;
            margin: 0 auto;
            border: 10px solid #406665;
        }

        .x:hover {
            transform: scale(1.1);
        }

        .figure {
            display: flex;

        }

        .thumbnail {
            filter: brightness(1.5);
            width: 150px;
            height: 150px;
        }

        .thumb-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title {
            font-size: 40px;
            color: white;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
        }

        .picbox {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
    </style>
    
</head>
<!-- Kavitha -->
<body>
    <div class="thumb-box">
        <img src="<?php echo base_url(); ?>resources/images/logot.png" class="thumbnail" alt="...">
    </div>
    <h2 class="title">CHOOSE TEMPLATE</h2>
    <div class="container ">
        
        <div class="picbox row col-md-12 col-sm-12 col-lg-12">

            <div class="col-md-6 col-sm-6 col-lg-6">
                <figure class="figure" style="justify-content: right;">
                    <a href="<?php echo base_url();?>index.php/Welcome/downloadPdf1/<?php echo $id; ?>">
                        <img class="x" src="<?php echo base_url(); ?>resources/images/cv1.JPG" class="figure-img img-fluid rounded" alt="Template:01">
                    </a>
                </figure>

            </div>
            <div class="col-md-6 col-sm-6">
                <figure class="figure">
                    <a href="<?php echo base_url();?>index.php/Welcome/downloadPdf2/<?php echo $id; ?>">
                        <img class="x" src="<?php echo base_url(); ?>resources/images/cv2.JPG" class="figure-img img-fluid rounded" alt="Template:01">
                    </a>
                </figure>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>