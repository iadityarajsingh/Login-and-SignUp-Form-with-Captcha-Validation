<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

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
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-register {
            background-color: #007bff !important; /* Modern blue color */
            color: white !important; /* Text color */
            border: none !important; /* Remove default border */
            border-radius: 30px !important; /* Rounded corners */
            padding: 12px 20px !important; /* Adjust padding for button size */
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
        }

        .btn-register:hover {
            background-color: #007bff !important; /* Keep the same color on hover */
            box-shadow: none !important; /* Remove shadow effect on hover */
        }

        .btn-register:focus {
            outline: none !important; /* Remove focus outline */
        }

        .social-btn {
            display: inline-block;
            padding: 12px 20px; /* Increased padding for larger buttons */
            border-radius: 25px;
            color: #333; /* Icon color */
            transition: transform 0.2s ease; /* Animation */
            margin: 0 5px;
            text-decoration: none;
            background-color: white; /* Added background for better visibility */
            border: 1px solid #ccc; /* Added border */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added shadow */
        }

        .social-btn:hover {
            transform: scale(1.1); /* Scale on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow on hover */
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
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black">
                        <div class="card-body p-md-4">
                            <div class="row justify-content-center">
                                <p class="text-center h1 fw-bold mb-4">Sign up</p>
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <form class="mx-1 mx-md-4" action="add.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="bi bi-person-circle me-2"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">Your Name</label>
                                                <input type="text" id="name" class="form-control form-control-lg"
                                                    name="name" autocomplete="off" placeholder="Enter your name" required />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="bi bi-envelope-at-fill me-2"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">Your Email</label>
                                                <input type="email" id="email" class="form-control form-control-lg"
                                                    name="username" autocomplete="off" placeholder="Enter your email" required />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="bi bi-chat-left-dots-fill me-2"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" class="form-control form-control-lg"
                                                    name="password" autocomplete="off" placeholder="Enter your password" required />
                                            </div>
                                        </div>

                                        <!-- Captcha Section -->
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="bi bi-shield-lock-fill me-2"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="captcha">Captcha</label>
                                                <div class="d-flex">
                                                    <img src="captcha.php" alt="Captcha Image" class="me-2" />
                                                    <input type="text" id="captcha" class="form-control form-control-lg"
                                                        name="captcha" placeholder="Enter the captcha" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" value="Register" name="register"
                                                class="btn btn-register btn-lg text-light" style="width: 100%; border-radius: 30px; font-weight: 600;" />
                                        </div>

                                    </form>

                                    <p class="text-center">Already have an account? <a href="index.php"
                                            class="text-warning" style="font-weight:600; text-decoration:none;">Login</a>
                                    </p>

                                    <!-- Social Login Section -->
                                    <div class="text-center mt-3">
                                        <p>Or sign up with:</p>
                                        <div>
                                            <a href="#" class="social-btn">
                                                <img src="https://img.icons8.com/color/20/333333/google-logo.png" alt="Google" />
                                                Google
                                            </a>
                                            <a href="#" class="social-btn">
                                                <img src="https://img.icons8.com/color/20/333333/facebook-new.png" alt="Facebook" />
                                                Facebook
                                            </a>
                                            <a href="#" class="social-btn">
                                                <img src="https://img.icons8.com/material-outlined/20/333333/github.png" alt="GitHub" />
                                                GitHub
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="signup1.png" class="img-fluid" alt="Sample image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
