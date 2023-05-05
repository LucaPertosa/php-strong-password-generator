<?php
function genera_password($lunghezza) {
    $alph = 'abcdefghijklmnopqrstuvwxyz';
    $upalph = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numb = '0123456789';
    $symb = '!@.,';
    $carat = $alph . $upalph . $numb . $symb;
    $stringa_casuale = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringa_casuale .= $carat[rand(0, strlen($carat) - 1)];
    }
    return $stringa_casuale;
}
?>