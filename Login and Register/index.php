<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-outline input {
            border-radius: 25px;
            transition: border 0.3s ease;
        }

        .form-outline input:focus {
            border-color: #007bff; /* Focus border color */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Focus shadow */
        }

        .btn-login {
            background-color: #007bff; /* Modern blue color */
            color: white; /* Text color */
            border: none; /* Remove default border */
            border-radius: 30px; /* Rounded corners */
            padding: 12px 20px; /* Adjust padding for button size */
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
        }

        .btn-login:hover {
            background-color: #007bff !important; /* Keep the same color on hover */
            box-shadow: none !important; /* Remove shadow effect on hover */
        }

        .btn-login:focus {
            outline: none !important; /* Remove focus outline */
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .divider:before,
        .divider:after {
            content: "";
            flex: 1;
            height: 1px;
            background: #ccc;
        }

        .divider:not(:empty)::before {
            margin-right: 10px;
        }

        .divider:not(:empty)::after {
            margin-left: 10px;
        }

        /* Improved spacing for form elements */
        .mb-2 {
            margin-bottom: 15px !important;
        }
    </style>
</head>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="login1.png" class="img-fluid" alt="Phone image" height="300px" width="750px">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="login.php" method="post">
                        <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login</p>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Username</label>
                            <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="Enter your email" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                            <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="Enter your password" required />
                        </div>

                        <!-- Submit button -->
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" value="Sign in" name="login" class="btn btn-login btn-lg my-2 py-3" style="width:100%; font-weight:600;" />
                        </div>

                    </form>
                    <br>
                    <p class="text-center">Don't have an account? <a href="register.php" class="text-warning" style="font-weight:600;text-decoration:none;">Create One</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>
