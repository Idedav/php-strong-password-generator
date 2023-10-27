<?php 
session_start();
$password = $_SESSION['password'];
include __DIR__ . '/partials/head.php';
?>

<body>
        <div class="container text-center">

            <?php  include __DIR__ . '/partials/header.php';?>

            <main class="d-flex flex-column align-items-center">

                <h2>La password generata è:</h2>

                <div class="container-password d-flex align-items-center justify-content-center">
                    <h3><?php echo implode($password) ?></h3>
                </div>

            </main>

        </div>
</body>