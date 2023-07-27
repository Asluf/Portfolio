<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <button><a href="http://localhost/Portfolio/index.php/Welcome/login">Login</a></button>
    <button><a href="http://localhost/Portfolio/index.php/Welcome/index">Home</a></button>
    <h1>Registration Page</h1>

    <form id="reg_form" name="reg_form">
        <label>Name: </label>
        <input type="text" name="name" id="name" />
        <br />
        <label>NIC: </label>
        <input type="text" name="nic" id="nic" />
        <br />
        <label>Username: </label>
        <input type="text" name="username" id="username" />
        <br />

        <label>Password: </label>
        <input type="password" name="password" id="password" />
        <input type="button" name="regbtn" id="regbtn" value="Register">
    </form>
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