<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/css/loginpg.css" />
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
        <div class="h2 float-left text-light mx-3 col-md-10">CVFolio</div>
        <ul class="float-right col-md-2 mt-2">
            <li><a href="http://localhost/Portfolio/index.php/Welcome/login" class=" btn btn-warning text-dark btn-outline-light btn-md">LOGIN</a></li>
        </ul>
    </nav>



    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab"></label>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form class="sign-up-htm" id="reg_form" name="reg_form">
                    <div class="group">
                        <label for="user" class="label">Name</label>
                        <input type="text" name="name" id="name" class="input" />
                    </div>
                    <div class="group">
                        <label for="pass" class="label">NIC</label>
                        <input type="text" name="nic" id="nic" class="input" />
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Username</label>
                        <input type="text" name="username" id="username" class="input" />
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="text" name="password" id="password" class="input" />
                    </div>
                    <div class="group">
                        <input type="button" id="regbtn" name="regbtn" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            function formValid() {
                if (($("#name").val() == "") | ($("#nic").val() == "") | ($("#username").val() == "") | ($("#password").val() == "")) {
                    return 0;
                } else {
                    return 1;
                }
            }
            $("#regbtn").click(function() {
                base_url = "<?php echo base_url(); ?>";

                var formvalid = formValid();
                if (formvalid) {

                    $.ajax({
                        url: base_url + 'index.php/Welcome/register',
                        data: $("#reg_form").serialize(),
                        method: 'post',
                        success: function(response) {
                            // console.log(response);
                            if (response) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Registration Successfull, Please login to continue.'
                                })

                                window.location = base_url + 'index.php/Welcome/login';
                            } else {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    title: 'Oops! Please try again with different username, NIC.'
                                })
                            }
                        },
                        error: function() {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'error',
                                title: 'Oops! Please try again with different username, NIC.'
                            })
                        }
                    });
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'Please fill all the details'
                    })

                }
            });




        });
    </script>
</body>

</html>