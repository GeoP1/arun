<?php
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

pr($_COOKIE);
?>