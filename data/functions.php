<?php 
    function passwordGenerator($password_length){
        $new_password = [];
        $characters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@#_?!$£%&ç§';
        for ($i = 0; $i < $password_length; $i++){
            $n = rand(0, strlen($characters) - 1);
            $new_password[$i] = $characters[$n];
        }
        return implode($new_password);
    }
?>