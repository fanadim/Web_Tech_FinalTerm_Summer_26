<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Register | PropManage</title>

    <link
        rel="stylesheet"
        href="../css/register.css"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

</head>


<body>


    <div class="register-page">


        <div class="register-card">


            <!-- ================= LOGO ================= -->

            <div class="logo-box">
                <img src="../images/logo.png" alt="Logo">
            </div>


            <!-- ================= HEADING ================= -->

            <div class="register-heading">

                <h1>
                    Create Account
                </h1>

                <p>
                    Join PropManage to streamline your property
                    <br>
                    management experience.
                </p>

            </div>


            <!-- ================= FORM ================= -->

            <form
                id="registerForm"
                action="#"
                method="POST"
            >


                <!-- FULL NAME -->

                <div class="input-group">

                    <label for="fullName">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullName"
                        name="fullName"
                        placeholder="Enter Name"
                    >

                    <span
                        class="error-message"
                        id="fullNameError"
                    ></span>

                </div>


                <!-- EMAIL -->

                <div class="input-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter Email"
                    >

                    <span
                        class="error-message"
                        id="emailError"
                    ></span>

                </div>


                <!-- PASSWORD -->

                <div class="input-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="password-box">

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
                                id="passwordEye"
                            ></i>

                        </button>

                    </div>

                    <span
                        class="error-message"
                        id="passwordError"
                    ></span>

                </div>


                <!-- CONFIRM PASSWORD -->

                <div class="input-group">

                    <label for="confirmPassword">
                        Confirm Password
                    </label>

                    <div class="password-box">

                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            placeholder="Enter Confirm Password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            id="confirmPasswordToggle"
                        >

                            <i
                                class="fa-regular fa-eye"
                                id="confirmPasswordEye"
                            ></i>

                        </button>

                    </div>

                    <span
                        class="error-message"
                        id="confirmPasswordError"
                    ></span>

                </div>


                <!-- ROLE -->

                <div class="input-group">

                    <label for="role">
                        Role
                    </label>

                    <div class="select-box">

                        <select
                            id="role"
                            name="role"
                        >

                            <option value="">
                                Landlord / Tenant
                            </option>

                            <option value="landlord">
                                Landlord
                            </option>

                            <option value="tenant">
                                Tenant
                            </option>

                        </select>

                        <i class="fa-solid fa-chevron-down"></i>

                    </div>

                    <span
                        class="error-message"
                        id="roleError"
                    ></span>

                </div>


                <!-- TERMS -->

                <div class="terms">

                    <label class="terms-label">

                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                        >

                        <span class="custom-checkbox"></span>

                    </label>


                    <p>

                        I agree to the

                        <a href="#">
                            Terms and Conditions
                        </a>

                        and

                        <a href="#">
                            Privacy Policy.
                        </a>

                    </p>

                </div>

                <span
                    class="error-message terms-error"
                    id="termsError"
                ></span>


                <!-- SIGN UP -->

                <button
                    type="submit"
                    class="signup-button"
                >
                    Sign Up
                </button>


            </form>


            <!-- ================= LOGIN ================= -->

            <div class="login-text">

                <span>
                    Already have an account?
                </span>

                <a href="login.php">
                    Log in
                </a>

            </div>


        </div>

    </div>


    <script src="../js/register.js"></script>

</body>

</html>