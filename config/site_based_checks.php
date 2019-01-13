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
    $baseid = rand(9999, 9999999999);
    $length = strlen((string)$baseid);
    echo $baseid;
    echo "<br />";
    echo $length;
}
createUniqueKeywordId();
?>