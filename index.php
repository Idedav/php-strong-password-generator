<?php  

$message = 'Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri';
$new_password = [];
if(isset($_GET['password-lenght'])){
    $password_length = $_GET['password-lenght'];
    if($password_length < 8 || $password_length > 32){
        $message = 'Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri';
    }else{
        $characters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@#_?!$£%&ç§';
        for ($i = 0; $i < $password_length; $i++){
            $n = rand(0, strlen($characters) - 1);
            $new_password[$i] = $characters[$n];
        }
        session_start();
        $_SESSION['password'] = $new_password;
        header('Location: ./newPasswordPage.php');
    }
}


include __DIR__ . '/partials/head.php';
?>

<body>

    <div class="container text-center">

        <?php  include __DIR__ . '/partials/header.php';?>

        <main class="d-flex flex-column align-items-center">

            <h2>Genera una password sicura</h2>

            <div class="container-password d-flex align-items-center">
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