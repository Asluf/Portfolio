<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <button><a href="http://localhost/Portfolio/index.php/Welcome/index">Home</a></button>
    <button><a href="http://localhost/Portfolio/index.php/Welcome/registration">Registration</a></button>

    <h1>Login Page</h1>
    <form id="login_form" name="login_form">
        <label>Username: </label>
        <input type="text" required name="username" id="username" />
        <br />
        <label>Password: </label>
        <input type="password" required name="password" id="password" />
        <input type="button" name="LoginBtn" id="LoginBtn" value="LOGIN">
    </form>
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