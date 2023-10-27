<?php 
    function passwordGenerator($password_length){
        $new_password = '';
        $characters = [
            'abcdefghijklmnopqrstuwxyz',
            'ABCDEFGHIJKLMNOPQRSTUWXYZ',
            '0123456789',
            '@#_-.+?!$%&'
        ];
        for ($i = 0; $i < $password_length; $i++){
            $npos = rand(0, count($characters) - 1);
            $n = rand(0, strlen($characters[$npos]) - 1);
            $new_password .= $characters[$npos][$n];
        }
        return $new_password;
    }
?>