<?php

$user= '$_POST';
function Validate_mail (array $user=[], int $min=6) : string {
    if (mb_strlen($user['E-mail'])>=$min) {

        return 'ok';
    }
return 'not ok';
}

Validate_mail($user);
