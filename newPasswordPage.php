<?php 
session_start();
include __DIR__ . '/partials/head.php';
?>

<body>
        <div class="container text-center">

            <?php  include __DIR__ . '/partials/header.php';?>

            <main class="d-flex flex-column align-items-center">

                <h2>La password generata è:</h2>

                <div class="container-password">
                    <p><?php echo $message ?></p>
                </div>

            </main>

        </div>
</body>