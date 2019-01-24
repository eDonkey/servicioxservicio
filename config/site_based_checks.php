<?php
//index functions
function firstvisit() {
    if (!isset($_COOKIE['firsttime'])) {
        setcookie("firsttime", "no", time() + (10 * 365 * 24 * 60 * 60));
        return true;
    } else {
        return false;
    }   
}
//registration functions
function createUniqueKeywordId() {
    $baseid = rand(9999, 999999999);
    return $baseid;
}
function comparepassword($pass,$confirmpass) {
    if ($pass === $confirmpass) {
        return true;
    } else {
        return false;
    }
}
function password_encrypt($pass, $hash) {
    return hash($pass, $hash);
}
function validationmail($to) {
    mail($to, "Probando", "EMAIL DE PRUEBA");
}
class Developer {
    static parm1 = rand(0,4999);
    static parm2 = rand(5000,9999);
    public function createApi($mail) {
        $apikey = md5($this->$parm1 . $mail . $parm2);
        return $apikey;
    }
}
//validationmail("kooltheoutsider@gmail.com");
?>