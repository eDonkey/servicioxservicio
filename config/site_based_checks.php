<?php
function firstvisit() {
    if (!isset($_COOKIE['firsttime'])) {
        setcookie("firsttime", "no", time() + (10 * 365 * 24 * 60 * 60));
        return true;
    } else {
        return false;
    }   
}
//firstvisit();
function createUniqueKeywordId() {
    $baseid = rand(5, 10);
    $length = streln((string)$baseid);
    echo $length;
}
createUniqueKeywordId();
?>