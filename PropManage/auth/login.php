<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | PropManage</title>

    <link rel="stylesheet" href="../css/login.css">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >
</head>

<body>

    <div class="login-page">

        <div class="login-card">

            <!-- LOGO -->
            <div class="logo-box">
                <img src="../images/logo.png" alt="Logo">
            </div>


            <!-- HEADING -->
            <div class="login-heading">
                
                <h1>Welcome Back</h1>

                <p>
                    Sign in to PropManage to continue.
                </p>

            </div>


            <!-- LOGIN FORM -->
            <form id="loginForm" action="#" method="POST">


                <!-- EMAIL / USER ID -->
                <div class="input-group">

                    <label for="email">
                        Email Address / User ID
                    </label>

                    <div class="input-box">

                        <i class="fa-regular fa-envelope input-icon"></i>

                        <input
                            type="text"
                            id="email"
                            name="email"
                            placeholder="Enter Mail / ID"
                        >

                    </div>

                    <span
                        class="error-message"
                        id="emailError"
                    ></span>

                </div>


                <!-- PASSWORD -->
                <div class="input-group">

                    <div class="password-label">

                        <label for="password">
                            Password
                        </label>

                        <a href="forgot-password.php">
                            Forgot Password?
                        </a>

                    </div>


                    <div class="input-box">

                        <i class="fa-solid fa-lock input-icon"></i>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter Password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            id="passwordToggle"
                        >

                            <i
                                class="fa-regular fa-eye"
                                id="eyeIcon"
                            ></i>

                        </button>

                    </div>

                    <span
                        class="error-message"
                        id="passwordError"
                    ></span>

                </div>


                <!-- REMEMBER ME -->
                <div class="remember-container">

                    <label class="remember-label">

                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                        >

                        <span class="custom-checkbox"></span>

                        <span class="remember-text">
                            Remember me for 30 days
                        </span>

                    </label>

                </div>


                <!-- SIGN IN BUTTON -->
                <button
                    type="submit"
                    class="signin-button"
                >
                    Sign In
                </button>

            </form>


            <!-- REGISTER -->
            <div class="register-text">

                <span>
                    Don't have an account?
                </span>

                <a href="register.php">
                    Register here
                </a>

            </div>

        </div>

    </div>


    <script src="../js/login.js"></script>

</body>

</html>