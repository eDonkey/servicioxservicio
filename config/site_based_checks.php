<?php
function firstvisit() {
    if (!isset($_COOKIE['firsttime'])) {
        setcookie("firsttime", "no", time() + (10 * 365 * 24 * 60 * 60));
        return true;
    } else {
        return false;
    }   
}
?>