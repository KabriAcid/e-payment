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
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="form-row">
                            <div class="label">
                                <span>Amount</span>
                            </div>
                            <div class="input-field">
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                        </div>
                        <!-- Button -->
                        <!-- Forgot password -->
                        <!-- <p style="text-align: right;margin-top: 10px;"><a href="">Forgot password?</a></p> -->
                        <div class="form-row">
                            <button type="button" id="submit" name="submit" onclick="makePayment()">Pay Now</button>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 48 48">
                                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                        <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                        <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                        <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                    </svg>
                                </div>
                                <div class="icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                        <title>facebook</title>
                                        <path fill="#1877f2" d="M31.997 15.999c0-8.836-7.163-15.999-15.999-15.999s-15.999 7.163-15.999 15.999c0 7.985 5.851 14.604 13.499 15.804v-11.18h-4.062v-4.625h4.062v-3.525c0-4.010 2.389-6.225 6.043-6.225 1.75 0 3.581 0.313 3.581 0.313v3.937h-2.017c-1.987 0-2.607 1.233-2.607 2.498v3.001h4.437l-0.709 4.625h-3.728v11.18c7.649-1.2 13.499-7.819 13.499-15.804z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Register -->
                        <div class="form-row">
                            <p style="text-align: center;font-size: 14px;">Don't have an account? <a href="">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php
    // Six random digit number for transaction reference
    $tx_ref = 'PAY_ID' . rand(100000, 999999);
    ?>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script>
        function makePayment() {
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-a869fb233e0ad455be16b348a4ef4394-X",
                tx_ref: "<?php echo $tx_ref; ?>",
                amount: document.getElementById('amount').value,
                currency: "NGN",
                payment_options: "card, ussd",
                redirect_url: "../src/pages/redirect.php",
                customer: {
                    email: document.getElementById('email').value,
                    // phone_number: document.getElementById('phone').value,
                    name: "Abdullahi Kabri",
                },
                callback: function(data) {
                    console.log(data);
                },
                customizations: {
                    title: "Payment for E-payment App",
                    description: "Payment for items in cart",
                    logo: "favicon.svg",
                },
            });
        }
    </script>
</body>

</html>