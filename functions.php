<?php
function genera_password($lunghezza, $upalph, $numb, $symb, $double_carat) {
    $caratteri = 'abcdefghijklmnopqrstuvwxyz';
    $stringa_casuale = '';
    if ($upalph) {
        $caratteri .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($numb) {
        $caratteri .= '0123456789';
    }
    if ($symb) {
        $caratteri .= '!@.,';
    } 

    if (!$double_carat) {
        $caratteri = str_shuffle($caratteri);
        $stringa_casuale = substr($caratteri, 0, $lunghezza);
    } else {
        while (strlen($stringa_casuale) < $lunghezza) {
            $new_string = $caratteri[rand(0, strlen($caratteri) - 1)];
            if (strpos($stringa_casuale, $new_string) === false) {
                $stringa_casuale .= $new_string;
            }
        }
    }
    return $stringa_casuale;
}
?>