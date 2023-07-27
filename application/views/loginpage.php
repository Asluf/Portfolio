<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

        nav {
            background: rgba(40, 57, 101, .9);
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg  text-left row" style="max-height: 60px;">
        <div class="h2 float-left text-light mx-3 col-md-10">CVFolio</div>
        <ul class="float-right col-md-2 mt-2">
            <li><a href="http://localhost/Portfolio/index.php/Welcome/registration" class="btn btn-warning text-dark btn-outline-light btn-md">REGISTRATION</a></li>
        </ul>
    </nav>
    <div class="main-container">
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                <div class="login-form">
                    <form class="sign-in-htm" id="login_form" name="login_form">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input type="text" class="input" required name="username" id="username" />
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input type="password" class="input" required name="password" id="password" />
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="button" name="LoginBtn" id="LoginBtn" value="Sign In" class="button" />

                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            function formValid() {
                if (($("#username").val() == "") | ($("#password").val() == "")) {
                    return 0;
                } else {
                    return 1;
                }
            }
            $("#LoginBtn").click(function() {
                base_url = "<?php echo base_url(); ?>";

                var formvalid = formValid();
                if (formvalid) {

                    $.ajax({
                        url: base_url + 'index.php/Welcome/verifyuser',
                        data: $("#login_form").serialize(),
                        method: 'post',
                        success: function(response) {
                            // console.log(response);
                            if (response == 'user') {
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
                                    title: 'Welcome!'
                                })

                                window.location = base_url + 'index.php/User/index';
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
                                    title: 'Oops! Please check your username and password'
                                })
                            }
                        },
                        error: function() {
                            alert("Something Wrong");
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
                        title: 'Please enter username and password'
                    })

                }
            });




        });
    </script>
</body>

</html>