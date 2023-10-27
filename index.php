<?php  

$message = 'Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri';

if(isset($_GET['password-lenght'])){
    if($_GET['password-lenght'] < 7 || $_GET['password-lenght'] > 32){
        $message = 'Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri';
    }
}


include __DIR__ . '/partials/head.php';
?>

<body>

    <div class="container text-center">

        <?php  include __DIR__ . '/partials/header.php';?>

        <main class="d-flex flex-column align-items-center">

            <h2>Genera una password sicura</h2>

            <div class="container-password">
                <p><?php echo $message ?></p>
            </div>

            <div class="form-container">
                <form action="index.php" method="GET">
                    <div class="input-container">
                        <label for="password-lenght">Lunghezza password:</label>
                        <input type="number" id="password-lenght" name="password-lenght">
                    </div>

                    <div class="buttons-container">
                        <button type="submit" class="btn btn-primary">Genera</button>
                        <a href="index.php" class="btn btn-secondary">Annulla</a>
                    </div>
                </form>
            </div>

        </main>

    </div>

</body>
</html>