<?php
session_start();
require '../../config/config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        header('Location: ../pages/dashboard.php');
    } else {
?>
        <script>
            alert('Wrong Password')
        </script>
<?php
    }
}
