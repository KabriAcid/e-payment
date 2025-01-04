<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Payment</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
</head>

<body>
    <main>
        <div class="container">
            <div class="left-content">
                <div class="circles">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                </div>
                <div class="image-container">
                    <img src="assets/images/home-bg.png" alt="user-image" style="width: 1000px;">
                </div>
            </div>
            <div class="right-content">
                <div class="content">
                    <div class="header">
                        <h1>Sign in</h1>
                        <p>Enter your credentials to continue.</p>
                    </div>
                    <form action="" method="post">
                        <!-- Email -->
                        <div class="form-row">
                            <div class="label">
                                <span>Email</span>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="form-row">
                            <div class="label">
                                <span>Password</span>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <!-- Button -->
                        <!-- Forgot password -->
                        <p style="text-align: right;margin-top: 10px;"><a href="">Forgot password?</a></p>
                        <div class="form-row">
                            <button type="submit" id="submit" name="submit">Sign in</button>
                        </div>
                        <div class="form-row">
                            <div class="lines">
                                <span class="line"></span>
                                <span>OR</span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="icons">
                                <div class="icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                        <title>facebook</title>
                                        <path fill="#1877f2" d="M31.997 15.999c0-8.836-7.163-15.999-15.999-15.999s-15.999 7.163-15.999 15.999c0 7.985 5.851 14.604 13.499 15.804v-11.18h-4.062v-4.625h4.062v-3.525c0-4.010 2.389-6.225 6.043-6.225 1.75 0 3.581 0.313 3.581 0.313v3.937h-2.017c-1.987 0-2.607 1.233-2.607 2.498v3.001h4.437l-0.709 4.625h-3.728v11.18c7.649-1.2 13.499-7.819 13.499-15.804z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>