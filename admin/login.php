<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body class="bg-dark-subtle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between align-items-center" style="height: 100vh;">
                    <div class="col-md-6 bg-transparent">
                        <img src="../assets/images/login-page-img.png" class="card-img-top" alt="...">
                    </div>

                    <div class="col-md-5 me-5" id="loginFormSection">
                        <div class="card bg-white shadow rounded border-0 py-4">

                            <form action="" >
                                <div class="card-header bg-transparent border-0">
                                    <h1 class="text-uppercase fw-bold fs-2 text-center text-warning-emphasis mb-3">
                                        Admin Login
                                    </h1>
                                </div>

                                <div class="card-body border-0">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" id="loginEmail" placeholder="Email Address"
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Email is required</div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-key"></i> </span>
                                        <input type="password" name="password" id="loginPassword" placeholder="Password" 
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Password is required</div>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="check">
                                        <label class="form-check-label" for="check">Remember Me</label>

                                        <a href="javascript:;" class="text-decoration-none fs-6 fw-bold float-end"
                                            id="forgotPasswordBtn">
                                            Forgot Password..?
                                        </a>
                                    </div>

                                    <div class="mb-2 d-flex justify-content-between align-items-center">
                                        <button class="btn btn-primary w-25 fw-bold" id="loginBtn">LOGIN</button>
                                        <span class="text-info-emphasis">Don't have any account..?
                                            <button type="button" class="btn btn-outline-dark ms-2" id="registerBtn">Register</button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="col-md-5 me-5" style="display: none;" id="registerFormSection">
                        <div class="card bg-white shadow rounded border-0">

                            <form action="">
                                <div class="card-header bg-transparent mb-0">
                                    <h1 class="text-uppercase fw-bold fs-3 text-center text-info-emphasis pt-2">
                                        Register
                                    </h1>
                                </div>

                                <div class="card-body border-0">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" name="full_name" id="registerName" placeholder="Full name"
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Name is required</div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" id="registerEmail" placeholder="Email Address"
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Email is required</div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-key"></i> </span>
                                        <input type="password" name="password" id="registerPassword" placeholder="Password" 
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Password is required</div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-key"></i> </span>
                                        <input type="password" name="c_password" id="c_registerPassword" placeholder="Confirm Password" 
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Confirm Password is required</div>
                                    </div>

                                    <div class="mb-2 d-flex justify-content-between align-items-center">
                                        <button class="btn btn-primary w-25 fw-bold" id="signupBtn">Signup</button>
                                        <span class="text-info-emphasis">Allready have an account..?
                                            <button type="button" class="btn btn-outline-dark ms-2" id="registerSignBtn">Sign In</button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-md-5 me-5" style="display: none;" id="passwordResetForm">
                        <div class="card bg-white shadow rounded border-0 py-4">

                            <form action="">
                                <div class="card-header bg-transparent">
                                    <h1 class="text-uppercase fw-bold text-center text-danger-emphasis fs-3">
                                        Forgot Password
                                    </h1>
                                </div>

                                <div class="card-body border-0">
                                    <div class="mb-3">
                                        <h4 class="card-title fs-5">Enter your email address to reset your password</h4>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" id="passwordResetEmail" placeholder="Email Address"
                                            class="form-control shadow-none is-invalid">
                                        <div class="invalid-feedback fs-6">Email is required</div>
                                    </div>                                    

                                    <div class="mb-2 d-flex justify-content-between align-items-center">
                                        <button class="btn btn-primary fw-bold" id="sendResetPasswordBtn">Send Passwqord Reset Link</button>
                                        <button type="button" class="btn btn-outline-dark ms-2" id="backToLoginBtn">Back to Login</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="pt-5"></div>

    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <script src="../assets/js/fontawesome.all.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../assets/js/admin.js"></script>
</body>
</html>