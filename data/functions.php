<?php 
    function passwordGenerator($password_length){
        $new_password = '';
        $characters = [
            'abcdefghijklmnopqrstuwxyz',
            'ABCDEFGHIJKLMNOPQRSTUWXYZ',
            '0123456789',
            '@#_-.+?!$%&'
        ];
        
        do{
            $new_password = '';
            for ($i = 0; $i < $password_length; $i++){
                $npos = rand(0, count($characters) - 1);
                $n = rand(0, strlen($characters[$npos]) - 1);
                $new_password .= $characters[$npos][$n];
            }
        }while( similar_text($new_password , $characters[0]) > 0 
                && 
                similar_text($new_password , $characters[1]) > 0 
                && 
                similar_text($new_password , $characters[2]) > 0 
                && 
                similar_text($new_password , $characters[3]) > 0);

        return $new_password;
    }
?>