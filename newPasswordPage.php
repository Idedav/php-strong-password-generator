<?php
session_start();
include __DIR__ . '/data/functions.php';
$password_length = $_SESSION['password-lenght'];
$password = passwordGenerator($password_length);
include __DIR__ . '/partials/head.php';
?>

<body>
        <div class="container text-center">

            <?php  include __DIR__ . '/partials/header.php';?>

            <main class="d-flex flex-column align-items-center">

                <h2>La password generata è:</h2>

                <div class="container-password d-flex align-items-center justify-content-center">
                    <h3><?php echo $password ?></h3>
                </div>

            </main>

        </div>
</body>